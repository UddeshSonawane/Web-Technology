<!Doctype html>
<html>
    <head><title>Length Calculation</title></head>
    <body>
        <?php
            $st=$_POST['st'];
            $find=$_POST['find'];
            $replace=$_POST['replace'];
            print_r(str_replace($find,$replace,$st) ) ;
            
        ?>
        <center>
            <form name="myform" method="post">
                <h1>Replace</h1>
                <label>strings</label>
                <input type="text" name="st"><br>
                <label>Find word</label>
                <input type="text" name="find"><br>
                <label>replace word</label>
                <input type="text" name="replace"><br>
                <input type="submit" name="submit">
            </form>        
        </center>    
    </body>
</html>
