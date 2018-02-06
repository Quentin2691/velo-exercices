<?php


if (!empty($_GET)) {
    if (isset($_GET["page"])) {
        switch ($_GET["page"]) {
            case "accueill":
                include "accueill.php";
                break;
            case "commune":
                include "commune.php";
                break;
            case "contact":
                include "contact.php";
                break;




        }
    } 
    ?>