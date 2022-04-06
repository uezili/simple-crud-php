<?php require_once '../layout/header.php'; ?>
<div class='text-end'>
    <a href="#">Add a new User</a>
</div>
<table>
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
                <td class></td>
            </ul>
        <?php endforeach; ?>
    </tbody>
    </thead>
</table>
<?php require_once '../layout/footer.php' ?>