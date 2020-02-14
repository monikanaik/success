<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login and Registration</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="login-box">
<div class="row">
<div class="col-md-6 login-left">
<h2>Login Here</h2>
<form action="validate.php" method="post">
<div class="form group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<br/>
<button type="submit" class="btn btn-primary"> Login </button>

</form>
    </div>
    <div class="col-md-6 login-right">
<h2>Registrar Here</h2>
<form action="registration.php" method="post">
<div class="form group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<button type="submit" class="btn btn-primary"> Register </button>

</form>

    </div>
</div>
</div>
</div>
</body>
</html>