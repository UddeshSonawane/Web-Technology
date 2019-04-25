<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$con=  mysqli_connect('localhost','root','','alumini_db') or die(mysqli_connect_error());
if($con)
{
    echo "Connection Established";
}
else
{
    echo "Connection error";
}
?>

