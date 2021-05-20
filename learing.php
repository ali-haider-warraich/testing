<!DOCTYPE html>
<html>
<body>

<?php

$char_name= "ali";
$char_age= 24;

echo "this is $char_name <br>";
echo "i am $char_age years old <br>";

$char_name="mike";
echo "i really liked my name $char_name <br>";
echo "but did not like $char_age <hr>";

// data types

$phrase="to be or to not be";
$age=30;
$gpa=3.24;
$isMale= false;
null;
echo "<br>";
echo "3.5";
echo "<hr>";

// strings

$phrase= "my house my rule <br>";
echo $phrase;
echo $phrase[4];
echo "<br>";
echo strtoupper ($phrase);
echo "<br>";
echo strlen ($phrase);
echo "<br>";
$phrase[1]="e";

echo $phrase;

echo str_replace("house","batman",$phrase);
echo "<br>";

echo substr($phrase, 12,3);

echo "<hr>";

echo 50;
echo "<br>";
echo -40;
echo "<br>";
echo 33.55;
echo "<br>";
echo 5+9;
echo "<br>";
echo 5-9;
echo "<br>";
echo 5*2;
echo "<br>";
echo 40/5;
echo "<br>";
echo 10%3;
echo "<br>";
echo 5+2*2;
echo "<br>";
echo (5+4)*2;
echo "<br>";
$num=10;
$num++;
echo $num;
echo "<br>";
echo $num+9;
echo "<br>";
$num=10;
echo $num+10;
echo "<br>";

echo abs(-100);
echo "<br>";
echo sqrt(4);
echo "<br>";
echo pow(2,4);
echo "<br>";
echo floor(3.9);

echo "<hr>";




?>
<!--------------------------------------user input--------------------------->
<form action="learing.php" method="get">
Name: <input type="text" name="username">
<br>
Age: <input type="number" name="age">
<input type= "submit">
</form>
<br>
my name is <?php echo $_GET["username"]?>
<br>
my age is <?php echo $_GET["age"]?>
<hr>

<!----------------------------------calculator---------------------------------->
<form action="learing.php" method="get">
Enter num 1: <input type="number" name="num1">
<br>
Enter num 2: <input type="number" name="num2">
<input type="submit">
</form>
<br>

Answer:<?php echo $_GET["num1"] + $_GET["num2"] ?>
<hr>
<!----------------------------------madlibs games---------------------------------->

<form action="learing.php" method="get">
Color: <input type= "text" name="color"> <br>
Noun: <input type= "text" name="noun"> <br>
Person: <input type= "text" name="person"> <br>
<input type="submit">
</form>
<br>

<?php
$color= $_GET["color"];
$noun= $_GET["noun"];
$person= $_GET["person"];
echo " roses are $color<br>";
echo "$noun are blue <br>";
echo "i love $person <br>";
?>
<hr>

<!----------------------------------URL parameter---------------------------------->
<!---- <form action="learing.php" method="post">
Password: <input type= "password" name="password"> <br>
<input type="submit">
</form>
<br>
//<?php
//echo $_POST["password"];
//?> 
<hr>--------->

<!---------------------------------Array---------------------------------->
<?php
  $friends=array("ali","aslam","alvi"."yoo");
  echo $friends[1];
  echo "<br>";
  echo $friends[1]="zoo";
  echo "<br>";

  echo $friends[1];
  echo "<br>";
  echo $friends[4]="aja";
  echo "<br>";
  echo $friends[4];
  echo "<br>";

  echo count($friends);


?>
<hr>
<!---------------------------------text boxes---------------------------------->

<form action="learing.php" method="post">
Apple: <input type="checkbox" name="fruit[]" value= "apples"><br>
Oranges: <input type="checkbox" name="fruit[]" value= "oranges"><br>
Bnanas: <input type="checkbox" name="fruit[]" value= "bnanas"><br>

<input type="submit">
</form>

<?php
$fruits=$_POST["fruit"];
echo $fruits[1];
?>
<hr>

<!---------------------------------accociative array-------------------------------->

<?php
  $grades= array("ali"=>"A+", "zeeshan"=>"B-", "aslam"=>"C");
  echo $grades["ali"];
  echo "<br>";
  echo count($grades);

?>

<form action="learing.php" method="post">
<input type="text" name="student"><br>

<input type="submit">
</form>
<?php
  $grades= array("ali"=>"A+", "zeeshan"=>"B-", "aslam"=>"C");
  echo $grades[$_POST["student"]];
?>
<hr>

<!---------------------------------functions//-------------------------------->

<?php
   function sayHi(){
       echo "this is my first function";
   }
       sayHi();

?>

<?php
   function sayHii($namef){
       echo "this is $namef <br>";
   }
       sayHii("ali");
       sayHii("murtza");
       sayHii("waheed");

?>

<!---------------------------------Return function-------------------------------->

<?php

       function cube($num){

        return $num*$num*$num;
        

       }

       $cubeResult= cube(4);
       echo $cubeResult;
       

?>

<!---------------------------------if else statements-------------------------------->

<?php

      $isMale = true;
      $isTall = false;
      if($isMale && $isTall){
        echo "<br> i am a man";
      }
      else if ($isMale && $isTall)
      {
        echo "<br> i am superman";
      }

      else
      {
        echo "<br> yoooo hahaha";
      }

?>


<!--------------------------------if statement (con't)-------------------------------->

<?php

 function getMax($num1, $num2, $num3){
   if($num1 >= $num2 && $num1 >= $num3){
     return $num1;
   }
   else if($num2 >= $num1 && $num2 >= $num3){
     return $num2;
   }

   else{
     return $num3;
   }

 }
  echo "<br>";
 echo getMax(900,1102,108);


?>

<!--------------------------------better calculator-------------------------------->

<form action="learing.php" method= "post">
first num: <input type="number" step=0.1 name="num1"><br>
operator:<input type="text" name="op"><br>
second num: <input type="number" step=0.1 name="num2"><br>
<input type="submit">;
</form>

<?php
    $num1= $_POST["num1"];
    $num2= $_POST["num2"];
    $op= $_POST["op"];
    

    if($op=="+"){
    echo $num1 + $num2;
    }
    else if($op=="-"){
      echo $num1 - $num2;
      }
      
    else if($op=="*"){
      echo $num1 * $num2;
      }
      
    else if($op=="/"){
      echo $num1 / $num2;
      }

      else {
        echo "invalid input";
      }

?>

<!--------------------------------switch statements-------------------------------->
<form action="learing.php" method="post">
what is your grade:<input type= "text" name="grade"><br>
<input type="submit"><br>

</form>

<?php
$grade= $_POST["grade"];
switch($grade){
  case "a+" :
  echo "You did great ";
break;
case "a":
  echo "You did good ";
break;
case "b+":
  echo "You did best ";
break;
case "b":
  echo "You did just OK ";
break;
case "c" :
  echo "You did great salaya ";
break;
default:
echo "in valid input <br>";
break;
}

?>

<!--------------------------------While loop-------------------------------->

<?php
   $index=1;
   while($index<=5)
   {
     echo "$index <br>";
     $index++;
   }


?>

<?php
   $index=9;
   do
   {
     echo "$index <br>";
     $index++;
   }while($index<=5);


?>

<?php
   
   for($i=1; $i <=6; $i++){
     echo "<br>$i <br>";
   }


?>
<?php
   $luckyNum= array(1,8,22,44,7);
   for($i=0; $i <=count($luckyNum); $i++){
     echo "$luckyNum[$i] <br>";
   }


?>
 
<!--------------------------------comments -------------------------------->
<?php

       //like this we write comments
     echo "this is all about commensts";
?>

<!--------------------------------include html is php -------------------------------->
<?php include"header.html"?>
<hr>
<p>this is heeader and footer of the site</p>
<hr>
<?php include"footer.html"?>

<!--------------------------------include php is php -------------------------------->

//same as including html

<!--------------------------------calss and objects -------------------------------->
<?php
      class book{
        var $title;
        var $author;
        var $page;
      }

      $book1= new book;
      $book1->title="harry potter";
      $book1->author="harry";
      $book1->page=55;

      $book2= new book;
      $book2->title="akbari ki hmakatain";
      $book2->author="deputy nazeer ahmed";
      $book2->page=505;

      echo $book1->title;
      echo "<br>";
      echo $book2->title;
      echo "<br>";
      echo $book2->author;
      

?>

<!--------------------------------constuctors -------------------------------->

<?php
     /* class book{
        var $title;
        var $author;
        var $page;

        function __construct($aTitle,$aAuthor,$aPage ){
          $this->title=$aTitle;
          $this->author=$aAuthor;
          $this->page=$aPage;
        }
      }

      $book1= new book("harry potter","ali haider",44);

      $book2= new book("akbari ki hmakatain","deputy nazeer ahmed",138);
      
      echo $book1->title;
      echo "<br>";
      echo $book2->title;
      echo "<br>";
      echo $book2->author;
      

*/?>

<!--------------------------------object functions -------------------------------->

<?php
      class student{
        var $name;
        var $major;
        var $cgpa;

        function __construct($aName,$aMajor,$aCgpa ){
          $this->name=$aName;
          $this->major=$aMajor;
          $this->cgpa=$aCgpa;
        }

        function win(){
          if($this->cgpa >= 4)
          {
            return "you won";
          }
          return "you lose";
        }
      }

      $student1= new student("ali","science",5);

      $student2= new student("nayab","arts",3.8);
      

      echo $student1->name;
      echo "<br>";
      echo $student2->name;
      echo "<br>";

      echo $student2->win();
      
      

?>

<!--------------------------------getter function and setter functions -------------------------------->
<?php
      class movie{
        private $title;
        private $rating;
        

        function __construct($atitle,$arating ){
          $this->title=$atitle;
          $this->setRating($arating);
        }

        function getRating()
        {
          return $this->rating;
        }

        function setRating($rating){
          if($rating=="PG-13" || $rating=="R" || $rating=="L"){
            $this->rating=$rating;
          }
          else{
            $this->rating="NR";
          }
        }
      }

      $movie1= new movie("harry potter","R");


      $movie1-> setRating("PG-131");

      echo $movie1->getRating();
      echo "<br>";
    
      echo "<br>";
?>


<!--------------------------------inheritence plus over-riding function -------------------------------->
<?php
      class chef{
        function makeChicken(){

            echo "chef makes chicken";
        }
        
        function makeBiryani(){

          echo "chef makes chicken biryani";
      }
      function makespecialdish(){ //over-riding fucntion

        echo "chef makes chicken manchurian";
    }

      }

      class pakChef extends chef{
        function makeKarahi(){

          echo "chef makes chicken Karahi";
      }
      function makespecialdish(){ //over-riding fucntion

        echo "chef makes chicken kebab";
    }

      }

      $chef1= new chef;
      $pakChef1= new pakChef;
      $chef1-> makespecialdish();
      echo"<br>";
      $chef1-> makeBiryani();
      echo"<br>";
      $pakChef1-> makespecialdish();
      echo"<br>";
      $pakChef1-> makeKarahi();

    
      
      

?>

</body>
</html>
