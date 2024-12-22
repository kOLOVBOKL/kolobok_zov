<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="./css/stylereg.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .input-box {
            margin-bottom: 20px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .input-box input:focus {
            border-color: #007BFF;
            outline: none;
        }

        .input-box label {
            font-size: 14px;
            color: #555;
        }

        .register-btn {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-btn:hover {
            background-color: #0056b3;
        }

        .login-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-link a {
            color: #007BFF;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Add responsive styles */
        @media (max-width: 600px) {
            .register-container {
                padding: 20px;
            }

            .register-container h2 {
                font-size: 20px;
            }

            .register-btn {
                font-size: 14px;
            }
        }

        .show-password-btn {
            cursor: pointer;
            font-size: 14px;
            color: #007BFF;
            background: none;
            border: none;
            margin-top: 5px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form method="POST" action="auth_handler.php">
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <!-- Кнопка для показа/скрытия пароля -->
                <button type="button" id="toggle-password" class="show-password-btn">Show Password</button>
            </div>
            <button type="submit" name="register" class="register-btn">Register</button>
        </form>
        <p class="login-link">Already have an account? <a href="login.php">Log in</a></p>
    </div>

    <!-- Подключаем JavaScript -->
    <script src="script.js"></script>
</body>
</html>
