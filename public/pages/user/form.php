<?php require_once "../new-version-simple-crud/layout/header.php"; ?>

<?php

$action = "insert";

if (isset($_GET['id'])) {
    $action = "update";

    $query = $dbConnection->prepare("SELECT * FROM user WHERE id = ?");
    $query->execute([$_GET['id']]);
    $user = $query->fetchObject();
}
?>
<div>
    <div>
        <form method="post" action="/pages/user/controller.php">
            <?php if (!empty($_GET['id'])) : ?>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <?php endif; ?>
            <input type="hidden" name="action" value="<?php echo $action; ?>">
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="email" name="name" id="email" class="form-control" value="<?php echo isset($name) ? $user->name : ""; ?>" required>
            </div>
            <div>
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" id="email" class="from-control" value="<?php echo isset($user) ? $user->email : ""; ?>" required>
            </div>
            <div>
                <label for="date" class="form-label">Birthday</label>
                <input type="date" name="date" id="date" class="from-control" value="<?php echo isset($user) ? $user->birthday : ""; ?>" required>
            </div>
            <div>
                <a href="/pages/user/" class="btn btn-warning">Back to list</a>
                <button type="submit" class="btn btn-primary"></button>
            </div>
        </form>
    </div>
</div>

<?php require_once "../new-version-simple-crud/layout/footer.php" ?>
