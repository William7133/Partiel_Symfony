<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdvertRepository")
 */
class Advert
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="bigint")
     */
    private $car_year;

    /**
     * @ORM\Column(type="bigint")
     */
    private $nb_km;

    /**
     * @ORM\Column(type="bigint")
     */
    private $nb_days;

    /**
     * @ORM\Column(type="bigint")
     */
    private $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCarYear(): ?string
    {
        return $this->car_year;
    }

    public function setCarYear(string $car_year): self
    {
        $this->car_year = $car_year;

        return $this;
    }

    public function getNbKm(): ?string
    {
        return $this->nb_km;
    }

    public function setNbKm(string $nb_km): self
    {
        $this->nb_km = $nb_km;

        return $this;
    }

    public function getNbDays(): ?string
    {
        return $this->nb_days;
    }

    public function setNbDays(string $nb_days): self
    {
        $this->nb_days = $nb_days;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }
}
