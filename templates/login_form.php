<form action="login.php" method="post">
<label>UserName :</label>
<input type="text" name="username"/><br />
<label>Password :</label>
<input type="password" name="password"/><br/>
<input type="submit" name="type" value="Login as"/><br/>
<input autofocus class="form-control" name="type" type="radio" value="Customer"/>Customer
<input autofocus class="form-control" name="type" type="radio" value="Client"/>Client
</form>

<div>
  <button>
    <a href = "register_customer.php">Register customer</a>
  </button>
  <button>
    <a href = "register_client.php">Register client</a>
  </button>
</div>
