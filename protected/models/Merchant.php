<?php

/**
 * This is the model class for table "merchant".
 *
 * The followings are the available columns in table 'merchant':
 * @property integer $id
 * @property string $fullname
 * @property string $email
 * @property string $phone_number
 * @property string $password
 * @property string $verification_code
 * @property string $activation_link
 * @property string $product_categories
 * @property integer $merchant_type
 * @property integer $product_count
 * @property string $shop_name
 * @property string $shop_logo
 * @property string $shop_banner
 * @property string $address
 * @property integer $pincode
 * @property string $city
 * @property string $locality
 * @property string $landmark
 * @property integer $state
 * @property integer $country
 * @property string $vat_tin
 * @property string $status
 * @property string $last_login
 * @property integer $bad_attempts
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 * @property integer $is_payment_done
 */
class Merchant extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'merchant';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fullname, email, phone_number, password, verification_code, activation_link, product_categories, merchant_type, product_count, shop_name, address, pincode, city, locality, landmark, state, country, status, last_login, bad_attempts, CB, UB, DOC, DOU, is_payment_done', 'required'),
			array('merchant_type, product_count, pincode, state, country, bad_attempts, CB, UB, is_payment_done', 'numerical', 'integerOnly'=>true),
			array('fullname, email, phone_number, password, activation_link, city, locality, vat_tin, status', 'length', 'max'=>100),
			array('verification_code', 'length', 'max'=>50),
			array('product_categories, shop_name, shop_logo, shop_banner', 'length', 'max'=>250),
			array('landmark', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fullname, email, phone_number, password, verification_code, activation_link, product_categories, merchant_type, product_count, shop_name, shop_logo, shop_banner, address, pincode, city, locality, landmark, state, country, vat_tin, status, last_login, bad_attempts, CB, UB, DOC, DOU, is_payment_done', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fullname' => 'Fullname',
			'email' => 'Email',
			'phone_number' => 'Phone Number',
			'password' => 'Password',
			'verification_code' => 'Verification Code',
			'activation_link' => 'Activation Link',
			'product_categories' => 'Product Categories',
			'merchant_type' => 'Merchant Type',
			'product_count' => 'Product Count',
			'shop_name' => 'Shop Name',
			'shop_logo' => 'Shop Logo',
			'shop_banner' => 'Shop Banner',
			'address' => 'Address',
			'pincode' => 'Pincode',
			'city' => 'City',
			'locality' => 'Locality',
			'landmark' => 'Landmark',
			'state' => 'State',
			'country' => 'Country',
			'vat_tin' => 'Vat Tin',
			'status' => 'Status',
			'last_login' => 'Last Login',
			'bad_attempts' => 'Bad Attempts',
			'CB' => 'Cb',
			'UB' => 'Ub',
			'DOC' => 'Doc',
			'DOU' => 'Dou',
			'is_payment_done' => 'Is Payment Done',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone_number',$this->phone_number,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('verification_code',$this->verification_code,true);
		$criteria->compare('activation_link',$this->activation_link,true);
		$criteria->compare('product_categories',$this->product_categories,true);
		$criteria->compare('merchant_type',$this->merchant_type);
		$criteria->compare('product_count',$this->product_count);
		$criteria->compare('shop_name',$this->shop_name,true);
		$criteria->compare('shop_logo',$this->shop_logo,true);
		$criteria->compare('shop_banner',$this->shop_banner,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('pincode',$this->pincode);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('locality',$this->locality,true);
		$criteria->compare('landmark',$this->landmark,true);
		$criteria->compare('state',$this->state);
		$criteria->compare('country',$this->country);
		$criteria->compare('vat_tin',$this->vat_tin,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('bad_attempts',$this->bad_attempts);
		$criteria->compare('CB',$this->CB);
		$criteria->compare('UB',$this->UB);
		$criteria->compare('DOC',$this->DOC,true);
		$criteria->compare('DOU',$this->DOU,true);
		$criteria->compare('is_payment_done',$this->is_payment_done);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Merchant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
