<?php

class Book
{
    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $title;

    /**
     * @var float
     */
    private $price;

    /**
     * Book constructor.
     * @param string $author
     * @param string $title
     * @param float $price
     * @throws Exception
     */
    public function __construct(string $author, string $title, float $price)
    {
        $this->setAuthor($author);
        $this->setTitle($title);
        $this->setPrice($price);
    }

    /**
     * @param $author
     * @throws Exception
     */
    private function setAuthor(string $author): void
    {
        $split = explode(' ', $author);
        if (is_numeric($split[1][0])) {
            throw new Exception('Author not valid!');
        } else {
            $this->author = $author;
        }
    }

    /**
     * @param $title
     * @throws Exception
     */
    private function setTitle(string $title): void
    {
        if (strlen($title) < 3) {
            throw new Exception('Title not valid!');
        } else {
            $this->title = $title;
        }
    }

    /**
     * @param $price
     * @throws Exception
     */
    private function setPrice(float $price): void
    {
        if ($price < 1) {
            throw new Exception('Price not valid!');
        } else {
            $this->price = $price;
        }
    }

    public function getPrice():float
    {
        return $this->price;
    }
  }