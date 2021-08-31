<?php

class User {

    public $id;
    public $name;
    public $dob;
    public $email;
    public $mobile;

}

class Teacher extends User {

    public $salary;
    public $courses;

}


class Student extends User {

    public $grades;
    protected $parent;

}



$teacher = new Teacher();

$teacher->id = 13;
$teacher->name = "Aziz";
$teacher->dob = 1999;
$teacher->email = "tester@test.com";
$teacher->parent = "Saeed";

var_dump($teacher);




$student_user = new Student();

$student_user->id = 12;
$student_user->name = "Ali";
$student_user->dob = 1986;
$student_user->email = "test@test.com";

var_dump($student_user);




