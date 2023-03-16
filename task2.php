<?php 

echo "Welcome to Voter's Validation Page <br>";
echo " <br>";

$age = 18;
$check_pvc = true;
$ward = 20;

if ($age >= 18 && $check_pvc == true && $ward == 20) {
    echo "<h1> Congratulation, You are Eligible to Vote </h1>";
}
else {
    echo "OOP failed<br>";
    if ($check_pvc != true) {
        echo "Sorry, You dont have a PVC<br>";
    }
    if ($age <=18) {
        echo "Sorry, You under 18years <br>";}
    if ($ward != 20) {
        echo "You dont belong to ward 20";
    }
}
// }
// if ($check_pvc != true){
//     echo "Sorry, You dont have A PVC <br>";
// } 

// if ($age <= 18 && $check_pvc != true  && $ward != 20) {
//     echo "Failed, You dont have not have a PVC and doesnot belong to Ward 20";
// }


 
?>