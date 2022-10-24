<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Login</h5>
                    <h1 class="display-4">Login to Your Account</h1>
                </div>
                <p class="mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="">Register Account</a>
                <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="">Forget Password</a>
            </div>
            <div class="col-lg-6">
                <div class="bg-light text-center rounded p-5">
                    <h1 class="mb-4">Login</h1>
                    <form method="POST">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="email" name="email" required class="form-control bg-white border-0" placeholder="Email" style="height: 55px;">
                            </div>

                            <div class="col-12">
                                <input type="password" name="password" required class="form-control bg-white border-0" placeholder="Password" style="height: 55px;">
                            </div>


                            <div>
                                <?php if ($error) : ?>
                                    <div class="alert alert-warning">
                                        <?= $error ?>
                                    </div>
                                <?php endif;  ?>
                            </div>

                            <div class="col-12">
                                <button name="login" class="btn btn-primary w-100 py-3" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>