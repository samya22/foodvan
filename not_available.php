

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currently Not Available!</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background:rgb(255, 255, 255);
            text-align: center;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            width: 50%;
            /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); */
        }
        img {
            width: 120px;
            animation: shake 1s infinite alternate;
        }
        h1 {
            font-size: 30px;
            font-weight: 600;
            color: #155724;
            margin-top: 20px;
        }
        p {
            color: #666;
            font-size: 14px;
            margin: 10px 0 20px;
        }
        .btn {
            text-decoration: none;
            background: #28A745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: 0.3s;
            display: inline-block;
        }
        .btn:hover {
            background: #218838;
        }
        @keyframes shake {
            from { transform: translateX(-5px); }
            to { transform: translateX(5px); }
        }
    </style>
</head>
<body>

<div class="container">
    <img src="https://cdn-icons-png.flaticon.com/512/742/742751.png" alt="Sad Face">
    <h1>Currently Not Available!</h1>
    <p>We are sorry, but we are currently unavailable. Please check back later.</p>
    <a href="index.php" class="btn">Back to Home</a>
</div>

</body>
</html>
