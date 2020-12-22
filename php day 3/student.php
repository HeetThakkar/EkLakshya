<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Student{
    private $name;
   private $studentId;
   private $dept;
   private $city;


public function setName($name){
    $this->name=$name;

}
public function setStudId($id){
    $this->studentId=$id;

}
public function setDept($dept){
    $this->dept=$dept;

}
public function setCity($city){
    $this->city=$city;

}
public function getName(){
  echo "name:   $this->name. <br>";

}
public function getStudId(){
    echo "student Id:   $this->studentId. <br>";

}
public function getDept(){
    echo "department:   $this->dept. <br>";

}
public function getCity(){
    echo "city:   $this->city . <br>";

}
public function showGrades($m1,$m2,$m3){
    $avg=($m1+$m2+$m3)/3;
    if($avg>=90){
        echo "grade: A+";
    }
    else if($avg>=80 && $avg<90){
        echo "grade: B";
    }
    else if($avg>=70 && $avg<80){
        echo "grade: c";
    }
    else{
        echo "grade: F better luck next time";
    }

}
}
$stud=new Student();
$stud->setName("heet");
$stud->setStudId(1);
$stud->setDept("comps");
$stud->setCity("mumbai");
$stud->getName();
$stud->getStudId();
$stud->getDept();
$stud->getCity();
$stud->showGrades(90,80,70);
?>
</body>
</html>