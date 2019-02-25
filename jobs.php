<?php
//echo 'Llamando jobs.php';
// require 'App/Models/Job.php';
// require 'App/Models/Project.php';
// require_once 'App/Models/Printable.php';
// require 'App/lib1/Project.php';
require_once 'vendor/autoload.php';
use App\Models\{Job,Project,Printable};
// use App\Models\Project;
// use App\Models\Printable;


    $job1 = new Job('PHP Developer','This is an awesome job!!!');
    // $job1 ->setTitle('PHP Developer');
    // $job1 ->description = 'This is an awesome job!!!';
    // $job1 ->visible = true;
    $job1 ->months = 16;

    $job2 = new Job('Python Developer','This is an awesome job!!!');
    // $job2 ->setTitle('Python Developer');
    // $job2 ->description = 'This is an awesome job!!!';
    //$job2 ->visible = true;
    $job2 ->months = 24;

    $job3 = new Job('Devops','This is an awesome job!!!');
    // $job3 ->setTitle('');
    // $job3 ->description = 'This is an awesome job!!!';
    //$job3 ->visible = true;
    $job3 ->months = 32;

    $project1 = new Project('Project 1','Description 1');

    //$projectLib1 = new lib1\Project();

$jobs = [
    $job1 ,
    $job2 ,
    $job3
];

$projects = [
    $project1
];
// function getDuration($months) {
//     $years = floor($months / 12);
//     $extraMonths = $months % 12;
  
//     return "$years years $extraMonths months";
//   }
  
  function printElement(Printable $job) {
    if($job->visible == false) {
      return;
    }
  
      echo '<li class="work-position">';
      echo '<h5>' . $job->getTitle() . '</h5>';
      echo '<p>' . $job->getDescription() . '</p>';
      echo '<p>' . $job->getDurationAsString($job->months) . '</p>';
      echo '<strong>Achievements:</strong>';
      echo '<ul>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '</ul>';
      echo '</li>';
  }