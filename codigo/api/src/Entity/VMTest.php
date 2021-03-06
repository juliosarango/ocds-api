<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * VMTest
 *
 * @ORM\Table(name="vm_test")
 * @ORM\Entity
 * @ApiResource(
 *     collectionOperations={
 *          "get"={"method"="GET","normalization_context"={"groups"={"vm_test:read:all"}}},
 *          
 *     },
 *     itemOperations={
 *          "get"={"method"="GET"},
 *     },
 *     attributes={
 *          "normalization_context"={"groups"={"vm_test:read"}}
 *     }
 * )
 */
class VMTest
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"vm_test:read:all","vm_test:read","state:read:all","state:read"})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=false)
     * @Groups({"vm_test:read:all","vm_test:post","vm_test:read","vm_test:put"})
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @Groups({"vm_test:read:all","vm_test:post","vm_test:read","vm_test:put"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=false)
     * @Groups({"test:read:all","test:post","test:read","test:put"})
     */
    private $status;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

}
