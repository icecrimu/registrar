
<?php
    require APPROOT . '/views/includes/header.php';
    require APPROOT . '/views/includes/navbar.php';
?>

<main>
    <div class="container px-2">

        <div class="card mb-4">
            <div class="card-header">

                <div class="d-flex justify-content-between">
                    <div class="">
                    <i class="fas fa-users"></i>
                    Certification Section 
                    </div>

                    <div class="">
                        <button type="button" class="btn btn-primary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#modalUnitsCert">
                        <i class="fas fa-clipboard-list"></i>&nbsp; Create 
                        </button>
                    </div>

                </div>
            </div>
            <div class="card-body ">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <!-- <th>Type</th> -->
                            <th>Purpose</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
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
                            <td><?php echo $certificate->lastname . ',' . $certificate->firstname . ' ' .$certificate->middlename. ' ' . $certificate->suffix; ?></td>
                            <td><?php echo $certificate->purpose;?></td>
                            <td><?php echo date('Y/m/d h:i A', strtotime($certificate->date_created))?></td>
                            <td><a class="btn btn-primary btn-sm rounded-pill" href="<?php echo URLROOT . "/users/generate_cert_units/" . $certificate->id?>">Generate</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</main>

<?php
    require APPROOT . '/views/users/modals/modal-units.php';
?>

<?php
    require APPROOT . '/views/includes/footer.php';
?>