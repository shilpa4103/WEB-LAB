<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num=$_POST["num"];
    if($num==1||$num==0){
        echo "NUmber is neither prime nor not prime";
        return;

    }
    $flag=0;
    for($i=2;$i<=sqrt($num);$i++){
        if($num%$i==0){
            $flag=1;
            break;
        }
    }
    if($flag==1){
        echo "Number is not a prime number";
    }
    else
    echo "The number is prime";

}
?>