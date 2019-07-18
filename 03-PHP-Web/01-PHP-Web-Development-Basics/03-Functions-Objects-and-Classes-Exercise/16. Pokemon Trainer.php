<?php

class Pokemon
{
    private $name;
    private $element;
    private $health;

    public function __construct(string $name, string $element, int $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
    }

    public function looseHealth()
    {
        return $this->health -= 10;
    }

    public function isAlive()
    {
        return $this->health > 0;
    }


    public function getElement(): string
    {
        return $this->element;
    }

}

class Trainer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Pokemon[]
     */
    private $pokemons;

    /**
     * @var int
     */
    private $badges;

    public function __construct($name)
    {
        $this->name = $name;
        $this->badges = 0;
        $this->pokemons = [];
    }

    /**
     * @return int
     */
    public function getBadges(): int
    {
        return $this->badges;
    }

    public function addPokemon(Pokemon $pokemon)
    {
        $this->pokemons[] = $pokemon;
    }

    public function battle($element)
    {
        $isFound = false;
        foreach ($this->pokemons as $pokemon) {
            if ($pokemon->getElement() == $element) {
                $isFound = true;
                break;
            }
        }

        if ($isFound) {
            $this->incrementBadges();
        } else {
            $this->damagePokemons();
        }

    }

    public function incrementBadges()
    {
        return $this->badges++;
    }

    public function damagePokemons()
    {
        foreach ($this->pokemons as $pokemon) {
            $pokemon->looseHealth();
        }

        $this->pokemons = array_filter($this->pokemons, function (Pokemon $pokemon) {
            return $pokemon->isAlive();
        });
    }

    public function __toString()
    {
        $numberOfPokemons = count($this->pokemons);
        return "{$this->name} {$this->badges} {$numberOfPokemons}\n";
    }

}

$trainers = [];
$input = readline();

while ($input != 'Tournament') {
    $line = explode(' ', $input);

    $trainerName = $line[0];

    $pokemonName = $line[1];
    $pokemonElement = $line[2];
    $pokemonHealth = $line[3];

    if (!array_key_exists($trainerName, $trainers)) {
        $trainer = new Trainer($trainerName);
        $trainers[$trainerName] = $trainer;
    }

    $pokemon = new Pokemon($pokemonName, $pokemonElement, $pokemonHealth);
    $trainers[$trainerName]->addPokemon($pokemon);

    $input = readline();
}

$element = readline();
while ($element != 'End') {

    foreach ($trainers as $trainer) {
        $trainer->battle($element);
    }

    $element = readline();
}

usort($trainers, function (Trainer $t1, Trainer $t2) {
    return $t2->getBadges() <=> $t1->getBadges();
});

foreach ($trainers as $trainer) {
    echo $trainer;
}