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



## Topic : PHP printf use 

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
