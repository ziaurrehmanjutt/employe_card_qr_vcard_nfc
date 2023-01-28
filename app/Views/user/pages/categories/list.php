<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List of categories</h3>
                <button data-toggle="modal" data-target="#addCAtegoryModel" class="btn btn-primary float-right">Add CAtegory</button>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-sm table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>No of Cards</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $key => $value) { ?>
                            <tr>
                                <td><?= $key + 1 ?></td>

                                <td><?= $value["category_name"] ?></td>

                                <td><?= $value["descriptions"] ?></td>
                                <td> </td>
                                <td>
                                    <a class="btn btn-sm btn-primary btn-sm" onclick="update(<?= $value['rowid'] ?>)" data-toggle="modal" data-target="#updateCategoryModel">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a class="btn btn-sm btn-danger btn-sm" onclick="del(<?= $value['rowid'] ?>)">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<form id="category_delete" method="post">
    <input type="hidden" name="delete_category" id="delete_category" />
</form>

<div class="modal fade" id="addCAtegoryModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input required minlength="3" maxlength="100" name="name" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="add_category" class="btn btn-primary">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="updateCategoryModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input id="cate_nme" required minlength="3" maxlength="100" name="name" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="cate_description" name="description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="update_category" class="btn btn-primary">Add Category</button>
                </div>

                <input type="hidden" id="cate_id" name="cate_id">
            </form>
        </div>
    </div>
</div>

<script>
    async function del(id) {
        if (await showConfirm("Are you Sure", "Are you Sure to delete this Category", 'Delete', 'red')) {
            $("#delete_category").val(id);
            $("#category_delete").submit()
        }
    }

    function update(id) {

        $("#cate_id").val(id);
        $.ajax({
            url: "<?= base_url('user/categories/detail') ?>/" + id,
            data: "",
            contentType:"json",
            dataType:"json",
            success: function(data) {
                $("#cate_description").val(data.descriptions);
                $("#cate_nme").val(data.category_name);
                console.log(data);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>