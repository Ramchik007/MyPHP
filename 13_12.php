<?php
require_once 'Employee.php';
require_once 'EmployeeRepository.php';

$person1 = new Employee('Чернова','Наталья','Петровна','Казань Ленина 5','12-2011');
$person2 = new Employee('Краснова','Наталья','Петровна','Казань Ленина 10','10-2015');
$person3= new Employee('Белова','Наталья','Петровна','Казань Ленина 15','5-2023');
$person4 = new Employee('Чернова','Надежда','Петровна','Казань Ленина 20','8-2022');

//echo $person1 ->getEmployee();
//print_r(get_class_methods($ram));
//print_r(get_object_vars($ram));
//сделать автоматическое получение даты в методе
//$month = (int)date('n');
//$year = (int)date('Y');
//echo $month,$year;
//$expDate = ($person1 -> getDate());
//printf($expDate['month']);

//printf($person1 ->getWorkingExperienceOnDate());


$newRepository = new EmployeeRepository();
//print_r($newRepository);
//printf(EmployeeRepository::$id);
$newRepository -> setEmployees($person1);
$newRepository -> setEmployees($person2);
$newRepository -> setEmployees($person3);
$newRepository -> setEmployees($person4);

//print_r($newRepository);
$newRepository -> getEmployees();
$newRepository ->findEmployees('белова нат');



