<?php

/**
/*
 * @author Asif Ali M
 * @package application.models 
 * 
 * BaseUserMaster is autogenerate by UniModel generator
 *
 * This is the model class for table "user_master".
 *
 * The followings are the available columns in table 'user_master':
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property integer $gender
 * @property string $added_on
 * @property integer $login_ref_id
 *
 * The followings are the available model relations:
 * @property UserExtraFields[] $userExtraFields
 * @property LoginMaster $loginRef
 */
class BaseUserMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserMaster the static model class
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
		return 'user_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('added_on, login_ref_id', 'required'),
			array('gender, login_ref_id', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name', 'length', 'max'=>225),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, first_name, last_name, gender, added_on, login_ref_id', 'safe', 'on'=>'search'),
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
			'userExtraFields' => array(self::HAS_MANY, 'UserExtraFields', 'user_ref_id'),
			'loginRef' => array(self::BELONGS_TO, 'LoginMaster', 'login_ref_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'gender' => 'Gender',
			'added_on' => 'Added On',
			'login_ref_id' => 'Login Ref',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('added_on',$this->added_on,true);
		$criteria->compare('login_ref_id',$this->login_ref_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}