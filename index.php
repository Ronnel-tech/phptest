<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action= "index.php" method="post">
    <input type="checkbox" name = "pizza" value = "Pizza">Pizza<br>
    <input type="checkbox" name = "burger" value = "Burger">Burger<br>
    <input type="checkbox" name = "fries" value = "Fries">Fries<br>
    <input type="checkbox" name = "soda" value = "Soda">Soda<br>
    <input type="submit" name="submit" value="Submit">
    
</form>
</body>
</html>

    <?php 
    if(isset($_POST["submit"]))
        {
            if(isset($_POST["pizza"]))
                {
                    echo "You like pizza!<br>";
                }
            elseif(isset($_POST["burger"]))
                {
                    echo "You like burger!<br>";
                }
            elseif(isset($_POST["fries"]))
                {
                    echo "You like fries!<br>";
                }
            elseif(isset($_POST["soda"]))
                {
                    echo "You like soda!<br>";
                } 
        }
    ?>