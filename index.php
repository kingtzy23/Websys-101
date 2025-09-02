<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Grade Calculator</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-box {
            background: #fff;
            padding: 30px 25px;
            border-radius: 12px;
            width: 380px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.2);
            text-align: center;
            animation: fadeIn 0.8s ease;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            font-weight: 600;
            margin-top: 12px;
            text-align: left;
            color: #444;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        input[type="text"]:focus, input[type="number"]:focus {
            border-color: #74b9ff;
            outline: none;
            box-shadow: 0 0 6px rgba(116, 185, 255, 0.7);
        }
        input[type="submit"] {
            margin-top: 20px;
            background: #0984e3;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
            transition: background 0.3s ease;
        }
        input[type="submit"]:hover {
            background: #0652DD;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(-20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Student Grade Calculator</h2>
        <form method="GET" action="grade.php">
            <label>Student Name:</label>
            <input type="text" name="name" placeholder="Enter full name" required>

            <label>Final Score:</label>
            <input type="number" name="score" min="0" max="100" placeholder="Enter score (0-100)" required>

            <input type="submit" value="Get Grade">
        </form>
    </div>
</body>
</html>
