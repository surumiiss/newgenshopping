<?php

class ProductsController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow - all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'create', 'update', 'admin', 'delete'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Products;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Products'])) {

            $this->performAjaxValidation($model);
            $model->attributes = $_POST['Products'];
            $model->description = $_POST['Products']['description'];
            $model->meta_description = $_POST['Products']['meta_description'];
            $model->new_from = $_POST['Products']['new_from'];
            $model->new_to = $_POST['Products']['new_to'];
            $model->sale_from = $_POST['Products']['sale_from'];
            $model->sale_to = $_POST['Products']['sale_to'];
            $model->special_price_from = $_POST['Products']['special_price_from'];
            $model->special_price_to = $_POST['Products']['special_price_to'];
            $model->DOC = $_POST['Products']['DOC'];
            $model->DOU = $_POST['Products']['DOU'];
//            print_r($model->attributes);


            $image = CUploadedFile::getInstance($model, 'main_image');
            $hover_image = CUploadedFile::getInstance($model, 'hover_image');
            $images = CUploadedFile::getInstancesByName('gallery_images');
            $model->main_image = $image->extensionName;
            $model->hover_image = $hover_image->extensionName;

//            if ($model->search_tag != "") {
//                $model->search_tag = implode(",", $model->search_tag);
//            } 
            if ($model->related_products != "") {
                $model->related_products = implode(",", $model->related_products);
            } else {
                $model->related_products = "";
            }

            if ($_POST['Products']['new_from'] != "")
                $model->new_from = date("Y-m-d", strtotime($_POST['Products']['new_from']));
            else
                $model->new_from = 0;

            if ($_POST['Products']['new_to'] != "")
                $model->new_to = date("Y-m-d", strtotime($_POST['Products']['new_to']));
            else
                $model->new_to = 0;

            if ($_POST['Products']['sale_from'] != "")
                $model->sale_from = date("Y-m-d", strtotime($_POST['Products']['sale_from']));
            else
                $model->sale_from = 0;

            if ($_POST['Products']['sale_to'] != "")
                $model->sale_to = date("Y-m-d", strtotime($_POST['Products']['sale_to']));
            else
                $model->sale_to = 0;

            if ($_POST['Products']['special_price_from'] != "")
                $model->special_price_from = date("Y-m-d", strtotime($_POST['Products']['special_price_from']));
            else
                $model->special_price_from = 0;

            if ($_POST['Products']['special_price_to'] != "")
                $model->special_price_to = date("Y-m-d", strtotime($_POST['Products']['special_price_to']));
            else
                $model->special_price_to = 0;

            $model->CB = Yii::app()->session['admin']['id'];
            $model->UB = Yii::app()->session['admin']['id'];
            $model->DOC = date('Y-m-d');
            $model->DOU = date('Y-m-d');


            if ($model->validate()) {


                if ($model->save()) {
                    if ($image != "") {
                        $id = $model->id;
                        $dimension[0] = array('width' => '116', 'height' => '155', 'name' => 'small');
                        $dimension[1] = array('width' => '322', 'height' => '500', 'name' => 'medium');
                        $dimension[2] = array('width' => '580', 'height' => '775', 'name' => 'big');
                        $dimension[3] = array('width' => '3016', 'height' => '4030', 'name' => 'zoom');
                        Yii::app()->Upload->uploadImage($image, $id, true, $dimension);
                    }

                    if ($hover_image != "") {
                        $id = $model->id;
                        $dimensions[0] = array('width' => '322', 'height' => '500', 'name' => 'hover');
                        Yii::app()->Upload->uploadHoverImage($hover_image, $id, true, $dimensions);
                    }

                    if ($images != "") {
                        $id = $model->id;
                        $dimension[0] = array('width' => '116', 'height' => '155', 'name' => 'small');
                        $dimension[1] = array('width' => '580', 'height' => '775', 'name' => 'big');
                        $dimension[3] = array('width' => '3016', 'height' => '4030', 'name' => 'zoom');
                        Yii::app()->Upload->uploadMultipleImage($images, $id, true, $dimension);
                    }
//                    if ($video != "") {
//
//                        $id = $model->id;
//                        $dimensions[0] = array('name' => 'video');
//
//                        // var_dump($video);
//                        // exit;
//
//                        Yii::app()->Upload->uploadVideo($video, $id, true, $dimensions);
//                    }
                    $this->redirect(array('admin', 'id' => $model->id));
                }
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $model->setScenario('update');

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);
//        if (isset($_POST['Products'])) {
//            $model->attributes = $_POST['Products'];
//            if ($model->save())
//                $this->redirect(array('update', 'id' => $model->id));
//        }
//
//        $this->render('update', array(
//            'model' => $model,
//        ));
        $image1 = $model->main_image;
        $image0 = $model->gallery_images;
        $image2 = $model->hover_image;
        $doc = $model->DOC;

        if (isset($_POST['Products'])) {

            $this->performAjaxValidation($model);
            $model->attributes = $_POST['Products'];
            $model->description = $_POST['Products']['description'];
            $model->meta_description = $_POST['Products']['meta_description'];
            $model->new_from = $_POST['Products']['new_from'];
            $model->new_to = $_POST['Products']['new_to'];
            $model->sale_from = $_POST['Products']['sale_from'];
            $model->sale_to = $_POST['Products']['sale_to'];
            $model->special_price_from = $_POST['Products']['special_price_from'];
            $model->special_price_to = $_POST['Products']['special_price_to'];
            $model->DOC = $doc;

            $image = CUploadedFile::getInstance($model, 'main_image');
            $hover_image = CUploadedFile::getInstance($model, 'hover_image');
            $images = CUploadedFile::getInstancesByName('gallery_images');
            $model->main_image = $image->extensionName;
            $model->hover_image = $hover_image->extensionName;

//            if ($model->search_tag != "") {
//                $model->search_tag = implode(",", $model->search_tag);
//            } 
            if ($model->related_products != "") {
                $model->related_products = implode(",", $model->related_products);
            } else {
                $model->related_products = "";
            }

            if ($_POST['Products']['new_from'] != "")
                $model->new_from = date("Y-m-d", strtotime($_POST['Products']['new_from']));
            else
                $model->new_from = 0;

            if ($_POST['Products']['new_to'] != "")
                $model->new_to = date("Y-m-d", strtotime($_POST['Products']['new_to']));
            else
                $model->new_to = 0;

            if ($_POST['Products']['sale_from'] != "")
                $model->sale_from = date("Y-m-d", strtotime($_POST['Products']['sale_from']));
            else
                $model->sale_from = 0;

            if ($_POST['Products']['sale_to'] != "")
                $model->sale_to = date("Y-m-d", strtotime($_POST['Products']['sale_to']));
            else
                $model->sale_to = 0;

            if ($_POST['Products']['special_price_from'] != "")
                $model->special_price_from = date("Y-m-d", strtotime($_POST['Products']['special_price_from']));
            else
                $model->special_price_from = 0;

            if ($_POST['Products']['special_price_to'] != "")
                $model->special_price_to = date("Y-m-d", strtotime($_POST['Products']['special_price_to']));
            else
                $model->special_price_to = 0;

//            $model->CB = Yii::app()->session['admin']['id'];
            $model->UB = Yii::app()->session['admin']['id'];
//            $model->DOC = date('Y-m-d');
            $model->DOU = date('Y-m-d');
            if ($image != "") {
                $id = $model->id;
                $dimension[0] = array('width' => '116', 'height' => '155', 'name' => 'small');
                $dimension[1] = array('width' => '322', 'height' => '500', 'name' => 'medium');
                $dimension[2] = array('width' => '580', 'height' => '775', 'name' => 'big');
                $dimension[3] = array('width' => '3016', 'height' => '4030', 'name' => 'zoom');
                Yii::app()->Upload->uploadImage($image, $id, true, $dimension);
            } else {
                $model->main_image = $image1;
            }

            if ($hover_image != "") {
                $id = $model->id;
                $dimensions[0] = array('width' => '322', 'height' => '500', 'name' => 'hover');
                Yii::app()->Upload->uploadHoverImage($hover_image, $id, true, $dimensions);
            } else {

                $model->hover_image = $image2;
            }

            if ($images != "") {
                $id = $model->id;
                $dimension[0] = array('width' => '116', 'height' => '155', 'name' => 'small');
                $dimension[1] = array('width' => '580', 'height' => '775', 'name' => 'big');
                $dimension[3] = array('width' => '3016', 'height' => '4030', 'name' => 'zoom');
                Yii::app()->Upload->uploadMultipleImage($images, $id, true, $dimension);
            } else {
                $model->gallery_images = $image0;
            }

            if ($model->validate()) {
                if ($model->save(false)) {

//                    if ($video != "") {
//
//                        $id = $model->id;
//                        $dimensions[0] = array('name' => 'video');
//
//                        // var_dump($video);
//                        // exit;
//
//                        Yii::app()->Upload->uploadVideo($video, $id, true, $dimensions);
//                    }
                    $this->redirect(array('admin', 'id' => $model->id));
                }
            }
        }
        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Products');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Products('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Products']))
            $model->attributes = $_GET['Products'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Products the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Products::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Products $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'products-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
