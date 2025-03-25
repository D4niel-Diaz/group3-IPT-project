<?php
session_start();
include_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate required fields
    $required_fields = ['full_name', 'last_name', 'middle_name', 'age', 'position', 'sex'];
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
            $_SESSION['status'] = 'error';
            $_SESSION['error_message'] = ucfirst(str_replace('_', ' ', $field)) . " is required.";
            header('Location: ../dashboard.php');
            exit();
        }
    }

    // Sanitize inputs
    $full_name = htmlspecialchars(trim($_POST['full_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $middle_name = htmlspecialchars(trim($_POST['middle_name']));
    $age = intval(trim($_POST['age']));
    $position = htmlspecialchars(trim($_POST['position']));
    $sex = htmlspecialchars(trim($_POST['sex']));

    // Validate age
    if ($age < 18) {
        $_SESSION['status'] = 'error';
        $_SESSION['error_message'] = "Age must be 18 or older.";
        header('Location: ../dashboard.php');
        exit();
    }

    // Validate name fields
    $name_pattern = "/^[a-zA-Z\s]+$/";
    if (!preg_match($name_pattern, $full_name)) {
        $_SESSION['status'] = 'error';
        $_SESSION['error_message'] = "Full name can only contain letters and spaces.";
        header('Location: ../dashboard.php');
        exit();
    }

    if (!preg_match($name_pattern, $last_name)) {
        $_SESSION['status'] = 'error';
        $_SESSION['error_message'] = "Last name can only contain letters and spaces.";
        header('Location: ../dashboard.php');
        exit();
    }

    if (!preg_match($name_pattern, $middle_name)) {
        $_SESSION['status'] = 'error';
        $_SESSION['error_message'] = "Middle name can only contain letters and spaces.";
        header('Location: ../dashboard.php');
        exit();
    }

    // Validate sex
    if (!in_array(strtolower($sex), ['male', 'female'])) {
        $_SESSION['status'] = 'error';
        $_SESSION['error_message'] = "Invalid sex value.";
        header('Location: ../dashboard.php');
        exit();
    }

    // Prepare and execute SQL statement
    if ($stmt = $conn->prepare("INSERT INTO barangay_official (full_name, middle_name, last_name, age, position, sex) VALUES (?, ?, ?, ?, ?, ?)")) {
        $stmt->bind_param("sssiss", $full_name, $middle_name, $last_name, $age, $position, $sex);

        if ($stmt->execute()) {
            $_SESSION['status'] = 'success';
            $_SESSION['success_message'] = "Barangay official added successfully!";
        } else {
            $_SESSION['status'] = 'error';
            $_SESSION['error_message'] = "Something went wrong. Please try again.";
            error_log("Database Error: " . $stmt->error);
        }

        $stmt->close();
    } else {
        $_SESSION['status'] = 'error';
        $_SESSION['error_message'] = "Failed to prepare the database statement.";
        error_log("Prepare Error: " . $conn->error);
    }

    $conn->close();
    header('Location: ../dashboard.php');
    exit();
} else {
    header('Location: ../dashboard.php');
    exit();
}
?>