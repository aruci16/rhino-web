<?php
/**
 * Created by PhpStorm.
 * User: grent
 * Date: 5/25/2019
 * Time: 4:21 PM
 */

class Discount
{
    private $id;
    private $name;
    private $discountTypeID;
    private $businessProductID;
    private $value;
    private $description;
    private $startTime;
    private $endTime;

    /**
     * Discount constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDiscountTypeID()
    {
        return $this->discountTypeID;
    }

    /**
     * @param mixed $discountTypeID
     */
    public function setDiscountTypeID($discountTypeID)
    {
        $this->discountTypeID = $discountTypeID;
    }

    /**
     * @return mixed
     */
    public function getBusinessProductID()
    {
        return $this->businessProductID;
    }

    /**
     * @param mixed $businessProductID
     */
    public function setBusinessProductID($businessProductID)
    {
        $this->businessProductID = $businessProductID;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }






}