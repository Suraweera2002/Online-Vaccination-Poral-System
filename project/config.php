<?php

$con=new mysqli("localhost","root","12345678","iwt");

if($con->connect_error)
{
   die("connection fail".$con->connect_error);
}

?>