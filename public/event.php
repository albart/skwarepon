<?
    require("../includes/config.php");
    $rows = query("SELECT * FROM events LEFT JOIN vendormastercoupons USING (clientID, eventID) WHERE clientID = ?", $_SESSION["id"]);
    render("event.php", ["positions" => $rows, "title" => "Events"]);
?>
