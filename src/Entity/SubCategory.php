<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Controller\GetSubProductCategory;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(itemOperations={
 *     "getId"={"method"="GET", "path"="/sub_categories/{id}", "requirements"={"id"="\d+"}, "controller"=GetSubProductCategory::class},
 *     "deleteId"={"method"="DELETE", "path"="/sub_categories/{id}", "requirements"={"id"="\d+"}},
 *     "putId"={"method"="PUT", "path"="/sub_categories/{id}", "requirements"={"id"="\d+"}}
 * })
 * @ORM\Entity(repositoryClass="App\Repository\SubCategoryRepository")
 */
class SubCategory
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
     * @ORM\Column(type="string", length=255)
     */
    private $name;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
