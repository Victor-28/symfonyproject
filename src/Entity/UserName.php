<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserNameRepository")
 */
class UserName
{

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
/*<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AskNameRepository")
 */
/*class AskName
{
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
 /*   private $Name;

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;
        return $this;
    }

}
 */