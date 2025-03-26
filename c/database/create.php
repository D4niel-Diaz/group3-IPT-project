<?php
session_start();
include_once 'database.php';


/*This code ensures that all specified fields (full_name, last_name, middle_name, age, position, sex) are filled in when a form is submitted. If any field is missing or empty, it sets an error message in the session and redirects back to the dashboard with feedback for the user.
This is a basic server-side validation mechanism to prevent incomplete form submissions.
*/
//This checks if the current HTTP request method is POST, which typically means a form has been submitted.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate required fields
    $required_fields = ['full_name', 'last_name', 'middle_name', 'age', 'position', 'sex'];
    //Loops through each of the required fields to check if they exist and are not empty.
    foreach ($required_fields as $field) {
        /*Checks if the field is either: Not set in the $_POST array (missing from the form submission), or Contains only whitespace (after trimming leading/trailing spaces).
        */
        if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
            $_SESSION['status'] = 'error';
            //Capitalizing the first letter (ucfirst).
            $_SESSION['error_message'] = ucfirst(str_replace('_', ' ', $field)) . " is required.";
            header('Location: ../dashboard.php');
            exit();
        }
    }

    /* Sanitize inputs, This code ensures that user-submitted data is cleaned and sanitized before further processing, improving security and data reliability. However, additional validation (like checking name formats, valid age ranges, etc.) would make it even more robust.
    */
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

    //This code uses regex patterns in name of data to avoid special characters input
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