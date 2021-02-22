<?php


namespace Hestia\Bundle\Core\Entity;

use Doctrine\ORM\Mapping as ORM;
use Hestia\Bundle\Core\Contracts\PlatformInterface;

/**
 * @ORM\Entity()
 */
class Device
{
    /**
     * @ORM\Column(type="string")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private string $id;

    /**
     * @ORM\Column(type="string")
     */
    private string $type;

    /**
     * @ORM\Column(type="object")
     */
    private PlatformInterface $platform;

    /**
     * @ORM\Column(type="string")
     */
    private string $key;

    /**
     * @ORM\Column(type="string")
     */
    private string $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private string $notes;
}