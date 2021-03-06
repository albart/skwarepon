<form action="register_client.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="namelast" placeholder="Last Name" type="text"/>
            <input class="form-control" name="namefirst" placeholder="First Name" type="text"/>
            <input class="form-control" name="namemi" placeholder="MI" type="text" maxlength="2" size="2"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="phone" placeholder="Phone Number" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="mobilephone" placeholder="Mobile Phone Number" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="carrier" placeholder="Carrier" type="text" /> <!-- change to dropdown -->
        </div>
        <div class="form-group">
            <input class="form-control" name="zipcode" placeholder="Zip Code" type="text" maxlength="8" size="8"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="username" placeholder="User Name" type="text"/>
        </div>
       <div class="form-group">
            <input class="form-control" name="email" placeholder="Email" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Confirm Password" type="password"/>
        </div>
        <div class="form-group">
            Report History: <input class="form-control" name="reporthist" type="radio" value="Y"/>Yes
            <input class="form-control" name="reporthist" type="radio" value="N"/>No
        </div>
        <div class="form-group">
            Report Day
            <select name="datelist">
                <?php
                    for($i=1; $i<32; $i++)
                        print("<option value=$i>$i</option>");
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="file">Filename:</label>
            <input class="form-control" name="file" type="file" />
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
