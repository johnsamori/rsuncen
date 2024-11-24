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
 * Entity class for "appointments" table
 */

#[Entity]
#[Table("appointments", options: ["dbId" => "DB"])]
class Appointment extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "patient_id", type: "integer")]
    private int $PatientId;

    #[Column(name: "doctor_id", type: "integer")]
    private int $DoctorId;

    #[Column(name: "appointment_date", type: "datetime")]
    private DateTime $AppointmentDate;

    #[Column(name: "status", type: "string", nullable: true)]
    private ?string $Status;

    #[Column(name: "notes", type: "text", nullable: true)]
    private ?string $Notes;

    public function __construct()
    {
        $this->Status = "scheduled";
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

    public function getPatientId(): int
    {
        return $this->PatientId;
    }

    public function setPatientId(int $value): static
    {
        $this->PatientId = $value;
        return $this;
    }

    public function getDoctorId(): int
    {
        return $this->DoctorId;
    }

    public function setDoctorId(int $value): static
    {
        $this->DoctorId = $value;
        return $this;
    }

    public function getAppointmentDate(): DateTime
    {
        return $this->AppointmentDate;
    }

    public function setAppointmentDate(DateTime $value): static
    {
        $this->AppointmentDate = $value;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(?string $value): static
    {
        if (!in_array($value, ["scheduled", "completed", "cancelled"])) {
            throw new \InvalidArgumentException("Invalid 'status' value");
        }
        $this->Status = $value;
        return $this;
    }

    public function getNotes(): ?string
    {
        return HtmlDecode($this->Notes);
    }

    public function setNotes(?string $value): static
    {
        $this->Notes = RemoveXss($value);
        return $this;
    }
}
