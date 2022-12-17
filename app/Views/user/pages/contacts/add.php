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
                                <input id="company_name" name="company_name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input id="job_title" name="job_title" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Job Position</label>
                                <input id="job_position" name="job_position" type="text" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Mobile</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend country-code">
                                        <select id="company_mobile_code" name="company_mobile_code" class="select2 ">
                                            <?php foreach ($countries as $key => $value) { ?>
                                                <option value="<?= $value['phonecode'] ?>">+<?= $value['phonecode'] ?></option>
                                            <?php }  ?>

                                        </select>
                                    </div>
                                    <input id="company_mobile" name="company_mobile" type="number" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Fax</label>

                                <input  id="company_fax" name="company_fax" type="text" class="form-control">
                            </div>

                        </div>



                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Email</label>
                                <input id="company_email" name="company_email" type="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company Website</label>
                                <input id="company_website" name="company_website" type="url" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Address (Company)</label>
                                <input id="company_address_name" name="company_address[company_address_name]" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Street 1</label>
                                <input id="company_address_street" name="company_address[company_address_street]" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Street 2</label>
                                <input id="company_address_extended" name="company_address[company_address_extended]" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>City</label>
                                <input id="company_address_city" name="company_address[company_address_city]" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Zip</label>
                                <input id="company_address_zip" name="company_address[company_address_zip]" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Stat</label>
                                <input id="company_address_stat" name="company_address[company_address_stat]" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Country</label>
                                <input id="company_address_country" name="company_address[company_address_country]" type="text" class="form-control">
                            </div>
                        </div>


                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->

                <div class="cord-footer">
 <button name="add_card" class="btn btn-secondary float-right">Add Card</button>
                </div>

            </div>

           
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    function copyFromProfile() {
        $.ajax({
            url: "<?= base_url() ?>/ajax/get_profile",
            dataType: "json",
            type: "Post",
            async: true,
            data: {},
            success: function(data) {
                console.log(data);
                $('#company_name').val(data.company_name);
                $('#job_title').val(data.job_title);
                $('#company_email').val(data.company_email);
                $('#company_website').val(data.company_website);
                $('#company_mobile').val(data.company_mobile);
                $('#company_fax').val(data.company_fax);
                $('#company_address_name').val(data.company_address_name);
                $('#company_address_street').val(data.company_address_street);
                $('#company_address_extended').val(data.company_address_extended);
                $('#company_address_city').val(data.company_address_city);
                $('#company_address_stat').val(data.company_address_stat);
                $('#company_address_zip').val(data.company_address_zip);
                $('#company_address_country').val(data.company_address_country);
                $('#company_mobile_code').val(data.default_country_code);
                toastr.success("Copied");
            },
            error: function(xhr, exception) {
                var msg = "";
                if (xhr.status === 0) {
                    msg = "Not connect.\n Verify Network." + xhr.responseText;
                } else if (xhr.status == 404) {
                    msg = "Requested page not found. [404]" + xhr.responseText;
                } else if (xhr.status == 500) {
                    msg = "Internal Server Error [500]." + xhr.responseText;
                } else if (exception === "parsererror") {
                    msg = "Requested JSON parse failed.";
                } else if (exception === "timeout") {
                    msg = "Time out error." + xhr.responseText;
                } else if (exception === "abort") {
                    msg = "Ajax request aborted.";
                } else {
                    msg = "Error:" + xhr.status + " " + xhr.responseText;
                }
                toastr.error(msg);

            }
        });
    }
</script>