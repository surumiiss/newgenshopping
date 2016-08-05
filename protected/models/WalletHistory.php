<?php

/**
 * This is the model class for table "wallet_history".
 *
 * The followings are the available columns in table 'wallet_history':
 * @property integer $id
 * @property integer $user_id
 * @property integer $type_id
 * @property string $amount
 * @property string $entry_date
 * @property integer $credit_debit
 * @property string $balance_amt
 * @property integer $ids
 * @property string $field1
 * @property integer $field2
 * @property integer $payment_method
 * @property integer $transaction_id
 *
 * The followings are the available model relations:
 * @property User $user
 */
class WalletHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wallet_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, type_id, amount, entry_date, credit_debit, balance_amt, ids, field1, field2, payment_method, transaction_id', 'required'),
			array('user_id, type_id, credit_debit, ids, field2, payment_method, transaction_id', 'numerical', 'integerOnly'=>true),
			array('amount, balance_amt', 'length', 'max'=>10),
			array('field1', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, type_id, amount, entry_date, credit_debit, balance_amt, ids, field1, field2, payment_method, transaction_id', 'safe', 'on'=>'search'),
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
			'type_id' => 'Type',
			'amount' => 'Amount',
			'entry_date' => 'Entry Date',
			'credit_debit' => '1=>credit, 2=>debit',
			'balance_amt' => 'Balance Amt',
			'ids' => 'eg:purchase_id',
			'field1' => 'comment',
			'field2' => 'status',
			'payment_method' => '1=>admin,2=>credit/debit/netbanking,3=>paypal',
			'transaction_id' => 'Transaction',
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
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('entry_date',$this->entry_date,true);
		$criteria->compare('credit_debit',$this->credit_debit);
		$criteria->compare('balance_amt',$this->balance_amt,true);
		$criteria->compare('ids',$this->ids);
		$criteria->compare('field1',$this->field1,true);
		$criteria->compare('field2',$this->field2);
		$criteria->compare('payment_method',$this->payment_method);
		$criteria->compare('transaction_id',$this->transaction_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WalletHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
