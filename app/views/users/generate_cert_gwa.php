
<?php
    require APPROOT . '/views/includes/header.php';
    require APPROOT . '/views/includes/navbar.php';
?>

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
                                    GWA Certification
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
                                    <img class="psu-logo" src="..\..\public\img\logo.png" alt="psu-logo">
                                </div>

                            </div>

                            <hr class="head-break">

                            <div class="content-text">
                                <h5>
                                    Cert No.: <a id="gwa-number">GWA 0018s.2022</a>
                                </h5>
                                <h4 class="uppercase-text certification">certification</h4>
                                <p class="uppercase-text">
                                    <strong>to whom it may concern:</strong>
                                </p>
                                <p class="indent first-paragraph">
                                    This is to clarify that <strong><a class="remove-decor" id="name-on-text-body">Vladimere Cruz Poohtin</a></strong>, resident of <a class="remove-decor" id="brgy-on-body">Brgy. Polo, Alaminos City, Pangasinan</a> is a graduate of this University with the degree of <strong><i id="course-on-text-body">Bachelor of Secondary Education major in English (BSE EL)</i></strong> <a class="remove-decor" id="dateGrad-on-text-body">June 19, 2018</a> as per PSU Board of Regents (BOR) Resolution No. 4, series of 1018.                                
                                </p>
                                <p class="indent">
                                    This is to certify further that <a class="remove-decor" id="given-on-text-body">Mr. Poothin</a> earned an <strong>over-all general weighted average of <a id="avg-on-text-body">2.122 (85%)</a></strong>.
                                </p>
                                <p class="purpose-on-text-body indent">
                                    This certification is issued upon request of <a class="remove-decor" id="given-on-text-body">Mr. Poothin</a> for employment purposes.
                                </p>
                                <p class="indent">
                                    Done this <a class="remove-decor" id="dateReceivef-on-text-body">7th day of March 2022</a>, at the PSU-Alaminos City Campus, Alaminos City, Pangasinan.
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