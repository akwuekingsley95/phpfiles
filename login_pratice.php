<?php
$username = readline("Username");
$password = readline("Password");
$email = readline("email");
if ($username === "" || $password === "" || $email === "") {
    echo"Please fill out this field";
} elseif ($username=="Kingsley" && $password == "123456" && $email === "akwuekingsley2018@gmail.com") {
    echo "logged in successful";
}else {
    echo "incorrect details";
}


?>