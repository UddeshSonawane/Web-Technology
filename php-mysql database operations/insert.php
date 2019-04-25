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
    $query=mysqli_query($con,"insert into alumini_data(id,name,contact)values('$id','$name','$contact')") or die(mysqli_error($con));
    if($query)
    {
                echo "<script>";
                echo "alert ('Welcome $name')";
                echo "</script>";
    }
            else
            {
                echo "<script>";
                echo "alert ('error')";
                echo "</script>";
            }
    
}
?>
<script>
    function validate()
    {
        var id=document.forms["myform"]["id"].value;
        if(id=="")
        {
            alert("Enter id");
            return false;
        }
        var nm=document.forms["myform"]["name"].value;
        if(nm=="")
        {
            alert("Enter name");
            return false;
        }
        var ct=document.forms["myform"]["contact"].value;
       if(ct=="")
        {
            alert("Enter contact");
            return false;
        }
        
        return true;
    }
    </script>

<center>
    <h1>Welcome</h1>
    <h2>Insert Alumini Data Portal</h2>
    <form onsubmit="return validate()" name="myform" method="post">
        <table border="1px">
            <tr>
                <td><label>Id</label></td>
                <td><input type="text" name="id" placeholder="id"></td>
            </tr>
            <tr>
                <td><label>Name</label></td>
                <td><input type="text" name="name" placeholder="Name"></td>
            </tr>
            <tr>
                <td><label>Contact</label></td>
                <td><input type="text" name="contact" placeholder="Contact" pattern="[0-9]{10}" maxlength="10"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
                <td><input type="reset" name="reset" value="reset"></td>
            </tr>
        </table>
        <br><br>
        <a href="index.php">Home</a>
    </form>
</center>



