<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 4 - Task 1</title>
    <style>
        body {
            background-color: #FFF8F8;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #FFFFFF;
            width: 360px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 2px solid #147971;
        }
        h3 {
            color: #147971;
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid #147971;
            border-radius: 6px;
            box-sizing: border-box;
            outline: none;
        }
        input[type="text"]:focus {
            border-color: #00FFFF;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #147971;
            color: #FFFFFF;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            font-size: 15px;
        }
        button:hover {
            background-color: #0d544f;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h3>Form</h3>
    <form action="process.php" method="POST">
        <input type="text" name="athlete_name" placeholder="Enter Athlete Name" required>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>