<?php
include('partials/header.php');
include('partials/sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate Request</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Certificate Request</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Certificate Request</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Request a Certificate</h5>

                        <h5 class="mt-5">Certificate Requests</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Certificate Type</th>
                                    <th>Purpose</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Sample Data (Replace with Database Fetching in Future)
                                $requests = [
                                    ["John Ronald", "Residency", "For School Enrollment", "Pending"],
                                    ["Daniel", "Indigency", "Financial Assistance", "Approved"],
                                    ["Gian Carlo", "Business Clearance", "Business Permit Application", "Denied"]
                                ];

                                foreach ($requests as $request) {
                                    echo "<tr>";
                                    echo "<td>{$request[0]}</td>";
                                    echo "<td>{$request[1]}</td>";
                                    echo "<td>{$request[2]}</td>";
                                    echo "<td>{$request[3]}</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
