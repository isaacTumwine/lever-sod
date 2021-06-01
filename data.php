<?php
$mysqli =new mysli("localhost","root", "",CRUD)
or die("mysql_error($mysql));
if(isset($_POST['save'])){
    $name =$_post['name'];
      $location =$_post['location'];

      $mysqli->query("INSERT INTO data (name,location)VALUES("$name','$location)")or
      die(mysqli->error);

}