<?php

/**
/*
 * @author Asif Ali M
 * @package application.models 
 * 
 * BaseLookupUserType is autogenerate by UniModel generator
 *
 * This is the model class for table "lookup_user_type".
 *
 * The followings are the available columns in table 'lookup_user_type':
 * @property integer $user_type_id
 * @property string $user_type_name
 * @property integer $is_active
 *
 * The followings are the available model relations:
 * @property LoginMaster[] $loginMasters
 */
class BaseLookupUserType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LookupUserType the static model class
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
		return 'lookup_user_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_type_name, is_active', 'required'),
			array('is_active', 'numerical', 'integerOnly'=>true),
			array('user_type_name', 'length', 'max'=>225),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_type_id, user_type_name, is_active', 'safe', 'on'=>'search'),
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
			'loginMasters' => array(self::HAS_MANY, 'LoginMaster', 'user_type_ref_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_type_id' => 'User Type',
			'user_type_name' => 'User Type Name',
			'is_active' => 'Is Active',
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

		$criteria->compare('user_type_id',$this->user_type_id);
		$criteria->compare('user_type_name',$this->user_type_name,true);
		$criteria->compare('is_active',$this->is_active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}