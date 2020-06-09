<?php

function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}


function itemToString($item)
{
    switch ($item) {
        case 'delivery':
            echo 'Доставка';
            break;
        case 'transportation':
            echo 'Перевозка';
            break;
        case 'insurance':
            echo 'Страховка';
            break;
        case 'equipment':
            echo 'Дополнительное оборудование';
            break;
        case 'consultation':
            echo 'Дополнительная консультация';
            break;
        default:
            echo $item;
            break;
    }//switch
}
