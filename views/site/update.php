<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Kedi Sahiplendirme İlanları';
?>
<div class="site-index">
    <h1>İLANI GÜNCELLE</h1>

    
    <div class="body-content">
        <?php 
            $form = ActiveForm::begin()?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'title');?>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class ="form-group">
                <div class ="col-lg-6">
                    <?= $form->field($post, 'description')->textarea(['rows' => '6']);?>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class ="form-group">
                <div class ="col-lg-6">
                    <?php $items = ['Ankara'=>'Ankara','Eskişehir'=>'Eskişehir','İstanbul'=>'İstanbul','İzmir'=>'İzmir', 'İzmit'=>'İzmit',]; ?>
                    <?= $form->field($post, 'category')->dropDownList($items,['prompt' => 'Seçin']);?>
                </div>
            </div>
        </div
        
        <div class="row">
            <div class ="form-group">
                <div class ="col-lg-6">
                    <div class="col-lg-3">
                        <?= Html::submitButton('İlanı Güncelle', ['class' => 'btn btn-primary']);?>   
                    </div>
                    <div class="col-lg-2">
                        <a href==<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Geri Dön</a>
                    </div>
                </div>
            </div>
        </div>
        
        <?php ActiveForm::end() ?>
    </div>
</div>
