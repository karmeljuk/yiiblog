<?php
$this->breadcrumbs=array(
  $model->title,
);
$this->pageTitle=$model->title;
?>

<?php $this->renderPartial('_view', array(
  'data'=>$model,
)); ?>

<div id="comments">
<?php //$this->widget('pendalf89\yii_commentator\extensions\comments_widget\CommentsWidget'); ?>

</div><!-- comments -->



