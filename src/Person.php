<?php

namespace Demo;

class Person
{
    /**
     * @var int|null
     */
    private $age;

    /**
     * @var string|null
     */
    private $name;

    public function setAge(?int $age): void
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
    
}
