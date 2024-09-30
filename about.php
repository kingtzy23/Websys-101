<?php
session_start(); // Start the session

// Check if user data exists in the session
if (!isset($_SESSION['user_data'])) {
    // Redirect to form if there's no user data
    header("Location: index.php");
    exit();
}

// Retrieve user data from session
$user_data = $_SESSION['user_data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>About Me</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Welcome, <?php echo htmlspecialchars($user_data['name']); ?></h5>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user_data['email']); ?></p>
            <p><strong>Facebook:</strong> <a href="<?php echo htmlspecialchars($user_data['facebook']); ?>" target="_blank"><?php echo htmlspecialchars($user_data['facebook']); ?></a></p>
            <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($user_data['phone']); ?></p>
            <p><strong>Gender:</strong> <?php echo htmlspecialchars($user_data['gender']); ?></p>
            <p><strong>Country:</strong> <?php echo htmlspecialchars($user_data['country']); ?></p>
            <p><strong>Skills:</strong> <?php echo implode(", ", $user_data['skills']); ?></p>
            <p><strong>Biography:</strong> <?php echo htmlspecialchars($user_data['bio']); ?></p>
        </div>
    </div>

    <!-- Back Button -->
    <a href="index.php" class="btn btn-secondary mt-3">Back to Form</a>

</div>

</body>
</html>
