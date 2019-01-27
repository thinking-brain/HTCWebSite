<?php
namespace AppBundle\Entity;

class Contact
{
    protected $fullName;

    public function getFullName(){
        return $this->fullName;
    }

    public function setFullName($fullName){
        $this->fullName = $fullName;
    }

    protected $email;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    protected $additionalRequest;

    public function getAdditionalRequest(){
        return $this->additionalRequest;
    }

    public function setAdditionalRequest($additionalRequest){
        $this->additionalRequest = $additionalRequest;
    }
   
}