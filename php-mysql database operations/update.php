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
    $query=  mysqli_query($con,"update alumini_data set $change='$newdata' where name='$name'");
    
    if($query)
    {
        echo"<script>";
        echo"alert('Update successful')";
        echo"</script>";
        
    }
 else {
        echo'alert("Try Again")';
    }
}
?>

<script>
    function validate()
    {
        var nm=document.forms["myform"]["contact"].value;
        if(nm=="")
        {
            alert("Enter name");
            return false;
        }
        
        var newnm=document.forms["myform"]["newdata"].value;
        if(newnm=="")
        {
            alert("Enter data");
            return false;
        }
        return true;
    }
</script>

<center>
    <form onsubmit="return validate()" name="myform" method="post">
        <table>
            <tr>
                <td>Enter contact whose data to update</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>--- Enter id to be Updated ----</td>
                <td>
                    <select name="change">
                        <option>id</option>
                        <option>contact</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Enter data </td>
                <td><input type="text" name="newdata"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
        <br><br><a href="index.php">Home</a>
    </form>  
</center>
