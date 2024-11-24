<?php

namespace PHPMaker2025\rsuncen2025\Entity;

use DateTime;
use DateTimeImmutable;
use DateInterval;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\SequenceGenerator;
use Doctrine\DBAL\Types\Types;
use PHPMaker2025\rsuncen2025\AdvancedUserInterface;
use PHPMaker2025\rsuncen2025\AbstractEntity;
use PHPMaker2025\rsuncen2025\AdvancedSecurity;
use PHPMaker2025\rsuncen2025\UserProfile;
use PHPMaker2025\rsuncen2025\UserRepository;
use function PHPMaker2025\rsuncen2025\Config;
use function PHPMaker2025\rsuncen2025\EntityManager;
use function PHPMaker2025\rsuncen2025\RemoveXss;
use function PHPMaker2025\rsuncen2025\HtmlDecode;
use function PHPMaker2025\rsuncen2025\HashPassword;
use function PHPMaker2025\rsuncen2025\Security;

/**
 * Entity class for "rooms" table
 */

#[Entity]
#[Table("rooms", options: ["dbId" => "DB"])]
class Room extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "room_number", type: "string", unique: true)]
    private string $RoomNumber;

    #[Column(name: "room_type", type: "string")]
    private string $RoomType;

    #[Column(name: "price_per_day", type: "decimal")]
    private string $PricePerDay;

    #[Column(name: "status", type: "string", nullable: true)]
    private ?string $Status;

    public function __construct()
    {
        $this->Status = "available";
    }

    public function getId(): int
    {
        return $this->Id;
    }

    public function setId(int $value): static
    {
        $this->Id = $value;
        return $this;
    }

    public function getRoomNumber(): string
    {
        return HtmlDecode($this->RoomNumber);
    }

    public function setRoomNumber(string $value): static
    {
        $this->RoomNumber = RemoveXss($value);
        return $this;
    }

    public function getRoomType(): string
    {
        return $this->RoomType;
    }

    public function setRoomType(string $value): static
    {
        if (!in_array($value, ["general", "vip", "icu"])) {
            throw new \InvalidArgumentException("Invalid 'room_type' value");
        }
        $this->RoomType = $value;
        return $this;
    }

    public function getPricePerDay(): string
    {
        return $this->PricePerDay;
    }

    public function setPricePerDay(string $value): static
    {
        $this->PricePerDay = $value;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(?string $value): static
    {
        if (!in_array($value, ["available", "occupied"])) {
            throw new \InvalidArgumentException("Invalid 'status' value");
        }
        $this->Status = $value;
        return $this;
    }
}
