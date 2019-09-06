<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Controller\GetProductCategory;
use App\Controller\GetAllCategory;


/**
 * @ApiResource(collectionOperations={
 *     "getCategorie"={"method"="GET", "path"="/categories", "controller"=GetAllCategory::class}, 
 *     "postCategorie"={"method"="POST", "path"="/categories"}}
 *     ,itemOperations={
 *     "getId"={"method"="GET", "path"="/categories/{id}", "requirements"={"id"="\d+"}, "controller"=GetProductCategory::class},
 *     "deleteId"={"method"="DELETE", "path"="/categories/{id}", "requirements"={"id"="\d+"}},
 *     "putId"={"method"="PUT", "path"="/categories/{id}", "requirements"={"id"="\d+"}}
 * })
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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
}
