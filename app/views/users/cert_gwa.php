
<?php
    require APPROOT . '/views/includes/header.php';
    require APPROOT . '/views/includes/navbar.php';
?>

<main>
    <div class="container px-2">
        
    <h5 class="mt-4"><button class="btn btn-outline-secondary" onclick="history.back()"><i class="fas fa-arrow-left"></i>&nbsp;Go Back</button></h5>

        <div class="card mb-4">
            <div class="card-header">

                <div class="d-flex justify-content-between">
                    <div class="">
                    <i class="fas fa-file-signature"></i>
                    GWA Certification
                    </div>

                    <div class="">
                        <button type="button" class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#modalGwaCert">
                        <i class="fas fa-plus"></i>&nbsp; Create Certificate
                        </button>
                    </div>

                </div>
            </div>
                <div class="card-body ">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Cert No.</th>
                                <th>Name</th>
                                <!-- <th>Type</th> -->
                                <th>Purpose</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Cert No.</th>
                                <th>Name</th>
                                <!-- <th>Type</th> -->
                                <th>Purpose</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($data['certificates'] as $certificate):?>
                            <tr>
                                <td><?php echo $certificate->cert_no ?></td>
                                <td><?php echo $certificate->lastname . ',' . $certificate->firstname . ' ' .$certificate->middlename. ' ' . $certificate->suffix; ?></td>
                                <td><?php echo $certificate->purpose;?></td>
                                <td><?php echo date('Y/m/d h:i A', strtotime($certificate->date_created))?></td>
                                <td class="text-center"><a class="btn btn-primary btn-sm rounded-pill" href="<?php echo URLROOT . "/users/generate_cert_gwa/" . $certificate->id?>"><i class="fas fa-file-alt"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
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