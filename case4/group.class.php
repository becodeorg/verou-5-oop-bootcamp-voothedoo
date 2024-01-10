<?php

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
    $total += $student->getGrade();
  }
  return $total / count($this->group);
  }

}

$groupOne = new Group;
$ross = $groupOne->addStudent(new Student('Ross', '10'));
$chandler = $groupOne->addStudent(new Student('Chandler', '12'));
$joey = $groupOne->addStudent(new Student('Joey', '14'));

$groupTwo = new Group;
$monica = $groupTwo->addStudent(new Student('Monica', '16'));
$phoebe = $groupTwo->addStudent(new Student('Phoebe', '18'));
$rachel = $groupTwo->addStudent(new Student('Rachel', '20'));

