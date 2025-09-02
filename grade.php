<?php


$name = isset($_GET['name']) ? $_GET['name'] : "Unknown Student";
$score = isset($_GET['score']) ? (int)$_GET['score'] : null;

$grade = "";
$remark = "";

if ($score !== null) {
    if ($score >= 90) {
        $grade = "A (Excellent)";
        $remark = "🌟 Outstanding Performance!";
    } elseif ($score >= 80) {
        $grade = "B (Very Good)";
        $remark = "👍 Great Job!";
    } elseif ($score >= 70) {
        $grade = "C (Good)";
        $remark = "👌 Good effort, keep it up!";
    } elseif ($score >= 60) {
        $grade = "D (Needs Improvement)";
        $remark = "⚠ Work harder next time.";
    } else {
        $grade = "F (Failed)";
        $remark = "❌ You need to improve.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Report</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #FFDEE9, #B5FFFC);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff;
            padding: 30px 25px;
            border-radius: 12px;
            max-width: 450px;
            width: 100%;
            text-align: center;
            box-shadow: 0 6px 18px rgba(0,0,0,0.2);
            animation: fadeIn 0.8s ease;
        }
        h2 {
            margin-bottom: 20px;
            color: #222;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
            color: #444;
        }
        .highlight {
            font-weight: bold;
            color: #0984e3;
            font-size: 20px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background: #0984e3;
            padding: 12px 18px;
            border-radius: 8px;
            transition: background 0.3s ease;
        }
        a:hover {
            background: #0652DD;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>📘 Student Grade Report</h2>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Score:</strong> <?php echo $score; ?></p>
        <p><strong>Grade:</strong> <span class="highlight"><?php echo $grade; ?></span></p>
        <p><strong>Remarks:</strong> <?php echo $remark; ?></p>

        <a href="index.php">← Back to Form</a>
    </div>
</body>
</html>
