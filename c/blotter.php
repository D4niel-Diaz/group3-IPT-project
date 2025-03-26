<?php
include('partials/header.php');
include('partials/sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blotter Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Blotter Records</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Blotter Records</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Unresolved Blotter Cases</h5>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Complainant</th>
                                    <th>Respondent</th>
                                    <th>Case Type</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample Data -->
                                <tr>
                                    <td>Juan Dela Cruz</td>
                                    <td>Pedro Santos</td>
                                    <td>Physical Injury</td>
                                    <td class="text-danger fw-bold">Pending</td>
                                </tr>
                                <tr>
                                    <td>Ana Reyes</td>
                                    <td>Maria Lopez</td>
                                    <td>Property Dispute</td>
                                    <td class="text-warning fw-bold">Under Investigation</td>
                                </tr>
                                <tr>
                                    <td>Michael Torres</td>
                                    <td>Joseph Lim</td>
                                    <td>Verbal Abuse</td>
                                    <td class="text-danger fw-bold">Pending</td>
                                </tr>
                                <tr>
                                    <td>Emily Cruz</td>
                                    <td>Sarah Velasco</td>
                                    <td>Harassment</td>
                                    <td class="text-warning fw-bold">Under Investigation</td>
                                </tr>
                                <tr>
                                    <td>Carlos Mendoza</td>
                                    <td>Gregorio Santos</td>
                                    <td>Vandalism</td>
                                    <td class="text-danger fw-bold">Pending</td>
                                </tr>
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
