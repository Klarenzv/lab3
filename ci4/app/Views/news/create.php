<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="title">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="body">Website</label>
    <input type="input" name="website" value="<?= set_value('website') ?>">
    <br>

    <label for="body">Message</label>
    <textarea name="message" cols="40" rows="3"><?= set_value('message') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create Guest">
</form>