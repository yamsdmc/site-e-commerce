<?php

namespace App\Entity;

use DateTimeInterface;
use App\Controller\PostPanier;
use App\Controller\GetUserOrder;
use Doctrine\ORM\Mapping as ORM;
use App\Controller\GetUserPanier;
use App\Controller\PanierUserBill;
use App\Controller\ValidateUserPanier;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource( collectionOperations={
 *     "getPanier"={"method"="GET", "path"="/paniers"},
 *     "postPanier"={"method"="POST", "path"="/paniers", "controller"=PostPanier::class, "read"=false},
 *     "postBill"={"method"="POST", "path"="/paniers/user/bill", "controller"=PanierUserBill::class, "read"=false}}
 *      ,itemOperations={
 *     "getId"={"method"="GET", "path"="/paniers/user/{id}","controller"=GetUserPanier::class, "read"=false},
 *     "getOrder"={"method"="GET", "path"="/orders/user/{id}","controller"=GetUserOrder::class, "read"=false},
 *     "deleteId"={"method"="DELETE", "path"="/paniers/{id}", "requirements"={"id"="\d+"}},
 *     "putId"={"method"="PUT", "path"="/paniers/{id}", "requirements"={"id"="\d+"}}
 * })
 * @ORM\Entity(repositoryClass="App\Repository\PanierRepository")
 */
class Panier
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $productId;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;
    
    /**
     * @ORM\Column(type="float")
     */
    private $price;


     /**
     * @ORM\Column(type="float")
     */
    private $weight;

   
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $done;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $passedAt;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $fastDelivery;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $token;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $final;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

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

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(int $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDone(): ?bool
    {
        return $this->done;
    }

    public function setDone(bool $done): self
    {
        $this->done = $done;

        return $this;
    }

    public function getPassedAt(): ?\DateTimeInterface
    {
        return $this->passedAt;
    }

    public function setPassedAt(?\DateTimeInterface $passedAt): self
    {
        $this->passedAt = $passedAt;

        return $this;
    }

    public function getFastDelivery(): ?bool
    {
        return $this->fastDelivery;
    }

    public function setFastDelivery(bool $fastDelivery): self
    {
        $this->fastDelivery = $fastDelivery;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getFinal(): ?float
    {
        return $this->final;
    }

    public function setFinal(float $final): self
    {
        $this->final = $final;

        return $this;
    }

}
