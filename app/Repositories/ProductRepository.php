<?php

namespace App\Repositories;

use App\Product;

class ProductRepository 
{
    protected $entity;

    public function __construct(Product $entity)
    {
        $this->entity = $entity;
    }

    public function getAll()
    {
        return $this->entity->all();
    }
}