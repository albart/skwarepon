<form action="eventadd.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="description" placeholder="Description" type="text"/>
            <input class="form-control" name="fromdate" placeholder="fromdate format yyyy-mm-dd" type="text"/>
            <input class="form-control" name="todate" placeholder="todate format yyyy-mm-dd" type="text"/>
            <input class="form-control" name="zipcode" placeholder="Zip Code/location" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Add Event</button>
        </div>
    </fieldset>
</form>
