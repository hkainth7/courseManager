<?php

$course_name = trim($_POST['course_name']);

if(!isset($course_name)) {
    die("The form field course name does not exist");
}

$course_name = trim($_POST['course_name']);
$course_file = fopen('courses.json', 'a') or die('unable to open file');

if(strlen($course_name) < 4) {
    die("The course name is too short");
}


$courses = array("course" => $course_name, "checked" => false);



if(filesize("courses.json") == 0) {
    $first_course = array($courses);
    $course_to_save = $first_course;
} else {
    $old_courses = json_decode(file_get_contents("courses.json"));
    array_push($old_courses, $courses);
    $course_to_save = $old_courses;
}

$encoded_data = json_encode($course_to_save, JSON_PRETTY_PRINT);


if(!file_put_contents("courses.json", $encoded_data, LOCK_EX)){
    die("error");
 }else{
    die(header("location:index.php"));
}