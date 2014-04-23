<div><table>
    <?php foreach($positions as $position): ?>
        <tr>
            <td><?= $position["eventID"] ?></td>
            <td><?= $position["description"] ?></td>
            <td><?= $position["fromdate"] ?></td>
            <td><?= $position["todate"] ?></td>
            <td><?= $position["zipcode"] ?></td>
            <td><?= $position["shortdesc"] ?></td>
            <td><?= $position["longdesc"] ?></td>
            <td><?= $position["validfrom"] ?></td>
            <td><?= $position["validthru"] ?></td>
            <td><?= $position["limit"] ?></td>
            <td><?= $position["thresholdtext"] ?></td>
            <td><?= $position["thresholdemail"] ?></td>
        </tr>
    <? endforeach ?>
</table></div>
<a href="/eventadd.php">Add Event</a>
<a href="/mastercouponadd.php">Add Master Coupon</a>
<div>
    <a href="logout.php">Log Out</a>
</div>
