<?php

class CreditCard
{
    protected $numberUser;
    protected $number;
    protected $expireDate;
    protected $cvn;

    public function __construct($namberUser,$number,$expireDate,$cvn)
    {
        $this->setNumberUser($namberUser);
        $this->setNumber($number);
        $this->setExpireDate($expireDate);
        $this->setCvn($cvn);
    }

    /**
     * Get the value of numberUser
     */ 
    public function getNumberUser()
    {
        return $this->numberUser;
    }

    /**
     * Set the value of numberUser
     *
     * @return  self
     */ 
    public function setNumberUser($numberUser)
    {
        $this->numberUser = $numberUser;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of expireDate
     */ 
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set the value of expireDate
     *
     * @return  self
     */ 
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get the value of cvn
     */ 
    public function getCvn()
    {
        return $this->cvn;
    }

    /**
     * Set the value of cvn
     *
     * @return  self
     */ 
    public function setCvn($cvn)
    {
        $this->cvn = $cvn;

        return $this;
    }
}