<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP variable and Syntax </title>
</head>
<body>
     <h1>Allah Help Me</h1>

     <!-- php code  -->

     <?php 


        ## Topic : PHP variable and Syntax declare

        echo 'PHP variable and Syntax ';
        echo "<br>";
        echo nl2br("PHP variable and Syntax2 \n PHP variable and Syntax3 \n  PHP variable and Syntax4");

        // echo "<br>";
        // echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");


        echo "</br>";
        echo "</br>";

        echo "I love Hazrat Muhammad Sallahu Alihi Oasallam";
        echo "</br>";

        echo "I love  all poygomber ";
        echo "</br>";


        echo nl2br("I love AL Quran \n I love Honesty \n I love Politeness");




        ## Topic : Dynamic variable create


        echo "</br>";
        echo "</br>";
        echo "</br>";

        $age =24;
        $name= "Mohammad Nadim Mir";

        // dynamic variable added into double quoute
        echo "My name is  $name , Age is  $age ";

        echo "</br>";
        echo "</br>";
        echo "</br>";

        // double quoute . use 
        echo "Name is ".$name." , Age  ".$age;


        echo "</br>";
        echo "</br>";
        echo "</br>";

        // single quoute . use 
        echo 'Name is '.$name.' , Age  '.$age;


        // double dollar work 

        echo ('</br>');
        echo ('</br>');

        $nickname = "adnan";
        $name ="nickname";
       
        echo $$name;

        // error show for no dynamic  variable are exist '$adnan'
        echo $$nickname; 



        ## Topic : comment needed or use

        echo ('</br>');

        $a= 5 ;
        $b=17;
        $b=19;

        $c=20;

        echo $a+$b; 

        echo ('</br>');
        echo $a+$b+$c;

        /*
           Multi line
           comment
        */

        echo ('</br>');
        echo /*$a+*/$b+$c;  // multi line comment



        ## Topic : PHP  Constant

     ?>

</body>
</html>