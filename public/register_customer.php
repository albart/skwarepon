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
        else if (strlen($_POST["namemi"])!==1)
            apologize("Middle initial must be exactly 1 character");
        else if (empty($_POST["phone"]))
            apologize("You must provide a phone number.");
        else
            $phone = preg_replace ("/\D/", "", $_POST["phone"]);
        if (strlen($phone) !== 10)
            apologize("You must provide 10 numbers for your phone number");
        else
            $mobilephone = preg_replace ("/\D/", "", $_POST["mobilephone"]);
        if (strlen($mobilephone) !== 10)
            apologize("You must provide 10 numbers for your mobile phone number");
        else if (empty($_POST["zipcode"]))
            apologize("You must provide a zip code.");
        else
            $zipcode = preg_replace ("/\D/", "", $_POST["zip"]);
        if (strlen($zipcode) !== 5)
            apologize("Your zip code must be 5 digits");
        else if (empty($_POST["username"]))
            apologize("You must provide a username.");
        else if (empty($_POST["email"]))
            apologize("You must provide an email address.");
        else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === FALSE)
            apologize("Your email is invalid.");
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
            $return = query("INSERT INTO customers (namelast, namefirst, namemi, phone, zipcode, username, email, password, reporthist, datelist)
                            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
                            , $_POST["namelast"], $_POST["namefirst"], $_POST["namemi"], $phone, $zipcode, $_POST["username"], $_POST["email"], crypt($_POST["password"]), $_POST["reporthist"], $_POST["datelist"]);
            if ($return === false)
                apologize("Insert query failed with return of " . $return);
            mail($_POST["email"], "registration", "Registration was successful with Skwarepon");
            mail($_POST["mobilphone"] . "@txt.att.net", "registration", "Registration was successful with Skwarepon");
            mail($_POST["mobilphone"] . "@vmobl.com", "registration", "Registration was successful with Skwarepon");
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