<?php
    function add2($x,$y){
        $sum = $x + $y;
        echo "Sum of two number is : $sum<br />";
    }

    add2(5,10);
    function sub($x,$y){
        $sum = $x - $y;
        echo "Subtraction of two number is : $sum<br />";
    }
    sub2(30,20);
    if(isset($_POST['add'])){
        add2 ($_POST['first'],$_POST['second']);

    }
    function sub2($x,$y){
        $sum = $x - $y;
        echo "Subtraction of two number is : $sum<br />";
    }
    if(isset($_POST['sub'])){
        sub2 ($_POST['first'],$_POST['second']);
    }
?>

<from method="post">
    Enter First number:<input tpye="text" name="first"/><br />
    Enter Second number:<input tpye="text" name="Second"/><br />
    <input type="submit" name="add" Value= "Addition"/>
    <input type="submit" name="sub" Value= "Sub"/>
</from>