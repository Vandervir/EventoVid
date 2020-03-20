<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="order")
 */
class Order
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Event", inversedBy="event")
     */
    private $event;

    /**
     * @ORM\Column(type="string")
     */
    private $status;
    /**
     * @ORM\Column(type="integer")
     */
    private $priceNet;
    /**
     * @ORM\Column(type="integer")
     */
    private $priceGross;
    /**
     * @ORM\Column(type="integer")
     */
    private $vat;

    /**
     * @ORM\Column(type="text")
     */
    private $comment;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="users")
     */
    private $user;


    public function __construct()
    {
    }
}
