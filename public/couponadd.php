<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["linenumber"]))
            apologize("You must select a coupon");
        else
        {
            $tok = strtok($_POST["linenumber"], "a");
            $clientID = $tok;
            $tok = strtok("a");
            $eventID = $tok;
            $tok = strtok("a");
            $vendormastercouponID = $tok;
            
            $rows = query("INSERT INTO coupons (customerID, vendormastercouponID, eventID, clientID, redeemed) VALUES (?, ?, ?, ?, 0)",
            $_SESSION["id"], $vendormastercouponID, $eventID, $clientID);
            $rows = query("SELECT LAST_INSERT_ID() AS couponID");
            // remember that user's now logged in by storing user's ID in session
            $couponID = $rows[0]["couponID"];
            $rows = query("SELECT email FROM customers WHERE id = ?", $_SESSION["id"]);
            $email = $rows[0]["email"];
            $rows = query("SELECT IF(corporation<=>'', namelast, corporation) AS vendor, events.description, shortdesc, validfrom, validthru FROM coupons JOIN clients ON (clientID = id)
                            JOIN events USING (eventID) JOIN vendormastercoupons USING (vendormastercouponID) WHERE couponID = ?", $couponID);
            $body = "You have selected " . $rows[0]["shortdesc"] . " good from " . $rows[0]["validfrom"] . " through " . $rows[0]["validthru"]
                    . " with " . $rows[0]["vendor"] . " at " . $rows[0]["description"] . ".  Your coupon ID is " . $couponID . ".";
            emailsp($email, "Thanks for using Skwarepon - coupon included", $body);
        }
    }
    else
        apologize("Help me1");
?>
