<?php

class Product {
    // TODO: Add properties

    private int $id;
    private string $name;

    private float $price;
    
    public function __construct(int $id, string $name, float $price) {
        // TODO: Initialize properties

        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // TODO: Add getFormattedPrice method

    public function getFormattedPrice():string{
        return sprintf("%.2f", $this->price);
    }

    // TODO: Add showDetails method

    public function showDetails():void {
        echo "Product Details:\n";
        echo "- ID: ".$this->id."\n";
        echo "- Name: ".$this->name."\n";
        echo "- Price: ".$this->getFormattedPrice()."\n";
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();