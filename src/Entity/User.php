<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User implements UserInterface
{
    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_OWNER = 'ROLE_OWNER';
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $password;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $phone;
    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;
    /**
     * @ORM\Column(name="is_organizer", type="boolean")
     */
    private $isOrganizer;

    public function __construct(string $username)
    {
        $this->isActive = true;
        $this->username = $this->email = $username;
        $this->phone = '';
        $this->createdAt = new \DateTime();
        $this->isOrganizer = false;
    }

    /**
     * @param bool $isOrganizer
     */
    public function setIsOrganizer(bool $isOrganizer): void
    {
        $this->isOrganizer = $isOrganizer;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRoles(): array
    {
        return [
            self::ROLE_USER,
            self::ROLE_OWNER,
            self::ROLE_ADMIN,
        ];
    }

    public function eraseCredentials()
    {
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

}
