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
 * Entity class for "hospitalization" table
 */

#[Entity]
#[Table("hospitalization", options: ["dbId" => "DB"])]
class Hospitalization extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "patient_id", type: "integer")]
    private int $PatientId;

    #[Column(name: "room_id", type: "integer")]
    private int $RoomId;

    #[Column(name: "admission_date", type: "datetime")]
    private DateTime $AdmissionDate;

    #[Column(name: "discharge_date", type: "datetime", nullable: true)]
    private ?DateTime $DischargeDate;

    #[Column(name: "total_cost", type: "decimal", nullable: true)]
    private ?string $TotalCost;

    public function getId(): int
    {
        return $this->Id;
    }

    public function setId(int $value): static
    {
        $this->Id = $value;
        return $this;
    }

    public function getPatientId(): int
    {
        return $this->PatientId;
    }

    public function setPatientId(int $value): static
    {
        $this->PatientId = $value;
        return $this;
    }

    public function getRoomId(): int
    {
        return $this->RoomId;
    }

    public function setRoomId(int $value): static
    {
        $this->RoomId = $value;
        return $this;
    }

    public function getAdmissionDate(): DateTime
    {
        return $this->AdmissionDate;
    }

    public function setAdmissionDate(DateTime $value): static
    {
        $this->AdmissionDate = $value;
        return $this;
    }

    public function getDischargeDate(): ?DateTime
    {
        return $this->DischargeDate;
    }

    public function setDischargeDate(?DateTime $value): static
    {
        $this->DischargeDate = $value;
        return $this;
    }

    public function getTotalCost(): ?string
    {
        return $this->TotalCost;
    }

    public function setTotalCost(?string $value): static
    {
        $this->TotalCost = $value;
        return $this;
    }
}
