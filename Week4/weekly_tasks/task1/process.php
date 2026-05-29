<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['athlete_name']);
} else {
    header("Location: form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Response - Welcome</title>
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
        .response-card {
            background: #FFFFFF;
            width: 400px;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0,0,0,0.06);
            border-top: 6px solid #147971;
        }
        h1 {
            color: #147971;
            font-size: 28px;
            margin-bottom: 10px;
        }
        p {
            color: #333333;
            font-size: 16px;
        }
        .accent-text {
            color: #147971;
            font-weight: bold;
            border-bottom: 2px solid #00FFFF;
            padding-bottom: 3px;
        }
        .back-btn {
            display: inline-block;
            margin-top: 25px;
            color: #147971;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }
        .back-btn:hover {
            color: #00FFFF;
        }
    </style>
</head>
<body>

<div class="response-card">
    <h1>Welcome to the Arena, <span class="accent-text"><?php echo $name; ?></span>!</h1>
    <p>Your form submission completed successfully.</p>
    <a href="form.php" class="back-btn">Submit Another Request</a>
</div>

</body>
</html>