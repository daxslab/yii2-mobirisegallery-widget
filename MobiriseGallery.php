<?php

namespace daxslab\mobirisegallery;
use yii\base\Widget;
use \yii\data\ArrayDataProvider;

class MobiriseGallery extends Widget
{
    public $columns = 4;

    public $items = [];

    public function run(){

        return $this->render('_gallery', [
            'items' => $this->items,
            'columns' => $this->columns,
        ]);
    }


}