<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="event_participant")
 */
class EventParticipant
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    private $userId;

    private $isPaid;

    private $isAccepted;

    private $comment;

    private $paymentId;

    public function __construct()
    {
    }
}
