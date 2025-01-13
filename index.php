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

        echo "<br>";
        echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");


        echo "<br>";
        echo "<br>";

        echo "I love Hazrat Muhammad Sallahu Alihi Oasallam";
        echo "<br>";

        echo "I love  all poygomber ";
        echo "<br>";


        echo nl2br("I love AL Quran \n I love Honesty \n I love Politeness");




        ## Topic : Dynamic variable create


        echo "<br>";
        echo "<br>";
        echo "<br>";

        $age =24;
        $name= "Mohammad Nadim Mir";

        // dynamic variable added into double quoute
        echo "My name is  $name , Age is  $age ";

        echo "<br>";
        echo "<br>";
        echo "<br>";

        // double quoute . use 
        echo "Name is ".$name." , Age  ".$age;


        echo "<br>";
        echo "<br>";
        echo "<br>";

        // single quoute . use 
        echo 'Name is '.$name.' , Age  '.$age;


        // double dollar work 

        echo ('<br>');
        echo ('<br>');

        $nickname = "adnan";
        $name ="nickname";
       
        echo $$name;

        // error show for no dynamic  variable are exist '$adnan'
        echo $$nickname; 



        ## Topic : comment needed or use

        echo ('<br>');

        $a= 5 ;
        $b=17;
        $b=19;

        $c=20;

        echo $a+$b; 

        echo ('<br>');
        echo $a+$b+$c;

        /*
           Multi line
           comment
        */

        echo ('<br>');
        echo /*$a+*/$b+$c.("<br>").("<br>").("<br>");  // multi line comment



        ## Topic : PHP  Constant variable use 

        define("Car","BMW");
        echo Car.("<br>");  // constant name call


        echo constant("Car").("<br>");

        $model="constant";
        echo $model("Car").("<br>").("<br>");
        

        ## Topic : Echo and Print use

        $j = "I love Bangladesh";
        print $j.("<br>").("<br>");

        $k = print $j;

        echo $k.("<br>").("<br>");
        echo $k.("<br>").("<br>");


        # Topic : PHP data types 
 
        $biscuit = 2 ; // int type variable
        $cost = 3.4 ; // float type variable
        $chocolate = 'dary milk' ; // string type variable
        $status = true ;  // boolean type variable true = 1 , false = ''
        $data = null;

        echo $biscuit."<br>" , $cost."<br>" , $chocolate."<br>" , $status."<br>" , $data."<br>" ;

        $status = false ; // '' value
        $data = "info";

        echo "hello" , $status.("<br>") , $data.("<br>");


        # Topic : Var_dump use for variable type checking 

        $teacher ='Nazmul';
        $roll = 5;
        $amount= 34.5;
        $condition =false;
        $start= '';


       var_dump($teacher,$roll,$amount,$condition,$start).("<br>");



       ## Topic : PHP printf use 1

       $first_name='nadim';
       $last_name='mir';

       // ucwords() function use for word first letter convert uppercase 

       echo("<br>");
       echo ucwords("$first_name"),ucwords(" $last_name").("<br>");

      //   printf use 
        
        printf('My first name is : %s and last name is : %s , Address : %s ',ucwords("$first_name"),ucwords("$last_name"),"Pirojpur");

     
        //block code 
        
        $html_block = "<div>
                               <h1>First Name : ".ucwords($first_name)."</h1>
                               <h2>Last Name : ".ucwords($last_name)."</h2>

                      </div>";


        echo $html_block.("<br>");       
        
        

        $html_block2 = "<div>
                               <h1>A: %s </h1>
                               <h2>B: %s</h2>
                      </div>";

       printf($html_block2,(ucwords($first_name)),(ucwords($last_name))).("<br>");



       ## PHP printf use part 2 :

         // integer use %d

       $amount =300;
       printf('%d',$amount); 

       echo("<br>");


         // float use %f

       $parcentage =4.5;

       printf('%f',$parcentage);  
       echo("<br>");

       // float use %.3f for 3 decimal digit show after point
       printf('%.3f',$parcentage);  
       echo("<br>");

      //  string use %s 

      $str = "Abdur Rahim";
      printf('%s',$str);
      echo("<br>");

         // extra space added 
      printf('[%15s]',$str); // right align
      echo("<br>");

      printf('[%-15s]',$str); // left align
      echo("<br>");

      printf('[%015s]',$str); // space fill '0' value
      echo("<br>");

      printf('[%0-15s]',$str); // space fill '0' value
      echo("<br>");

      printf("[%'a15s]",$str); // space fill 'a' value
      echo("<br>");

      printf("[%'k-15s]",$str); // space fill 'mk' value
      echo("<br>");

      
      printf("[%'!-15.8s]",$str); // 11 character other 4 value is @ , !
      echo("<br>");

      


      // character use %c 

      $chr = 65;
      printf('%c',$chr); // print ascci value ;
      echo("<br>");

      // binary use %b
      $bin = 12;
      printf('%b ',$bin);
      echo("<br>");

      // octal use %o
      $octa= 10;
      printf('%o',$octa);
      echo("<br>");

       // hexa use %h
       $hexa= 11;
       printf('%x',$hexa);
       echo("<br>");

      //  swapping use %2$d , %1$d . it also use %c,%f,%b etc

      $test=12;
      $test2 =14;

      printf('test is : %d and test2 is : %d',$test,$test2); 
      echo("<br>");

         //swapping start
      printf('test is : %2$d and test2 is : %d',$test,$test2); 
      echo("<br>");

      printf('test is : %2$d and test2 is : %1$d',$test,$test2);
      echo("<br>");

      // same value use multiple place use argument %1$d 

      $digit =45;

      printf('first is : %1$d and other one is : %1$d and other  is : %1$d',$digit);
      echo("<br>");


    ?>
</body>
</html>