<?php
require_once __DIR__ . "/vendor/autoload.php";

$collection = (new MongoDB\Client)->lessons->lesson;


$teachClSch = $_GET["teachClSch"];
$disciple = $_GET["disciple"];

$cursor = $collection->find(['name' => $teachClSch, 'disciple' => $disciple],['projection' => ['_id' => 0]]);

echo "<table border='1'>
        <tr>
            <th>week_day</th>
            <th>lesson_num</th>
            <th>auditorium</th>
            <th>disciple</th>
            <th>type</th>
            <th>title</th>
            <th>name</th>
        </tr>";
    foreach($cursor as $document){

        $week_day = $document['week_day'];
        $lesson_number = $document['lesson_number'];
        $auditorium = $document['auditorium'];
        $disciple = $document['disciple'];
        $type = $document['type'];
        $title = $document['title'];
        $name = $document['name'];

        echo "<tr><td>$week_day</td><td>$lesson_number</td><td>$auditorium</td><td>$disciple</td><td>$type</td><td>$title</td><td>$name</td></tr>";
    }
echo "</table>";

?>