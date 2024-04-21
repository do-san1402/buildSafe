<?php

use app\models\User;
use app\widgets\Alert;

/**
 * @var User $model
 */

?>

<!-- Background image -->
<div id="intro" class="bg-image shadow-2-strong">
    <div class="background">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-8">
                    <form class="bg-white rounded shadow-5-strong p-5" method="POST">

                        <?php Alert::run() ?>

                        <h2 class="text-center font-weight-bold mb-4">Cadastro</h2>

                        <div class="form-group mb-4">
                            <label class="form-label" for="company_name">Company name</label>
                            <select name="company_name" id="company_name" class="form-control">
                                <option value="Hervey bay carpentry">Hervey bay carpentry</option>
                                <option value="Heath Mcphellamy">Heath Mcphellamy</option>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label" for="name">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" maxlength="255" required value="<?= $model->getName() ?>" />
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label" for="phone">Your Mobile contact No</label>
                            <input type="number" id="phone" name="phone" class="form-control" maxlength="13" required value="<?= $model->getName() ?>" />
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label" for="emergency_contact_name">Emergency contact name</label>
                            <input type="text" id="emergency_contact_name" name="emergency_contact_name" class="form-control" maxlength="13" required value="<?= $model->getName() ?>" />
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label" for="emergency_contact_phone">Emergency contact phone number</label>
                            <input type="number" id="emergency_contact_phone" name="emergency_contact_phone" class="form-control" maxlength="13" required value="<?= $model->getName() ?>" />
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label" for="trade_type">Pls Select form The Available Trade Types</label>
                            <select name="trade_type" id="trade_type" class="form-control">
                                <option value="Hire co">Hire co</option>
                                <option value="Drainer">Drainer</option>
                                <option value="CCTV Inspetc">CCTV Inspetc</option>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label" for="team_provide">Pls Select Service your team provides</label>
                            <select name="team_provide" id="team_provide" class="form-control">
                                <option value="Windowns">Windowns</option>
                                <option value="Balcony">Balcony</option>
                                <option value="Floor joits">Floor joits</option>
                            </select>
                        </div>

                        <!--<div class="form-group mb-4">
                            <label class="form-label" for="birthday">Birthday</label>
                            <input type="date" id="birthday" name="birthday" class="form-control" required value="<?= $model->getBirthday() ?>" />
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label" for="address">Address</label>
                            <input type="text" id="address" name="address" maxlength="255" class="form-control" required value="<?= $model->getAddress() ?>" />
                        </div> -->

                        <div class="form-group mb-4">
                            <label class="form-label" for="password">Pin</label>
                            <input type="password" id="password" maxlength="255" name="password" class="form-control" required />
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label" for="confirm-password">Confirmar Pin</label>
                            <input type="password" id="confirm-password" maxlength="255" name="confirm-password" class="form-control" required />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-success btn-block">
                            Enter
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->