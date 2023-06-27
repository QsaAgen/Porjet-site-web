<?php

namespace App\Entity;

use App\Repository\LieuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LieuRepository::class)]
class Lieu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'Lieu', targetEntity: Echantillon::class)]
    private Collection $enchantillons;

    public function __construct()
    {
        $this->enchantillons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Echantillon>
     */
    public function getEchantillons(): Collection
    {
        return $this->enchantillons;
    }

    public function addEchantillon(Echantillon $enchantillon): self
    {
        if (!$this->enchantillons->contains($enchantillon)) {
            $this->enchantillons->add($enchantillon);
            $enchantillon->setLieu($this);
        }

        return $this;
    }

    public function removeEchantillon(Echantillon $enchantillon): self
    {
        if ($this->enchantillons->removeElement($enchantillon)) {
            // set the owning side to null (unless already changed)
            if ($enchantillon->getLieu() === $this) {
                $enchantillon->setLieu(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return $this->getName();
    }
}
