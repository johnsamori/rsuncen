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
 * Entity class for "doctors" table
 */

#[Entity]
#[Table("doctors", options: ["dbId" => "DB"])]
class Doctor extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "user_id", type: "integer")]
    private int $UserId;

    #[Column(name: "full_name", type: "string")]
    private string $FullName;

    #[Column(name: "specialization", type: "string")]
    private string $Specialization;

    #[Column(name: "phone_number", type: "string", nullable: true)]
    private ?string $PhoneNumber;

    public function getId(): int
    {
        return $this->Id;
    }

    public function setId(int $value): static
    {
        $this->Id = $value;
        return $this;
    }

    public function getUserId(): int
    {
        return $this->UserId;
    }

    public function setUserId(int $value): static
    {
        $this->UserId = $value;
        return $this;
    }

    public function getFullName(): string
    {
        return HtmlDecode($this->FullName);
    }

    public function setFullName(string $value): static
    {
        $this->FullName = RemoveXss($value);
        return $this;
    }

    public function getSpecialization(): string
    {
        return HtmlDecode($this->Specialization);
    }

    public function setSpecialization(string $value): static
    {
        $this->Specialization = RemoveXss($value);
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return HtmlDecode($this->PhoneNumber);
    }

    public function setPhoneNumber(?string $value): static
    {
        $this->PhoneNumber = RemoveXss($value);
        return $this;
    }
}
