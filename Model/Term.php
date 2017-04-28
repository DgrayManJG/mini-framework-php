<?php
namespace Model;
/**
 *
 */
final class Term
{

    private $id;
    private $term;
    private $definition1;
    private $definition2;
    private $category;
    private $example;
    private $translation;
    private $variations;
    private $pronunciation;
    private $nature;
    private $gender;
    private $number;
    private $origin;
    private $createdDate;
    private $editedDate;
    private $votesCount;


    public function __construct()
    {

    }

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Term
     *
     * @return mixed
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set the value of Term
     *
     * @param mixed term
     *
     * @return self
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get the value of Definition
     *
     * @return mixed
     */
    public function getDefinition1()
    {
        return $this->definition1;
    }

    /**
     * Set the value of Definition
     *
     * @param mixed definition1
     *
     * @return self
     */
    public function setDefinition1($definition1)
    {
        $this->definition1 = $definition1;

        return $this;
    }

    /**
     * Get the value of Definition
     *
     * @return mixed
     */
    public function getDefinition2()
    {
        return $this->definition2;
    }

    /**
     * Set the value of Definition
     *
     * @param mixed definition2
     *
     * @return self
     */
    public function setDefinition2($definition2)
    {
        $this->definition2 = $definition2;

        return $this;
    }

    /**
     * Get the value of Category
     *
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of Category
     *
     * @param mixed category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of Example
     *
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * Set the value of Example
     *
     * @param mixed example
     *
     * @return self
     */
    public function setExample($example)
    {
        $this->example = $example;

        return $this;
    }

    /**
     * Get the value of Translation
     *
     * @return mixed
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * Set the value of Translation
     *
     * @param mixed translation
     *
     * @return self
     */
    public function setTranslation($translation)
    {
        $this->translation = $translation;

        return $this;
    }

    /**
     * Get the value of Variations
     *
     * @return mixed
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * Set the value of Variations
     *
     * @param mixed variations
     *
     * @return self
     */
    public function setVariations($variations)
    {
        $this->variations = $variations;

        return $this;
    }

    /**
     * Get the value of Pronunciation
     *
     * @return mixed
     */
    public function getPronunciation()
    {
        return $this->pronunciation;
    }

    /**
     * Set the value of Pronunciation
     *
     * @param mixed pronunciation
     *
     * @return self
     */
    public function setPronunciation($pronunciation)
    {
        $this->pronunciation = $pronunciation;

        return $this;
    }

    /**
     * Get the value of Nature
     *
     * @return mixed
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set the value of Nature
     *
     * @param mixed nature
     *
     * @return self
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get the value of Gender
     *
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of Gender
     *
     * @param mixed gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of Number
     *
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of Number
     *
     * @param mixed number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of Origin
     *
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set the value of Origin
     *
     * @param mixed origin
     *
     * @return self
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get the value of Created Date
     *
     * @return mixed
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set the value of Created Date
     *
     * @param mixed createdDate
     *
     * @return self
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get the value of Edited Date
     *
     * @return mixed
     */
    public function getEditedDate()
    {
        return $this->editedDate;
    }

    /**
     * Set the value of Edited Date
     *
     * @param mixed editedDate
     *
     * @return self
     */
    public function setEditedDate($editedDate)
    {
        $this->editedDate = $editedDate;

        return $this;
    }

    /**
     * Get the value of Votes Count
     *
     * @return mixed
     */
    public function getVotesCount()
    {
        return $this->votesCount;
    }

    /**
     * Set the value of Votes Count
     *
     * @param mixed votesCount
     *
     * @return self
     */
    public function setVotesCount($votesCount)
    {
        $this->votesCount = $votesCount;

        return $this;
    }

}

 ?>
