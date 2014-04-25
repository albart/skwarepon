<form action="couponlist.php" method="post">
    <fieldset>
    <div class="form-group"><table class="table table-striped">
    <thead>
        <tr>
            <th>couponID</th>
            <th>select</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($positions as $position): ?>
        <tr>
            <td><?= $position["couponID"] ?></td>
            <td><input class="form-control" type="radio" name="couponID" value=<?= $position["couponID"] ?> /></td>
        </tr>
    <? endforeach ?>
    </tbody>
    </table></div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Redeem Coupon</button>
    </div>
    </fieldset>
</form>
<div>
    <a href="/couponlist.php">Show Coupons List/Redemption</a>
</div>
<div>
    <a href="/logout.php">Log Out</a>
</div>
