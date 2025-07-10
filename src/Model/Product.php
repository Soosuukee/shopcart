<?php

namespace Soosuuke\Shopcart\Model;

use Soosuuke\Shopcart\Model\Category;

class Product
{
    private int $id;
    private string $name;
    private string $shortDescription;
    private float $price;
    private float $promotionPercentage;
    private Category $category;

    public function __construct(
        int $id,
        string $name,
        string $shortDescription,
        float $price,
        float $promotionPercentage,
        Category $category
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->shortDescription = $shortDescription;
        $this->price = $price;
        $this->setPromotionPercentage($promotionPercentage);
        $this->category = $category;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): void
    {
        $this->shortDescription = $shortDescription;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPromotionPercentage(): float
    {
        return $this->promotionPercentage;
    }

    public function setPromotionPercentage(float $promotionPercentage): void
    {
        if ($promotionPercentage < 0) {
            throw new \InvalidArgumentException('Promotion percentage cannot be negative.');
        }

        $this->promotionPercentage = $promotionPercentage;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }
}
