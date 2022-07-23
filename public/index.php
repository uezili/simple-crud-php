<?php require_once '../layout/header.php'; ?>

<?php if (isset($_GET['persisted'])) : ?>
    <div class="alert alert-success" role="alert">User persisted successful!</div>
<?php endif; ?>

<?php if (isset($_GET['deleted'])) : ?>
    <div class="alert alert-danger" role="alert">User has been deleted!</div>
<?php endif; ?>

<div class='mb-2' style='padding: 10px'>
    <button href="#" class="btn btn-primary">Add a new User</button>
</div>
<section>
    <table class=table table-hover>
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>E-mail</td>
                <td>Birthday</td>
                <td></td>
            </tr>
        <tbody>
            <?php foreach ($dbConnection->query('SELECT * FROM user ORDER BY id DESC') as $user) : ?>
                <ul>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['birthday']; ?></td>
                    <td class=text-center>
                        <button href="/pages/user/form.php?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-primary">Update</button>
                        <button href="/pages/user/controller.php?action=delete&id=" <?php echo $user['id']; ?> class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </ul>
            <?php endforeach; ?>
        </tbody>
        </thead>
    </table>
</section>
<?php require_once '../layout/footer.php' ?>
