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

$groupOne = new Group;
$ross = $groupOne->addStudent(new Student('Ross', 10));
$chandler = $groupOne->addStudent(new Student('Chandler', 12));
$joey = $groupOne->addStudent(new Student('Joey', 14));

$groupTwo = new Group;
$monica = $groupTwo->addStudent(new Student('Monica', 16));
$phoebe = $groupTwo->addStudent(new Student('Phoebe', 18));
$rachel = $groupTwo->addStudent(new Student('Rachel', 20));

$groupOne->moveStudent($groupTwo, $ross);
$groupTwo->moveStudent($groupOne, $monica);

echo '<pre>';
print_r($groupOne);
print_r($groupTwo);
echo '</pre>';