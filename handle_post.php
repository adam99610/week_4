<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
    echo "<pre>";
    function san($var){
        return htmlspecialchars($var);
    }
    if (isset($_POST['genre'])) {
        $genre = $_POST;
        echo san($_POST['genre']);

        switch ($genre) {
            case 'fiction':
                echo "you have selected fiction";
                break;
            case 'non-fiction':
                echo "you have selected non-fiction";
                break;
            case 'mystery':
                echo "you have selected mystery";
                break;
            case 'fantasy':
                echo "you have selected fantasy";
                break;
            case 'biography':
                echo "you have selected biography";
                break;
            case 'science':
                echo "you have selected science";
                break;
            case 'history':
                echo "you have selected history";
                break;

            default:
                echo "choice not found.";
                break;
        }
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
