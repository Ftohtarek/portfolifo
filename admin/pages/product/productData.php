<?php ob_start();
include '../../back/getter.php';
include '../../shardFile/header.php' ?>
<style>
        .limitHeight{
        height:200px !important;
    }
</style>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Product DataTable </h3>
    </div>
    <!-- /.card-header -->
    <?php include '../../shardFile/resbonse.php' ?>
    <div class="card-body overflow-auto">
        <button type="button" class="btn btn-primary  float-right my-2"><a href="productAdd.php" class="text-decoration-none text-white">Add Record</a></button>

        <table id="example2" class="table table-bordered table-hover table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>href</th>
                    <th>Image</th>
                    <th>Catogery Id</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                $data = new getter('product');
                while ($row = $data->getPackage->fetch()) { ?>
                    <!-- display data  -->
                    <tr>
                        <td><?php echo $row['id'] ?> </td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['slug'] ?></td>
                        <td><?php echo $row['href'] ?></td>
                        <td class="limit-25" > <img class="img-thumbnail limitHeight" src="../../../image/<?php echo $row['img']?>"></td>
                        <td><?php echo $row['catogeryId'] ?> </td>
                        <td class="d-flex align-items-center">
                            <button class="btn btn-warning mx-1 my-1 updataBtn">upd</button>
                            <form action="../../back/systemController.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <button name="delete" class="btn btn-danger ">del</button>
                            </form>
                        </td>
                    </tr>
                    <!-- updata form -->
                    <tr class='updataForm d-none'>
                        <form action="../../back/systemController.php" method="POST" enctype="multipart/form-data">
                            <td> <?php echo $row['id'] ?> </td>
                            <td><input required minlength="3" type="text" name="title" class='form-control' value="<?php echo $row['title'] ?>"> </td>
                            <td><input required minlength="4" type="text" name="slug" class='form-control' value="<?php echo $row['slug'] ?>"> </td>
                            <td><input required  type="text" name="href" class='form-control' value="<?php echo $row['href'] ?>"> </td>
                            <td>
                                <div class="custom-file">
                                    <input type="hidden" name="img"  value="<?php echo $row['img']?>">
                                    <input  type="file" name="img" class="custom-file-input" id="img">
                                    <label class="custom-file-label" for="img">Choose img</label>
                                </div>
                            </td>
                            <td><input required  type="text" name='catogeryId' class='form-control' value="<?php echo $row['catogeryId'] ?>"> </td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <button name="updata" class="btn btn-outline-success w-100 my-1">sava</button>
                                <button type="button" class="btn btn-outline-danger w-100 cansal">cansal</button>
                            </td>
                        </form>
                    </tr>

                <?php } ?>
            </tbody>

        </table>
    </div>
    <!-- /.card-body -->
</div>
<?php include '../../shardFile/footer.php' ?>