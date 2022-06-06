<div class="modal fade" id="modalGwaCert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="manageDetails" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered">
                            <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDetails">GWA Certification</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo URLROOT; ?>/users/modalCertGwa" method="POST" class="row g-2">
                                    <div class="col-4 input-group-sm">
                                        <label for="addFirstname" class="col-form-label-sm">Firstname</label>
                                        <input type="text" name="firstname" class="form-control" id="addFirstname"required >
                                    </div>

                                    <div class="col-4 input-group-sm">
                                        <label for="addMiddlename" class="col-form-label-sm">Middlename</label>
                                        <input type="text" name="middlename" class="form-control" id="addMiddlename"required >
                                    </div>

                                    <div class="col-4 input-group-sm">
                                        <label for="addLastname" class="col-form-label-sm">Lastname</label>
                                        <input type="text" name="lastname" class="form-control" id="addLastname"required >
                                    </div>

                                    <div class="col-4 input-group-sm">
                                        <label for="addSuffix" class="col-form-label-sm">Suffix</label>
                                        <input type="text" name="suffix" class="form-control" id="addSuffix" >
                                    </div>

                                    <div class="col-4 input-group-sm">
                                        <label for="addHonorific" class="col-form-label-sm">Mr./Ms.</label>
                                        <select id="addHonorific" name="honorific" class="form-select">
                                            <option value="Mr." selected>Mr.</option>
                                            <option value="Ms.">Ms.</option>
                                        </select>
                                    </div>

                                    <div class="col-4 input-group-sm">
                                        <label for="addPurpose" class="col-form-label-sm">Purpose</label>
                                        <input type="text" name="purpose" class="form-control" id="addPurpose"required >
                                    </div>
                                    
                                    <div class="col-12 input-group-sm">
                                        <label for="addAddress" class="col-form-label-sm">Address</label>
                                        <input type="text" name="address" class="form-control" id="addAddress"required >
                                    </div>

                                    <div class="col-12 input-group-sm">
                                        <label for="addCourse" class="col-form-label-sm">Course</label>
                                        <select id="addCourse" name="course" class="form-select">
                                            <option value="" selected>Select course</option>
                                            <option value="Bachelor of Elementary Education major in Enhanced General Education (BEEd EGE)">Bachelor of Elementary Education major in Enhanced General Education</option>
                                            <option value="Bachelor of Secondary Education major in Mathematics (BSE MATH)">Bachelor of Secondary Education major in Mathematics</option>
                                            <option value="Bachelor of Secondary Education major in English (BSE EL)">Bachelor of Secondary Education major in English</option>
                                            <option value="Bachelor of Science in Information Technology (BSIT)">Bachelor of Science in Information Technology</option>
                                            <option value="Bachelor of Science in Hospitality Management (BSHM)">Bachelor of Science in Hospitality Management</option>
                                            <option value="Bachelor of Science in Business Administration major in Financial Mgt. (BSBA)">Bachelor of Science in Business Administration major in Financial Mgt.</option>
                                        </select>
                                    </div>
                                    

                                    <div class="col-4 input-group-sm">
                                        <label for="addDateGraduated" class="col-form-label-sm">Date Graduated</label>
                                        <input type="date" name="dateGraduated" class="form-control" id="addDateGraduated"required >
                                    </div>

                                    <div class="col-4 input-group-sm">
                                        <label for="addOverAllGwa" class="col-form-label-sm">Over-all GWA</label>
                                        <input type="text" name="overAllGwa" class="form-control" id="addOverAllGwa"required >
                                    </div>

                                    <div class="col-4 input-group-sm">
                                        <label for="addResNo" class="col-form-label-sm">BOR Resolution No.</label>
                                        <input type="number" name="resNo" class="form-control" id="addResNo">
                                    </div>   

                                    <div class="col-4 input-group-sm">
                                        <label for="addSeriesOf" class="col-form-label-sm">Series of</label>
                                        <input type="number" name="seriesOf" class="form-control" id="addSeriesOf">
                                    </div>   

                                    <div class="col-4 input-group-sm">
                                        <label for="addCertNo" class="col-form-label-sm">Certificate No.</label>
                                        <input type="text" name="certNo" class="form-control" id="addCertNo">
                                    </div>   

                                    <div class="col-4 input-group-sm">
                                        <label for="addORno" class="col-form-label-sm">O.R No.</label>
                                        <input type="text" name="orNo" class="form-control" id="addORno"required >
                                    </div>
                                    

                                    

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>