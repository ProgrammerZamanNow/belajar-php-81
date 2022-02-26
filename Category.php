<?php

class Category {

    public function __construct(public readonly string $id,
                                public readonly string $name)
    {
    }
}

$category = new Category("1", "Gadget");
var_dump($category->id);

// $category->id = "2"; // error