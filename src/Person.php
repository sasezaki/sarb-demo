<?php

namespace Demo;

class Person
{
    /**
     * @var string|null
     */
    private $name;

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
    
}
