<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Адмінпанель</a></li>
                    <li><a href="/admin/order">Керування замовленнями</a></li>
                    <li class="active">Видалити замовлення</li>
                </ol>
            </div>


            <h4>Видалити замовлення #<?php echo $id; ?></h4>


            <p> Видалити замовлення?</p>

            <form method="post">
                <input type="submit" name="submit" value="Видалити" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

