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


        <form method="POST">
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
                        <div class="col-md-6" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
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

                        <div class="col-md-6" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
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


                        <div class="col-md-6" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
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


                        <div class="col-md-6" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
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


                        <div class="col-md-6" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Email</label>
                                <input name="home_email" type="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Website</label>
                                <input name="home_url" type="url" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-4" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Address (House)</label>
                                <input name="address[company_address_name]" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Street 1</label>
                                <input name="address[company_address_street]" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Street 2</label>
                                <input name="address[company_address_extended]" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>City</label>
                                <input name="address[company_address_city]" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Zip</label>
                                <input name="address[company_address_zip]" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Stat</label>
                                <input name="address[company_address_stat]" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Country</label>
                                <input name="address[company_address_country]" type="text" class="form-control">
                            </div>
                        </div>


                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->

            </div>
            <div>
                <button name="add_card" class="btn btn-secondary float-right">Add Card</button>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->