<?php

use yii\helpers\html;
/* @var $this yii\web\View */

$this->title = 'Kedi Sahiplendirme İlanları';
?>
<div class="site-index">
    <?php if(yii::$app->session->hasFlash('message')):?>
    <div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 <?php echo yii::$app->session->getFlash('message');?>
</div>
   
    <?php endif;?>
    <div class="jumbotron">
        <h1 style=" color: #337ab7;">Kedi Sahiplendirme İlanları</h1>
    </div>
    
    <div class="row">
        <span style="margin-bottom: 20px"><?= Html::a('İlanı ekle', ['/site/create'], ['class' => 'btn btn-primary'])?></span>
    </div>
    
    <div class="body-content">
        <div class="row">
       <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Başlık</th>
      <th scope="col">Açıklama</th>
      <th scope="col">Şehir</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php if(count($posts) > 0): ?>
      <?php foreach($posts as $post): ?>
    <tr class="table-active">
      <th scope="row"><?php echo $post->id;?></th>
      <td><?php echo $post->title;?></td>
      <td><?php echo $post->description;?></td>
      <td><?php echo $post->category;?></td>
      <td>
          <span><?=Html::a('Oku', ['view', 'id'=>$post->id], [ 'class'=> 'label label-primary']) ?></span>
           <span><?=Html::a('Güncelle', ['update', 'id'=>$post->id], [ 'class'=> 'label label-default']) ?></span>
            <span><?=Html::a('Kaldır', ['delete', 'id'=>$post->id], [ 'class'=> 'label label-danger']) ?></span>
      </td>
    </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td>İlanları bulamadı!</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>    
        </div>
    </div>
</div>
