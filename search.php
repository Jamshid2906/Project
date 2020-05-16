<?php
    include 'app/search.php';
?>
<?php include 'layouts/header.php' ?>
<h4 style="text-align:center">Qidiruv natijalari</h4>

<?php if (empty($input_old)): ?>
    <div class="alert alert-danger text-center">
        Siz kalit yozmadingiz!
    </div>
<?php elseif (count($data) == 0): ?>
    <div class="alert alert-danger text-center">
        Natija topilmadi!
    </div>
<?php else: ?>
    <?php foreach ($data as $value): ?>
        <h3><?= $value['title'] ?></h3>
        <p><?= $value['short'] ?></p>
    <?php endforeach; ?>
<?php endif; ?>
<?php include 'layouts/footer.php' ?>
