

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>

<?php
$this->title = 'Тестовое задание';
?>


<div class="container">


    <div class="panel panel-primary panel-add">
        <div class="panel-body">

            <?php $form = ActiveForm::begin(['id' => 'dataForm', 'action' => 'send/index', 'method' => 'post'])?>
            <?= $form->field($user, 'fio')?>
            <?= $form->field($user, 'phone')->textInput(['placeholder' => "+0(000)000-00-00"])?>
            <?= $form->field($user, 'email')?>
            <?= $form->field($user, 'additionally',
                ['options' => ['class' => 'form-check-input']])->checkboxList([
                'delivery' => 'Доставка',
                'transportation' => 'Перевозка',
                'insurance' => 'Страховка',
                'equipment' => 'Дополнительное оборудование',
                'consultation' => 'Дополнительная консультация',
                ]);?>
            <?= $form->field($user, 'comment')->textarea()?>
            <?= HTML::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
            <?php ActiveForm::end()?>

        </div>
    </div>


</div>
