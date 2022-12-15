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
                                <label>First Name</label>
                                <input value="<?= $profile['first_name'] ?>" name="first_name" required type="text" class="form-control" />
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input value="<?= $profile['last_name'] ?>" name="last_name" required type="text" class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Timezone</label>
                                <select required name="user_time_zone" class="form-control select2" style="width: 100%;">
                                    <option value="">Select Time Zone</option>
                                    <?php foreach (DateTimeZone::listIdentifiers() as $value) {
                                        print "<option " . ($settings['user_time_zone'] == $value ? 'selected' : "") . " value=\"$value\">$value</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>




                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Country Code</label>
                                <select required name="default_country_code" class="form-control select2" style="width: 100%;">
                                    <option value="">Mobile Country Code</option>
                                    <?php foreach ($all_countries as $value) {
                                        print "<option " . ($settings['default_country_code'] == $value['phonecode'] ? 'selected' : "") . " value=\"{$value['phonecode']}\">{$value['nicename']} ({$value['phonecode']})</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                    <div class="card-tools">
                        <button type="submit" name="update_basic" class="btn btn-secondary float-right">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <form method="POST">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Company Details</h3>

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
                                <label>Company Name</label>
                                <input name="company_name" value="<?= $settings['company_name'] ?>" required type="text" class="form-control" />
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input name="job_title" value="<?= $settings['job_title'] ?>" required type="text" class="form-control" />
                            </div>
                        </div>


                        <div class="col-md-6" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Company Email</label>
                                <input name="company_email" value="<?= $settings['company_email'] ?>" type="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Company Website</label>
                                <input name="company_website" value="<?= $settings['company_website'] ?>" type="url" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-6" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Mobile</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend country-code">
                                        <select class="select2 ">
                                            <?php foreach ($all_countries as $key => $value) { ?>
                                                <?php $sel = $settings['default_country_code'] == $value['phonecode'] ? "selected" : ($settings['default_country_code'] == $value['phonecode'] ? 'selected' : "") ?>
                                                <option <?= $sel ?> value="<?= $value['phonecode'] ?>">+<?= $value['phonecode'] ?></option>
                                            <?php }  ?>
                                        </select>
                                    </div>
                                    <input name="company_mobile" value="<?= $settings['company_mobile'] ?>" type="text" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Address (House)</label>
                                <input name="company_address_name" value="<?= $settings['company_address_name'] ?>" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Street 1</label>
                                <input name="company_address_street" value="<?= $settings['company_address_street'] ?>" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Street 2</label>
                                <input name="company_address_extended" value="<?= $settings['company_address_extended'] ?>" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>City</label>
                                <input name="company_address_city" value="<?= $settings['company_address_city'] ?>" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Zip</label>
                                <input name="company_address_zip" value="<?= $settings['company_address_zip'] ?>" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Stat</label>
                                <input name="company_address_stat" value="<?= $settings['company_address_stat'] ?>" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3" data-select2-id="119">
                            <div class="form-group" data-select2-id="118">
                                <label>Country</label>
                                <input name="company_address_country" value="<?= $settings['company_address_country'] ?>" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                    <div class="card-tools">
                        <button type="submit" name="setting_update" class="btn btn-secondary float-right">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->