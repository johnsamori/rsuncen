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
 * Entity class for "transactions" table
 */

#[Entity]
#[Table("transactions", options: ["dbId" => "DB"])]
class Transaction extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "patient_id", type: "integer")]
    private int $PatientId;

    #[Column(name: "pharmacy_id", type: "integer")]
    private int $PharmacyId;

    #[Column(name: "quantity", type: "integer")]
    private int $Quantity;

    #[Column(name: "total_price", type: "decimal")]
    private string $TotalPrice;

    #[Column(name: "transaction_date", type: "datetime")]
    private DateTime $TransactionDate;

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

    public function getPharmacyId(): int
    {
        return $this->PharmacyId;
    }

    public function setPharmacyId(int $value): static
    {
        $this->PharmacyId = $value;
        return $this;
    }

    public function getQuantity(): int
    {
        return $this->Quantity;
    }

    public function setQuantity(int $value): static
    {
        $this->Quantity = $value;
        return $this;
    }

    public function getTotalPrice(): string
    {
        return $this->TotalPrice;
    }

    public function setTotalPrice(string $value): static
    {
        $this->TotalPrice = $value;
        return $this;
    }

    public function getTransactionDate(): DateTime
    {
        return $this->TransactionDate;
    }

    public function setTransactionDate(DateTime $value): static
    {
        $this->TransactionDate = $value;
        return $this;
    }
}
