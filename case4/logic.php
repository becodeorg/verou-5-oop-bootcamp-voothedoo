<?php
require './group.class.php';

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