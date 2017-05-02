<?php

$link  = mysqli_connect("localhost","root","kams","books");

if(mysqli_connect_error()){
    
    echo " Error!<br>";
}else{
    
    
    echo " Connected successfully!";
}
$book_title = $_POST['title'];
$author_name = $_POST['author'];
$edition = $_POST['edition'];
$year = $_POST['year'];
$price= $_POST['price'];

$query= "INSERT into entires(book_title, author_name, edition, year, price)
         VALUES('$book_title', '$author_name', '$edition','$year', '$price');";


if($res = mysqli_query($link, $query)){
    
    echo "<br> Book added successfully<br>";
}else{
    
    echo " <br> Invalid query<br>";
}


?>