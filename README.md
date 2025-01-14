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


## Topic : PHP data types 
 
        $biscuit = 2 ; // int type variable
        $cost = 3.4 ; // float type variable
        $chocolate = 'dary milk' ; // string type variable
        $status = true ;  // boolean type variable true = 1 , false = ''
        $data = null;

        echo $biscuit."<br>" , $cost."<br>" , $chocolate."<br>" , $status."<br>" , $data."<br>" ;

        $status = false ; // '' value
        $data = "info";

        echo "hello" , $status.("<br>") , $data.("<br>");


## Topic : var_dump use for variable type checking 

        $teacher ='Nazmul';
        $roll = 5;
        $amount= 34.5;
        $condition =false;
        $start= '';


       var_dump($teacher,$roll,$amount,$condition,$start).("<br>");



# Topic : PHP printf use part 1

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

# Topic : Arithmetic operator [+,-,*,/,%,**]

      $digit1= 9;
      $digit2=2;

      // + 
      printf('added : %d',$digit1+$digit2);
      echo("<br>");

       // -
       printf('sub : %d',$digit1-$digit2);
       echo("<br>");

       // *
       printf('mul : %d',$digit1*$digit2);
       echo("<br>");

       // /
       printf('div : %d',$digit1/$digit2);
       echo("<br>");


        // %
        printf('baki : %d',$digit1%$digit2);
        echo("<br>");

       // **
       printf('power : %d',$digit1**$digit2);
       echo("<br>");


 # Topic : Assignment operator [+=,-=,*=,/=,%=]

      $value =15;

      printf($value +=5); // value =20
      echo("<br>");    

      printf($value -=5);  // value =15
      echo("<br>");  

      printf($value *=5);  // value =75
      echo("<br>"); 
        
      printf($value /=5);  // value =15
      echo("<br>");  

      printf($value %=2); // value =1
      echo("<br>");   


# Topic : Increment and Decrement operator (postfix and prefix)

         // postfix

      $j=9;

      printf($j++); // j=9 postfix use  
      echo("<br>");
      printf($j);   // j=10
      echo("<br>");

      $k=13;
  
      printf($k--); // k=13 postfix use  
      echo("<br>");
      printf($k);   // k=12
      echo("<br>");

      // prefix

      $l=9;

      printf(--$l); // l=8 prefix use  
      echo("<br>");
      printf($l);   // l=8
      echo("<br>");

      $m=13;
  
      printf(++$m); // m=14 prefix use  
      echo("<br>");
      printf($m);   // k=14
      echo("<br>");

 # Topic : PHP concatination 

      // Nadim Adnan
      $f1='nadim';
      $f2='adnan';

      printf('%s %s',$f1,$f2);
      echo('<br>');

      echo 'Md. '. $f1.' '.$f2;
      echo('<br>');

      $f1.=' '.$f2;
      echo($f1);
      echo('<br>');


 # Topic : PHP comparison opearator 

        # [>,<,>=,<=,==,!=,<>,===,!==,]

        $op1= 25 ;
        $op2 =30;
        
        # > greater than operator

        var_dump ($op1>$op2);  // var_dump use for type show 
        echo ('<br>');

        # > greater than equal operator

        var_dump ($op1>=$op2);  // var_dump use for type show 
        echo ('<br>');

        # < less  than operator

        var_dump ($op1<$op2);  // var_dump use for type show 
        echo ('<br>');


        # <= less  than equal operator

        var_dump ($op1<=$op2);  // var_dump use for type show 
        echo ('<br>');


       # == double equal operator

       var_dump ($op1==$op2);  // var_dump use for type show 
       echo ('<br>');

       # != , <> double equal operator

       var_dump ($op1!=$op2);  // var_dump use for type show 
       echo ('<br>');

       var_dump ($op1<>$op2);  // var_dump use for type show 
       echo ('<br>');

       # === triple equal operator

       var_dump ($op1===$op2);  // var_dump use for type show 
       echo ('<br>');

       # !== triple equal operator

       var_dump ($op1!==$op2);  // var_dump use for type show 
       echo ('<br>');


 # Topic : PHP spaceship operator [<=>]

      # simulataneusly < =1,> =-1,= 0 return  both checking

      $p1=16;
      $p2=19;

      var_dump($p1<=>$p2);
      echo('<br>');

 # Topic : PHP If Else
     
     $userName ='Nadim';

     if($userName=='Nadim'){
        echo('Login Successfully');
     }
     else {
        echo ('Wrong Credintial');
     }    


# Topic : PHP Else If 

      $learn = 'javaScript';

      if($learn=='c++'){
          echo('you are become a c++ developer');
      }

      else if($learn=='java'){
         echo('you are become a java developer');
     }

     else if($learn=='laravel'){
      echo('you are become a laravel developer');
     }

     else if($learn=='javaScript'){
      echo('you are become a javaScript developer');
     }

     else {
        echo('Still now learning');
     }


# Topic : PHP Ternary Operator

     # [condition ? true statement : false statement];

     $age = 18;

     echo ($age > 17 ? 'adult':'child');

 # Topic : PHP And Operator [&&]

    $a=22;
    $b=19;
    $c=13;

    # find highest value 
    
    if($a>$b && $a>$c){
       echo ('a is big number and value is : '.$a);
    }

    else if($b>$a && $b>$c){
       echo ('b is big number and value is : '.$b);
    }

    else {
       echo ('c is big number and value is : '.$c);
    }



# Topic : PHP And Operator [||]

    $a=22;
    $b=19;
    $c=13;

    #find lowest value 
   
    if($a<$b || $a<$c){
       echo ('a is small number and value is : '.$a);
    }

    else if($b<$a || $b<$c){
      echo ('b is small number and value is : '.$b);
    }

    else {
      echo ('c is small number and value is : '.$c);
    }


   # Topic : PHP Not Operator [!]

     $userName ='n4';

     $length = strlen($userName);

     if( !($length>=3) && ($length<=7)) {

         echo('invalid users');
     }

     else {
           echo('valid users');
     }


  # PHP Nested If

    $userName = 'nadim';
    $password ='@nadim123';

    if($userName=='nadim'){
       if($password=='@nadim123'){
          echo('Users Login Successfully');
       }
       else {
          echo('Invalid Users');
       }
    }

   else {
       echo('Invalid Users');
   }


   # Topic : PHP while loop 

      $year =2000;

      while ($year<=2050){
          echo('Year is : '.$year).('<br>');
          $year++;
      }


  <body>

# create year dropdown menue

   <body>
           
     <form action="#">

           Year
              <select name="" id="">
                 <?php

                 $year=2000;

                 while($year<2024){ 
               ?>
           
           <option value="<?php $year ?>" id=""><?php echo $year ?></option>
          
          <?php
           $year++;
           }
           ?>
           </select>

     </form>
     <br>
 <body>

# simple way :  create number dropdown menue  

     <form action="">
         number 
           <select name="" id="">
              <?php
                    $number =1;
                    while ($number<=10){
                       echo "<option value='$number'>$number</option>";
                       $number++;
                    }
              ?>  
           </select>

     </form>


# Topic : do while 
        
        $i =1 ;

        do{
            echo $i;
            $i++;
        }

        while($i<5);

# Topic :  For Loop 
        
       $a= 1;

       for ($a=1;$a<=12;$a++){
          echo('Number is : '.$a).('<br>');
       }

       for($a=1;$a<11;$a++){
         echo("<li> Number is : $a </li>").('<br>');
      }

# PHP Break Statement

      for($b=1;$b<8;$b++){
          echo('value is :'.$b).('<br>');

          if($b==5){
             break;
          }
      }

 
 # PHP Continue Statement

      for($c=1;$c<8;$c++){
          echo('<br>');
          echo('Hello  world ').$c.('<br>');

          if($c==3){
             continue;
          }
          echo('Welcome ').$c.('<br>');
          
      }


 # Topic : PHP Nested For Loop

           for ($outerLoop=1;$outerLoop<5;$outerLoop++){
               echo('<br>');
               echo('Outer Loop : '.$outerLoop).('<br>');
             
              for($innerLoop=1;$innerLoop<3;$innerLoop++){
                 
                echo (' ---> Inner Loop : '.$innerLoop).('<br>');
                 
              }
          }


# Topic : PHP Goto  Statement

          for ($outerLoop=1;$outerLoop<5;$outerLoop++){
             echo('<br>');
             echo('Outer Loop : '.$outerLoop).('<br>');
       
             for($innerLoop=1;$innerLoop<6;$innerLoop++){
           
             echo (' ---> Inner Loop : '.$innerLoop).('<br>');
             
              if($outerLoop==3 && $innerLoop==4){
                 goto show;
              }
            
             }
          }

          show: 
          echo 'program is end'


# Topic : PHP  break2 Statement

         for ($outerLoop=1;$outerLoop<5;$outerLoop++){
            echo('<br>');
            echo('Outer Loop : '.$outerLoop).('<br>');
      
            for($innerLoop=1;$innerLoop<6;$innerLoop++){
          
            echo (' ---> Inner Loop : '.$innerLoop).('<br>');
            
             if($outerLoop==3 && $innerLoop==1){
                break 2;
             }
           
            }
         }

       
         echo 'program is end'
 
