<?php ob_start();
include '../../shardFile/header.php' ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h1 class="m-0">Add Record in About Section </h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php include '../../shardFile/resbonse.php' ?>
<section class="content">
    <div class="container-fluid">
        <div class="card-body">
            <form class="row" action="../../back/systemController.php" method="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required type="email" class="form-control" id="email" name="email" placeholder="email">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input required type="password" class="form-control" name="password" id="pass" placeholder="pass">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="add">Add</label>
                        <button name="add" class="btn btn-info form-control">Add Record</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<?php include '../../shardFile/footer.php' ?>