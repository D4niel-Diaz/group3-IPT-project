<?php
session_start();

// Redirect to login page if the user is not logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
include('dashboard.php');
include('database/database.php');
include('partials/header.php');
include('partials/sidebar.php');

// Your existing code for fetching barangay officials
$sql = "SELECT * FROM barangay_official";
$params = [];
$types = "";

if (!empty($_GET['search'])) {
    $search = "%" . trim($_GET['search']) . "%"; 
    $sql .= " WHERE full_name LIKE ? OR middle_name LIKE ? OR last_name LIKE ? OR age LIKE ? OR position LIKE ? OR sex LIKE ?";
    $types = "ssssss";
    $params = array_fill(0, 6, $search); 
}

$stmt = $conn->prepare($sql);
if ($stmt) {
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params); 
    }
    $stmt->execute();
    $barangay_officials = $stmt->get_result();
} else {
    die("Error preparing query: " . $conn->error);
}

$status = $_SESSION['status'] ?? '';
unset($_SESSION['status']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Official Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <main id="main" class="main">
        <!-- Logout Button -->
        <div class="text-end mt-3 me-3">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>

        <!-- Rest of your dashboard content -->
        <?php if ($status): ?>
            <div class="alert alert-<?php echo ($status == 'error') ? 'danger' : 'success'; ?> alert-dismissible fade show" role="alert">
                <?php 
                    if ($status == 'created') echo "New record has been created successfully!";
                    elseif ($status == 'updated') echo "Record has been updated successfully!";
                    elseif ($status == 'deleted') echo "Record has been deleted successfully!";
                    else echo "An error occurred.";
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Your existing dashboard content -->
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>