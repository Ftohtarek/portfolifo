<?php ob_start();
include '../../shardFile/header.php' ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h1 class="m-0">Add Record in Category Section </h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<?php include '../../shardFile/resbonse.php' ?>

<section class="content">
    <div class="container-fluid">
        <div class="card-body">
            <form class="row" action="../../back/systemController.php" method="POST">
                <div class="col-12 my-5">
                    <button type="button" class="btn btn-primary  float-right"><a href="categoryData.php" class="text-decoration-none text-white">Show Record</a></button>
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <input required minlength="3" type="text" class="form-control" name="name" id="name" placeholder="Category Name">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <button name="add" class="btn btn-info form-control">Add Record</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<?php include '../../shardFile/footer.php' ?>