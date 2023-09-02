<?php require('partials/head.php'); ?>

<h1>All Users</h1>
<?php foreach ($users as $user) :?>
    <li> <?= $user->name; ?> </li>
    <?php endforeach;?>

<h1>Submit Your Name</h1>

<form method="post" action="/users">
    <label>
        <input name="name">
    </label>
    <input type="submit">
</form>

<?php require('partials/footer.php'); ?>
