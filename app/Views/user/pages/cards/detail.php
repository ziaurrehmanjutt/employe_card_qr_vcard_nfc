<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blank Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">



        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Media and Images</h3>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label>Card URL</label>

                        <div class="input-group mb-3">
                            <input type="text" readonly value="<?= base_url("c/" . $detail['card_url']) ?>" class="form-control">
                            <div class="input-group-append">
                                <button class="input-group-text" onclick='copyText("<?= base_url("c/" . $detail['card_url']) ?>")'>Copy</button>
                            </div>
                        </div>

                        <a class="btn btn-lg btn-primary">
                            View Profile
                        </a>  
                        <a class="btn btn-lg btn-primary">
                            Download Contact
                        </a>  
                        <a target="_blank" href="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?= base_url("c/" . $detail['card_url']) ?>&choe=UTF-8" download="qr.png" class="btn btn-lg btn-primary">
                            Download QR
                        </a>  

                    </div>
                    <div class="col-md-6">
                        <label>Card QR</label>
                        <div>
                            <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?= base_url("c/" . $detail['card_url']) ?>&choe=UTF-8" />
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Media and Images</h3>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 p-4">
                        <label>Card Image
                            <i class="fa fa-info help_icon" data-toggle="tooltip" data-placement="right" title="Image Should be Square &#013;&#010; Image Size not Grater then 250KB"></i>
                        </label>
                        <br>
                        <?php if ($detail['card_image']) :  ?>
                            <img style="max-width: 100%;height:200px" src="<?= base_url(CARD_IMAGE_PATH . "/" . $detail['card_image']) ?>" />
                        <?php else :  ?>
                            <img style="max-width: 100%;height:200px" src="<?= base_url("assets/upload/defaults/no_image.png") ?>" />
                        <?php endif;  ?>

                        <form method="POST" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="card_image" accept="image/png, image/jpeg , image/jpeg" required type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button name="card_picture_upload" class="input-group-text">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 p-4">
                        <label>Banner Image
                            <i class="fa fa-info help_icon" data-toggle="tooltip" data-placement="right" title="Image Should be 2:1 (Double width by height) &#013;&#010; Image Size not Grater then 250KB"></i>
                        </label>
                        <br>
                        <?php if ($detail['banner_image']) :  ?>
                            <img style="max-width: 100%;height:200px" src="<?= base_url(BANNER_IMAGE_PATH . "/" . $detail['banner_image']) ?>" />
                        <?php else :  ?>
                            <img style="max-width: 100%;height:200px" src="<?= base_url("assets/upload/defaults/no_image.png") ?>" />
                        <?php endif;  ?>

                        <form method="POST" enctype="multipart/form-data">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="banner_image" accept="image/png, image/jpeg , image/jpeg" required type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <button name="banner_picture_upload" class="input-group-text">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Basic Details</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Title</label>
                            <select name="name_title" class="form-control">
                                <option value="">Select Title</option>
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label>First Name</label>
                            <input name="first_name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input required name="last_name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Nick Name</label>
                            <input name="nick_name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Note</label>
                            <input name="card_note" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Birthday</label>
                            <input type="date" name="birthday" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Anniversary</label>
                            <input type="date" name="anniversary" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button class="btn btn-secondary float-right">Update</button>
            </div>

        </div>


        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Personal Contact</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend country-code">
                                    <select name="mobile_number_code" class="select2 ">
                                        <?php foreach ($countries as $key => $value) { ?>
                                            <option value="<?= $value['phonecode'] ?>">+<?= $value['phonecode'] ?></option>
                                        <?php }  ?>

                                    </select>
                                </div>
                                <input name="mobile_number" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Landline Number</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend country-code">
                                    <select name="home_contact_code" class="select2 ">
                                        <?php foreach ($countries as $key => $value) { ?>
                                            <option value="<?= $value['phonecode'] ?>">+<?= $value['phonecode'] ?></option>
                                        <?php }  ?>

                                    </select>
                                </div>
                                <input name="home_mobile" type="text" class="form-control">
                            </div>

                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fax</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend country-code">
                                    <select name="fax_contact_code" class="select2 ">
                                        <?php foreach ($countries as $key => $value) { ?>
                                            <option value="<?= $value['phonecode'] ?>">+<?= $value['phonecode'] ?></option>
                                        <?php }  ?>

                                    </select>
                                </div>
                                <input name="fax_number" type="text" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Other Number</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend country-code">
                                    <select name="other_number_type" class="select2 ">
                                        <option value="">Any</option>
                                        <option value="FAX">PREF</option>
                                        <option value="HOME">HOME</option>
                                        <option value="VOICE">VOICE</option>
                                        <option value="FAX">FAX </option>
                                        <option value="MSG">MSG </option>
                                        <option value="CELL">CELL </option>
                                        <option value="PAGER">PAGER </option>
                                        <option value="BBS">BBS </option>
                                        <option value="CAR">CAR </option>
                                        <option value="MODEM">MODEM </option>
                                        <option value="ISDN">ISDN </option>
                                        <option value="VIDEO">VIDEO </option>

                                    </select>
                                </div>
                                <input name="other_number" type="text" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input name="home_email" type="email" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Website</label>
                            <input name="home_url" type="url" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Address (House)</label>
                            <input name="address[user_address_name]" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Street 1</label>
                            <input name="address[user_address_street]" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Street 2</label>
                            <input name="address[user_address_extended]" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>City</label>
                            <input name="address[user_address_city]" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Zip</label>
                            <input name="address[user_address_zip]" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Stat</label>
                            <input name="address[user_address_stat]" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Country</label>
                            <input name="address[user_address_country]" type="text" class="form-control">
                        </div>
                    </div>


                </div>
                <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-secondary float-right">Update</button>
            </div>
        </div>

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Company Detail</h3>

                <div class="card-tools">
                    <button type="button" onclick="copyFromProfile()" class="btn btn-tool">
                        Copy from profile
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input name="company_name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input name="job_title" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Job Position</label>
                            <input name="job_position" type="text" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company Mobile</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend country-code">
                                    <select name="company_mobile_code" class="select2 ">
                                        <?php foreach ($countries as $key => $value) { ?>
                                            <option value="<?= $value['phonecode'] ?>">+<?= $value['phonecode'] ?></option>
                                        <?php }  ?>

                                    </select>
                                </div>
                                <input name="company_mobile" type="number" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company Landline</label>

                            <input name="company_fax" type="text" class="form-control">
                        </div>

                    </div>



                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company Email</label>
                            <input name="company_email" type="email" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company Website</label>
                            <input name="company_website" type="url" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Address (Company)</label>
                            <input name="company_address[company_address_name]" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Street 1</label>
                            <input name="company_address[company_address_street]" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Street 2</label>
                            <input name="company_address[company_address_extended]" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>City</label>
                            <input name="company_address[company_address_city]" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Zip</label>
                            <input name="company_address[company_address_zip]" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Stat</label>
                            <input name="company_address[company_address_stat]" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Country</label>
                            <input name="company_address[company_address_country]" type="text" class="form-control">
                        </div>
                    </div>


                </div>
                <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-secondary float-right">Update</button>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->