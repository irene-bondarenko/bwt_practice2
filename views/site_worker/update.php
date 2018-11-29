<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/site/worker/index">Список сотрудников</a></li>
                    <li>  <a href="/site/worker/create" > Добавить сотрудника</a></li>
                    <li class="active">Редактировать данные о сотруднике</li>
                </ol>
            </div>

            <h4>Редактировать данные о сотруднике #<?php echo $id; ?></h4>

            <br/>
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <table>

                            <tr>
                                <td> <p>Имя</p></td>
                                <td><p>Возраст</p></td>
                                <td><p>Заработная плата, $</p></td>
                            </tr>

                            <tr>
                                <td><input type="text" name="name" placeholder="" value="<?php echo $worker['name']; ?>"></td>
                                <td> <input type="text" name="age" placeholder="" value="<?php echo $worker['age']; ?>"></td>
                                <td><input type="text" name="salary" placeholder="" value="<?php echo $worker['salary']; ?>"></td>
                            </tr>

                        </table>


                        <br/>
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                        <br/><br/>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>

