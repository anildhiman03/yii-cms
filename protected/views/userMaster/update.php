<?php
$this->breadcrumbs=array(
	'User Masters'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserMaster','url'=>array('index')),
	array('label'=>'Create UserMaster','url'=>array('create')),
	array('label'=>'View UserMaster','url'=>array('view','id'=>$model->user_id)),
	array('label'=>'Manage UserMaster','url'=>array('admin')),
);
?>

<h1>Update UserMaster <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>