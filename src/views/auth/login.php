<?php

use app\widgets\Alert;

?>

<!-- Background image -->
<div id="intro" class="bg-image shadow-2-strong">
    <div class="background">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-8">
                    <form class="bg-white rounded shadow-5-strong p-5" method="POST">

                        <?php Alert::run() ?>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="name" name="name" class="form-control" maxlength="255" required />
                            <label class="form-label" for="name">User name</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control" required />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                    <label class="form-check-label" for="form1Example3">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 text-center">
                                <!-- Simple link -->
                                <a href="#!">Forgot password ?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block">
                            Enter
                        </button>
                        <a href="/signup" class="btn btn-black btn-block">
                            Register
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->