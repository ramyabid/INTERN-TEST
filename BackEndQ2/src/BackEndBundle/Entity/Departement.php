<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="BackEndBundle\Repository\DepartementRepository")
 */
class Departement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="numOfEmp", type="integer", nullable=true)
     */
    private $numOfEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=255, nullable=true)
     */
    private $section;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="User", inversedBy="departement")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    // ...
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Budget", inversedBy="departement")
     * @ORM\JoinColumn(name="depart_id", referencedColumnName="id")
     */
    private $budget;
    // ...

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Departement
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set numOfEmp
     *
     * @param integer $numOfEmp
     *
     * @return Departement
     */
    public function setNumOfEmp($numOfEmp)
    {
        $this->numOfEmp = $numOfEmp;

        return $this;
    }

    /**
     * Get numOfEmp
     *
     * @return int
     */
    public function getNumOfEmp()
    {
        return $this->numOfEmp;
    }

    /**
     * Set section
     *
     * @param string $section
     *
     * @return Departement
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }
}

