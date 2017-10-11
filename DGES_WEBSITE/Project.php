<?php >

class Project{
  $projectName;
  $credits;
  $duration;
  $level;
  boolean $prerequisites;
  // insert project link maybe

  public function __construct($projectName,$credits, $duration, $level,$prerequisites){
    $this->projectName=$projectName;
    $this->credits=$credits;
    $this->duration=$duration;
    $this->level=$level;

  }


  }
