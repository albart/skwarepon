<?php

    // configuration
    require("../includes/config.php");
    
    $rows = query("SELECT * from coupons WHERE clientID = ? ORDER BY eventID", $_SESSION["id"]);

    render("/customer_search.php", ["title" => "Customer", "positions" => $rows]);

?>
