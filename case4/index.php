<?php

class GroupOne 
{
  public $name;
  public $grade;

  public function __construct(string $name, float $grade)
  {
    $this->name = $name;
    $this->grade = $grade;
  }

  public static function calculateAverage(array $students) {
    $total = 0;
    foreach($students as $student) {
      $total += $student->grade;
    }
    return $total / count($students);
  }

}

class GroupTwo extends GroupOne 
{

}

$ross = new GroupOne('ross', 8);
$joey = new GroupOne('joey', 10);
$chandler = new GroupOne('chandler', 12);
$groupOne = [$ross, $joey, $chandler];

$monica = new GroupTwo('monica', 14);
$rachel = new GroupTwo('rachel', 16);
$phoebe = new GroupTwo('phoebe', 18);
$groupTwo = [$monica, $rachel, $phoebe];

$average = GroupOne::calculateAverage($groupOne);
echo 'Group one average score: '.$average;
echo '<br>';
$average = 0;
$average = GroupTwo::calculateAverage($groupTwo);
echo 'Group two average score: '.$average;
echo '<br>';












// $studentsGroupOne = [];
// for ($i = 0; $i < 10; $i++) {
//   $studentName = "group 1, student number" . $i;
//   $studentsGroupOne[] = new GroupOne($studentName, 1);
// }
// echo $studentsGroupOne[1]->name;
// echo '<br>';


// $studentsGroupTwo = [];
// for ($i = 0; $i < 10; $i++) {
//   $studentName = "group 2, student number" . $i;
//   $studentsGroupTwo[] = new GroupTwo($studentName, 1);
// }
// echo $studentsGroupTwo[1]->name;
// echo '<br>';