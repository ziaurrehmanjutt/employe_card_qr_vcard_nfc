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
                            <input type="text" readonly value="<?=base_url("c/".$detail['card_url'])?>" class="form-control">
                            <div class="input-group-append">
                                <button class="input-group-text" onclick='copyText("<?=base_url("c/".$detail['card_url'])?>")' >Copy</button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <label>Card QR</label>
                        <div>
                            <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?=base_url("c/".$detail['card_url'])?>&choe=UTF-8" />
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


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Personal Detail</h3>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label>Card URL</label>
                    </div>
                    <div class="col-md-6">
                        <label>Tiny URL</label>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Company Details</h3>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label>Card URL</label>
                    </div>
                    <div class="col-md-6">
                        <label>Tiny URL</label>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->