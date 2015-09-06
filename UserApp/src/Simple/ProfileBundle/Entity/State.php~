<?php

namespace Simple\ProfileBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="state")
 * @ORM\Entity(repositoryClass="stateRepository")
 */
class State {
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
     * @ORM\OneToMany(targetEntity="City", mappedBy="state")
     */      
    protected $cities; 
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cities = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return State
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
     * Add cities
     *
     * @param \Simple\ProfileBundle\Entity\City $cities
     * @return State
     */
    public function addCitie(\Simple\ProfileBundle\Entity\City $cities)
    {
        $this->cities[] = $cities;
    
        return $this;
    }

    /**
     * Remove cities
     *
     * @param \Simple\ProfileBundle\Entity\City $cities
     */
    public function removeCitie(\Simple\ProfileBundle\Entity\City $cities)
    {
        $this->cities->removeElement($cities);
    }

    /**
     * Get cities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCities()
    {
        return $this->cities;
    }
    
    public function __toString() {
        return $this->getName();
    }        
}