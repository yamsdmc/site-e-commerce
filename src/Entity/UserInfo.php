<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Controller\GetUserInfoId;
use App\Controller\ValidateUserPanier;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(collectionOperations={
 *     "getUserInfos"={"method"="GET", "path"="/user_infos"},
 *     "postUserInfos"={"method"="POST", "path"="/user_infos"},
 *     "validateId"={"method"="POST", "path"="/paniers/user/validate", "controller"=ValidateUserPanier::class, "read"=false},
 *      }
 *     ,itemOperations={
 *     "getId"={"method"="GET", "path"="/user_infos/{id}", "requirements"={"id"="\d+"}, "controller"=GetUserInfoId::class, "read"=false},
 *     "deleteId"={"method"="DELETE", "path"="/user_infos/{id}", "requirements"={"id"="\d+"}},
 *     "putId"={"method"="PUT", "path"="/user_infos/{id}", "requirements"={"id"="\d+"}}
 * })
 * @ORM\Entity(repositoryClass="App\Repository\UserInfoRepository")
 */
class UserInfo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer",  nullable=true)
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paypalLogin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paypalPassword;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $visaNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $visaCryptogram;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $visaExp;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $wallet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $accountFree;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $token;

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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getPaypalLogin(): ?string
    {
        return $this->paypalLogin;
    }

    public function setPaypalLogin(?string $paypalLogin): self
    {
        $this->paypalLogin = $paypalLogin;

        return $this;
    }

    public function getPaypalPassword(): ?string
    {
        return $this->paypalPassword;
    }

    public function setPaypalPassword(?string $paypalPassword): self
    {
        $this->paypalPassword = $paypalPassword;

        return $this;
    }

    public function getVisaNumber(): ?string
    {
        return $this->visaNumber;
    }

    public function setVisaNumber(?string $visaNumber): self
    {
        $this->visaNumber = $visaNumber;

        return $this;
    }

    public function getVisaCryptogram(): ?string
    {
        return $this->visaCryptogram;
    }

    public function setVisaCryptogram(?string $visaCryptogram): self
    {
        $this->visaCryptogram = $visaCryptogram;

        return $this;
    }

    public function getVisaExp(): ?float
    {
        return $this->visaExp;
    }

    public function setVisaExp(?float $visaExp): self
    {
        $this->visaExp = $visaExp;

        return $this;
    }

    public function getWallet(): ?float
    {
        return $this->wallet;
    }

    public function setWallet(?float $wallet): self
    {
        $this->wallet = $wallet;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }


    public function getAccountFree(): ?string
    {
        return $this->accountFree;
    }

    public function setAccountFree(?string $accountFree): self
    {
        $this->accountFree = $accountFree;

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
}
