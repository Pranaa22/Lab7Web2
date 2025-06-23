<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-box {
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 30px 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-box h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #2a6ebd;
        }
        .login-box input[type="email"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-box button {
            width: 100%;
            background: #2a6ebd;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .alert {
            background: #f8d7da;
            color: #842029;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Sign In</h2>

    <?php if(session()->getFlashdata('flash_msg')): ?>
        <div class="alert">
            <?= session()->getFlashdata('flash_msg') ?>
        </div>
    <?php endif; ?>

    <form action="" method="post">
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
