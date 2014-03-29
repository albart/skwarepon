<form action="register.php" method="post" id="register">
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
            Report History: <input autofocus class="form-control" name="reporthist" type="radio" value="Y"/>Yes
            <input autofocus class="form-control" name="reporthist" type="radio" value="N"/>No
        </div>
        <div class="form-group">
            <input autofocus class="form-control" name="reportday" placeholder="Report Day" type="dropdown 1-31"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Register</button>
        </div>
    </fieldset>
</form>
<select name="datelist" form="register">
    <?php
        for($i=1; $i<32; $i++)
            print("<option value=$i>$i</option>",$i,$i);
    ?>
</select>
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
