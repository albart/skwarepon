<div class="form-group">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>eventID</th>
                <th>desription</th>
                <th>fromdate</th>
                <th>todate</th>
                <th>zipcode</th>
                <th>vmcID</th>
                <th>shortdesc</th>
                <th>longdesc</th>
                <th>validfrom</th>
                <th>validthru</th>
                <th>limit</th>
                <th>thresholdtext</th>
                <th>thresholdemail</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($positions as $position): ?>
                <form action="event.php" method="post">
                    <fieldset>
                         <tr>
                            <td><input readonly name="eventID" style="border:none;" value=<?= $position["eventID"] ?> /></td>
                            <td><?= $position["description"] ?></td>
                            <td><?= $position["fromdate"] ?></td>
                            <td><?= $position["todate"] ?></td>
                            <td><?= $position["zipcode"] ?></td>
                            <td><input readonly name="vendormastercouponID" style="border:none;" value=<?= $position["vendormastercouponID"] ?> /></td>
                            <td><?= $position["shortdesc"] ?></td>
                            <td><?= $position["longdesc"] ?></td>
                            <td><?= $position["validfrom"] ?></td>
                            <td><?= $position["validthru"] ?></td>
                            <td><?= $position["limit"] ?></td>
                            <td><?= $position["thresholdtext"] ?></td>
                            <td><?= $position["thresholdemail"] ?></td>
                            <td><button name="activity" value="delete" type="submit" class="btn btn-default">Delete</button></td>
                        </tr>
                    </fieldset>
                </form>
            <? endforeach ?>
        </tbody>
    </table>
</div>
<div>
    <a href="/eventadd.php">Add Event</a>
    <a href="/mastercouponadd.php">Add Master Coupon</a>
</div>
<div>
    <a href="logout.php">Log Out</a>
</div>
