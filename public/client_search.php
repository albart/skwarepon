<?php
    require("../includes/config.php");
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
        $rows = query("SELECT count(*) ct FROM customers WHERE zipcode = ?", $_POST["zipcode"]);
    else
        $rows = query("SELECT count(*) AS ct, zipcode FROM customers JOIN clients USING (zipcode)
                    WHERE clients.id = ?", $_SESSION["id"]);
        $count = $rows[0]["ct"];
        $zipcode = $rows[0]["zipcode"];
        $rows = query("SELECT count(*) AS redemptions FROM coupons JOIN events USING (eventID, clientID) WHERE zipcode = ? AND redeemed = 1", $zipcode);
        $redemptions = $rows[0]["redemptions"];
               
    render("client_search.php", ["title" => "Customers", "count" => $count, "zipcode" => $zipcode,
            "redemptions" => $redemptions]);
?>
