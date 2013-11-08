<?php

namespace Curso\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="tipsurvey_question")
 * @ORM\Entity
 */
class Question
{
    
    /**
     * @var bigint $id
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    
    
    /**
     * @ORM\Column(name="question", type="text")
     *
     */
    protected $question;
    
    
    /**
     * @ORM\Column(name="description", type="text")
     *
        */
    protected $description;
    
    
    /**
     * @ORM\Column(name="random_order", type="boolean")
     *
     */
    protected $randomOrder;  //respuestas en orden randomico.
    
    /**
     * @ORM\Column(name="question_required", type="boolean")
     *
     */
    protected $questionRequired; //Si la pregunta es obligatoria   

    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Survey", inversedBy="questions")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="survey_id",    referencedColumnName="id")
     * })
     */
    protected $survey;
    
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="QuestionType")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="questiontype_id",    referencedColumnName="id")
     * })
     */
     protected $questionType;
    
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="AnswerType")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="answertype_id",    referencedColumnName="id")
     * })
     */
    protected $answerType;
    
    
    /**
            * @ORM\OneToMany(targetEntity="Answer", mappedBy="question", cascade={"all"})
            *
            */
    protected $answers;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->answers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set question
     *
     * @param string $question
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Question
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

    /**
     * Set randomOrder
     *
     * @param boolean $randomOrder
     * @return Question
     */
    public function setRandomOrder($randomOrder)
    {
        $this->randomOrder = $randomOrder;
    
        return $this;
    }

    /**
     * Get randomOrder
     *
     * @return boolean 
     */
    public function getRandomOrder()
    {
        return $this->randomOrder;
    }

    /**
     * Set questionRequired
     *
     * @param boolean $questionRequired
     * @return Question
     */
    public function setQuestionRequired($questionRequired)
    {
        $this->questionRequired = $questionRequired;
    
        return $this;
    }

    /**
     * Get questionRequired
     *
     * @return boolean 
     */
    public function getQuestionRequired()
    {
        return $this->questionRequired;
    }

    /**
     * Set survey
     *
     * @param \Curso\SurveyBundle\Entity\Survey $survey
     * @return Question
     */
    public function setSurvey(\Curso\SurveyBundle\Entity\Survey $survey = null)
    {
        $this->survey = $survey;
    
        return $this;
    }

    /**
     * Get survey
     *
     * @return \Curso\SurveyBundle\Entity\Survey 
     */
    public function getSurvey()
    {
        return $this->survey;
    }

    /**
     * Set questionType
     *
     * @param \Curso\SurveyBundle\Entity\QuestionType $questionType
     * @return Question
     */
    public function setQuestionType(\Curso\SurveyBundle\Entity\QuestionType $questionType = null)
    {
        $this->questionType = $questionType;
    
        return $this;
    }

    /**
     * Get questionType
     *
     * @return \Curso\SurveyBundle\Entity\QuestionType 
     */
    public function getQuestionType()
    {
        return $this->questionType;
    }

    /**
     * Set answerType
     *
     * @param \Curso\SurveyBundle\Entity\AnswerType $answerType
     * @return Question
     */
    public function setAnswerType(\Curso\SurveyBundle\Entity\AnswerType $answerType = null)
    {
        $this->answerType = $answerType;
    
        return $this;
    }

    /**
     * Get answerType
     *
     * @return \Curso\SurveyBundle\Entity\AnswerType 
     */
    public function getAnswerType()
    {
        return $this->answerType;
    }

    /**
     * Add answers
     *
     * @param \Curso\SurveyBundle\Entity\Answer $answers
     * @return Question
     */
    public function addAnswer(\Curso\SurveyBundle\Entity\Answer $answers)
    {
        $this->answers[] = $answers;
    
        return $this;
    }

    /**
     * Remove answers
     *
     * @param \Curso\SurveyBundle\Entity\Answer $answers
     */
    public function removeAnswer(\Curso\SurveyBundle\Entity\Answer $answers)
    {
        $this->answers->removeElement($answers);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnswers()
    {
        return $this->answers;
    }
}