<?php
#[AllowDynamicProperties] class Employee
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

   

    public function getEmployee():string {
            return $this -> lastName." ".$this ->name." ".$this->middleName." ".$this->address."\n";

    }
    public function getDate():array
    {
            list($month,$year) = explode('-',$this ->dateWork);
            return array('month'=>(int)$month,'year' => (int)$year);

    }


}