
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/admin.css" />
    <title>Document</title>
  </head>
  <body>
      <div class="login-admin-container">
        <form action="login11.php" class="form-login-admin" method = "POST">
            <h3>Login</h3>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email">
            <label for="password">Password</label>
            <input type="password" name="pass" placeholder="Password">
            <div class="mess-err">Sai thông tin đăng nhập</div>
            <div class="submit-btn">
                <button type="submit">Login</button>
            </div>
        </form>
      </div>
  </body>
</html>
