
<?php
    require APPROOT . '/views/includes/header.php';
    require APPROOT . '/views/includes/navbar.php';
?>

<main>
    <div class="container px-2">

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Units Certification</h5>
                    <p class="card-text">Certificate 1</p>
                    <a href="<?php echo URLROOT. '/users/cert_units' ?>" class="btn btn-primary">View</a>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">GWA Certification</h5>
                    <p class="card-text">Certificate 2</p>
                    <a href="<?php echo URLROOT. '/users/cert_gwa' ?>" class="btn btn-primary">View</a>
                </div>
                </div>
            </div>
        </div>

    </div>
</main>



<?php
    require APPROOT . '/views/includes/footer.php';
?>