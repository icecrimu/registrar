<div class="modal fade" id="modalUnitsCert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="manageDetails" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered">
                            <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="manageDetails">Units Certification</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo URLROOT; ?>/users/modalCertUnits" method="POST" class="row g-2">
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
                                        <input type="text" name="purpose" value="employment" class="form-control" id="addPurpose"required >
                                    </div>
                                    
                                    <div class="col-12 input-group-sm">
                                        <label for="addAddress" class="col-form-label-sm">Address</label>
                                        <input type="text" name="address" class="form-control" id="addAddress"required >
                                    </div>

                                    <div class="col-12 input-group-sm">
                                        <label for="addCourse" class="col-form-label-sm">Course</label>
                                        <select id="addCourse" name="course" class="form-select" required>
                                            <option value="" selected>Select course</option>
                                            <option value="Bachelor of Elementary Education major in Enhanced General Education (BEEd EGE)">Bachelor of Elementary Education major in Enhanced General Education</option>
                                            <option value="Bachelor of Secondary Education major in Mathematics (BSE MATH)">Bachelor of Secondary Education major in Mathematics</option>
                                            <option value="Bachelor of Secondary Education major in English (BSE EL)">Bachelor of Secondary Education major in English</option>
                                            <option value="Bachelor of Science in Information Technology (BSIT)">Bachelor of Science in Information Technology</option>
                                            <option value="Bachelor of Science in Hospitality Management (BSHM)">Bachelor of Science in Hospitality Management</option>
                                            <option value="Bachelor of Science in Business Administration major in Financial Mgt. (BSBA)">Bachelor of Science in Business Administration major in Financial Mgt.</option>
                                        </select>
                                    </div>

                                    <div class="col-3 ">
                                        <label class="col-form-label-sm">Course No.</label>
                                        <div class="row gy-1">
                                            <div class="input-group-sm">
                                                <input type="text" name="courseNo1" id="courseNo1" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseNo2" id="courseNo2" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseNo3" id="courseNo3" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseNo4" id="courseNo4" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseNo5" id="courseNo5" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseNo6" id="courseNo6" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseNo7" id="courseNo7" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4  ">
                                        <label class="col-form-label-sm">Course Description</label>
                                        <div class="row gy-1">
                                            <div class="input-group-sm">
                                                <input type="text" name="courseDesc1" id="courseDesc1" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseDesc2" id="courseDesc2" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseDesc3" id="courseDesc3" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseDesc4" id="courseDesc4" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseDesc5" id="courseDesc5" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseDesc6" id="courseDesc6" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="courseDesc7" id="courseDesc7" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 ">
                                        <label class="col-form-label-sm">Rating</label>
                                        <div class="row gy-1">
                                            <div class="input-group-sm">
                                                <input type="text" name="rating1" class="form-control" required>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="rating2" class="form-control" required>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="rating3" class="form-control" required>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="rating4" class="form-control" required>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="rating5" class="form-control" required>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="rating6" class="form-control" required>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="rating7" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 ">
                                        <label class="col-form-label-sm">Units</label>
                                        <div class="row gy-1">
                                            <div class="input-group-sm">
                                                <input type="text" name="units1" id="units1" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="units2" id="units2" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="units3" id="units3" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="units4" id="units4" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="units5" id="units5" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="units6" id="units6" class="form-control" readonly>
                                            </div>
                                            <div class="input-group-sm">
                                                <input type="text" name="units7" id="units7" class="form-control" readonly>
                                            </div>
                                        </div>
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