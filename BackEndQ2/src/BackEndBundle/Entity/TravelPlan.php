<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TravelPlan
 *
 * @ORM\Table(name="travel_plan")
 * @ORM\Entity(repositoryClass="BackEndBundle\Repository\TravelPlanRepository")
 */
class TravelPlan
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
     * @ORM\Column(name="institution", type="string", length=255, nullable=true)
     */
    private $institution;

    /**
     * @var string
     *
     * @ORM\Column(name="venue", type="string", length=255, nullable=true)
     */
    private $venue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="daysAway", type="string", length=255, nullable=true)
     */
    private $daysAway;

    /**
     * @var string
     *
     * @ORM\Column(name="justification", type="string", length=255, nullable=true)
     */
    private $justification;

    /**
     * @var int
     *
     * @ORM\Column(name="estimatedTravelCostUSD", type="integer", nullable=true)
     */
    private $estimatedTravelCostUSD;

    /**
     * @var string
     *
     * @ORM\Column(name="regionalOffice", type="string", length=255, nullable=true)
     */
    private $regionalOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;
    

    /**
     * 
     * @ORM\ManyToOne(targetEntity="User", inversedBy="travelPlan")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    // ...
    
    // ...
    /**
     * 
     * @ORM\OneToMany(targetEntity="Project", mappedBy="travelPlan")
     */
    private $project;
    
    public function __construct() {
        $this->project = new ArrayCollection();
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
     * Set institution
     *
     * @param string $institution
     *
     * @return TravelPlan
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * Get institution
     *
     * @return string
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * Set venue
     *
     * @param string $venue
     *
     * @return TravelPlan
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;

        return $this;
    }

    /**
     * Get venue
     *
     * @return string
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return TravelPlan
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return TravelPlan
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set daysAway
     *
     * @param string $daysAway
     *
     * @return TravelPlan
     */
    public function setDaysAway($daysAway)
    {
        $this->daysAway = $daysAway;

        return $this;
    }

    /**
     * Get daysAway
     *
     * @return string
     */
    public function getDaysAway()
    {
        return $this->daysAway;
    }

    /**
     * Set justification
     *
     * @param string $justification
     *
     * @return TravelPlan
     */
    public function setJustification($justification)
    {
        $this->justification = $justification;

        return $this;
    }

    /**
     * Get justification
     *
     * @return string
     */
    public function getJustification()
    {
        return $this->justification;
    }

    /**
     * Set estimatedTravelCostUSD
     *
     * @param integer $estimatedTravelCostUSD
     *
     * @return TravelPlan
     */
    public function setEstimatedTravelCostUSD($estimatedTravelCostUSD)
    {
        $this->estimatedTravelCostUSD = $estimatedTravelCostUSD;

        return $this;
    }

    /**
     * Get estimatedTravelCostUSD
     *
     * @return int
     */
    public function getEstimatedTravelCostUSD()
    {
        return $this->estimatedTravelCostUSD;
    }

    /**
     * Set regionalOffice
     *
     * @param string $regionalOffice
     *
     * @return TravelPlan
     */
    public function setRegionalOffice($regionalOffice)
    {
        $this->regionalOffice = $regionalOffice;

        return $this;
    }

    /**
     * Get regionalOffice
     *
     * @return string
     */
    public function getRegionalOffice()
    {
        return $this->regionalOffice;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return TravelPlan
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    function getUser() {
        return $this->user;
    }

    function getProject() {
        return $this->project;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setProject($project) {
        $this->project = $project;
    }


}

