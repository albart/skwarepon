<?php

    // configuration
    require("../includes/config.php");
    
    $rows = query("SELECT COUNT(*) points FROM coupons WHERE redeemed = 1 AND clientID = ?", $_SESSION["id"]);

    render("/client.php", ["title" => "Client", "points" => $rows[0]["points"]]);

?>
