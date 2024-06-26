<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Адмінпанель</a></li>
                    <li><a href="/admin/character">Керування персонажами</a></li>
                    <li class="active">Редагувати персонажа</li>
                </ol>
            </div>


            <h4>Редагувати персонажа "<?php echo $character['name']; ?>"</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Ім'я</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $character['name']; ?>">
                        <br><br>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Зберегти">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

