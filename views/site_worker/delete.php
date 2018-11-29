<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/site/worker/index">Список сотрудников</a></li>
                    <li>  <a href="/site/worker/create" > Добавить сотрудника</a></li>
                    <li class="active">Удалить данные о сотруднике</li>
                </ol>
            </div>
<div class="col-sm-4 col-sm-offset-4 padding-right">
            <h4>Удалить данные о сотруднике #<?php echo $id; ?></h4>

            <p>Вы действительно хотите удалить эти данные?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" class="btn btn-default"/>
            </form>
</div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

