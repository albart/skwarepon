<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="namelast" placeholder="Last Name" type="text"/>
            <input autofocus class="form-control" name="namefirst" placeholder="First Name" type="text"/>
            <input autofocus class="form-control" name="namemi" placeholder="Middle Initial" type="text"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="zipcode" placeholder="Zip Code" type="text"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="email" placeholder="Email" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Confirm Password" type="password"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="reporthist" placeholder="Historical Report" type="checkbox"/>
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="reportday" placeholder="Report Day" type="dropdown 1-31"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Register</button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">log in</a>
</div>
<!--
Name (last, first, mi)
zip
email
//location pull from zip code

report selections (historical report, 1 other)
report request day
-->
