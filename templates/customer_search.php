<form action="couponadd.php" method="post">
    <fieldset>
    <div class="form-group"><table class="table table-striped">
    <thead>
        <tr>
            <th>shortdesc</th>
            <th>longdesc</th>
            <th>validfrom</th>
            <th>validthru</th>
            <th>select</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($positions as $position): ?>
        <tr>
            <td><?= $position["shortdesc"] ?></td>
            <td><?= $position["longdesc"] ?></td>
            <td><?= $position["validfrom"] ?></td>
            <td><?= $position["validthru"] ?></td>
            <td><input class="form-control" type="radio" name="linenumber"
                        value=<?= $position["clientID"]."a".$position["eventID"]."a".$position["vendormastercouponID"]."a" ?> /></td>
        </tr>
    <? endforeach ?>
    </tbody>
    </table></div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
    </fieldset>
</form>
<div>
    <a href="/customer.php">Home</a>
<div>
    <a href="/logout.php">Log Out</a>
</div>
