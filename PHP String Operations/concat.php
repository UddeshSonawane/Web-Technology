<!Doctype html>
<html>
    <head><title>String Compare</title></head>
    <body>
        <?php
            $st1=$_POST['st1'];
            $st2=$_POST['st2'];
            
            echo "$st1"."$st2\n";  
        ?>
        <center>
            <form name="myform" method="post">
                <h1>Comparison of strings</h1>
                <label>Enter String1</label>
                <input type="text" name="st1"><br>
                <label>Enter String2</label>
                <input type="text" name="st2"><br>
                <input type="submit" name="submit">
            </form>        
        </center>    
    </body>
</html>


