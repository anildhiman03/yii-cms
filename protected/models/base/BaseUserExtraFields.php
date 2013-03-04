<?php

/**
/*
 * @author Asif Ali M
 * @package application.models 
 * 
 * BaseUserExtraFields is autogenerate by UniModel generator
 *
 * This is the model class for table "user_extra_fields".
 *
 * The followings are the available columns in table 'user_extra_fields':
 * @property integer $user_fields_id
 * @property string $key_name
 * @property string $key_value
 * @property integer $user_ref_id
 *
 * The followings are the available model relations:
 * @property UserMaster $userRef
 */
class BaseUserExtraFields extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserExtraFields the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_extra_fields';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_ref_id', 'numerical', 'integerOnly'=>true),
			array('key_name', 'length', 'max'=>45),
			array('key_value', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_fields_id, key_name, key_value, user_ref_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'userRef' => array(self::BELONGS_TO, 'UserMaster', 'user_ref_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_fields_id' => 'User Fields',
			'key_name' => 'Key Name',
			'key_value' => 'Key Value',
			'user_ref_id' => 'User Ref',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_fields_id',$this->user_fields_id);
		$criteria->compare('key_name',$this->key_name,true);
		$criteria->compare('key_value',$this->key_value,true);
		$criteria->compare('user_ref_id',$this->user_ref_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}