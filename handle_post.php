<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
    echo "<pre>";
    if (isset($_POST['genre'])) {
        echo $_POST['genre'];
    }
    if (isset($_POST['publication-year'])) {
        echo $_POST['publication-year'];
    }
    if (isset($_POST['isbn'])) {
        echo $_POST['isbn'];
    }
    if (isset($_POST['language'])) {
        echo $_POST['language'];
    }
    if (isset($_POST['email'])) {
        echo $_POST['email'];
    }
    if (isset($_POST['phone'])) {
        echo $_POST['phone'];
    }
    if (isset($_POST['dob'])) {
        echo $_POST['dob'];
    }
    if (isset($_POST['rating'])) {
        echo $_POST['rating'];
    }
    if (isset($_POST['time'])) {
        echo $_POST['time'];
    }
    if (isset($_POST['password'])) {
        echo $_POST['password'];
    }
    echo "</pre>";
}
