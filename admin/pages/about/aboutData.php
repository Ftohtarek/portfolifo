<?php ob_start();
include '../../shardFile/header.php';
include '../../back/getter.php';
?>
<style>
    .limit-25 {
        max-width: 250px;
    }
    .limitHeight{
        height:200px !important;
    }
</style>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">About DataTable </h3>
    </div>
    <!-- /.card-header -->
    <?php include '../../shardFile/resbonse.php' ?>

    <div class="card-body overflow-auto">

        <table id="example2" class="table table-bordered table-hover table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Jop</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>From</th>
                    <th>Live In</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php

                $data = new getter('about');
                while ($row = $data->getPackage->fetch()) { ?>
                    <!-- display data  -->
                    <tr>
                        <td><?php echo $row['id'] ?> </td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['jop'] ?></td>
                        <td><?php echo $row['age'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['fromLocation'] ?></td>
                        <td><?php echo $row['live_in'] ?></td>
                        <td class="limit-25" > <img class="img-thumbnail limitHeight" src="../../../image/<?php echo $row['img'] ?>"></td>
                        <td class="limit-25"><?php echo $row['description'] ?> </td>
                        <td>
                            <button class="btn btn-warning w-100 my-1 updataBtn">upd</button>
                        </td>
                    </tr>

                    <!-- updata form -->
                    <tr class='updataForm d-none'>
                        <form action="../../back/systemController.php" method="POST" enctype="multipart/form-data">
                            <td> <?php echo $row['id'] ?> </td>
                            <td><input required minlength="3" type="text" name="name" class='form-control' value="<?php echo $row['name'] ?>"> </td>
                            <td><input required minlength="3" type="text" name="jop" class='form-control' value="<?php echo $row['jop'] ?>"> </td>
                            <td><input required minlength="2" maxlength="3" type="text" name="age" class='form-control' value="<?php echo $row['age'] ?>"> </td>
                            <td><input required minlength="3" type="text" name='gender' class='form-control' value="<?php echo $row['gender'] ?>"> </td>
                            <td><input required minlength="3" type="text" name="fromLocation" class='form-control' value="<?php echo $row['fromLocation'] ?>"> </td>
                            <td><input required minlength="3" type="text" name="live_in" class='form-control' value="<?php echo $row['live_in'] ?>"> </td>
                            <td>
                                <div class="custom-file">
                                    <input type="hidden" name="img" value="<?php echo $row['img'] ?>">
                                    <input type="file" name="img" class="custom-file-input" id="img">
                                    <label class="custom-file-label" for="img">img</label>
                                </div>
                            </td>
                            <td><textarea minlength="10" required name="description" class='form-control'><?php echo $row['description'] ?></textarea> </td>
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