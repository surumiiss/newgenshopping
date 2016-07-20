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
            array('allow', // allow all users to perform 'index' and 'view' actions
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
        $model = new Products(create);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['Products'])) {
            print_r($model->attributes);
//            print_r($_POST['Products']);
            $image = CUploadedFile::getInstance($model, 'main_image');
            $hover_image = CUploadedFile::getInstance($model, 'hover_image');
//            $video = CUploadedFile::getInstance($model, 'video');
            if ($model->search_tag != "") {
                $model->search_tag = implode(",", $model->search_tag);
            } else {
                $model->search_tag = $_POST['ProductCategory']['search_tag'];
            }
            $images = CUploadedFile::getInstancesByName('gallery_images');
            $model->product_name = $_POST['Products']['product_name'];
            $model->product_code = $_POST['Products']['product_code'];
//            $model->product_code = $_POST['Products']['product_code'];
            $model->description = $_POST['Products']['description'];
            $model->main_image = $_POST['Products']['main_image'];
            $model->is_discount_available = $_POST['Products']['is_discount_available'];
            $model->requires_shipping = $_POST['Products']['requires_shipping'];
            $model->status = $_POST['Products']['status'];
            $model->is_featured = $_POST['Products']['is_featured'];
            $model->is_admin_approved = $_POST['Products']['is_admin_approved'];
            $model->is_available = $_POST['Products']['is_available'];
            $model->canonical_name = $_POST['Products']['canonical_name'];
            $model->product_name = $_POST['Products']['product_name'];
            $model->enquiry_sale = $_POST['Products']['enquiry_sale'];


            if ($_POST['Products']['category_id']) {
                $cat = $_POST['Products']['category_id'];
                $model->category_id = $cat;
            }
            if ($_POST['Products']['brand_id']) {
                $model->brand_id = $_POST['Products']['brand_id'];
            }
            if ($_POST['Products']['gallery_images']) {
                $model->gallery_images = $_POST['Products']['gallery_images'];
            }
            if ($_POST['Products']['hover_image']) {
                $model->hover_image = $_POST['Products']['hover_image'];
            }
            if ($_POST['Products']['meta_title']) {
                $model->meta_title = $_POST['Products']['meta_title'];
            }
            if ($_POST['Products']['meta_description']) {
                $model->meta_description = $_POST['Products']['meta_description'];
            }
            if ($_POST['Products']['meta_keywords']) {
                $model->meta_keywords = $_POST['Products']['meta_keywords'];
            }
            if ($_POST['Products']['header_visibility']) {
                $model->header_visibility = $_POST['Products']['header_visibility'];
            }
            if ($_POST['Products']['sort_order']) {
                $model->sort_order = $_POST['Products']['sort_order'];
            }
            if ($_POST['Products']['display_category_name']) {
                $model->display_category_name = $_POST['Products']['display_category_name'];
            }
            if ($_POST['Products']['price']) {
                $model->price = $_POST['Products']['price'];
            }
            if ($_POST['Products']['wholesale_price']) {
                $model->wholesale_price = $_POST['Products']['wholesale_price'];
            }
            if ($_POST['Products']['discount']) {
                $model->discount = $_POST['Products']['discount'];
            }
            if ($_POST['Products']['discount_type']) {
                $model->discount_type = $_POST['Products']['discount_type'];
            }
            if ($_POST['Products']['discount_rate']) {
                $model->discount_rate = $_POST['Products']['discount_rate'];
            }
            if ($_POST['Products']['quantity']) {
                $model->quantity = $_POST['Products']['quantity'];
            }
            if ($_POST['Products']['enquiry_sale']) {
                $model->enquiry_sale = $_POST['Products']['enquiry_sale'];
            }
            if ($_POST['Products']['tax']) {
                $model->tax = $_POST['Products']['tax'];
            }
            if ($_POST['Products']['weight']) {
                $model->weight = $_POST['Products']['weight'];
            }
            if ($_POST['Products']['weight_class']) {
                $model->weight_class = $_POST['Products']['weight_class'];
            }
            if ($_POST['Products']['gift_option']) {
                $model->gift_option = $_POST['Products']['gift_option'];
            }
            if ($_POST['Products']['requires_shipping']) {
                $model->requires_shipping = $_POST['Products']['requires_shipping'];
            }
            $model->main_image = $image->extensionName;
            $model->hover_image = $hover_image->extensionName;
//            $model->video = $video->extensionName;

            $model->related_products = $_POST['Products']['related_products'];
            // $model->related_products = implode(",", $model->related_products);

            if ($model->related_products != "") {
                $model->related_products = implode(",", $model->related_products);
            } else {
                $model->related_products = "";
            }

            $model->meta_description = $_POST['Products']['meta_description'];
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
            $model->stock_availability = $_POST['Products']['stock_availability'];
//                        var_dump(Yii::app()->session['admin']['id']);
//                        exit;
//                        $model->CB = Yii::app()->session['admin']['id'];
            $model->merchant_id = Yii::app()->session['admin']['id'];
            if (Yii::app()->session['admin']['post']) {
                $model->merchant_type = Yii::app()->session['admin']['post'];
            } else
                $model->merchant_type = 0; // dummy value assigned, session not set need to check
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
////                        Yii::app()->Upload->uploadVideo($video, $id, true, $dimensions);
//                    }
                    $this->redirect(array('admin', 'id' => $model->id));
                } else {
                    echo '<br><br><br>------------not saved---------------<br><br><br>';
//                    print_r($model->attributes);
                }
            } else {
                echo '<br><br><br>------------validation---------------<br><br><br>';
//                print_r($model->attributes);
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


        if (isset($_POST['Products'])) {
//            print_r($model->attributes);
//            print_r($_POST['Products']);
            $image = CUploadedFile::getInstance($model, 'main_image');
            $hover_image = CUploadedFile::getInstance($model, 'hover_image');
//            $video = CUploadedFile::getInstance($model, 'video');
            if ($model->search_tag != "") {
                $model->search_tag = implode(",", $model->search_tag);
            } else {
                $model->search_tag = $_POST['ProductCategory']['search_tag'];
            }
            $images = CUploadedFile::getInstancesByName('gallery_images');
            $model->product_name = $_POST['Products']['product_name'];
            $model->product_code = $_POST['Products']['product_code'];
//            $model->product_code = $_POST['Products']['product_code'];
            $model->description = $_POST['Products']['description'];
            $model->main_image = $_POST['Products']['main_image'];
            $model->is_discount_available = $_POST['Products']['is_discount_available'];
            $model->requires_shipping = $_POST['Products']['requires_shipping'];
            $model->status = $_POST['Products']['status'];
            $model->is_featured = $_POST['Products']['is_featured'];
            $model->is_admin_approved = $_POST['Products']['is_admin_approved'];
            $model->is_available = $_POST['Products']['is_available'];
            $model->canonical_name = $_POST['Products']['canonical_name'];
            $model->product_name = $_POST['Products']['product_name'];
            $model->enquiry_sale = $_POST['Products']['enquiry_sale'];


            if ($_POST['Products']['category_id']) {
                $cat = $_POST['Products']['category_id'];
                $model->category_id = $cat;
            }
            if ($_POST['Products']['brand_id']) {
                $model->brand_id = $_POST['Products']['brand_id'];
            }
            if ($_POST['Products']['gallery_images']) {
                $model->gallery_images = $_POST['Products']['gallery_images'];
            }
            if ($_POST['Products']['hover_image']) {
                $model->hover_image = $_POST['Products']['hover_image'];
            }
            if ($_POST['Products']['meta_title']) {
                $model->meta_title = $_POST['Products']['meta_title'];
            }
            if ($_POST['Products']['meta_description']) {
                $model->meta_description = $_POST['Products']['meta_description'];
            }
            if ($_POST['Products']['meta_keywords']) {
                $model->meta_keywords = $_POST['Products']['meta_keywords'];
            }
            if ($_POST['Products']['header_visibility']) {
                $model->header_visibility = $_POST['Products']['header_visibility'];
            }
            if ($_POST['Products']['sort_order']) {
                $model->sort_order = $_POST['Products']['sort_order'];
            }
            if ($_POST['Products']['display_category_name']) {
                $model->display_category_name = $_POST['Products']['display_category_name'];
            }
            if ($_POST['Products']['price']) {
                $model->price = $_POST['Products']['price'];
            }
            if ($_POST['Products']['wholesale_price']) {
                $model->wholesale_price = $_POST['Products']['wholesale_price'];
            }
            if ($_POST['Products']['discount']) {
                $model->discount = $_POST['Products']['discount'];
            }
            if ($_POST['Products']['discount_type']) {
                $model->discount_type = $_POST['Products']['discount_type'];
            }
            if ($_POST['Products']['discount_rate']) {
                $model->discount_rate = $_POST['Products']['discount_rate'];
            }
            if ($_POST['Products']['quantity']) {
                $model->quantity = $_POST['Products']['quantity'];
            }
            if ($_POST['Products']['enquiry_sale']) {
                $model->enquiry_sale = $_POST['Products']['enquiry_sale'];
            }
            if ($_POST['Products']['tax']) {
                $model->tax = $_POST['Products']['tax'];
            }
            if ($_POST['Products']['weight']) {
                $model->weight = $_POST['Products']['weight'];
            }
            if ($_POST['Products']['weight_class']) {
                $model->weight_class = $_POST['Products']['weight_class'];
            }
            if ($_POST['Products']['gift_option']) {
                $model->gift_option = $_POST['Products']['gift_option'];
            }
            if ($_POST['Products']['requires_shipping']) {
                $model->requires_shipping = $_POST['Products']['requires_shipping'];
            }
            $model->main_image = $image->extensionName;
            $model->hover_image = $hover_image->extensionName;
//            $model->video = $video->extensionName;

            $model->related_products = $_POST['Products']['related_products'];
            // $model->related_products = implode(",", $model->related_products);

            if ($model->related_products != "") {
                $model->related_products = implode(",", $model->related_products);
            } else {
                $model->related_products = "";
            }

            $model->meta_description = $_POST['Products']['meta_description'];
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
            $model->stock_availability = $_POST['Products']['stock_availability'];
//                        var_dump(Yii::app()->session['admin']['id']);
//                        exit;
//                        $model->CB = Yii::app()->session['admin']['id'];
            $model->merchant_id = Yii::app()->session['admin']['id'];
            if (Yii::app()->session['admin']['post']) {
                $model->merchant_type = Yii::app()->session['admin']['post'];
            } else
                $model->merchant_type = 0; // dummy value assigned, session not set need to check
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
////                        Yii::app()->Upload->uploadVideo($video, $id, true, $dimensions);
//                    }
                    $this->redirect(array('admin', 'id' => $model->id));
                } else {
//                    print_r($model->attributes);
                }
            } else {
//                print_r($model->attributes);
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
