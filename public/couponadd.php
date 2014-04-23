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
            redirect("customer_search.php");
        }
    }
    else
        apologize("Help me1");
?>
