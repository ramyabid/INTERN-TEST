<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Budget
 *
 * @ORM\Table(name="budget")
 * @ORM\Entity(repositoryClass="BackEndBundle\Repository\BudgetRepository")
 */
class Budget
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
     * @var int
     *
     * @ORM\Column(name="annuelBudget", type="integer", nullable=true)
     */
    private $annuelBudget;

    /**
     * @var int
     *
     * @ORM\Column(name="travelBudgetBalance", type="integer", nullable=true)
     */
    private $travelBudgetBalance;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="Departement", mappedBy="budget")
     */
    private $departement;
    
    public function __construct() {
        $this->departement = new ArrayCollection();
    }


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
     * Set annuelBudget
     *
     * @param integer $annuelBudget
     *
     * @return Budget
     */
    public function setAnnuelBudget($annuelBudget)
    {
        $this->annuelBudget = $annuelBudget;

        return $this;
    }

    /**
     * Get annuelBudget
     *
     * @return int
     */
    public function getAnnuelBudget()
    {
        return $this->annuelBudget;
    }

    /**
     * Set travelBudgetBalance
     *
     * @param integer $travelBudgetBalance
     *
     * @return Budget
     */
    public function setTravelBudgetBalance($travelBudgetBalance)
    {
        $this->travelBudgetBalance = $travelBudgetBalance;

        return $this;
    }

    /**
     * Get travelBudgetBalance
     *
     * @return int
     */
    public function getTravelBudgetBalance()
    {
        return $this->travelBudgetBalance;
    }
}

