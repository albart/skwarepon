<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["eventID"]))
            apologize("You must provide an event ID");
        else if (empty($_POST["fromdate"]))
            apologize("You must provide a fromdate");
        else if (empty($_POST["todate"]))
            apologize("You must provide a todate");
        else
        {
            $rows = query("INSERT INTO vendormastercoupons (clientID, eventID, shortdesc, longdesc, fromdate, todate, limit, thresholdtext,
            thresholdemail) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)",
            $_SESSION["id"], $_POST["eventID"], $_POST["shortdesc"], $_POST["longdesc"], $_POST["fromdate"], $_POST["todate"], $_POST["limit"],
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
