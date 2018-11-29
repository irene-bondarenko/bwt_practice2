<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/site/worker/index">Список сотрудников</a></li>
                    <li>  <a href="/site/worker/create" > Добавить сотрудника</a></li>
                </ol>
            </div>


            <h2 class="title text-center">Список сотрудников</h2>

            <br/>
<div class="col-sm-8 col-sm-offset-2 padding-right">
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID сотрудника</th>
                    <th>Имя</th>
                    <th>Возраст</th>
                    <th>Заработная плата</th>
                    <th>Изменить</th>
                    <th>Удалить</th>
                </tr>

                <?php foreach ($workersList as $worker): ?>
                    <tr>
                        <td><?php echo $worker['id']; ?></td>
                        <td><?php echo $worker['name']; ?></td>
                        <td><?php echo $worker['age']; ?></td>
                        <td><?php echo $worker['salary']; ?></td>
                        <td><a href="/site/worker/update/<?php echo $worker['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/site/worker/delete/<?php echo $worker['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>

            </table>
</div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

