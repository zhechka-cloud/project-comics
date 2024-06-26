<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Адмінпанель</a></li>
                    <li class="active">Керування товарами</li>
                </ol>
            </div>

            <a href="/admin/comics/create" class="btn btn-default back"><i class="fa fa-plus"></i> Додати товар</a>
            
            <h4>Список товарів</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул</th>
                    <th>Назва товара</th>
                    <th>Ціна</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($comicsList as $comics): ?>
                    <tr>
                        <td><?php echo $comics['id']; ?></td>
                        <td><?php echo $comics['name']; ?></td>
                        <td><?php echo $comics['price']; ?></td>  
                        <td><a href="/admin/comics/update/<?php echo $comics['id']; ?>" title="Редагувати"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/comics/delete/<?php echo $comics['id']; ?>" title="Видалити"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

