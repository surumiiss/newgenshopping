<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property integer $id
 * @property integer $user_id
 * @property string $total_amount
 * @property string $order_date
 * @property integer $coupon_id
 * @property string $discount_rate
 * @property integer $gift_option
 * @property double $rate
 * @property integer $ship_address_id
 * @property integer $bill_address_id
 * @property integer $currency_id
 * @property string $comment
 * @property string $payment_mode
 * @property string $admin_comment
 * @property integer $transaction_id
 * @property integer $payment_status
 * @property integer $admin_status
 * @property integer $status
 * @property string $DOC
 * @property integer $netbanking
 * @property string $paypal
 * @property string $wallet
 * @property integer $shipping_method
 * @property integer $newgen_gift
 *
 * The followings are the available model relations:
 * @property UserAddress $billAddress
 * @property BuyerDetails $user
 * @property UserAddress $shipAddress
 * @property OrderProducts[] $orderProducts
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
//			array('user_id, total_amount, order_date, coupon_id, discount_rate, gift_option, rate, ship_address_id, bill_address_id, currency_id, comment, payment_mode, admin_comment, transaction_id, payment_status, admin_status, status, DOC, netbanking, paypal, wallet, shipping_method, newgen_gift', 'required'),
			array('user_id, coupon_id, gift_option, ship_address_id, bill_address_id, currency_id, transaction_id, payment_status, admin_status, status, netbanking, shipping_method, newgen_gift', 'numerical', 'integerOnly'=>true),
			array('rate', 'numerical'),
			array('total_amount, discount_rate, paypal, wallet', 'length', 'max'=>10),
			array('payment_mode', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, total_amount, order_date, coupon_id, discount_rate, gift_option, rate, ship_address_id, bill_address_id, currency_id, comment, payment_mode, admin_comment, transaction_id, payment_status, admin_status, status, DOC, netbanking, paypal, wallet, shipping_method, newgen_gift', 'safe', 'on'=>'search'),
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
			'billAddress' => array(self::BELONGS_TO, 'UserAddress', 'bill_address_id'),
			'user' => array(self::BELONGS_TO, 'BuyerDetails', 'user_id'),
			'shipAddress' => array(self::BELONGS_TO, 'UserAddress', 'ship_address_id'),
			'orderProducts' => array(self::HAS_MANY, 'OrderProducts', 'order_id'),
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
			'total_amount' => 'Total Amount',
			'order_date' => 'Order Date',
			'coupon_id' => 'Coupon',
			'discount_rate' => 'Discount Rate',
			'gift_option' => 'Gift Option',
			'rate' => 'Rate',
			'ship_address_id' => 'Ship Address',
			'bill_address_id' => 'Bill Address',
			'currency_id' => 'Currency',
			'comment' => 'Comment',
			'payment_mode' => 'Payment Mode',
			'admin_comment' => 'Admin Comment',
			'transaction_id' => 'Transaction',
			'payment_status' => 'Payment Status',
			'admin_status' => 'Admin Status',
			'status' => 'Status',
			'DOC' => 'Doc',
			'netbanking' => 'Netbanking',
			'paypal' => 'Paypal',
			'wallet' => 'Wallet',
			'shipping_method' => 'Shipping Method',
			'newgen_gift' => 'Newgen Gift',
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
		$criteria->compare('total_amount',$this->total_amount,true);
		$criteria->compare('order_date',$this->order_date,true);
		$criteria->compare('coupon_id',$this->coupon_id);
		$criteria->compare('discount_rate',$this->discount_rate,true);
		$criteria->compare('gift_option',$this->gift_option);
		$criteria->compare('rate',$this->rate);
		$criteria->compare('ship_address_id',$this->ship_address_id);
		$criteria->compare('bill_address_id',$this->bill_address_id);
		$criteria->compare('currency_id',$this->currency_id);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('payment_mode',$this->payment_mode,true);
		$criteria->compare('admin_comment',$this->admin_comment,true);
		$criteria->compare('transaction_id',$this->transaction_id);
		$criteria->compare('payment_status',$this->payment_status);
		$criteria->compare('admin_status',$this->admin_status);
		$criteria->compare('status',$this->status);
		$criteria->compare('DOC',$this->DOC,true);
		$criteria->compare('netbanking',$this->netbanking);
		$criteria->compare('paypal',$this->paypal,true);
		$criteria->compare('wallet',$this->wallet,true);
		$criteria->compare('shipping_method',$this->shipping_method);
		$criteria->compare('newgen_gift',$this->newgen_gift);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
