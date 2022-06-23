
<?php
    require APPROOT . '/views/includes/header.php';
    require APPROOT . '/views/includes/navbar.php';
?>
<title>Certification</title>
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
                                    <img class="psu-logo" src="<?php echo URLROOT .'/img/logo.png' ?>" alt="psu-logo">
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

                                <p class="indent">
                                    This is to certify that <strong><span class="remove-decor" id="name-on-text-body"><?= $data['certificate']->honorific .' ' . strtoupper( $data['certificate']->firstname.' ') . $data['certificate']->middlename .' '. strtoupper($data['certificate']->lastname) ?></span></strong>, resident of <font class="remove-decor" id="brgy-on-body"><?= $data['certificate']->address ?></font> is a graduate of this University with the degree of <strong><i id="course-on-text-body"><?= $data['certificate']->course ?></i></strong> took and passed the following Professional Education Subjects – Field Study, to wit:
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
                                            <td><?= $data['detail'][0]->course_no ?></td>
                                            <td><?= $data['detail'][0]->course_desc ?></td>
                                            <td><?= $data['certificate']->rating_no1 ?></td>
                                            <td><?= $data['detail'][0]->units ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= $data['detail'][1]->course_no ?></td>
                                            <td><?= $data['detail'][1]->course_desc ?></td>
                                            <td><?= $data['certificate']->rating_no2 ?></td>
                                            <td><?= $data['detail'][1]->units ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= $data['detail'][2]->course_no ?></td>
                                            <td><?= $data['detail'][2]->course_desc ?></td>
                                            <td><?= $data['certificate']->rating_no3 ?></td>
                                            <td><?= $data['detail'][2]->units ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= $data['detail'][3]->course_no ?></td>
                                            <td><?= $data['detail'][3]->course_desc ?></td>
                                            <td><?= $data['certificate']->rating_no4 ?></td>
                                            <td><?= $data['detail'][3]->units ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= $data['detail'][4]->course_no ?></td>
                                            <td><?= $data['detail'][4]->course_desc ?></td>
                                            <td><?= $data['certificate']->rating_no5 ?></td>
                                            <td><?= $data['detail'][4]->units ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= $data['detail'][5]->course_no ?></td>
                                            <td><?= $data['detail'][5]->course_desc ?></td>
                                            <td><?= $data['certificate']->rating_no6 ?></td>
                                            <td><?= $data['detail'][5]->units ?></td>
                                        </tr>
                                        <tr>
                                            <td class="gpa-table"><strong>GPA:</strong></td>
                                            <td class="percent-table"><strong>(<?= $data['percent'] ?>%)</strong></td>
                                            <td><strong><?= number_format($data['totalRatings'],2) ?></strong></td>
                                            <td><strong><?= $data['totalUnits'] ?></strong></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <p class="indent">
                                    This is to certify further that <span class="remove-decor"><?= $data['certificate']->honorific ?> <?= $data['certificate']->lastname?></span>, earned a rating of <strong><span class="remove-decor"><?= $data['certificate']->rating_no7 ?></span></strong> in <strong><?= $data['detail'][6]->course_no ?> – <?= $data['detail'][6]->course_desc ?></strong> (<?= $data['detail'][6]->units ?> units).
                                </p>
                                <p class="indent">
                                    This certification is issued upon request of <strong><span class="remove-decor"><?= $data['certificate']->honorific ?> <?= $data['certificate']->lastname?></span></strong> for <?= $data['certificate']->purpose ?> purposes only.
                                </p>
                                <p class="indent">
                                    Given this <span class="remove-decor" id="dateReceivef-on-text-body"><?= date('jS') ?></span> day of <span><?= date('F Y') ?></span>, at the PSU-Alaminos City Campus, Alaminos City, Pangasinan.
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