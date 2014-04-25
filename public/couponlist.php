<?php

    // configuration
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        query("UPDATE coupons SET redeemed = 1 WHERE couponID = ?", $_POST["couponID"]);
        $rows = query("SELECT customerID FROM coupons WHERE couponID = ?", $_POST["couponID"]);
        $rows = query("SELECT email FROM customers WHERE id = ?", $rows[0]["customerID"]);
        emailsp($rows[0]["email"], $_POST["couponID"] . " coupon redeemed", $_POST["couponID"] . " coupon redeemed on " . now());
    }
    
    $rows = query("SELECT * FROM coupons WHERE clientID = ? AND redeemed = 0 ORDER BY eventID", $_SESSION["id"]);
    

    render("/couponlist.php", ["title" => "Customer", "positions" => $rows]);

?>
