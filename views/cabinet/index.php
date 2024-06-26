<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабінет користувача</h3>
            
            <h4>Привіт, <?php echo $user['name'];?>!</h4>
            <ul>
                <li><a href="/cabinet/edit">Редагувати дані</a></li>
                <li><a href="/admin">Адмінпанель</a></li>
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>