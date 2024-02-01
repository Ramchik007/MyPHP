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
        $this ->employees[$this->id]['month'] = ($employees->getDate()['month']);
        $this ->employees[$this->id]['year'] = ($employees->getDate()['year']);

        $this->id += 1;
    }


    public function getEmployees(): void
    {
            print_r($this -> employees);
            //printf($this -> id);
    }

    public function findEmployees(string $name,$flag = false):void
    {

        foreach ($this->employees as $id) {
            foreach ($id as $key => $value) {
                $fullName = $id['lastName'] . " " . $id['name'] . " " . $id['middleName'];
            }
            //printf($fullName);

            if (mb_strpos(mb_strtolower($fullName), mb_strtolower($name)) !== false) {
                    $flag = true;
                    printf($fullName."\n");
                    //print_r($this->employees);

            }
            else {
                    continue;
                }

            }

        if (!$flag) {
            printf("Не найдено");
        }
        }



        public function findEmployeesExp(int $years,$flag = false):void
        {
            foreach ($this->employees as $id) {
                if($id['month'] < (int)date('n')) {
                    $exp = (int)date('Y') - (int)$id['year'] -1;

                }
                else {
                    $exp =(int)date('Y') - (int)$id['year'];
                }

                if ($years <= $exp) {
                    $flag = true;
                    printf($id['lastName']." ".$id['name']." ".$id['middleName']."\n");
                }

            }
            if (!$flag) {
                printf("Не найдено");
            }

        }


}