<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Task
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @var
     */
    protected $name;

    /**
     * @ORM\Column(type="text", length=255)
     * @Assert\NotBlank
     * @var
     */
    protected $description;

    /**
     * @Assert\NotBlank
     * @Assert\Type("\DateTime")
     * @ORM\Column(type="date")
     * @var \DateTime
     */
    protected $dueDate;

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default" : 0})
     * @var boolean
     */
    protected $isCompleted = false;

    /**
     * Create empty task
     */
    public function __construct()
    {
        $this->dueDate = new \DateTime('now');
        $this->isCompleted = false;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param mixed $dueDate
     */
    public function setDueDate($dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Return true if task is completed
     * @return bool
     */
    public function isCompleted() : bool
    {
        return (boolean) $this->isCompleted;
    }

    /**
     * Set task to complete state
     * @param bool $isCompleted
     * @return void
     */
    public function setIsCompleted(bool $isCompleted = false)
    {
        $this->isCompleted = $isCompleted;
    }




}