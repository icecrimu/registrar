
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
                    <button type="button" id="addFacultyBtn" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modalAddFaculty">
                        Add
                    </button>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">GWA Certification</h5>
                    <p class="card-text">Certificate 2</p>
                    <button type="button" id="addFacultyBtn" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modalGwaCert">
                        Add
                    </button>
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