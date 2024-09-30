<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize Inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $facebook = filter_var($_POST['facebook'], FILTER_SANITIZE_URL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
    $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
    $skills = $_POST['skills'] ?? [];
    $bio = filter_var($_POST['bio'], FILTER_SANITIZE_STRING);

    // Validation
    $errors = [];

    // Name Validation
    if (empty($name) || !preg_match("/^[a-zA-Z\s]+$/", $name)) {
        $errors[] = "Invalid name: only letters and spaces allowed.";
    }

    // Email Validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Facebook URL Validation
    if (!filter_var($facebook, FILTER_VALIDATE_URL)) {
        $errors[] = "Invalid Facebook URL.";
    }

    // Password Validation
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/", $password)) {
        $errors[] = "Password must be at least 8 characters, include at least one uppercase letter and one number.";
    }

    // Confirm Password Validation
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // Phone Number Validation
    if (!preg_match("/^\d+$/", $phone)) {
        $errors[] = "Invalid phone number.";
    }

    // Gender and Country Validation
    if (empty($gender) || empty($country)) {
        $errors[] = "Gender and country are required.";
    }

    // Skills Validation
    if (empty($skills)) {
        $errors[] = "At least one skill must be selected.";
    }

    // Biography Validation
    if (strlen($bio) > 200) {
        $errors[] = "Biography must not exceed 200 characters.";
    }

    // Output Errors or Store to Session
    if (!empty($errors)) {
        echo "<h3>Errors:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        // Store data in session
        $_SESSION['user_data'] = [
            'name' => $name,
            'email' => $email,
            'facebook' => $facebook,
            'phone' => $phone,
            'gender' => $gender,
            'country' => $country,
            'skills' => $skills,
            'bio' => $bio,
        ];

        // Redirect to about.php
        header("Location: about.php");
        exit();
    }
}
?>
