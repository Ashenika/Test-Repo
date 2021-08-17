<?php

class SimpleClass
{
    // property declaration
    public string $name = 'Hi My Name is Ash';
    public int $number = 25;

    // method declaration
    public function displayVar(): void
    {
        for ($count = 0; $count <= 10; $count++) {
            echo $this->name;
        }
    }

    // method declaration
    public function displayNum(): void
    {
        echo "This is a Number" . $this->number;
        //my number
        //comment on me
    }
}