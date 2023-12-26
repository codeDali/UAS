<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SosmedKita Login</title>
    <link rel="stylesheet" type="text/css" href="stylephp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="images/newspaper-folded.png">
</head>
<body>
    <h1>LOGIN</h1>

    <form method="POST" action="login.php">
        <label for="name">Username</label>
        <input type="text" name="username" placeholder="admin1 untuk mode admin, user untuk mode user" required />
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="admin1 untuk mode admin, user untuk mode user" required />
        <button type="submit">Login</button>
    </form>
</body>
</html>