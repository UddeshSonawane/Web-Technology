<!Doctype html>
<html>
    <head><title>Case Conversion</title></head>
    <body>
        <?php
            $st=$_POST['st'];
            echo "$st";
            echo strtoupper($st);   
            
        /* 
        strtoupper()  -- all string in uppercase
        strtolower() -- string in lowercased
        ucfirst()  --  only first letter of string in caps reset in smallage
        lcfirst() -- returns first letter in lowercase and rest remain as it is
        */
        ?>
        
        
        <center>
            <form name="myform" method="post">
                <h1>Case conversion of string</h1>
                <label>Enter String</label>
                <input type="text" name="st"><br>
                <input type="submit" name="submit">
            </form>        
        </center>    
    </body>
</html>

