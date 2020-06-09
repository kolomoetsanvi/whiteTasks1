<?php


if (!empty($user)): ?>

    <div class="panel panel-primary panel-add"">
    <div class="panel-body">
        <div class="row">
            <?='ФИО: '.$user->fio ?>
        </div>
        <div class="row">
            <?='Телефон: '.$user->phone ?>
        </div>
        <div class="row">
            <?='Email: '.$user->email ?>
        </div>

        <?php if (count($additionally) > 0): ?>
            <div class="row">
                <?='Оплатить дополнительно:' ?>
            </div>
            <ul>
                <?php foreach ($additionally as $item):?>
                    <li><?php itemToString($item)?></li>
                <?php endforeach?>
            </ul>
        <?php endif;?>
        <?php if (!empty($user->comment)): ?>
            <div class="row">
                <?='Комментарий: '.$user->comment ?>
            </div>
        <?php endif;?>
    </div>
    </div>

<?php endif;?>




