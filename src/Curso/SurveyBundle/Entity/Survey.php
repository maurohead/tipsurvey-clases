<?php

namespace Curso\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Survey
 *
 * @ORM\Table(name="tipsurvey_survey")
 * @ORM\Entity
 */
class Survey 
 {
	 /**
	  *
	  * @ORM\Column(name="id", type="bigint", nullable=false)
	  * @ORM\Id
	  * @ORM\GeneratedValue(strategy="IDENTITY")
	  */
	 
	 protected $id;
     
     /**
      * @ORM\Column(name="title", type="string", length=255, nullable=false)
      *
      */
       
     protected $title;
	 
	 
	 /**
	  * @ORM\Column(name="description", type="text")
	  *
	  */
	  
	 protected $description;

	 /**
	         * @ORM\OneToMany(targetEntity="Question", mappedBy="survey", cascade={"all"})
	         *
	         */	 
	 protected $questions;
	 
 
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
     * Set title
     *
     * @param string $title
     * @return Survey
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Survey
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}