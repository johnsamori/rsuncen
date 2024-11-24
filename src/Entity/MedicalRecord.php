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
 * Entity class for "medical_records" table
 */

#[Entity]
#[Table("medical_records", options: ["dbId" => "DB"])]
class MedicalRecord extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "patient_id", type: "integer")]
    private int $PatientId;

    #[Column(name: "doctor_id", type: "integer")]
    private int $DoctorId;

    #[Column(name: "visit_date", type: "datetime")]
    private DateTime $VisitDate;

    #[Column(name: "diagnosis", type: "text")]
    private string $Diagnosis;

    #[Column(name: "treatment", type: "text")]
    private string $Treatment;

    #[Column(name: "prescription", type: "text", nullable: true)]
    private ?string $Prescription;

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

    public function getVisitDate(): DateTime
    {
        return $this->VisitDate;
    }

    public function setVisitDate(DateTime $value): static
    {
        $this->VisitDate = $value;
        return $this;
    }

    public function getDiagnosis(): string
    {
        return HtmlDecode($this->Diagnosis);
    }

    public function setDiagnosis(string $value): static
    {
        $this->Diagnosis = RemoveXss($value);
        return $this;
    }

    public function getTreatment(): string
    {
        return HtmlDecode($this->Treatment);
    }

    public function setTreatment(string $value): static
    {
        $this->Treatment = RemoveXss($value);
        return $this;
    }

    public function getPrescription(): ?string
    {
        return HtmlDecode($this->Prescription);
    }

    public function setPrescription(?string $value): static
    {
        $this->Prescription = RemoveXss($value);
        return $this;
    }
}
