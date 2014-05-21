<div id="form-oldschool">

    <form action="login.php" method="post">
    
        <fieldset>
            <label for="login">UserName :</label>
            <input autofocus class="text-input" type="text" name="username"/><br/>
        </fieldset>
        <fieldset>
            <label for="login">Password :</label>
            <input class="text-input" type="password" name="password"/><br/>
        </fieldset>
        <input class="button" type="submit" name="type" value="Sign In" tabindex="3">
        <label for="login">
            <input checked class="form-control" name="type" type="radio" value="customer"/>Customer
            <input class="form-control" name="type" type="radio" value="client"/>Client
        </label>
    </form>
</div>
        

<div id="sign-connections" style="text-align:center" ! important>
    <form action="register_customer.php" method="get">
        
        <fieldset>
            <label for="login">
                </br> </br> Not a Member? </br> Sign up: </br>
            </label>
        </fieldset>
        <fieldset>
            <input class="button" type="submit" name="type" value="Customer" tabindex="3">
        </fieldset>
    </form>
    <form action="register_client.php" method="get">
        <fieldset>
            <input class="button" type="submit" name="type" value="Client" tabindex="3">
        </fieldset>
</div>
