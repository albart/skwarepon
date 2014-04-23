<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["eventID"]))
            apologize("You must provide an event ID");
        else if (empty($_POST["validfrom"]))
            apologize("You must provide a validfrom date.");
        else if (empty($_POST["validthru"]))
            apologize("You must provide a validthru date.");
        else
        {
            $rows = query("INSERT INTO vendormastercoupons (clientID, eventID, shortdesc, longdesc, validfrom, validthru, `limit`, thresholdtext,
            thresholdemail) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
            $_SESSION["id"], $_POST["eventID"], $_POST["shortdesc"], $_POST["longdesc"], $_POST["validfrom"], $_POST["validthru"], $_POST["limit"],
            $_POST["thresholdtext"], $_POST["thresholdemail"]);
        }
        redirect("event.php");
    }

    else
    {
        // else render form
        render("mastercouponadd_form.php", ["title" => "Add Event"]);
    }
?>
