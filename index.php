<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body, form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
    </style>
    <title>PHP Login</title>
</head>
<body>
    <h1>Login</h1>

    <form method="POST" action="login.php">
        <label for="name">Username</label>
        <input type="text" name="username" required />
        <label for="password">Password</label>
        <input type="password" name="password" required />
        <button type="submit">Login</button>
    </form>
</body>
</html>