<?php

    // configuration
    require("../includes/config.php");
    
    //if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        /*if (($_POST["zipcode"]))
        {*/
            $rows = query("SELECT zipcode from customers WHERE id = ?", $_SESSION["id"]);
            $zipcode = $rows[0]["zipcode"];
        //}
    }
    $rows = query("SELECT vendormastercoupons.* FROM events JOIN vendormastercoupons USING (clientID,eventID)
                    LEFT JOIN coupons ON (vendormastercoupons.clientID = coupons.clientID AND vendormastercoupons.eventID = coupons.eventID
                    AND vendormastercoupons.vendormastercouponID = coupons.vendormastercouponID AND coupons.customerID = ?)
                    WHERE validthru >= date(now()) AND zipcode = ? AND coupons.couponID IS NULL",
                    $_SESSION["id"], $zipcode);

    render("/customer_search.php", ["title" => "Customer", "positions" => $rows]);

?>
