<?php

namespace App\Repository;


use App\DTO\ItemDTO;
use App\DTO\CategoryDTO;
use App\DTO\UserDTO;
use Core\DataBinder;
use Core\DataBinderInterface;
use Database\DatabaseInterface;

class ItemRepository extends RepositoryAbstract implements ItemRepositoryInterface
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
     * @return \Generator|ItemDTO[]
     */
    public function findAll(): \Generator
    {
        $lazyItemResult = $this->db->query("
            SELECT 
              item_id AS itemId, 
              title, 
              price,
              description,
              image,
              category.category_id AS category,
              category.name,
              user.user_id AS author,
              user.username,
              user.password,
              user.full_name AS fullName,
              user.location,
              user.phone
            FROM items
            INNER JOIN users user on items.user_id = user.user_id
            INNER JOIN categories category on items.category_id = category.category_id
            ORDER BY user.location DESC, category.category_id, items.price
        ")->execute()
            ->fetch();

        foreach ($lazyItemResult as $row) {
            /** @var ItemDTO $item */
            $item = $this->dataBinder->bind($row, ItemDTO::class);
            /** @var UserDTO $author */
            $author = $this->dataBinder->bind($row, UserDTO::class);
            /** @var CategoryDTO $category */
            $category = $this->dataBinder->bind($row, CategoryDTO::class);

            $item->setItemId($row['itemId']);
            $author->setUserId($row['author']);
            $category->setCategoryId($row['category']);

            $item->setAuthor($author);
            $item->setCategory($category);

            yield $item;
        }
    }

    /**
     * @param int $id
     * @return \Generator|ItemDTO[]
     */
    public function findMyItems(int $id): \Generator
    {
        $lazyItemResult = $this->db->query("
           SELECT 
              item_id AS itemId, 
              title, 
              price,
              description,
              image,
              category.category_id AS category,
              category.name,
              user.user_id AS author,
              user.username,
              user.password,
              user.full_name AS fullName,
              user.location,
              user.phone
            FROM items
            INNER JOIN users user on items.user_id = user.user_id
            INNER JOIN categories category on items.category_id = category.category_id
            WHERE user.user_id = ?
            ORDER BY category.category_id, items.price DESC
        ")->execute([$id])
            ->fetch();

        foreach ($lazyItemResult as $row) {
            /** @var ItemDTO $item */
            $item = $this->dataBinder->bind($row, ItemDTO::class);
            /** @var UserDTO $author */
            $author = $this->dataBinder->bind($row, UserDTO::class);
            /** @var CategoryDTO $category */
            $category = $this->dataBinder->bind($row, CategoryDTO::class);

            $item->setItemId($row['itemId']);
            $author->setUserId($row['author']);
            $category->setCategoryId($row['category']);

            $item->setAuthor($author);
            $item->setCategory($category);

            yield $item;
        }
    }

    public function findOne(int $id): ItemDTO
    {
        $lazyItemResult = $this->db->query("
            SELECT 
              item_id AS itemId, 
              title, 
              price,
              description,
              image,
              category.category_id AS category,
              category.name,
              user.user_id AS author,
              user.username,
              user.password,
              user.full_name AS fullName,
              user.location,
              user.phone
            FROM items
            INNER JOIN users user on items.user_id = user.user_id
            INNER JOIN categories category on items.category_id = category.category_id
            WHERE items.item_id = ?
        ")->execute([$id])
            ->fetch()
            ->current();

        /** @var ItemDTO $item */
        $item = $this->dataBinder->bind($lazyItemResult, ItemDTO::class);
        /** @var UserDTO $author */
        $author = $this->dataBinder->bind($lazyItemResult, UserDTO::class);
        /** @var CategoryDTO $category */
        $category = $this->dataBinder->bind($lazyItemResult, CategoryDTO::class);

        $item->setItemId($lazyItemResult['itemId']);
        $author->setUserId($lazyItemResult['author']);
        $category->setCategoryId($lazyItemResult['category']);

        $item->setAuthor($author);
        $item->setCategory($category);

        return $item;
    }

    public function insert(ItemDTO $itemDTO): bool
    {
        $this->db->query("
                INSERT INTO items (title, price, description, image, user_id, category_id) 
                VALUES (?,?,?,?,?,?)
            ")->execute([
            $itemDTO->getTitle(),
            $itemDTO->getPrice(),
            $itemDTO->getDescription(),
            $itemDTO->getImage(),
            $itemDTO->getAuthor()->getUserId(),
            $itemDTO->getCategory()->getCategoryId()
        ]);

        return true;
    }

    public function update(ItemDTO $ItemDTO, int $id): bool
    {
        $this->db->query("
                UPDATE items
                SET 
                  title = ?,
                  price = ?,
                  description = ?,
                  image = ?,
                  user_id = ?,
                  category_id = ?
                WHERE item_id = ?
            ")->execute([
            $ItemDTO->getTitle(),
            $ItemDTO->getPrice(),
            $ItemDTO->getDescription(),
            $ItemDTO->getImage(),
            $ItemDTO->getAuthor()->getUserId(),
            $ItemDTO->getCategory()->getCategoryId(),
            $id
        ]);

        return true;
    }

    public function remove(int $id): bool
    {
        $this->db->query("
                DELETE FROM items
                WHERE item_id = ?
            ")->execute([$id]);

        return true;
    }
}