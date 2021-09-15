<?php
if (isset($_SESSION['userError'])) { ?>
    <div class=" container error my-2">
        <?php foreach ($_SESSION['userError'] as $key => $value) { ?>
            <div class="alert alert-default-danger" role="alert">
                <?php echo $value ?>
            </div>
        <?php
        }
        unset($_SESSION['userError']);
        ?>
    </div>
<?php } ?>

<?php
if (isset($_SESSION['sucuss'])) { ?>
    <div class=" container sucuss my-2">
        <?php foreach ($_SESSION['sucuss'] as $key => $value) { ?>
            <div class="alert alert-default-success" role="alert">
                <?php echo $value ?>
            </div>
        <?php
        }
        unset($_SESSION['sucuss']);
        ?>
    </div>
<?php } ?>