<?php

namespace Simple\ProfileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="cityRepository")
 */
class City {
    //put your code here
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */    
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=40)
     */    
    protected $name;     
    
    /**
     * @ORM\ManyToOne(targetEntity="State", inversedBy="cities")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id", nullable=false)
     */      
    protected $state; 

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return City
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
     * Set state
     *
     * @param \Simple\ProfileBundle\Entity\State $state
     * @return City
     */
    public function setState(\Simple\ProfileBundle\Entity\State $state = null)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return \Simple\ProfileBundle\Entity\State 
     */
    public function getState()
    {
        return $this->state;
    }
    
    public function __toString() {
        return $this->getName();
    }     
}