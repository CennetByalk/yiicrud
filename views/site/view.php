<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Kedi Sahiplendirme İlanları';
?>
<div class="site-index">
    <h1>İLANI GÖSTER</h1>
 
    <div class="body-content">
       <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <?php echo $post->title; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
     <?php echo $post->description; ?>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
      <?php echo $post->category; ?>
  </li>
</ul>
        <dev class="row">
              <a href==<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Geri Dön</a>
        </dev>
    </div>
</div>
