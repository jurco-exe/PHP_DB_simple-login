<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username && $password) {
        echo "<p>Well done</p>";
    } else {
        echo "<p>Sth is missing...</p>";
    }

    // DB:
    $connection = mysqli_connect("localhost", "root", "", "login_app");

    // if ($connection) {
    //     echo "prepojene";
    // } else {
    //     echo "nahoubi";
    // }

    //send data into DB:
    $query = "INSERT INTO users(username, password)
    VALUES('$username', '$password')";

    $login_data = mysqli_query($connection, $query);

    if (!$login_data) {
        die("ERROR");
    }

    //get data from DB;
    $query2 = "SELECT * FROM users";
    $login_data2 = mysqli_query($connection, $query2);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post" name="login_form">
        <input type="text" placeholder="Username" name="username"><br>
        <input type="password" placeholder="Password" name="password"><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php

    // while ($row = mysqli_fetch_assoc($login_data2)) {
    //     echo "<pre>";
    //     print_r($row);
    //     echo "</pre>";
    // }

    ?>
</body>

</html>