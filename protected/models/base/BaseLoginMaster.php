<?php

/**
/*
 * @author Asif Ali M
 * @package application.models 
 * 
 * BaseLoginMaster is autogenerate by UniModel generator
 *
 * This is the model class for table "login_master".
 *
 * The followings are the available columns in table 'login_master':
 * @property integer $login_id
 * @property string $username
 * @property string $password
 * @property integer $is_active
 * @property string $last_login
 * @property string $date
 * @property integer $user_type_ref_id
 *
 * The followings are the available model relations:
 * @property LookupUserType $userTypeRef
 * @property UserMaster[] $userMasters
 */
class BaseLoginMaster extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LoginMaster the static model class
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
		return 'login_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, is_active, date, user_type_ref_id', 'required'),
			array('is_active, user_type_ref_id', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>225),
			array('last_login', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('login_id, username, password, is_active, last_login, date, user_type_ref_id', 'safe', 'on'=>'search'),
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
			'userTypeRef' => array(self::BELONGS_TO, 'LookupUserType', 'user_type_ref_id'),
			'userMasters' => array(self::HAS_MANY, 'UserMaster', 'login_ref_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'login_id' => 'Login',
			'username' => 'Username',
			'password' => 'Password',
			'is_active' => 'Is Active',
			'last_login' => 'Last Login',
			'date' => 'Date',
			'user_type_ref_id' => 'User Type Ref',
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

		$criteria->compare('login_id',$this->login_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('user_type_ref_id',$this->user_type_ref_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}