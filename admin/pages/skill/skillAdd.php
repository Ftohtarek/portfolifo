<?php ob_start();
include '../../shardFile/header.php' ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h1 class="m-0">Add Record in Skill Section </h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php include '../../shardFile/resbonse.php' ?>
<section class="content">
    <div class="container-fluid">
        <div class="card-body">
            <form class="row" action="../../back/systemController.php" method="POST">
                <div class="col-12">
                    <button type="button" class="btn btn-primary  float-right"><a href="skillData.php" class="text-decoration-none text-white">Show Record</a></button>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required minlength="3" type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="percentage">percentage</label>
                        <input required min='10' max='100' type="number" class="form-control" id="percentage" name="percentage" placeholder="percentage">
                    </div>
                </div>

                <div class="col-md-12 my-4">
                    <button name="add" class="btn btn-info w-25 float-right">Add Record</button>
                </div>

            </form>
        </div>
    </div>
</section>


<?php include '../../shardFile/footer.php' ?>