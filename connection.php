<?php

//port number 3308 is mine one. your might be different.
  $conn=mysqli_connect("localhost:3308",'root',"","paymentgateway");
 if(!$conn)
    echo "Error";
?>