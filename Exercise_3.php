<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="bootstrap-custom-styles.css" rel="stylesheet">
    <title>Exercise 2</title>
     <style>
/*b0b8b4ff   184a45ff*/ 
input{
  width: 18vh;
  height: 5vh;
  text-align: "center";
}

input:hover{
  border-bottom: solid .3vh green;
}
p
{
  color: #880b0b;
  font-size: 20px; 
}  
h1
{
    font-size: 45px;
    text-align: center;
}


     </style> 
    </head>
  <body>

<div class="container">

    <main>
        <div class="row">
            <div class="col-md-8">
            <header><h1>Exercise 3</h1></header>
                <article>
                    <p>
1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
         
                   </p>
        <?php 
$m = date("F");
if ($m == "Aug"){
  echo "It's August, so it's still holiday. <br>";
}     
 else{
   echo "Not August, This is $m so i don't have any holidays. <br>";
 }     
        ?>
                   
                    <p>
<br>2. Assign color red to a variable name $color and check to print one the following responses using if else statement
                   </p>
        <?php
$color = "red";
if ($color == red){
  echo "the color is $color";
}
else {
echo "the color is not $color";
}
        ?> 
                    <p>
<br>3. Write a program to grade students based on their total score for a subject. The grading scheme is:<br>
Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail < 50   <br>                 </p>
<form method="post" action="Exercise_3.php">
what is the grade : <input type ="text" name="grade"><br><br>
<input type="submit" name="submit" value="Go" />
<input type="submit" name="submit" value="reset" action="Exercise_3.php" />

</form> 
        
        <?php
$grade =  $_POST['grade'];
   if ($grade>=80){
     echo "Excellent";
   }
   else if ($grade<=80 && $grade>=70) {
      echo "Great";
   }
   else if ($grade<=70 && $grade>=60) {
    echo "Good";
   }
   else if ($grade<=60 && $grade>=50) {
    echo "Pass";
   } 
   else if ($grade<=50 && $grade>=0) {
    echo "Fail";
   }
   else if ($grade=="") {
    echo "";
   }
        ?> 

                    <p>
<br>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)</p><br>
<form method="post" action="Exercise_3.php">
 what is your name : <input type ="text" name="name"><br>
 what is your age :  <input type ="text" name="age"><br><br>
 <input type="submit" name="submit" value="Go" />
 <input type="submit" name="submit" value="reset" action="Exercise_3.php" />

</form> 
<?php
$age = $_POST['age'];
if ($age>=18){
  echo "You are eligible to vote";
}
else {
  echo "you are not eligible to vote";
}

?>
                    <p>
<br>5. Use a looping statement to construct the following pattern:<br><br>    
                    </p>
                    <?php  
  for ($i=9; $i > 0; $i--)  {
  for($j=1;$j<$i; $j++){
            echo $j ."";
      }
      echo "<br/>";
  }
?>             
                   
                    <p>
<br>6. Use While loop to print the following pattern:<br><br> 

                    </p>
        <?php
  $i=0; 
  $j=8;
  $k=0;
  while($i < 8 ) {
      $j=5; $k=0;
      while($j > $i){
          echo "";
          $j--;
      }
      while($k <= $i){
          echo '*';
          ++$k;
      }
      echo "<br/>";
      $i++;
  }
          ?>
                    
                    
                    <p>
<br>7. Create a GitHub repo and enable GitHub pages for the repo. Upload an HTML file of
yours to the repo. You should include in your PHP code the link to the repo and your web page. 
                </p>
        <?php

        ?>        
            <p>
<br>8. Give  1 or 0 point for the clarity of the task (User interface).
                </p>
        <?php

        ?>                    
                 </article>
            </div>
        </div>
    </main>
    
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>