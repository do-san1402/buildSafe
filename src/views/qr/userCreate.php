<?php

use app\models\User;
/**
 * @var User $user
 */
?>


<style>
    .required-label::after {
        content: "*";
        color: red;
    }
</style>

<div class="container">
    <div class="col-lg-12 col-xl-8 mx-auto mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Metricon</h5>
            </div>
            <form class="card-body" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Welcome:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static"> <?= $user->getName() ?></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">From:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">Blitzem Carpentry</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Site Address:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">Lot 15 Smith Street</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Site Supervisor:</label>
                    <div class="col-sm-8">
                        <p class="form-control-static">Tony Smith 0409 167 788</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label required-label">You Are on site today to:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="work_today" placeholder="Enter text" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label required-label">Work to be Performed Today:</label>
                    <div class="col-sm-8">
                        <select name="preform_today" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Frame Carpenter Labour">Frame Carpenter Labour</option>
                            <option value="Floor joist">Floor joist</option>
                            <option value="Truss Install">Truss Install</option>
                            <option value="22">22</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label required-label">No of people in your crew today:</label>
                    <div class="col-sm-8">
                        <input type="text" name="number_people" class="form-control" placeholder="Enter text" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label required-label">Dropping off of Materials:</label>
                    <div class="col-sm-8">
                        <input class="form-control-file" type="file" name="drop_material" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label required-label">Site Inspection / Measure up:</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" placeholder="Enter text" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label required-label">Pls Complete your “pre start Site check”</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="danger_issue_content" placeholder="Enter text" required>
                        <input class="form-control-file" type="file" name="danger_issue_image" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label required-label">Do You wish to leave feedback</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="feedback_content" placeholder="Enter text" required>
                        <input class="form-control-file" type="file" name="feedback_image" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8 offset-sm-4">
                        <button type="submit" class="btn btn-primary btn-submit mt-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>






