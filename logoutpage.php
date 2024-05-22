
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        .container img {
            width: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .logout-button {
            background-color: #ff4757;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .logout-button:hover {
            background-color: #ff6b81;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="images/logout.gif" alt="Profile Picture">
        <h1>You are logged in</h1>
        <p>Click below to logout from this page.</p>
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
</body>

