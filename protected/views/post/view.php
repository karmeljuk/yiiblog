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
<h3>comments</h3>

<?php $this->renderPartial('comment.views.comment.commentList', array(
    'model'=>$model
)); ?>

</div><!-- comments -->



