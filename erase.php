<?php
    //Include database configuration file
    include_once("./Database/config.php");

    //Get id from the URL to delete that user
    $id = $_GET['id'];

    //Delete user from the table based on their chosen id
    $Data = mysqli_query($Dbase, "DELETE FROM `row` WHERE id=$id");

    //After delete refirect to Home, so that latest list will display
    header("Location:index.php");
?>