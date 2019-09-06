<?php

namespace App\Entity;

use App\Controller\GetTrends;
use App\Controller\AdminStats;
use App\Controller\PostProduct;
use App\Controller\GetProductId;
use Doctrine\ORM\Mapping as ORM;
use App\Controller\FillProductId;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ApiResource( collectionOperations={
 *     "getProduct"={"method"="GET", "path"="/products"},
 *     "postBill"={"method"="GET", "path"="/admin/stats", "controller"=AdminStats::class, "read"=false},
 *     "postProduct"={"method"="POST", "path"="/products"}, 
 *     "trendProduct"={"method"="GET", "path"="/products/trends", "controller"=GetTrends::class}}
 *     ,itemOperations={
 *     "getProductId"={"method"="GET", "path"="/products/{id}", "requirements"={"id"="\d+"}, "controller"=GetProductId::class},
 *     "fillProductId"={"method"="POST", "path"="/products/fill/{id}", "requirements"={"id"="\d+"}, "controller"=FillProductId::class, "read"=false},
 *     "deleteId"={"method"="DELETE", "path"="/products/{id}", "requirements"={"id"="\d+"}},
 *     "putId"={"method"="PUT", "path"="/products/{id}", "requirements"={"id"="\d+"}}
 * })
 * @ApiFilter(SearchFilter::class, properties={"title": "partial"})
 * @ApiFilter(RangeFilter::class, properties={"price"})
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $categoryId;

     /**
     * @ORM\Column(type="integer")
     */
    private $subCategoryId;


    /**
     * @ORM\Column(type="integer")
     */
    private $stock;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $vues;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $video;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sells;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $rating;

    /**
     * @ORM\Column(type="text")
     */
    private $details;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="float" ,nullable=true)
     */
    private $weight;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sold;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $afterSold;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getSells(): ?int
    {
        return $this->sells;
    }

    public function setSells(?int $sells): self
    {
        $this->sells = $sells;

        return $this;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(?float $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): self
    {
        $this->details = $details;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getSubCategoryId(): ?int
    {
        return $this->subCategoryId;
    }

    public function setSubCategoryId(int $subCategoryId): self
    {
        $this->subCategoryId = $subCategoryId;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setstock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getVues(): ?int
    {
        return $this->vues;
    }

    public function setVues(int $vues): self
    {
        $this->vues = $vues;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getSold(): ?int
    {
        return $this->sold;
    }

    public function setSold(int $sold): self
    {
        $this->sold = $sold;

        return $this;
    }

    public function getAfterSold(): ?float
    {
        return $this->afterSold;
    }

    public function setAfterSold(float $afterSold): self
    {
        $this->afterSold = $afterSold;

        return $this;
    }
}
