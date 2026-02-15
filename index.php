<?php
session_start();
include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="bg-[#151f2e] ml-10 mr-lg mt-lg">
    <!-- <form action="index.php" method="post"> -->
        <!-- <input type="text" name="username" placeholder="Enter your username">  -->
        <!-- <br>
        <br>
        <input type="password" name= "password" placeholder="Enter your password">
        <br>
        <input type="submit" value="Submit" name="Submit">
    </form> -->


    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?> method = "post">

    <div class="bg-[#151f2e] w-1/2 mx-auto mt-100 justify-center items-center p-5 rounded-lg flex flex-col items-center gap-5 outline outline-1 outline-white">
        <input type="text" name = "username" placeholder = "Enter your username" class= " bg-gray-300 px-4 py-2 rounded-lg mt-5 pl-xl">
        <input type="password" name = "password" placeholder = "Enter your password" class= " bg-gray-300 px-4 py-2 rounded-lg mt-5 pl-xl">
        <input type="submit" value="Submit" name="Submit" class="bg-gray-300 px-4 py-2 rounded-lg mt-5">


    </div>
</form>
</body>
</html>

    <?php
    // if (isset($_POST["Submit"]))
    // {

    //     if(!empty($_POST['username']) && !empty($_POST['password']))
    //     {
    //         $_SESSION['username'] = $_POST['username'];
    //         $_SESSION['password'] = $_POST['password'];

    //         header("Location: home.php");
    //     }
        
    // }
    // foreach($_SERVER as $key => $value)
    //     {
    //         echo "$key => $value <br>";
    //     }

    // $password = "12345";
    // $ngek = password_hash($password, PASSWORD_DEFAULT);
    // // echo $ngek;

    // if(isset($_POST["Submit"]))
    //     {
    //         if(!empty($_POST["password"]))
    //             {
    //                 if(password_verify($_POST["password"], $ngek))
    //                 {
    //                     $_SESSION["password"] = $_POST["password"];
    //                     header("Location: home.php");
    //                 }
    //                 else
    //                 {
    //                     echo "Password is incorrect!";
    //                 }
    //             }
    //             else
    //             {
    //                 echo "Please enter your password!";
    //             }
    //     }

// $sql = "INSERT INTO users (username, password) VALUES ('deds', 'admin123')";
// mysqli_query($conn, $sql);

// $sql = "SELECT * FROM users WHERE username = 'deds' ";
// $result = mysqli_query($conn, $sql);

// if(mysqli_num_rows($result) > 0)
//     {
//         $row = mysqli_fetch_assoc($result);
//         echo "Username: " . $row["username"] . "<br>";
//         echo "Password: " . $row["password"] . "<br>";
//         echo "Registration Date: {$row['reg_date']} <br>";
//     }

// mysqli_close($conn);
    ?>