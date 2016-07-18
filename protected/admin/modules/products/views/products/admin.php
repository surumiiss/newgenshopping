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

             <?php $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id'=>'products-grid',
            'dataProvider'=>$model->search(),
            'filter'=>$model,
            'columns'=>array(
            		'id',
		'category_id',
		'product_name',
		'product_code',
		'brand_id',
		'merchant_id',
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




