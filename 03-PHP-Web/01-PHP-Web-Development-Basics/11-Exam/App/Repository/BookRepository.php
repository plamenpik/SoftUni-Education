<?php

namespace App\Repository;


use App\DTO\BookDTO;
use App\DTO\GenreDTO;
use App\DTO\UserDTO;
use Core\DataBinder;
use Core\DataBinderInterface;
use Database\DatabaseInterface;

class BookRepository extends RepositoryAbstract implements BookRepositoryInterface
{
    /** @var DataBinder */
    private $dataBinder;

    /**
     * BookRepository constructor.
     * @param DataBinderInterface $dateBinder
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db, DataBinderInterface $dateBinder)
    {
        parent::__construct($db);
        $this->dataBinder = $dateBinder;
    }

    /**
     * @return \Generator|BookDTO[]
     */
    public function findAll(): \Generator
    {
        $lazyBookResult = $this->db->query("
            SELECT 
              book_id AS bookId, 
              title, 
              author,
              description,
              image,
              genre.genres_id AS genreId,
              genre.name,
              user.user_id AS userId,
              user.username,
              user.password,
              user.full_name AS fullName,
              user.born_on AS bornOn,
              added_on AS addedOn
            FROM books
            INNER JOIN users user on books.user_id = user.user_id
            INNER JOIN genres genre on books.genre_id = genre.genres_id
        ")->execute()
            ->fetch();

        foreach ($lazyBookResult as $row) {
            /** @var BookDTO $book */
            $book = $this->dataBinder->bind($row, BookDTO::class);
            /** @var UserDTO $author */
            $author = $this->dataBinder->bind($row, UserDTO::class);
            /** @var GenreDTO $genre */
            $genre = $this->dataBinder->bind($row, GenreDTO::class);

            $book->setBookId($row['bookId']);
            $author->setUserId($row['userId']);
            $genre->setGenreId($row['genreId']);

            $book->setUserId($author);
            $book->setGenreId($genre);

            yield $book;
        }
    }

    /**
     * @param int $id
     * @return \Generator|BookDTO[]
     */
    public function findMyBooks(int $id): \Generator
    {
        $lazyBookResult = $this->db->query("
            SELECT 
              book_id AS bookId, 
              title, 
              author,
              description,
              image,
              genre.genres_id AS genreId,
              genre.name,
              user.user_id AS userId,
              user.username,
              user.password,
              user.full_name AS fullName,
              user.born_on AS bornOn,
              added_on AS addedOn
            FROM books
            INNER JOIN users user on books.user_id = user.user_id
            INNER JOIN genres genre on books.genre_id = genre.genres_id
            WHERE user.user_id = ?
        ")->execute([$id])
            ->fetch();

        foreach ($lazyBookResult as $row) {
            /** @var BookDTO $book */
            $book = $this->dataBinder->bind($row, BookDTO::class);
            /** @var UserDTO $author */
            $author = $this->dataBinder->bind($row, UserDTO::class);
            /** @var GenreDTO $genre */
            $genre = $this->dataBinder->bind($row, GenreDTO::class);

            $book->setBookId($row['bookId']);
            $author->setUserId($row['userId']);
            $genre->setGenreId($row['genreId']);

            $book->setUserId($author);
            $book->setGenreId($genre);

            yield $book;
        }
    }

    public function findOne(int $id): BookDTO
    {
        $lazyBookResult = $this->db->query("
            SELECT 
              book_id AS bookId, 
              title, 
              author,
              description,
              image,
              genre.genres_id AS genreId,
              genre.name,
              user.user_id AS userId,
              user.username,
              user.password,
              user.full_name AS fullName,
              user.born_on AS bornOn,
              added_on AS addedOn
            FROM books
            INNER JOIN users user on books.user_id = user.user_id
            INNER JOIN genres genre on books.genre_id = genre.genres_id
            WHERE books.book_id = ?
        ")->execute([$id])
            ->fetch()
            ->current();

        /** @var BookDTO $book */
        $book = $this->dataBinder->bind($lazyBookResult, BookDTO::class);
        /** @var UserDTO $author */
        $author = $this->dataBinder->bind($lazyBookResult, UserDTO::class);
        /** @var GenreDTO $genre */
        $genre = $this->dataBinder->bind($lazyBookResult, GenreDTO::class);

        $book->setBookId($lazyBookResult['bookId']);
        $author->setUserId($lazyBookResult['userId']);
        $genre->setGenreId($lazyBookResult['genreId']);

        $book->setUserId($author);
        $book->setGenreId($genre);

        return $book;
    }

    public function insert(BookDTO $bookDTO): bool
    {
        $this->db->query("
                INSERT INTO books (title, author, description, image, user_id, genre_id) 
                VALUES (?,?,?,?,?,?)
            ")->execute([
            $bookDTO->getTitle(),
            $bookDTO->getAuthor(),
            $bookDTO->getDescription(),
            $bookDTO->getImage(),
            $bookDTO->getUserId()->getUserId(),
            $bookDTO->getGenreId()->getGenreId()
        ]);

        return true;
    }

    public function update(BookDTO $bookDTO, int $id): bool
    {
        $this->db->query("
                UPDATE books
                SET 
                  title = ?,
                  author = ?,
                  description = ?,
                  image = ?,
                  user_id = ?,
                  genre_id = ?
                WHERE book_id = ?
            ")->execute([
            $bookDTO->getTitle(),
            $bookDTO->getAuthor(),
            $bookDTO->getDescription(),
            $bookDTO->getImage(),
            $bookDTO->getUserId()->getUserId(),
            $bookDTO->getGenreId()->getGenreId(),
            $id
        ]);

        return true;
    }

    public function remove(int $id): bool
    {
        $this->db->query("
                DELETE FROM books
                WHERE book_id = ?
            ")->execute([$id]);

        return true;
    }
}