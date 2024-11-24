<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php include "../layout/header.html"; ?>
    
    <h2>Login Form</h2>

    <form action="login.php" method="post">
        <label for="username"> Username </label>
        <input type="text" id="username" name='username' required>
        
        <label for="username"> Username </label>
        <input type="text" id="username" name='username' required>
        
        <label for="username"> Username </label>
        <button type="submit"> Login </button>

        <a href="Forgot Password">Lupa Password</a>
    </form>

    
    <?php include "../layout/footer.html"; ?>
    

</body>
</html>