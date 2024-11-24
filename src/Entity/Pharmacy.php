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
 * Entity class for "pharmacy" table
 */

#[Entity]
#[Table("pharmacy", options: ["dbId" => "DB"])]
class Pharmacy extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "name", type: "string")]
    private string $Name;

    #[Column(name: "description", type: "text", nullable: true)]
    private ?string $Description;

    #[Column(name: "stock", type: "integer", nullable: true)]
    private ?int $Stock;

    #[Column(name: "price", type: "decimal")]
    private string $Price;

    public function __construct()
    {
        $this->Stock = 0;
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

    public function getName(): string
    {
        return HtmlDecode($this->Name);
    }

    public function setName(string $value): static
    {
        $this->Name = RemoveXss($value);
        return $this;
    }

    public function getDescription(): ?string
    {
        return HtmlDecode($this->Description);
    }

    public function setDescription(?string $value): static
    {
        $this->Description = RemoveXss($value);
        return $this;
    }

    public function getStock(): ?int
    {
        return $this->Stock;
    }

    public function setStock(?int $value): static
    {
        $this->Stock = $value;
        return $this;
    }

    public function getPrice(): string
    {
        return $this->Price;
    }

    public function setPrice(string $value): static
    {
        $this->Price = $value;
        return $this;
    }
}
