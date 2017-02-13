<?php
namespace BackEndBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
* @ORM\Entity
* @ORM\Table(name="user")
*/
class User extends BaseUser
{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
4
*/
protected $id;

 /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    private $firstName;
    
/**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;
    
   // ...
    /**
     * 
     * @ORM\OneToMany(targetEntity="TravelPlan", mappedBy="travelPlan")
     */
    private $travelPlan;
    
    // ...
    /**
     * 
     * @ORM\OneToMany(targetEntity="Departement", mappedBy="user")
     */
    private $departement;

    
    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

        

public function __construct()
{
parent::__construct();
// your own logic
$this->travelPlan = new ArrayCollection();
$this->departement = new ArrayCollection();
}
}
?>