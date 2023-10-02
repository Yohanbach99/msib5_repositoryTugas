<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login_box {
    background-color: #fff;
    padding: 20px;
    text-align: center;
    max-width: 300px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 4px;
}

h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}

.input-box {
    margin-bottom: 20px;
}

.input-box input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.button-box {
    margin-top: 20px;
}

button {
    background-color: #333;
    color: #fff;
}
    </style>
</head>
<body>
    <section>
        <div class="login_box">
            <h2>^_~ Login ^_~</h2>
            <form method="post" action="admin.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="text" name="username" placeholder="Username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="bag-add-outline"></ion-icon></span>
                    <input type="password" name="password" placeholder="Password" required>
                    <label>Password</label>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
        $username = $_POST['username'];
        $password = $_POST['password'];

       
        if ($username === 'admin' && $password === 'mimin') {
            header('Location: admin_dashboard.php');
            exit;
        } else {
            echo "Username atau password salah.";
        }
    }
    ?>
</body>
</html>
