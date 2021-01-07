<?php
    function myFunction()
    {
        echo "Hello world";
    }
    myFunction();
?>

<?php
    //$fname = "Mark";
    declare (strict_types=1);
    function myFunction(String $fname,int $age,String $year){
        echo "My family is $fname : $age : Year : $year<br />";
    }

    myFunction("Mark",25,"1975");
    myFunction("Jeff",26,"2000");
?>