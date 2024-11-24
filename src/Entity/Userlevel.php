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
 * Entity class for "userlevels" table
 */

#[Entity]
#[Table("userlevels", options: ["dbId" => "DB"])]
class Userlevel extends AbstractEntity
{
    #[Id]
    #[Column(name: "ID", type: "integer", unique: true)]
    private int $Id;

    #[Column(type: "string")]
    private string $Name;

    #[Column(type: "string", nullable: true)]
    private ?string $Hierarchy;

    #[Column(name: "`Level_Origin`", options: ["name" => "Level_Origin"], type: "integer", nullable: true)]
    private ?int $LevelOrigin;

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

    public function getHierarchy(): ?string
    {
        return HtmlDecode($this->Hierarchy);
    }

    public function setHierarchy(?string $value): static
    {
        $this->Hierarchy = RemoveXss($value);
        return $this;
    }

    public function getLevelOrigin(): ?int
    {
        return $this->LevelOrigin;
    }

    public function setLevelOrigin(?int $value): static
    {
        $this->LevelOrigin = $value;
        return $this;
    }
}
