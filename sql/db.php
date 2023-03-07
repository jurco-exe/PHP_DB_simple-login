<?php
// DB:
$connection = mysqli_connect("localhost", "root", "", "login_app");

if ($connection) {
    echo "connected";
} else {
    echo "dogshit";
}
