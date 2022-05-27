<?php if (isset($_GET["suc"])) {
    $msg = $_GET["suc"];
?>
    <div class="alert alert-success" role="alert">
        <?= $msg ?>
    </div>
<?php
} ?>
<?php if (isset($_GET["err"])) {
    $msg = $_GET["err"];
?>
    <div class="alert alert-danger" role="alert">
        <?= $msg ?>
    </div>
<?php
} ?>