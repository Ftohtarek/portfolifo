<?php ob_start();
include '../../back/getter.php';
include '../../shardFile/header.php' ?>
<style>
    .limit-30 {
        max-width: 300px;
    }
</style>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Experience DataTable </h3>
    </div>
    <!-- /.card-header -->
    <?php include '../../shardFile/resbonse.php' ?>
    <div class="card-body overflow-auto">
        <button type="button" class="btn btn-primary  float-right my-2"><a href="experienceAdd.php" class="text-decoration-none text-white">Add Record</a></button>
        <table id="example2" class="table table-bordered table-hover table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>University</th>
                    <th>Description</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                $data = new getter('experience');
                while ($row = $data->getPackage->fetch()) { ?>
                    <!-- display data  -->
                    <tr>
                        <td><?php echo $row['id'] ?> </td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['year'] ?></td>
                        <td><?php echo $row['university'] ?></td>
                        <td class="limit-25"><?php echo $row['description'] ?> </td>
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
                        <form action="../../back/systemController.php" method="POST">
                            <td> <?php echo $row['id'] ?> </td>
                            <td><input required minlength="3" type="text" name="name" class='form-control' value="<?php echo $row['name'] ?>"> </td>
                            <td><input required minlength="4" maxlength="4" type="text" name="year" class='form-control' value="<?php echo $row['year'] ?>"> </td>
                            <td><input required minlength="3" type="text" name="university" class='form-control' value="<?php echo $row['university'] ?>"> </td>
                            <td><input required minlength="3" type="text" name='description' class='form-control' value="<?php echo $row['description'] ?>"> </td>
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