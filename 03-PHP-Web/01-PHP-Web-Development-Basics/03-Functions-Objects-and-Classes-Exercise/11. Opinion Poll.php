<?php
//
//class Person
//{
//    public $name;
//    public $age;
//
//    /**
//     * Person constructor.
//     * @param $name
//     * @param $age
//     */
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
//
//}
//
//$persons = [];
//$personsCount = intval(readline());
//
//for ($i = 0; $i < $personsCount; $i++) {
//    $line = explode(' ', readline());
//    $name = $line[0];
//    $age = intval($line[1]);
//
//    if ($age > 30) {
//        $person = new Person($name, $age);
//        array_push($persons, $person);
//    }
//}
//
//function cmp($a, $b)
//{
//    return strcmp($a->name, $b->name);
//}
//usort($persons, 'cmp');
//
//foreach ($persons as $person) {
//    echo "$person->name - $person->age" . PHP_EOL;
//}