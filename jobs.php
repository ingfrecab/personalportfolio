<?php
//echo 'Llamando jobs.php';
// require 'App/Models/Job.php';
// require 'App/Models/Project.php';
// require_once 'App/Models/Printable.php';
// require 'App/lib1/Project.php';

use App\Models\{Job,Project};

$jobs = Job::all();



$projects = Project::all();
// $projects = [
//     $project1
// ];
// function getDuration($months) {
//     $years = floor($months / 12);
//     $extraMonths = $months % 12;
  
//     return "$years years $extraMonths months";
//   }
  
  function printElement($job) {
    // if($job->visible == false) {
    //   return;
    // }
  
      echo '<li class="work-position">';
      echo '<h5>' . $job->title . '</h5>';
      echo '<p>' . $job->description . '</p>';
      echo '<p>' . $job->getDurationAsString($job->months) . '</p>';
      echo '<strong>Achievements:</strong>';
      echo '<ul>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '</ul>';
      echo '</li>';
  }