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
            <h1>Barangay Role Management</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item">Barangay Role Management</li>
                    
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
                                <h5 class="card-title">Barangay Officials Role Management</h5></div>
                                    <div  class="container mt-5">
                                        <table class="table table-bordered table-striped mt-4">
                                            <thead  class="table-dark">
                                                <tr>
                                                <th style="width: 15%">Officials</th>
                                                <th style="width: 40%">Powers, Duties and Functions</th>
                                                <th style="width: 35%">Benefits</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Barangay Captain (Elected)</td>
                                                    <td>
                                                        <ol>
                                                            <li>Head of the barangay governm ent; such: Enforce all laws and ordinances;</li>
                                                            <li>Negotiate, enter into, and sign
                                                            contracts upon authorization of the SB;
                                                            </li>
                                                            <li>	Maintain public order;</li>
                                                            <li> Call and preside over the sessions of the SB, LT, and BA</li>
                                                            <li> 	Appoint or replace barangay secretary, t reasure, and other
                                                            appointed barangay officials upon approval of the SB;
                                                            </li>
                                                            <li>	Organize and lead an emergency
group for maintenance of peace and order, or during emergency and calamity;
</li>
<li> 	Prepare the plan and budget in coordination with the BDC;</li>
<li>Approve vouchers relating to the disbursem ent of funds;</li>
<li>Enforce laws and regulations relating to pollution control and protection of the environment;</li>
<li>Administer the operation of the Katarungang Pambarangay;</li>
<li>Exercise general supervision over the activities of the SK;</li>
<li>Ensure the delivery of basic services;</li>
<li>Conduct an annual Palarong Barangay;</li>
<li>Promote general welfare of the barangay;</li>
<li>Exercise other duties and functions as m ay be prescribed by law or
ordinance</li>
</ol>

<td>
    <ol>
        <li>Honoraria, allowances and other emoluments not less than
P1, 000 per month;<br>
PB & SB salaries and other
emoluments shall not exceed 60 percent of the total income of the barangay; and such
compensation, per diem and
travel expenses shall not exceed those granted to city/ municipal mayor and sanggunian.</li>
<li>Christmas bonus at least P1, 000;</li>
<li>Insurance ( temporary and permanent disability, double
indemnity, accident, death and burial benefits);</li>
<li>Free medical care including subsistence, medicines, and medical attendance in any government hospital or
institution. Or in case of extreme urgency, he/ she may submit to
nearest private clinic, hospital or institution with the expenses not exceeding P5, 000, which
chargeable to barangay funds;</li>
<li>Exempted from paying tuition and matriculation fees for legitimate dependent children attending
state and colleges or universities;</li>
<li>Entitled to appropriate civil
service eligibility on the basis of
the num ber of years of service to the barangay.</li>

    </ol>
</td>
	

                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Sangguniang Barangay(SB)</td>
                                                    <td>
                                                        <ol>
                                                            <li>Enact ordinances promoting general welfare, taxes and budget;</li>
                                                            <li>Provide for the construction and maintenance of barangay
                                                            infrastructures;</li>
                                                            <li>Suggest or recommend legislative agenda for city'/ municipal SB for the improvement of the barangay;</li>
                                                            <li>Assist in the establishment of cooperative enterprises that will
                                                            im prove the economic conditions and well- being of the residents;</li>
                                                            <li>Solicit and accept monies, properties or materials from donation and
                                                            organize activities to generate barangay funds;</li>
                                                            <li>Authorize PB to enter into contract in behalf of the barangay, subject to
                                                            the provisions of this code;</li>
                                                            <li>Prescribe fines in amount not
                                                            exceeding P1, 000 for violation of barangay ordinances;</li>
                                                            <li>Organize regular lectures, programs and forum on community problems;</li>
                                                            <li>Adopt measures to prevent and
                                                            control proliferation of squatters and mendicants in the barangay;</li>
                                                            <li>Adopt measures towards the
                                                            prevention and eradication of drug abuse, child abuse, and juvenile delinquency;</li>
                                                            <li>Provide for the proper development and welfare of children;</li>
                                                            <li>Provide administrative needs of the Lupong Tagapamayapa and the Pangkat ng Tagapagsundo;</li>
                                                            <li>Provide for the delivery of basic services;</li>
                                                            <li>Initiate the establishment of a barangay high school, if feasible;</li>
                                                            <li>	Approve plans for the development
                                                            of the barangay.</li>
                                                        </ol>                                                       
                                                    </td>
                                                    <td>Same with PB except honoraria, allowances and other emoluments which shall not be less than P600 per month.</td>
                                                </tr>
                                                <tr>
                                                   <td>Sangguniang Kabataan ( SK) Chairman</td>
                                                   <td>
                                                    <ol>
                                                        <li>Call and preside over all meetings of the KK and the SK;</li>
                                                        <li>Implement policies, program s, and projects for the youth;</li>
                                                        <li>Exercise general supervision over the affairs and activities of the SK;</li>
                                                        <li>Appoint secretary and treasurer with
                                                        the concurrence of the SK officials</li>
                                                    </ol>   
                                                </td> 
                                                <td>Has the same privileges enjoyed by other Sangguniang Barangay officials</td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                    Barangay Secretary
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li>Keep custody of all records of the SB and BA meetings;</li>
                                                            <li>Prepare and keep minutes of all meetings;</li>
                                                            <li>Prepare a list of members of BA;</li>
                                                            <li>Assist in the preparation of all
                                                            necessary forms for the conduct of barangay elections, initiatives,referenda or plebiscites;</li>
                                                            <li>Assist in the registration of births, deaths and marriages;</li>
                                                            <li>6.	Keep an updated record of all inhabitants of the barangay;</li>
                                                            <li>Submit a report on the actual number of barangay resident;</li>
                                                            <li>Exercise other duties and functions as may be prescribed by law or
                                                            ordinance;</li>
                                                        </ol>
                                                    </td>
                                                    <td>Same with Sangguniang Barangay ( SB) members.</td>
                                                </tr>
                                                <tr>
                                                    <td>Barangay Treasurer</td>
                                                    <td>
                                                        <ol>
                                                            <li>Keep custody of barangay funds and properties;</li>
                                                            <li>Collect and issue receipts for taxes, fees, contributions, monies, materials, and all other resources accruing to the barangay and deposit the same in the account of the
                                                            barangay;</li>
                                                            <li>Disburse funds;</li>
                                                            <li>Submit to the PB a statement of actual income and expenditures of the barangay;</li>
                                                            <li>Certify as to the availability of funds;</li>
                                                            <li>Make a written report of all barangay funds and properties under custody;</li>
                                                            <li>Post itemized monthly revenues and expenditures of the barangay;</li>
                                                            <li>Plan and attend to the rural postal circuit;</li>
                                                            <li>Exercise other duties and functions as m ay be prescribed by law or
                                                            ordinance.</li>
                                                        </ol>
                                                    </td>
                                                    <td>Same with Sangguniang Barangay ( SB) members.</td>
                                                </tr>
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
