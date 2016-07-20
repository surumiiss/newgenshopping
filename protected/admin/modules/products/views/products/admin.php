<section class="content-header">
    <h1>
        All products
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">All products</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/products/Products/create'; ?>" class='btn  btn-laksyah'>Add New Product</a>
    <div class="col-xs-12 form-page" style="margin-top: .5em;">
        <div class="box">

            <?php
            $this->widget('booster.widgets.TbGridView', array(
                'type' => ' bordered condensed hover',
                'id' => 'products-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'columns' => array(
                    array(
                        'name' => 'category_id',
                        'value' => function($data) {
                            $cats = explode(',', $data->category_id);
                            $catt = '';
                            foreach ($cats as $cat) {
                                unset($_SESSION['category']);
                                $category = ProductCategory::model()->findByPk($cat);
                                $catt .= Yii::app()->category->selectCategories($category) . ', ';
                            }
                            return $catt;
                        },
                    ),
                    'product_name',
                    'product_code',
                    'quantity',
                    array(
                        'name' => 'main_image',
                        'value' => function($data) {
                            if ($data->main_image == "") {
                                return;
                            } else {
                                $folder = Yii::app()->Upload->folderName(0, 1000, $data->id);
                                return '<img width="125" style="border: 2px solid #d2d2d2;" src="' . Yii::app()->request->baseUrl . '/uploads/products/' . $folder . '/' . $data->id . '/' . $data->id . '.' . $data->main_image . '" />';
                            }
                        },
                        'type' => 'raw'
                    ),
                    array(
                        'name' => 'hover_image',
                        'value' => function($data) {
                            if ($data->hover_image == "") {
                                return;
                            } else {
                                $folder = Yii::app()->Upload->folderName(0, 1000, $data->id);
                                return '<img width="125" style="border: 2px solid #d2d2d2;" src="' . Yii::app()->request->baseUrl . '/uploads/products/' . $folder . '/' . $data->id . '/hover/hover.' . $data->hover_image . '" />';
                            }
                        },
                        'type' => 'raw'
                    ),
                    array(
                        'name' => 'description',
                        'value' => function($data) {
                            $contents = str_word_count($data->description);
                            if ($contents > 5) {
                                return substr($data->description, 0, 50);
                            } else {
                                return $data->description;
                            }
                        }
                    ),
                    /*
                      'merchant_type',
                      'title',
                      'description',
                      'main_image',
                      'gallery_images',
                      'hover_image',
                      'canonical_name',
                      'meta_title',
                      'meta_description',
                      'meta_keywords',
                      'header_visibility',
                      'sort_order',
                      'display_category_name',
                      'price',
                      'wholesale_price',
                      'is_discount_available',
                      'discount',
                      'discount_type',
                      'discount_rate',
                      'quantity',
                      'requires_shipping',
                      'enquiry_sale',
                      'new_from',
                      'new_to',
                      'sale_from',
                      'sale_to',
                      'special_price_from',
                      'special_price_to',
                      'tax',
                      'gift_option',
                      'stock_availability',
                      'video_link',
                      'weight',
                      'weight_class',
                      'status',
                      'exchange',
                      'search_tag',
                      'related_products',
                      'is_cod_available',
                      'is_available',
                      'is_featured',
                      'is_admin_approved',
                      'CB',
                      'UB',
                      'DOC',
                      'DOU',
                     */
                    array(
                        'header' => '<font color="#61625D">Edit</font>',
                        'htmlOptions' => array('nowrap' => 'nowrap'),
                        'class' => 'booster.widgets.TbButtonColumn',
                        'template' => '{update}',
                    ),
                    array(
                        'header' => '<font color="#61625D">Delete</font>',
                        'htmlOptions' => array('nowrap' => 'nowrap'),
                        'class' => 'booster.widgets.TbButtonColumn',
                        'template' => '{delete}',
                    ),
                ),
            ));
            ?>
        </div>

    </div>


</div>




