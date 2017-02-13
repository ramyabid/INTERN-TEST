<?php

namespace BackEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MissionReport
 *
 * @ORM\Table(name="mission_report")
 * @ORM\Entity(repositoryClass="BackEndBundle\Repository\MissionReportRepository")
 */
class MissionReport
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
     * @ORM\Column(name="missionName", type="string", length=255, nullable=true)
     */
    private $missionName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="missionDate", type="datetimetz", nullable=true)
     */
    private $missionDate;

    /**
     * @var string
     *
     * @ORM\Column(name="psContext", type="string", length=255, nullable=true)
     */
    private $psContext;

    /**
     * @var string
     *
     * @ORM\Column(name="intContext", type="string", length=255, nullable=true)
     */
    private $intContext;

    /**
     * @var string
     *
     * @ORM\Column(name="challenge", type="string", length=255, nullable=true)
     */
    private $challenge;

    /**
     * @var string
     *
     * @ORM\Column(name="mainQstAsked", type="string", length=255, nullable=true)
     */
    private $mainQstAsked;

    /**
     * @var string
     *
     * @ORM\Column(name="situation", type="string", length=255, nullable=true)
     */
    private $situation;

    /**
     * @var string
     *
     * @ORM\Column(name="conclusion", type="string", length=255, nullable=true)
     */
    private $conclusion;

    /**
     * @var string
     *
     * @ORM\Column(name="recommendations", type="string", length=255, nullable=true)
     */
    private $recommendations;


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
     * Set missionName
     *
     * @param string $missionName
     *
     * @return MissionReport
     */
    public function setMissionName($missionName)
    {
        $this->missionName = $missionName;

        return $this;
    }

    /**
     * Get missionName
     *
     * @return string
     */
    public function getMissionName()
    {
        return $this->missionName;
    }

    /**
     * Set missionDate
     *
     * @param \DateTime $missionDate
     *
     * @return MissionReport
     */
    public function setMissionDate($missionDate)
    {
        $this->missionDate = $missionDate;

        return $this;
    }

    /**
     * Get missionDate
     *
     * @return \DateTime
     */
    public function getMissionDate()
    {
        return $this->missionDate;
    }

    /**
     * Set psContext
     *
     * @param string $psContext
     *
     * @return MissionReport
     */
    public function setPsContext($psContext)
    {
        $this->psContext = $psContext;

        return $this;
    }

    /**
     * Get psContext
     *
     * @return string
     */
    public function getPsContext()
    {
        return $this->psContext;
    }

    /**
     * Set intContext
     *
     * @param string $intContext
     *
     * @return MissionReport
     */
    public function setIntContext($intContext)
    {
        $this->intContext = $intContext;

        return $this;
    }

    /**
     * Get intContext
     *
     * @return string
     */
    public function getIntContext()
    {
        return $this->intContext;
    }

    /**
     * Set challenge
     *
     * @param string $challenge
     *
     * @return MissionReport
     */
    public function setChallenge($challenge)
    {
        $this->challenge = $challenge;

        return $this;
    }

    /**
     * Get challenge
     *
     * @return string
     */
    public function getChallenge()
    {
        return $this->challenge;
    }

    /**
     * Set mainQstAsked
     *
     * @param string $mainQstAsked
     *
     * @return MissionReport
     */
    public function setMainQstAsked($mainQstAsked)
    {
        $this->mainQstAsked = $mainQstAsked;

        return $this;
    }

    /**
     * Get mainQstAsked
     *
     * @return string
     */
    public function getMainQstAsked()
    {
        return $this->mainQstAsked;
    }

    /**
     * Set situation
     *
     * @param string $situation
     *
     * @return MissionReport
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * Get situation
     *
     * @return string
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set conclusion
     *
     * @param string $conclusion
     *
     * @return MissionReport
     */
    public function setConclusion($conclusion)
    {
        $this->conclusion = $conclusion;

        return $this;
    }

    /**
     * Get conclusion
     *
     * @return string
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * Set recommendations
     *
     * @param string $recommendations
     *
     * @return MissionReport
     */
    public function setRecommendations($recommendations)
    {
        $this->recommendations = $recommendations;

        return $this;
    }

    /**
     * Get recommendations
     *
     * @return string
     */
    public function getRecommendations()
    {
        return $this->recommendations;
    }
}

