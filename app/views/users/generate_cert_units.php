
<?php
    require APPROOT . '/views/includes/header.php';
    require APPROOT . '/views/includes/navbar.php';
?>
<title>Certification</title>
<main>
    <div class="container px-2">

    <h3 class="mt-4">Generate Certificate</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Generate Certificate</li>
        </ol>
        <div class="page-inner">
            <div class="row mt--2">
                <div class="col-md-12">

                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6 col-md-10">
                                    Units Certification
                                </div>
                                <div class="col-6 col-md-2  d-grid gap-2">
                                    <button class="btn btn-primary btn-sm" onclick="printDiv('printThis')">
                                    <i class="fa fa-print"></i>
                                    Print Certificate
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body m-5" id="printThis">

                            <!-- Layout certificate here... -->
                            <div class="head-gwa">
                                <div class="head-left-text-side">
                                    <p class="top-text">Republic of the Philippines</p>
                                    <h4 class="psu-font">Pangasinan State University</h4>
                                    <p><strong>Alaminos City Campus</strong></p>
                                    <p><i>Bolaney, Alaminos City, Pangasinan 2404</i></p>
                                </div>

                                <div class="head-right-logo-side">
                                    <img class="psu-logo" src="..\..\img\logo.png" alt="psu-logo">
                                </div>
                            </div>

                            <hr class="head-break">

                            <div class="content-text">
                                <h5>
                                    Cert No.: <a id="gwa-number">GWA 0018s.2022</a>
                                </h5>
                                <h4 class="uppercase-text certification">eto</h4>
                                <p class="uppercase-text">
                                    <strong>to whom it may concern:</strong>
                                </p>

                                <p class="indent">
                                    This is to certify that <strong><a class="remove-decor" id="name-on-text-body">Mr. Marky DAVID Bomboa</a></strong>, resident of <a class="remove-decor" id="brgy-on-body">Brgy. Ambabaay, Bani, Pangasinan</a> is a graduate of this University with the degree of <strong><i id="course-on-text-body">Bachelor of Elementary Education major in Enhanced General Education (BEED EGE)</i></strong> took and passed the following Professional Education Subjects – Field Study, to wit:
                                </p>

                                <table class="table-units-middle">
                                    <thead>
                                        <tr>
                                        <strong>
                                            <th>Course No.</th>
                                            <th>Course Description</th>
                                            <th>Rating</th>
                                            <th>Unit/s</th>
                                        </strong>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Prof Ed 115</td>
                                            <td>Field Study 1</td>
                                            <td>1.75</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Prof Ed 116</td>
                                            <td>Field Study 2</td>
                                            <td>1.75</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Prof Ed 117</td>
                                            <td>Field Study 3</td>
                                            <td>1.75</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Prof Ed 118</td>
                                            <td>Field Study 4</td>
                                            <td>1.75</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Prof Ed 119</td>
                                            <td>Field Study 5</td>
                                            <td>1.75</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Prof Ed 120</td>
                                            <td>Field Study 6</td>
                                            <td>1.75</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td class="gpa-table"><strong>GPA:</strong></td>
                                            <td class="percent-table"><strong>(92%)</strong></td>
                                            <td><strong>1.54</strong></td>
                                            <td><strong>6</strong></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <p class="indent">
                                    This is to certify further that <a class="remove-decor">Mr. Bomboa</a>, earned a rating of <strong><a class="remove-decor">1.25</a></strong> in <strong>Prof Ed 121 – Practice Teaching</strong> (6 units).
                                </p>
                                <p class="indent">
                                    This certification is issued upon request of <strong><a class="remove-decor">Mr. Bomboa</a></strong> for employment purposes only.
                                </p>
                                <p class="indent">
                                    Given this <a class="remove-decor" id="dateReceivef-on-text-body">5th day of February 2021</a>, at the PSU-Alaminos City Campus, Alaminos City, Pangasinan.
                                </p>
                            
                                <div class="name-and-position">
                                    <p class="name-of-registrar">
                                        Ryan D. Bangumbilyon
                                    </p>
                                    <i class="name-of-position">Acting Registrar</i>
                                </div>

                                <p class="lower-text">
                                    Not Valid Without<br>
                                    University Seal
                                </p>
                                <p class="lower-text">
                                    Paid Under O.R. No.: 0528674<br>
                                    Issued on March 17, 2022<br>
                                    /rds
                                </p>
                                <i class="lower-text">Doc. Stamp Tax Paid</i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</main>

<?php
    require APPROOT . '/views/users/modals/modal-gwa.php';
?>

<?php
    require APPROOT . '/views/includes/footer.php';
?>