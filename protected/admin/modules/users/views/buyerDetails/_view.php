<?php
/* @var $this BuyerDetailsController */
/* @var $data BuyerDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_no_1')); ?>:</b>
	<?php echo CHtml::encode($data->phone_no_1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_no_2')); ?>:</b>
	<?php echo CHtml::encode($data->phone_no_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('confirm')); ?>:</b>
	<?php echo CHtml::encode($data->confirm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('newsletter')); ?>:</b>
	<?php echo CHtml::encode($data->newsletter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wallet_amt')); ?>:</b>
	<?php echo CHtml::encode($data->wallet_amt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verification_code')); ?>:</b>
	<?php echo CHtml::encode($data->verification_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_verification')); ?>:</b>
	<?php echo CHtml::encode($data->email_verification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bad_attempts')); ?>:</b>
	<?php echo CHtml::encode($data->bad_attempts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CB')); ?>:</b>
	<?php echo CHtml::encode($data->CB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UB')); ?>:</b>
	<?php echo CHtml::encode($data->UB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOC')); ?>:</b>
	<?php echo CHtml::encode($data->DOC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOU')); ?>:</b>
	<?php echo CHtml::encode($data->DOU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login')); ?>:</b>
	<?php echo CHtml::encode($data->last_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field1')); ?>:</b>
	<?php echo CHtml::encode($data->field1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field2')); ?>:</b>
	<?php echo CHtml::encode($data->field2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field3')); ?>:</b>
	<?php echo CHtml::encode($data->field3); ?>
	<br />

	*/ ?>

</div>