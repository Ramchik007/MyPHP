<?php
class Employee
{
    private string $lastName;
    private string $name;
    private string|null $middleName;
    private string $address;
    private string $dateWork;

   
    public function __construct($lastName,$name,$middleName,$address,$dateWork) {

        $this ->lastName = $lastName;
        $this ->name = $name;
        $this ->middleName = $middleName;
        $this ->address = $address;
        $this ->dateWork = $dateWork;

    }

    public function getLastName():string
    {
        return $this->lastName;
    }
    public function getName():string
    {
        return $this->name;
    }
    public function getMiddleName():string
    {
        return $this->middleName;
    }
    public function getAddress():string
    {
        return $this->address;
    }
    public function getDateWork():string
    {
        return $this->dateWork;
    }


    /**
     * @return string
     */
    public function getWorkingExperienceOnDate(): int
    {
        $month = $this->getDate()['month'];
        $year = $this ->getDate()['year'];
        if($month < (int)date('n')) {
            return (int)date('Y') - (int)$year -1;

        }
        else {
            return (int)date('Y') - (int)$year;
        }

    }


    public function __toString(): string
    {
        return $this->lastName." ".$this->name." ".$this->middleName;
    }


    public function getEmployee():string {
            return $this -> lastName." ".$this ->name." ".$this->middleName." ".$this->address."\n";

    }
    public function getDate():array
    {
            list($month,$year) = explode('-',$this ->dateWork);
            return array('month'=>(int)$month,'year' => (int)$year);

    }




}