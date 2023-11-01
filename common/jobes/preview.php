<?php require_once("config.php");
$reg_no = $_GET['id']; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Application Request Form</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicons/favicon-16x16.png">
    <meta name="description" content="Pylon Loan HTML Template">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        @page {
            size: auto;
            margin: 10mm;
            margin-right: -10px;
            margin-left: -10px;
        }

        @media print {
            a[href]:after {
                content: none !important;
            }
        }

        @media print {
            #printbtn {
                display: none !important;
            }

            .main-heading {
                font-size: 30px !important;
            }

            .underline {
                line-height: 27px !important;
                text-decoration-style: dotted !important;
            }
        }
    </style>
</head>

<body>
<section>
        <div class="row">
            <div class="col-5">
            </div>
            <div class="col-3">
                <img src="job_log.svg" class="logo_imag">
            </div>
            <div class="col-5">
            </div>
            <div class="col-md-12">
                <h2 class="main-heading">Nofino Rural Finance Private Limited</h2>
                <p class="sub-heading">Ministry of Corporate Affairs (Govt. of India ) Govt. CIN. No. U64990AS2023PTC025316 TAN. SHLN04275F</p>
                <p class="address">Head Office: Mandia Goan, Mandia, Barpeta, Assam -781308 India</p>
                <p class="email"> Email: hr@nofinofinance.com , Website: www.nofinofinance.com</p>
            </div>
        </div>
        <div class="col-sm-12">
            <hr class="hrcls">
        </div>
    </section>
    <div class="table22">
        <?php $sql = "SELECT count(*) from jobe_registrations WHERE reg_no=:reg_no";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->fetchcolumn();
        if ($count == 0) {
            echo 'Registration number is missing or invalid.Kindly filup <a href="index.php">admission form</a>..';
        } else {
        ?>
            <?php

            $sql = "SELECT * from jobe_registrations WHERE reg_no=:reg_no";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
            $stmt->execute();
            $rows = $stmt->fetchall();
            foreach ($rows as $row) {
            ?>

                <div class="col-12" style="text-align: center;padding-bottom: 5px;">
                    <h3> <u>Job Application Request form</u></h3>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-bordered ">
                        <tbody>
                            <tr>
                                <th width="10%">Registration No:</th>
                                <td width="10%" style="color:red;">                                    
                                    <Strong><?php echo $row['reg_no']; ?></Strong>
                                </td>
                                <th width="5%" >Jobes name</th>
                                <td width="16%"style="color:#379202;">
                                    <Strong><?php echo $row['jobes']; ?></Strong>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="table-responsive-sm">
                    <table class="table table-bordered ">
                        <tbody>
                            <tr>
                                <th width="24%">Your Full Name :</th>
                                <td><?php echo $row['name']; ?></td>
                                <td width="13%" rowspan="7">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <div style="width: 150px; ">
                                                    <img src="uploads/<?php echo $row['image']; ?> " width="150" height="150">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="form-group">
                                                <div style=" width: 150px; ">
                                                    <img src="uploads/<?php echo $row['sign']; ?>" width="151" height="80" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr height="10%">
                                <th>Father Name :</th>
                                <td><?php echo $row['fname']; ?></td>
                            </tr>
                            <tr>
                                <th>Mother Name :</th>
                                <td><?php echo $row['mname']; ?></td>
                            </tr>
                            <tr>
                                <th>Email :</th>
                                <td><?php echo $row['email']; ?></td>
                            </tr>
                            <tr>
                                <th>Mobile No :</th>
                                <td colspan="8"><?php echo $row['mobile']; ?></td>
                            </tr>
                            <tr>
                                <th>DOB :</th>
                                <td colspan="8"><?php echo $row['birthdate']; ?></td>
                            </tr>
                            <tr>
                                <th>Gender :</th>
                                <td colspan="8"><?php echo $row['gender']; ?></td>
                            </tr>
                            <tr>
                                <th>Ctaegory : </th>
                                <td colspan="8"><?php echo $row['category']; ?></td>
                            </tr>
                            <tr>
                                <th>Qualification :</th>
                                <td colspan="8"><?php echo $row['qualification']; ?></td>
                            </tr>
                            <tr>
                                <th>Pan Card :</th>
                                <td colspan="8"><?php echo $row['pancard']; ?></td>
                            </tr>
                            <tr>
                                <th>Aadhaar Card :</th>
                                <td colspan="8"><?php echo $row['aadhaarcard']; ?></td>
                            </tr>
                            <tr>
                                <th>Bank Account Number :</th>
                                <td colspan="8"><?php echo $row['bankcnumber']; ?></td>
                            </tr>
                            <tr>
                                <th>IFSC Code :</th>
                                <td colspan="8"><?php echo $row['ifsc']; ?></td>
                            </tr>
                            <tr>
                                <th>Branch Name :</th>
                                <td colspan="8"><?php echo $row['bankbranch']; ?></td>
                            </tr>
                            <tr>
                                <th>Martial Status :</th>
                                <td colspan="8"><?php echo $row['martialstatus']; ?></td>
                            </tr>
                            <tr>
                                <th>Spose Name :</th>
                                <td colspan="8"><?php echo $row['spname']; ?></td>
                            </tr>
                            <tr>
                                <th>Full Address :</th>
                                <td colspan="8">
                                    <?php echo $row['houseno']; ?>
                                    <?php echo $row['street']; ?>
                                    <?php echo $row['city']; ?>
                                    <?php echo $row['state']; ?>
                                    <?php echo $row['pincode']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" style="text-align: justify;"><b> Disclaimer:</b> I hereby declare that all the information given above is true and correct to the best of my knowledge.
                                    All the information shared in the resume is correct, and I take full responsibility for its correctness. I solemnly declare that the information in this resume is true to the best of my knowledge
                                    and belief.
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="col-md-12"></div>
                <br>
                <div class="text-center">
                    <a href="../../index.php" class="btn btn-info " id="printbtn">
                        <i class="fa fa-home"></i> Home</a>
                    <button type="button" class="btn btn-warning " id="printbtn" onclick="window.print()">
                        <i class="fa fa-print"></i> Print Form</button>
                </div>
                <!-- Row 4 end -->
            <?php } ?>
        <?php } ?>
    </div>
    <br><br><br>




    <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/jquery.validate.min.js"></script>
    <script src="../../assets/js/bootstrap-select.min.js"></script>
</body>

</html>





    