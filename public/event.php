<?
    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST["activity"] === "delete")
        {
            query("DELETE events FROM events LEFT JOIN vendormastercoupons USING (clientID, eventID) WHERE vendormastercouponID IS NULL
                    AND clientID = ? AND eventID = ?", $_SESSION["id"], $_POST["eventID"]);
            query("DELETE FROM vendormastercoupons WHERE clientID = ? AND vendormastercouponID = ? and eventID = ?",
                    $_SESSION["id"], $_POST["vendormastercouponID"], $_POST["eventID"]);
        }
    }
    $rows = query("SELECT * FROM events LEFT JOIN vendormastercoupons USING (clientID, eventID) WHERE clientID = ?", $_SESSION["id"]);
    render("event.php", ["positions" => $rows, "title" => "Events"]);
?>
