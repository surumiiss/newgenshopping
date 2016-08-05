<?php

/**
 * This is the model class for table "merchant_details".
 *
 * The followings are the available columns in table 'merchant_details':
 * @property integer $id
 * @property integer $user_id
 * @property string $fullname
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
 * @property integer $district
 * @property integer $state
 * @property integer $country
 * @property string $vat_tin
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 * @property integer $is_payment_done
 * @property integer $field2
 * @property integer $field3
 *
 * The followings are the available model relations:
 * @property User $user
 */
class MerchantDetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'merchant_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, fullname, product_categories, merchant_type, product_count, shop_name, address, pincode, city, locality, district, state, country, CB, UB, DOC, DOU, is_payment_done', 'required'),
			array('user_id, merchant_type, product_count, pincode, district, state, country, CB, UB, is_payment_done, field2, field3', 'numerical', 'integerOnly'=>true),
			array('fullname, city, locality, vat_tin', 'length', 'max'=>100),
			array('product_categories, shop_name, shop_logo, shop_banner', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, fullname, product_categories, merchant_type, product_count, shop_name, shop_logo, shop_banner, address, pincode, city, locality, district, state, country, vat_tin, CB, UB, DOC, DOU, is_payment_done, field2, field3', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'fullname' => 'Fullname',
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
			'district' => 'District',
			'state' => 'State',
			'country' => 'Country',
			'vat_tin' => 'Vat Tin',
			'CB' => 'Cb',
			'UB' => 'Ub',
			'DOC' => 'Doc',
			'DOU' => 'Dou',
			'is_payment_done' => '1=Yes, 0=No',
			'field2' => 'Field2',
			'field3' => 'Field3',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('fullname',$this->fullname,true);
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
		$criteria->compare('district',$this->district);
		$criteria->compare('state',$this->state);
		$criteria->compare('country',$this->country);
		$criteria->compare('vat_tin',$this->vat_tin,true);
		$criteria->compare('CB',$this->CB);
		$criteria->compare('UB',$this->UB);
		$criteria->compare('DOC',$this->DOC,true);
		$criteria->compare('DOU',$this->DOU,true);
		$criteria->compare('is_payment_done',$this->is_payment_done);
		$criteria->compare('field2',$this->field2);
		$criteria->compare('field3',$this->field3);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MerchantDetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
