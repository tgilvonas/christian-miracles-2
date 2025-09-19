<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model\Translatable\TranslationMethods;
use Knp\DoctrineBehaviors\Model\Translatable\TranslationProperties;

#[ORM\Entity()]
class LocationTranslation
{
    use TranslationProperties, TranslationMethods;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    protected $id = null;

    #[ORM\Column(length: 3)]
    protected $locale = null;

    #[ORM\Column(length: 255)]
    protected ?string $name = null;

    #[ORM\Column(length: 255)]
    protected ?string $slug = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }
}
