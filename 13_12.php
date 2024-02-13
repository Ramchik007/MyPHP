<?php
require_once 'Employee.php';
require_once 'EmployeeRepository.php';

$person1 = new Employee('Чернова','Наталья','Петровна','Казань Ленина 5','12-2011');
$person2 = new Employee('Краснова','Наталья','Петровна','Казань Ленина 10','10-2015');
$person3= new Employee('Белова','Наталья','Петровна','Казань Ленина 15','5-2023');
$person4 = new Employee('Чернова','Надежда','Петровна','Казань Ленина 20','8-2022');


$newRepository = new EmployeeRepository();

$newRepository -> setEmployees($person1);
$newRepository -> setEmployees($person2);
$newRepository -> setEmployees($person3);
$newRepository -> setEmployees($person4);


$newRepository ->findEmployees('ежда');
$newRepository ->findEmployeesExp(5);



