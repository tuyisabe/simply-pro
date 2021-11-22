<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        First number <input type="text" name="first">
        Second Number <input type="text" name="second">
        <input type="submit" value="Result" name="submit">

        
    </form>
   
    <?php
        @$first = $_POST['first'];
        @$second = $_POST['second'];
        $result;

        if(isset($_POST['submit'])){
            $result = $first + $second;
            echo"Result:". $first ."+". $second ."=". $result;
        }

        

    ?>
</body>
</html>