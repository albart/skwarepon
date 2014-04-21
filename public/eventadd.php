<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["description"]))
            apologize("You must provide a desciption");
        else if (empty($_POST["fromdate"]))
            apologize("You must provide a fromdate");
        else if (empty($_POST["todate"]))
            apologize("You must provide a todate");
        else if (empty($_POST["location"]))
            apologize("You must provide a Zip Code");
        else
        {
            $rows = query("INSERT INTO events (clientID, description, fromdate, todate, location) VALUES (?, ?, ?, ?, ?)",
            $_SESSION["id"], $_POST["description"], $_POST["fromdate"], $_POST["todate"], $_POST["location"]);
        }
        redirect("event.php");
    }

    else
    {
        // else render form
        render("eventadd_form.php", ["title" => "Add Event"]);
    }
?>
