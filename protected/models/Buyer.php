<?php

/**
 * This is the model class for table "buyer".
 *
 * The followings are the available columns in table 'buyer':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $dob
 * @property string $gender
 * @property string $email
 * @property string $phone_no_1
 * @property string $phone_no_2
 * @property string $password
 * @property string $confirm
 * @property integer $newsletter
 * @property string $wallet_amt
 * @property string $verification_code
 * @property string $email_verification
 * @property integer $status
 * @property integer $bad_attempts
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 * @property string $last_login
 * @property integer $field1
 * @property integer $field2
 * @property integer $field3
 */
class Buyer extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'buyer';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('first_name, last_name, dob, gender, email, phone_no_2, password, confirm, email_verification, status, CB, DOC', 'required'),
            array('newsletter, status, bad_attempts, CB, UB', 'numerical', 'integerOnly' => true),
            array('first_name, last_name, email, phone_no_1, phone_no_2', 'length', 'max' => 100),
            array('gender', 'length', 'max' => 50),
            array('password, confirm', 'length', 'max' => 225),
            array('wallet_amt, verification_code', 'length', 'max' => 10),
            array('email_verification', 'length', 'max' => 11),
            array('DOU', 'safe'),
            array('email', 'unique'),
            array('wallet_amt', 'length', 'max' => 10),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, first_name, last_name, dob, gender, email, phone_no_1, phone_no_2, password, confirm, newsletter, wallet_amt, verification_code, email_verification, status, bad_attempts, CB, UB, DOC, DOU, last_login, field1, field2, field3', 'safe', 'on' => 'search'),
            array('first_name,last_name,dob,gender,password,email,confirm', 'required', 'on' => 'create'),
            array('email', 'email', 'on' => 'create'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'dob' => 'Date of Birth',
            'gender' => 'Gender',
            'email' => 'Email',
            'phone_no_1' => 'Phone No 1',
            'phone_no_2' => 'Phone No 2',
            'password' => 'Password',
            'confirm' => 'Confirm',
            'newsletter' => 'Newsletter',
            'wallet_amt' => 'Wallet Amt',
            'verification_code' => 'Verification Code',
            'email_verification' => 'Email Verification',
            'status' => 'Status',
            'bad_attempts' => 'Bad Attempts',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
            'last_login' => 'Last Login',
            'field1' => 'Field1',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('dob', $this->dob, true);
        $criteria->compare('gender', $this->gender, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('phone_no_1', $this->phone_no_1, true);
        $criteria->compare('phone_no_2', $this->phone_no_2, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('confirm', $this->confirm, true);
        $criteria->compare('newsletter', $this->newsletter);
        $criteria->compare('wallet_amt', $this->wallet_amt, true);
        $criteria->compare('verification_code', $this->verification_code, true);
        $criteria->compare('email_verification', $this->email_verification, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('bad_attempts', $this->bad_attempts);
        $criteria->compare('CB', $this->CB);
        $criteria->compare('UB', $this->UB);
        $criteria->compare('DOC', $this->DOC, true);
        $criteria->compare('DOU', $this->DOU, true);
        $criteria->compare('last_login', $this->last_login, true);
        $criteria->compare('field1', $this->field1);
        $criteria->compare('field2', $this->field2);
        $criteria->compare('field3', $this->field3);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Buyer the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
