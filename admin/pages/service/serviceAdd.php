<?php ob_start();
include '../../shardFile/header.php' ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h1 class="m-0">Add Record in Service Section </h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php include '../../shardFile/resbonse.php' ?>
<section class="content">
    <div class="container-fluid">
        <div class="card-body">
            <form class="row" action="../../back/systemController.php" method="POST" enctype="multipart/form-data">
                <div class="col-12">
                    <button type="button" class="btn btn-primary  float-right"><a href="serviceData.php" class="text-decoration-none text-white">Show Record</a></button>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input required type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input required type="text" class="form-control" name="description" id="description" placeholder="Description">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input required type="file" name="img" class="custom-file-input" id="img">
                                <label class="custom-file-label" for="img">Choose img</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputFile">Add</label>
                        <button name="add" class="btn btn-info form-control">Add Record</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<?php include '../../shardFile/footer.php' ?>