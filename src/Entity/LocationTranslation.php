<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model\Translatable\Translation;

#[ORM\Entity()]
class LocationTranslation
{
    use Translation;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    protected $id = null;

    #[ORM\Column(length: 255)]
    protected ?string $name = null;

    #[ORM\Column(length: 255)]
    protected ?string $slug = null;

    public function getId(): ?int
    {
        return $this->id;
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
