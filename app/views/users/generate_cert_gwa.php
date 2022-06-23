
<?php
    require APPROOT . '/views/includes/header.php';
    require APPROOT . '/views/includes/navbar.php';
?>

<main>
    <div class="container px-2">

    <h5 class="mt-4"><button class="btn btn-outline-secondary" onclick="history.back()"><i class="fas fa-arrow-left"></i>&nbsp;Go Back</button></h5>

        <div class="page-inner">
            <div class="row mt--2">
                <div class="col-md-12">

                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6 col-md-10">
                                    Generate Certificate
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

                            <div class="head-break"></div>

                            <div class="content-text">
                                <h5>
                                    Cert No.: <a id="gwa-number"><?php echo $data['certificate']->cert_no ?></a>
                                </h5>
                                <h4 class="uppercase-text certification">certification</h4>
                                <p class="uppercase-text">
                                    <strong>to whom it may concern:</strong>
                                </p>
                                <p class="indent first-paragraph">
                                    This is to clarify that <strong><font class="remove-decor" id="name-on-text-body"><?= $data['certificate']->honorific .' ' . strtoupper( $data['certificate']->firstname.' ') . $data['certificate']->middlename .' '. strtoupper($data['certificate']->lastname) ?></font></strong>, resident of <font class="remove-decor" id="brgy-on-body"><?= $data['certificate']->address ?></font> is a graduate of this University with the degree of <strong><i id="course-on-text-body"><?= $data['certificate']->course ?></i></strong> <a class="remove-decor" id="dateGrad-on-text-body"><?php $dateGraduated = new DateTime($data['certificate']->date_graduated); echo date_format( $dateGraduated,'F j, Y') ?></a> as per PSU Board of Regents (BOR) Resolution No. <?= $data['certificate']->res_no ?>, series of <?= $data['certificate']->series_of ?>.                                
                                </p>
                                <p class="indent">
                                    This is to certify further that <font class="remove-decor" id="given-on-text-body"><?= $data['certificate']->honorific ?> <?= $data['certificate']->lastname?></font> earned an <i><strong>over-all general weighted average of <font id="avg-on-text-body"><?= $data['certificate']->over_all_gwa ?> (<?= $data['percent']?>%)</font></strong></i>.
                                </p>
                                <p class="purpose-on-text-body indent">
                                    This certification is issued upon request of <font class="remove-decor" id="given-on-text-body"><?= $data['certificate']->honorific ?> <?= $data['certificate']->lastname?></font> for <?= $data['certificate']->purpose ?> purposes.
                                </p>
                                <p class="indent">
                                    Done this <span class="remove-decor" id="dateReceivef-on-text-body"><?= date('jS') ?></span> day of <span><?= date('F Y') ?></span>, at the PSU-Alaminos City Campus, Alaminos City, Pangasinan.
                                </p>

                                <div class="name-and-position">
                                    <p class="name-of-registrar">
                                        <?= strtoupper($data['user']->name) ?>
                                    </p>
                                    <i class="name-of-position">Acting Registrar</i>
                                </div>

                                <p class="lower-text">
                                    Not Valid Without<br>
                                    University Seal
                                </p>
                                <p class="lower-text">
                                    Paid Under O.R. No.: <?= $data['certificate']->or_no ?><br>
                                    Issued on <?= date('F d, Y') ?><br>
                                    /<?= $data['user']->user_code ?>
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