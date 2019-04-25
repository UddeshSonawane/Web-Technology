<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "connect.php";
if(isset($_POST['submit']))
{
    extract($_POST);
    $query=mysqli_query($con,"delete from alumini_data where name='$name'");
    if($query)
    {
        echo"<script>";
        echo"alert('Data deleted')";
        echo"</script>";
 }
 else {
        echo'try again';
    }
}
?>

<script>
    function validate()
    {
        var nm=document.forms["myform"]["name"].value;
        if(nm=="")
        {
            alert("Enter name");
            return false;
        }
        return true;
    }
    </script>

<center>
    <form onsubmit="return validate()" name="myform" method="post">
        <table>
            <tr>
                <td>Enter name to delete</td>
                <td><input type="text" name="name" placeholder="name"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
                <td><input type="reset" name="reset" value="reset"></td>
            </tr>
        </table>
        <br><br><a href="index.php">Home</a>
    </form>
</center>
