<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["namelast"]))
            apologize("You must provide a last name.");
        else if (empty($_POST["namefirst"]))
            apologize("You must provide a first name.");
        else if (empty($_POST["namemi"]))
            apologize("You must provide a middle initial.");
        else if (empty($_POST["phone"]))
            apologize("You must provide a phone number.");
        else if (empty($_POST["zipcode"]))
            apologize("You must provide a zip code.");
        else if (empty($_POST["username"]))
            apologize("You must provide a username.");
        else if (empty($_POST["email"]))
            apologize("You must provide an email address.");
        else if (empty($_POST["password"]))
            apologize("You must provide a password.");
        else if ($_POST["password"] !== $_POST["confirmation"])
            apologize("Passwords do not match!");
        else if (empty($_POST["reporthist"]))
            apologize("You must select whether to receive a report history.");
        else if (empty($_POST["datelist"]))
            apologize("You must select a date to receive reports.");
        else
        {
            $return = query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.00)", $_POST["username"], crypt($_POST["password"]));
            if ($return === false)
                apologize("Insert query failed with return of " . $return);
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            // remember that user's now logged in by storing user's ID in session
            $_SESSION["id"] = $rows[0]["id"];
            // redirect to portfolio
            redirect("/");
        }
    }
    else
    {
        // else render form
        render("register_client_form.php", ["title" => "Register"]);
    }

?>
