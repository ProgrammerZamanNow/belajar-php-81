<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Customer.php';

class Product
{


    public function __construct(public string   $name = "No Name",
                                public Category $category = new Category("0", "Default Category"))
    {
    }
}

function sayHelloNew(Customer $customer = new Customer("0", "No Name", Gender::Male)){

}

var_dump(new Product());
var_dump(new Product("iPad"));
var_dump(new Product("iPad", new Category("1", "Gadget")));

sayHelloNew();