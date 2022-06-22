
<?php
    require APPROOT . '/views/includes/header.php';
    require APPROOT . '/views/includes/navbar.php';
?>


<main>
    <div class="container px-2">

        <h5 class="mt-4"><button class="btn btn-outline-secondary" onclick="history.back()"><i class="fas fa-arrow-left"></i>&nbsp;Go Back</button></h5>


        <div class="card mb-2 col-12 offset-md-2 col-md-8 mt-3 mb-5">
            <div class="card-header">
                <div class="row">
                 
                    <h5 class="mx-auto text-center">Settings</h5>

                </div>
            </div>

            <div class="card-body ">
                <form action="<?php echo URLROOT; ?>/users/updateSettings" method="POST">
                    <div class="row g-2 pb-3">
                        <div class="col-4  ">
                            <label class="col-form-label">Course No.</label>
                            <div class="row gy-1">
                                <div class="input-group">
                                    <input type="text" name="courseNo1" value="<?php echo $data['settings'][0]->course_no?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseNo2" value="<?php echo $data['settings'][1]->course_no?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseNo3" value="<?php echo $data['settings'][2]->course_no?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseNo4" value="<?php echo $data['settings'][3]->course_no?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseNo5" value="<?php echo $data['settings'][4]->course_no?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseNo6" value="<?php echo $data['settings'][5]->course_no?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseNo7" value="<?php echo $data['settings'][6]->course_no?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-4  ">
                            <label class="col-form-label">Course Description</label>
                            <div class="row gy-1">
                                <div class="input-group">
                                    <input type="text" name="courseDesc1" value="<?php echo $data['settings'][0]->course_desc ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseDesc2" value="<?php echo $data['settings'][1]->course_desc ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseDesc3" value="<?php echo $data['settings'][2]->course_desc ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseDesc4" value="<?php echo $data['settings'][3]->course_desc ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseDesc5" value="<?php echo $data['settings'][4]->course_desc ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseDesc6" value="<?php echo $data['settings'][5]->course_desc ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="courseDesc7" value="<?php echo $data['settings'][6]->course_desc ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 ">
                            <label class="col-form-label">Units</label>
                            <div class="row gy-1">
                                <div class="input-group">
                                    <input type="text" name="units1" value="<?php echo $data['settings'][0]->units ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="units2" value="<?php echo $data['settings'][1]->units ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="units3" value="<?php echo $data['settings'][2]->units ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="units4" value="<?php echo $data['settings'][3]->units ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="units5" value="<?php echo $data['settings'][4]->units ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="units6" value="<?php echo $data['settings'][5]->units ?>" class="form-control">
                                </div>
                                <div class="input-group">
                                    <input type="text" name="units7" value="<?php echo $data['settings'][6]->units ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Registrar Name</label>
                            <input type="text" name="name" value="<?php echo $data['user']->name ?>" class="form-control">
                        </div>
                        <div class="col-6">
                            <label class="col-form-label">Code</label>
                            <input type="text" name="userCode" placeholder="09" value="<?php echo $data['user']->user_code ?>" class="form-control">
                        </div>
 
                        <div class="d-grid gap-2 col-6 pt-3 mx-auto">
                            <button class="btn btn-success" type="submit"><h6 class="my-auto">Save</h6></button>
                        </div>
                    </div>
                </form>   
            </div>
        </div>  
    </div>
</main>


<?php
    require APPROOT . '/views/includes/footer.php';
?>