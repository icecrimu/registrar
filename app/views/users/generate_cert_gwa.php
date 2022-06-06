
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