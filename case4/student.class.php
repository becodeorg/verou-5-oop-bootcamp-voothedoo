<?php

class Student
{
  public $name;
  public $grade;

  public function __construct(string $name, float $grade)
  {
    $this->name = $name;
    $this->grade = $grade;
  }

  public function getGrade ()
  {
    return $this->grade;
  }

  public static function calculateAverage(Group $group)
  {
  $total = 0;
  foreach($group as $student) {
    return $student->name;
  }
  
  }

}