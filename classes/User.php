<?php
require_once __DIR__ . '/CreditCard.php';

Class User
{
    protected $name;
    protected $lastname;
    protected $email;
    protected $password;
    protected $paymentMethod;

    public function __construct($name,$lastname,$email,$password)
    {
        $this->setName($name);        
        $this->setLastname($lastname);        
        $this->setEmail($email);        
        $this->setPassword($password);        
    }

    public function setPaymentMethod(CreditCard $paymentMethod)
    {
        if (get_class($paymentMethod) === 'CreditCard') {
            $this->paymentMethod = $paymentMethod;
        }else {
            throw new Exception("carta di credito sbagliata"); 
        }

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of paymentMethod
     */ 
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set the value of paymentMethod
     *
     * @return  self
     */ 
    
}