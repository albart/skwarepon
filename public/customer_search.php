<?php

    // configuration
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["zipcode"]))
            apologize("Please enter a zipcode");
        else if(empty($_POST["distance"]))
            $distance = 0;
        else
            $distance = $_POST["distance"];
        $zipcode = $_POST["zipcode"];
    }
    else
    {
        $rows = query("SELECT zipcode from customers WHERE id = ?", $_SESSION["id"]);
        $zipcode = $rows[0]["zipcode"];
        $distance = 0;
    }
    $rows = query("SELECT vendormastercoupons.*, zipcode, ABS(zipcode - ?) AS distance FROM events JOIN vendormastercoupons USING (clientID,eventID)
                    LEFT JOIN coupons ON (vendormastercoupons.clientID = coupons.clientID AND vendormastercoupons.eventID = coupons.eventID
                    AND vendormastercoupons.vendormastercouponID = coupons.vendormastercouponID AND coupons.customerID = ?)
                    WHERE validthru >= date(now()) AND coupons.couponID IS NULL HAVING distance <= ? ORDER BY distance",
                    $zipcode, $_SESSION["id"], $distance);

    render("/customer_search.php", ["title" => "Customer", "positions" => $rows]);

?>
