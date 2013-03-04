<?php
/**
 * 
 * 
* Yii::import('<?php echo "{$this->baseModelPath}.{$this->baseModelClass}"; ?>');
*/
?>
<?php echo "<?php\n"; ?>

/*
 * @author Asif Ali M
 * @package application.models
 * 
 * The class defination is autogenerate by UniModel generator
 */

Yii::import('<?php echo "{$this->baseModelPath}.{$this->baseModelClass}"; ?>');

class <?php echo $modelClass; ?> extends <?php echo $this->baseModelClass."\n"; ?>
{
  public static function model($className=__CLASS__)
  {
    return parent::model($className);
  }
}