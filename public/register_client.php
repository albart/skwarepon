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
        else if (empty($_POST["mobilephone"]))
            apologize("You must provide a mobile phone number.");
        else
            $mobilephone = preg_replace ("/\D/", "", $_POST["mobilephone"]);
        if (strlen($mobilephone) !== 10)
            apologize("You must provide 10 numbers for your mobile phone number");
        if (empty($_POST["carrier"]))
            apologize("You must provide a carrier for your mobile phone.");
        else if (empty($_POST["zipcode"]))
            apologize("You must provide a zip code.");
        else
            $zipcode = preg_replace ("/\D/", "", $_POST["zipcode"]);
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
        else if ($_FILES["file"]["error"] > 0) 
            apologize ("Error: " . $_FILES["file"]["error"]);
        else
        {
            $return = query("INSERT INTO clients (namelast, namefirst, namemi, phone, mobilephone, carrier,
                            zipcode, username, email, password, reporthist, datelist,picture)
                            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, LOAD_FILE(concat('upload/',?)))",
                            $_POST["namelast"], $_POST["namefirst"], $_POST["namemi"], $phone, $mobilephone, $_POST["carrier"], $_POST["zipcode"], 
                            $_POST["username"], $_POST["email"], crypt($_POST["password"]), $_POST["reporthist"], $_POST["datelist"]/*,
                            $_FILES["file"]["tmp_name"]*/);
            if ($return === false)
                apologize("Insert query failed with query of " . $return);
            emailsp($_POST["email"], "Skwarepon registration", "Registration was successful with Skwarepon.");
            //emailsp($_POST["mobilephone"] . "@txt.att.net", "Skwarepon registration", "Registration was successful with Skwarepon.");
            //emailsp($_POST["mobilephone"] . "@vmobl.com", "Skwarepon registration", "Registration was successful with Skwarepon.");
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            // remember that user's now logged in by storing user's ID in session
            $_SESSION["id"] = $rows[0]["id"];
            // redirect to portfolio
            redirect("/client.php");
        }
    }
    else
    {
        // else render form
        render("/register_client_form.php", ["title" => "Register"]);
    }

?>
