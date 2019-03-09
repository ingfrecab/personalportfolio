<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
//require_once 'BaseElement.php';

class Project extends Model {

    public function getDurationAsString($months) {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
      
        return "Project duration: $years years $extraMonths months";
      }

}
