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
                                <input value="<?=$profile['first_name']?>" required type="text" class="form-control" />
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input value="<?=$profile['last_name']?>" required type="text" class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Timezone</label>
                                <select required class="form-control select2" style="width: 100%;">
                                    <option value="">Select Time Zone</option>
                                    <?php foreach (DateTimeZone::listIdentifiers() as $value) {
                                        print " <option value=\"$value\">$value</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>




                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Country Code</label>
                                <select required class="form-control select2" style="width: 100%;">
                                    <option value="">Mobile Country Code</option>
                                    <?php foreach ($all_countries as $value) {
                                        print " <option value=\"{$value['phonecode']}\">{$value['nicename']} ({$value['phonecode']})</option>";
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
                        <button type="submit" class="btn btn-secondary float-right">
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
                                <input required type="text" class="form-control" />
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input required type="text" class="form-control" />
                            </div>
                        </div>


                        <div class="col-md-6" data-select2-id="119">
                        <div class="form-group" data-select2-id="118">
                            <label>Company Email</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6" data-select2-id="119">
                        <div class="form-group" data-select2-id="118">
                            <label>Company Website</label>
                            <input type="url" class="form-control">
                        </div>
                    </div>


                    <div class="col-md-6" data-select2-id="119">
                        <div class="form-group" data-select2-id="118">
                            <label>Mobile</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend country-code">
                                    <select class="select2 ">
                                        <?php foreach ($all_countries as $key => $value) { ?>
                                            <option value="<?=$value['phonecode']?>">+<?=$value['phonecode']?></option>
                                        <?php }  ?>
                                       
                                    </select>
                                </div>
                                <input type="text" class="form-control">
                            </div>

                        </div>
                    </div>


                    <div class="col-md-4" data-select2-id="119">
                        <div class="form-group" data-select2-id="118">
                            <label>Address (House)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4" data-select2-id="119">
                        <div class="form-group" data-select2-id="118">
                            <label>Street 1</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4" data-select2-id="119">
                        <div class="form-group" data-select2-id="118">
                            <label>Street 2</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3" data-select2-id="119">
                        <div class="form-group" data-select2-id="118">
                            <label>City</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3" data-select2-id="119">
                        <div class="form-group" data-select2-id="118">
                            <label>Zip</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3" data-select2-id="119">
                        <div class="form-group" data-select2-id="118">
                            <label>Stat</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3" data-select2-id="119">
                        <div class="form-group" data-select2-id="118">
                            <label>Country</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>



                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                    <div class="card-tools">
                        <button type="submit" class="btn btn-secondary float-right">
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