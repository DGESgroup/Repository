<?php >
//this is a Student class
class Student extends User {
  $type= 'Student';
  $gradeLevel;
  $numberOfProjects=0;
  $myProjects  = array();


  function __construct($name, $lastName, $email, $gradeLevel){
    parent::__construct($name, $lastName, $email)
    $this->gradeLevel=$gradeLevel;
  }
public function getName(){
  return $this->name;
}
public function getLastName(){
  return $this->lastName;
}

public function setGradeLevel($grade){
  $this->gradeLevel=$grade;

public function addProject(Project $p){
$myProjects[$numberOfProjects]=$p;
$numberOfProjects++;


}

}
}
