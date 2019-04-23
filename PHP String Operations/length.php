<!Doctype html>
<html>
    <head><title>Length Calculation</title></head>
    <body>
        <?php
            $st=$_POST['st'];
            $len=strlen($st);
            echo "$st";
            echo "Length of string is $len";   
        ?>
        <center>
            <form name="myform" method="post">
                <h1>Calculation of length of string</h1>
                <label>Enter String</label>
                <input type="text" name="st"><br>
                <input type="submit" name="submit">
            </form>        
        </center>    
    </body>
</html>

