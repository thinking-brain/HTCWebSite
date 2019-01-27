<?php
namespace AppBundle\Entity;

class Booking
{
    protected $tour;

    public function getTour(){
        return $this->tour;
    }

    public function setTour($tour){
        $this->tour = $tour;
    }

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

    protected $pax;

    public function getPax()
    {
        return $this->pax;
    }

    public function setPax($pax)
    {
        $this->pax = $pax;
    }

    protected $date;

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    protected $additionalRequest;

    public function getAdditionalRequest(){
        return $this->additionalRequest;
    }

    public function setAdditionalRequest($additionalRequest){
        $this->additionalRequest = $additionalRequest;
    }
}
