<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require './student.class.php';

class Group
{
  public $group = [];

  public function addStudent(Student $student) 
  {
    $this->group[] = $student;
    return $student;
  }

  public function calculateAverage()
  {
  $total = 0;
  foreach($this->group as $student) {
    $total += $student->grade;
  }
  return $total / count($this->group);
  }

  public function swapStudent($student)
  {
    $this->group[] = $student;

  }

  public function moveStudent ($group, $student)
  {
    $group->swapStudent($student);

    if (($key = array_search($student, $this->group)) !== false) {
      unset($this->group[$key]);
    }

  }

}
