<?php

    // configuration
    require("../includes/config.php");
    
    $pointsresult = query("SELECT count(*) AS ct FROM coupons WHERE redeemed = 1 AND customerID = ?", $_SESSION["id"]);

    render("/customer.php", ["title" => "Customer", "points" => $pointsresult[0]["ct"]]);

?>
