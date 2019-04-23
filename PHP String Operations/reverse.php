<!Doctype html>
<html>
    <head><title>String Reverse</title></head>
    <body>
        <?php
            $st=$_POST['st'];
            
            $rev=strrev($st);
            echo "$st";
            echo "$rev"; 
        ?>
        <center>
            <form name="myform" method="post">
                <h1>String Reverse</h1>
                <label>Enter String</label>
                <input type="text" name="st"><br>
                <input type="submit" name="submit">
            </form>        
        </center>    
    </body>
</html>

