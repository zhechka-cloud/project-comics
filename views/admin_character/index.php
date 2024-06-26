<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Адмінпанель</a></li>
                    <li class="active">Керування персонажами</li>
                </ol>
            </div>

            <a href="/admin/character/create" class="btn btn-default back"><i class="fa fa-plus"></i> Додати персонажа</a>
            
            <h4>Список персонажів</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID персонажа</th>
                    <th>Ім'я персонажа</th>
                </tr>
                <?php foreach ($charactersList as $character): ?>
                    <tr>
                        <td><?php echo $character['id']; ?></td>
                        <td><?php echo $character['name']; ?></td>  
                        <td><a href="/admin/character/update/<?php echo $character['id']; ?>" title="Редагувати"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/character/delete/<?php echo $character['id']; ?>" title="Видалити"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

