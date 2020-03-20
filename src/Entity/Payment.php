<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="payment")
 */
class Payment
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $orderId;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $externalOrderId;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $paymentHash;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $paymentChannel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $amount;

    /**
     * @ORM\Column(type="text")
     */
    private $rawData;

    public function __construct()
    {
    }
}
