<?php

class SiteController extends Controller {

        /**
         * Declares class-based actions.
         */
        public function actions() {
                return array(
                    // captcha action renders the CAPTCHA image displayed on the contact page
                    'captcha' => array(
                        'class' => 'CCaptchaAction',
                        'backColor' => 0xFFFFFF,
                    ),
                    // page action renders "static" pages stored under 'protected/views/site/pages'
                    // They can be accessed via: index.php?r=site/page&view=FileName
                    'page' => array(
                        'class' => 'CViewAction',
                    ),
                );
        }

        /**
         * This is the default 'index' action that is invoked
         * when an action is not explicitly requested by users.
         */
        public function actionIndex() {

                $this->render('index');
        }

        public function actionRegister() {
                $model = new BuyerDetails('create');
                if (isset($_POST['BuyerDetails'])) {
                        $model->attributes = $_POST['BuyerDetails'];
                        $date1 = $_POST['BuyerDetails']['dob'];
                        $newDate = date("Y-m-d", strtotime($date1));
                        $model->dob = $newDate;
                        $model->gender = $_POST['BuyerDetails']['gender'];
                        $model->phone_no_1 = $_POST['BuyerDetails']['phone_no_1'];
                        $model->phone_no_2 = $_POST['BuyerDetails']['phone_no_2'];
                        if ($model->validate()) {
                                $model->status = 1;
                                $model->CB = 1;
                                $model->UB = 1;
                                $model->DOC = date('Y-m-d');
                        }
                        if ($model->password == $model->confirm) {
                                if ($model->save()) {
//Yii::app()->user->setFlash('success', "Dear, $model->first_name, your message has been sent successfully");
                                        Yii::app()->session['user'] = $model;
                                        $this->redirect('index');
                                } else {
// Yii::app()->user->setFlash('error', "Sorry! Message seniding Failed..");
                                }
                        } else {
                                $model->addError(confirm, 'password mismatch');
                        }
                }
                $this->render('register', array('model' => $model));
        }

}
