<?php

class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $money;

    /**
     * @var Product[]
     */
    private $products;

    /**
     * Person constructor.
     * @param string $name
     * @param float $money
     * @throws Exception
     */
    public function __construct(string $name, float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
        $this->products = [];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @throws Exception
     */
    private function setName(string $name): void
    {
        if (empty($name)) {
            throw new Exception('Name cannot be empty');
        }
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getMoney(): float
    {
        return $this->money;
    }

    /**
     * @param float $money
     * @throws Exception
     */
    private function setMoney(float $money): void
    {
        if ($money < 0) {
            throw new Exception('Money cannot be negative');
        }
        $this->money = $money;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param Product $product
     */
    private function setProducts(Product $product): void
    {
        $this->products[] = $product;
    }

    /**
     * @param Product $product
     * @throws Exception
     */
    public function buyProduct(Product $product)
    {
        if ($product->getCost() > $this->getMoney()) {
            throw new Exception($this->getName() . ' can\'t afford ' . $product->getName() . PHP_EOL);
        }
        $this->money -= $product->getCost();
        $this->setProducts($product);
        echo $this->getName() . ' bought ' . $product->getName() . PHP_EOL;
    }

    public function __toString()
    {
        echo $this->getName() . ' - ';
        if (count($this->getProducts()) == 0) {
            return 'Nothing bought' . PHP_EOL;
        } else {
            $output = implode(',', array_map(function (Product $product) {
                return $product->getName();
            }, $this->products));
            return $output . PHP_EOL;
        }
    }
}