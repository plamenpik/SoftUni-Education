<?php

class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * Person constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}

class Family
{
    /**
     * @var Person[]
     */
    private $members;

    /**
     * Family constructor.
     */
    public function __construct()
    {
        $this->members = [];
    }

    /**
     * @return Person[]
     */
    public function getMembers(): array
    {
        return $this->members;
    }

    public function addMember(Person $person)
    {
        $this->members[] = $person;
    }

    public function getOldestMemeber()
    {
        usort($this->members, function (Person $p1, Person $p2) {
            return $p2->getAge() <=> $p1->getAge();
        });
        return $this->members[0];
    }

    public function __toString()
    {
        return "{$this->getOldestMemeber()->getName()} {$this->getOldestMemeber()->getAge()}";
    }

}

$n = readline();
$family = new Family();

for ($i = 0; $i < $n; $i++) {
    $input = explode(' ', readline());

    $person = new Person($input[0], intval($input[1]));
    $family->addMember($person);
}

echo $family;