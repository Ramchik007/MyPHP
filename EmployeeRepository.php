<?php
require_once 'Employee.php';
class EmployeeRepository
{
    private int $id = 0;
    private array $employees;


    public function __construct()
    {
        $this->employees = array([]);
        $this->id= 0;
    }


    public function setEmployees(Employee $employees): void
    {
        $this ->employees[$this->id]['lastName'] = strval($employees->getLastName());
        $this ->employees[$this->id]['name'] = strval($employees->getName());
        $this ->employees[$this->id]['middleName'] = strval($employees->getMiddleName());
        $this ->employees[$this->id]['address'] = strval($employees->getAddress());
        $this ->employees[$this->id]['dateWork'] = ($employees->getDateWork());

        $this->id += 1;
    }


    public function getEmployees(): void
    {
            print_r($this -> employees);
    }

    public function findEmployees(string $name):void
    {
        foreach ($this->employees as $id) {
            foreach ($id as $key => $value) {
                $fullName = $id['lastName'] . " " . $id['name'] . " " . $id['middleName'];
            }
            //printf($fullName);

            if (mb_strpos(mb_strtolower($fullName), mb_strtolower($name)) !== false) {
                    print_r($id);
                //printf($key . " " . $this->employees[$key] . "\n");
            }
            else {
                    continue;
                }

            }
        }


}