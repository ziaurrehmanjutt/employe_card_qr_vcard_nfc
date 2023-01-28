
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Register</h5>
                    <h1 class="display-4">Register new Account</h1>
                </div>
                <p class="mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="">Register Account</a>
                <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="">Forget Password</a>
            </div>
            <div class="col-lg-6">
                <div class="bg-light rounded p-5">
                    <h1 class="mb-4 text-center">Login</h1>
                    <?php  $validation = \Config\Services::validation();  ?>
                    <form method="POST">
                        <div class="row g-3">

                            <div class="col-12">
                                <input type="text" name="company_name" required class="form-control bg-white border-0" placeholder="Company Name" style="height: 55px;">
                                <span class="text-start text-danger"><?=$validation->getError('company_name');?></span>
                            </div>


                            <div class="col-6">
                                <input type="text" name="first_name" required class="form-control bg-white border-0" placeholder="First Name" style="height: 55px;">
                                <span class="text-start text-danger"><?=$validation->getError('first_name');?></span>
                            </div>

                            <div class="col-6">
                                <input type="text" name="last_name" required class="form-control bg-white border-0" placeholder="Last Name" style="height: 55px;">
                                <span class="text-start text-danger"><?=$validation->getError('last_name');?></span>
                            </div>

                            <div class="col-12">
                                <input type="email" name="email" required class="form-control bg-white border-0" placeholder="Email" style="height: 55px;">
                                <span class="text-start text-danger"><?=$validation->getError('email');?></span>
                            </div>

                            <div class="col-12">
                                <input type="password" minlength="6" name="password" required class="form-control bg-white border-0" placeholder="Password" style="height: 55px;">
                                <span class="text-start text-danger"><?=$validation->getError('password');?></span>
                            </div>


                            <div>

                                <?php if ($error) : ?>
                                    <div class="alert alert-warning">
                                        <?= $error ?>
                                    </div>
                                <?php endif;  ?>
                            </div>

                            <div class="col-12">
                                <button name="login" class="btn btn-primary w-100 py-3" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>