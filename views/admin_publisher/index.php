<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Адмінпанель</a></li>
                    <li class="active">Керування видавцями</li>
                </ol>
            </div>

            <a href="/admin/publisher/create" class="btn btn-default back"><i class="fa fa-plus"></i> Додати видавця</a>
            
            <h4>Список видавців</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID видавця</th>
                    <th>Назва видавця</th>
                </tr>
                <?php foreach ($publishersList as $publisher): ?>
                    <tr>
                        <td><?php echo $publisher['id']; ?></td>
                        <td><?php echo $publisher['name']; ?></td>  
                        <td><a href="/admin/publisher/update/<?php echo $publisher['id']; ?>" title="Редагувати"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/publisher/delete/<?php echo $publisher['id']; ?>" title="Видалити"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

