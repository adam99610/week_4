<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['title'])) {
        echo $_GET['title'];
    }
    if (isset($_GET['auther'])) {
        echo $_GET['auther'];
    }
    if (isset($_GET['description'])) {
        echo $_GET['description'];
    }

    if (isset($_GET['format'])) {
        foreach($_GET['format'] as $item){
            echo "<pre>";
            echo $item;
            echo "</pre>";
        }
    }
    
}
var_dump($_GET);
