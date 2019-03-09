<?php
namespace App\Models;
//require_once 'BaseElement.php';
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
    //protected $table = 'jobs';
    // public function __construct($title,$description){
    //     $newTitle = 'Job: '.$title;
    //     $this->title = $newTitle;
    // }

    public function getDurationAsString($months) {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "Job duration: $years years $extraMonths months";
      }

}

 