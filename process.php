<?php

$conn= mysqli_connect('localhost','root','root','ajaxtest');
//Connect to a DB
echo 'Processing...';

//check for POST variable

if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    echo 'Post: your name is ' . $_POST['name'];

    $query = "INSERT INTO users(name) VALUES ('$name') ";
    if (mysqli_query($conn,$query)) {
        # code...
        echo ' User Added..';
    }
    else {
        echo'ERRor: '.mysqli_error($conn);
    }
}


//check for GET variable

if(isset($_GET['name'])){
    echo 'GET: your name is ' . $_GET['name'];
}