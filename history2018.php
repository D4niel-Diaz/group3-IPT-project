<?php

include('partials/header.php');
include('partials/sidebar.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Official History</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<main id="main" class="main">
        <!-- Logout Button -->
        <div class="text-end mt-3 me-3">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>



        <div class="pagetitle">
            <h1>Barangay Official History</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item">Barangay Official History</li>
                    <li class="breadcrumb-item">2013-2018</li>
                    <!-- <li class="breadcrumb-item">Barangay Official Info</li> -->
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Barangay Officials</h5>
                                <div class="dropdown"> 
                                <button class="btn btn-primary dropdown-toggle m-3" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">Year</button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="history2023.php">2018-2023</a></li>
                                            <li><a class="dropdown-item" href="history2018.php">2013-2018</a></li>
                                    </ul>
                                </div>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
                            <!-- Barangay Officials Table -->
                             <div  class="container mt-5">
                            <table class="table table-bordered table-striped mt-4">
                                <thead  class="table-dark">
                                    <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Term Years</th>
                                    <th>Remarks</th>
                                    </tr>
                                </thead>
                                <?php
                $officials = [
                    ["Juan Dela Cruz", "Barangay Captain", "2013-2018", "Extended due to election postponements"],
                    ["Maria Santos", "Barangay Kagawad", "2013-2018", "Extended due to election postponements"],
                    ["Pedro Reyes", "Barangay Kagawad", "2013-2018", "Extended due to election postponements"],
                    ["Ana Villanueva", "Barangay Kagawad", "2013-2018", "Extended due to election postponements"],
                    ["Luis Ramirez", "Barangay Kagawad", "2013-2018", "Extended due to election postponements"],
                    ["Carmen Bautista", "Barangay Kagawad", "2013-2018", "Extended due to election postponements"],
                    ["Roberto Gonzales", "Barangay Kagawad", "2013-2018", "Extended due to election postponements"],
                    ["Elena Cruz", "Barangay Kagawad", "2013-2018", "Extended due to election postponements"],
                    ["Ricardo Mendoza", "Barangay Secretary", "2013-2018", "Extended due to election postponements"],
                    ["Sofia Lopez", "Barangay Treasurer", "2013-2018", "Extended due to election postponements"]
                   
                ];

                foreach ($officials as $row) {
                    echo "<tr>";
                    echo "<td>{$row[0]}</td>";
                    echo "<td>{$row[1]}</td>";
                    echo "<td>{$row[2]}</td>";
                    echo "<td>{$row[3]}</td>";
                    echo "</tr>";
                }
                ?>
                </div>
            </div>


                
            </tbody>
        </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- Closing div for table1 -->
                
                  
                </div> <!-- Closing div for table2 -->
                    </div>
                    </div>

                   
                    
    
</body>
</html>
