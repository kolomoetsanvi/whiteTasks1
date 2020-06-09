<?php

if (!empty($user)): ?>

    <div class="panel panel-primary panel-add"">
        <div class="panel-body">

             <table class="table table-striped table-bordered table-hover" id="confirmedVacTable">
                 <tbody >
                    <tr><td>
                        <?='ФИО: '.$user->fio ?>
                    </td></tr>
                    <tr><td>
                        <?='Телефон: '.$user->phone ?>
                    </td></tr>
                    <tr><td>
                        <?='Email: '.$user->email ?>
                    </td></tr>

                    <?php if (count($additionally) > 0): ?>
                        <tr><td>
                            <?='Оплатить дополнительно:' ?>
                            <ul>
                             <?php foreach ($additionally as $item):?>
                                    <li><?php itemToString($item)?></li>
                             <?php endforeach?>
                            </ul>
                        </td></tr>
                    <?php endif;?>
                    <?php if (!empty($user->comment)): ?>
                        <tr><td>
                             <?='Комментарий: '.$user->comment ?>
                        </td></tr>
                    <?php endif;?>
                 </tbody>
            </table>
        </div>
    </div>

<?php endif;?>



