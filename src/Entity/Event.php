<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 */
class Event
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $inviteHash;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $sellDateEnd;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $participantAmount;



    public function __construct()
    {
    }
}
