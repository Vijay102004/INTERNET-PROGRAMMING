<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIOPRO VET CARE</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            font-family: Arial, sans-serif;
        }
        #app {
            text-align: center;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .homepage-img {
            width: 300px; /* Set width */
            height: 300px; /* Set height */
            border-radius: 50%; /* Circular image */
        }
        h1 {
            color: #333;
            margin: 20px 0;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #ff7e5f;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #feb47b;
        }
    </style>
</head>
<body>
    <div id="app">
        <img src="images.jpg" alt="VET CARE" class="homepage-img">
        <h1>WELCOME TO BIOPRO VET CARE SYSTEMS</h1>
        <a href="home.php" class="button">KNOW MORE!!</a>
    </div>
</body>
</html>
