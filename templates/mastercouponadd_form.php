<form action="mastercouponadd.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="eventID" placeholder="event ID" type="text"/>
            <input autofocus class="form-control" name="shortdesc" placeholder="Short Description" type="text"/>
            <input autofocus class="form-control" name="longdesc" placeholder="Long Description" type="text"/>
            <input autofocus class="form-control" name="fromdate" placeholder="fromdate" type="text"/>
            <input autofocus class="form-control" name="todate" placeholder="todate" type="text"/>
            <input autofocus class="form-control" name="limit" placeholder="limit" type="text"/>
            <input autofocus class="form-control" name="thresholdtext" placeholder="Text Threshold" type="text"/>
            <input autofocus class="form-control" name="thresholdemail" placeholder="Email Threshold" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Add Event</button>
        </div>
    </fieldset>
</form>
