<?php

namespace App\Entity;

use App\Controller\PostUser;
use App\Controller\LoginUser;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * @ApiResource(
 *     collectionOperations={
 *     "getUser"={"method"="GET", "path"="/users"},
 *     "loginUser"={"method"="POST", "path"="/login","controller"=LoginUser::class, "read"=false},
 *     "postUser"={"method"="POST", "path"="/users","controller"=PostUser::class}}
 *     ,itemOperations={
 *     "getId"={"method"="GET", "path"="/users/{id}", "requirements"={"id"="\d+"}},
 *     "deleteId"={"method"="DELETE", "path"="/users/{id}", "requirements"={"id"="\d+"}},
 *     "putId"={"method"="PUT", "path"="/users/{id}", "requirements"={"id"="\d+"}}
 * })
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $password;

    /**
     * @ORM\Column(type="array")
     * @Assert\NotNull
     */
    private $role = [];

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $token;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): ?array
    {
        return $this->role;
    }

    public function setRole(array $role): self
    {
        $this->role = $role;

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

    public function getUsername() {}

    public function eraseCredentials() {}

    public function getSalt() {}

    public function getRoles() {
        return [''];
    }
}
