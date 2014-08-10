
<?php echo $this->Html->script('jquery'); ?>
<?php echo $this->Html->script('jquery.ui'); ?>
<div class="highlighted-wrapper gray">
    <div class="highlighted section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div id="overviews">
                        <div class="overview active">
                            <div class="overview-table">
                                <div class="item title">
                                <h3><?php echo $this->Html->link($vehicles[0]['Mark']['name']. ' '.$vehicles[0]['Modele']['name'], array('controller' => 'vehicles', 'action' => 'view',$vehicles[0]['Vehicle']['id'])); ?>
                                    <?php //echo $vehicles[0]['Mark']['name']. ' '.$vehicles[0]['Modele']['name']  ;?></h3>
                                </div><!-- /.item -->

                                <div class="item tags">
                                    <div class="price"><?php echo $vehicles[0]['Vehicle']['price'].' DH' ?></div>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Année</span>
                                    <span class="value"><?php echo $vehicles[0]['Vehicle']['year']?></span>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Fabricant</span>
                                    <span class="value"><?php echo $vehicles[0]['Mark']['name']?></span>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Kilometres</span>
                                    <span class="value"><?php echo $vehicles[0]['Vehicle']['mileage']?></span>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Energie</span>
                                    <span class="value"><?php echo $vehicles[0]['Vehicle']['fuel']?></span>
                                </div><!-- /.item -->
                            </div><!-- /.overview-table -->
                        </div><!-- /.overview -->

                        <div class="overview">
                            <div class="overview-table">
                                <div class="item title">
                                <h3><?php echo $this->Html->link($vehicles[1]['Mark']['name']. ' '.$vehicles[1]['Modele']['name'], array('controller' => 'vehicles', 'action' => 'view',$vehicles[1]['Vehicle']['id'])); ?>
                                    <?php //echo $vehicles[0]['Mark']['name']. ' '.$vehicles[0]['Modele']['name']  ;?></h3>
                                </div><!-- /.item -->

                                <div class="item tags">
                                    <div class="price"><?php echo $vehicles[1]['Vehicle']['price'].' DH' ?></div>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Année</span>
                                    <span class="value"><?php echo $vehicles[1]['Vehicle']['year']?></span>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Fabricant</span>
                                    <span class="value"><?php echo $vehicles[1]['Mark']['name']?></span>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Kilometres</span>
                                    <span class="value"><?php echo $vehicles[1]['Vehicle']['mileage']?></span>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Energie</span>
                                    <span class="value"><?php echo $vehicles[1]['Vehicle']['fuel']?></span>
                                </div><!-- /.item -->
                            </div><!-- /.overview-table -->
                        </div><!-- /.overview -->

                        <div class="overview">
                            <div class="overview-table">
                                <div class="item title">
                                <h3><?php echo $this->Html->link($vehicles[2]['Mark']['name']. ' '.$vehicles[2]['Modele']['name'], array('controller' => 'vehicles', 'action' => 'view',$vehicles[2]['Vehicle']['id'])); ?>
                                    <?php //echo $vehicles[0]['Mark']['name']. ' '.$vehicles[0]['Modele']['name']  ;?></h3>
                                </div><!-- /.item -->

                                <div class="item tags">
                                    <div class="price"><?php echo $vehicles[2]['Vehicle']['price'].' DH' ?></div>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Année</span>
                                    <span class="value"><?php echo $vehicles[2]['Vehicle']['year']?></span>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Fabricant</span>
                                    <span class="value"><?php echo $vehicles[2]['Mark']['name']?></span>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Kilometres</span>
                                    <span class="value"><?php echo $vehicles[2]['Vehicle']['mileage']?></span>
                                </div><!-- /.item -->

                                <div class="item line">
                                    <span class="property">Energie</span>
                                    <span class="value"><?php echo $vehicles[2]['Vehicle']['fuel']?></span>
                                </div><!-- /.item -->
                            </div><!-- /.overview-table -->
                        </div><!-- /.overview -->

                        <div id="slider-navigation">
                            <div class="prev"></div><!-- /.prev -->
                            <div class="next"></div><!-- /.next -->
                        </div><!-- /.slider-navigation -->
                    </div><!-- /.overviews -->
                </div>


                <div class="col-md-7 col-sm-7">
                    <div id="slider">
                        <div class="slide active">
                        <?php   
                        //debug($images);
							foreach ($images as $img) {
								//on prend les images de la véhicule en cours
									if ($img['Imagesvehicle']['vehicle_id'] == $vehicles[0]['Vehicle']['id']) {
										//echo $this->Html->link($title, array('controller' => '', 'action' => ''));
										 echo $this->Html->image('uploads/vehicules/'.$img['Imagesvehicle']['image'],array('width'=>'625','height'=>'410','class'=>"slide"));
										 break;
									}
								}
							
						?>
                        
                            <?php //echo  $this->Html->image('uploads/vehicules/'.$vehicles[0]['Vehicle']['image'],array('width'=>'625','height'=>'410')); ?>
                            <div class="color-overlay"></div><!-- /.color-overlay -->
                        </div><!-- /.slide -->

                        <div class="slide">
                        <?php   
							foreach ($images as $img) {
								//on prend les images de la véhicule en cours
									if ($img['Imagesvehicle']['vehicle_id'] == $vehicles[1]['Vehicle']['id']) {
										//echo $this->Html->link($title, array('controller' => '', 'action' => ''));
										 echo $this->Html->image('uploads/vehicules/'.$img['Imagesvehicle']['image'],array('width'=>'625','height'=>'410','class'=>"slide"));
										 break;
									}
								}
							
						?>
                            <?php //echo  $this->Html->image('uploads/vehicules/'.$vehicles[1]['Vehicle']['image'],array('width'=>'625','height'=>'410')); ?>
                            <div class="color-overlay"></div><!-- /.color-overlay -->
                        </div><!-- /.slide -->

                        <div class="slide">
                        <?php   
							foreach ($images as $img) {
								//on prend les images de la véhicule en cours
									if ($img['Imagesvehicle']['vehicle_id'] == $vehicles[2]['Vehicle']['id']) {
										//echo $this->Html->link($title, array('controller' => '', 'action' => ''));
										 echo $this->Html->image('uploads/vehicules/'.$img['Imagesvehicle']['image'],array('width'=>'625','height'=>'410','class'=>"slide"));
										 break;
									}
								}
							
						?>
                            <?php //echo  $this->Html->image('uploads/vehicules/'.$vehicles[2]['Vehicle']['image'],array('width'=>'625','height'=>'410')); ?>
                            <div class="color-overlay"></div><!-- /.color-overlay -->
                        </div><!-- /.slide -->
                    </div><!-- /#slider -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.highligted -->

    <div class="filter-wrapper">
        <div class="container">
            <div class="row">           
                <div class="col-md-3 col-xs-12 pull-right">
                    <div class="filter-block">
                        <div class="block">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#search-sales" data-toggle="tab">Rechercher</a></li>
                            </ul><!-- /.nav -->

                            <div class="content">
                                <div class="inner">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="search-sales">
                                            
                                            <?php echo $this->Form->create(''); ?>
                                                <div class="row">
                                                    <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-6">
                                                            <?php echo $this->Form->input('mark_id',array('empty'=>'Selectionnez la marque','options'=>$marks,'class'=>'mark','label'=>'')); ?>
                                                    </div><!-- /.form-group -->

                                                    <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-6">
                                                        
                                                        <?php echo $this->Form->input('modele_id',array('empty'=>'Selectionnez le modéle','class'=>'model','options'=>'null','label'=>'')); ?>

                                                    </div><!-- /.form-group -->


												<script>
                                                	$('select.mark').change(function(){
                                                		//alert('changed');
														$.get('Vehicles/showModele',{id:$('select.mark option:selected').attr('value')},
															function(data){
																$('#VehicleModeleId_chosen').remove();
																$('.model').css('display','block');
																$('.model').addClass('chosen-container chosen-container-single chosen-with-drop chosen-container-active');
																//$('.model').css('display','block');
																var obj = jQuery.parseJSON(data);
																$('.model').html(obj);
															}
														);
													});
                                                </script>
                                                    <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 year-from">
                                                       <?php echo $this->Form->year('year', 1930,date('Y')); ?>
                                                    </div><!-- /.form-group -->                     
                                                </div><!-- /.row -->

                                                <div class="form-group">
                                                        	<?php 
                                                        	$options = array(
                                                        		'label'=>'Recherchez',
                                                        		'class'=>'send btn btn-primary btn-primary-color'
                                                        		);
                                                        	echo $this->Form->end($options); ?>
                                                    		<?php echo $this->Html->link('Plus de critéres + ', array('controller' => 'vehicles', 'action' => 'search')); ?>
                                                </div><!-- /.form-group -->
                                            </form>
                                        </div><!-- /.tab-pane -->
                                    </div><!-- /.tab-content -->
                                </div><!-- /.inner -->
                            </div><!-- /.content -->                                
                        </div><!-- /.block -->
                    </div><!-- /.filter-block -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.highlighted -->
    </div><!-- /.slider-filter -->
</div><!-- /.highlighted-wrapper -->

<div id="content" class="frontpage">

    <div class="section gray-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="recent-cars" class="grid-block block">
                        <div class="page-header center">
                            <div class="page-header-inner">
                                <div class="line">
                                    <hr/>
                                </div><!-- /.line -->

                                <div class="heading">
                                    <h2>Featured Cars in Shop</h2>
                                </div><!-- /.heading -->

                                <div class="line">
                                    <hr/>
                                </div><!-- /.line -->
                            </div><!-- /.page-header-inner -->
                        </div><!-- /.page-header -->

                    <div class="row">
                        <div class="col-md-12">
                             <div class="inner-block white">
                                  <div class="grid-carousel">
                                        
<?php foreach ($vehicles as $vehicle): ?>
<div class="inner">
<div class="grid-item">
    <div class="inner">
        <div class="picture">
            <div class="image-slider">
                <?php   
							foreach ($images as $img) {
								//on prend les images de la véhicule en cours
									if ($img['Imagesvehicle']['vehicle_id'] == $vehicle['Vehicle']['id']) {
										//echo $this->Html->link($title, array('controller' => '', 'action' => ''));
										 echo $this->Html->image('uploads/vehicules/'.$img['Imagesvehicle']['image'],array('width'=>'625','height'=>'410','class'=>"slide"));
										 
									}
								}
							
			?>  
                <div class="cycle-pager"></div><!-- /.cycle-pager -->
            </div><!-- /.image-slider -->
        </div><!-- /.picture -->

        <div class="like">
            <a href="detail.html"><i class="icon icon-outline-thumb-up"></i></a>
        </div><!-- /.like -->

        <h3>
        	<?php echo $this->Html->link($vehicle['Mark']['name'] . ' '. $vehicle['Modele']['name'], array('controller' => 'vehicles', 'action' => 'view',$vehicle['Vehicle']['id'])); ?>
        </h3>


        <div class="price"> <?php echo $vehicle['Vehicle']['price'].' DH' ?></div><!-- /.price -->

        <div class="meta">
            <ul class="clearfix ">
                <li>
                    <i class="icon icon-normal-dashboard"></i> <?php echo $vehicle['Vehicle']['year'] ?>                </li>

                <li>
                    <i class="icon icon-normal-car-door"></i>  <?php echo $vehicle['Vehicle']['fuel'] ?>                </li>

                <li>
                    <i class="icon icon-normal-cog-wheel"></i>  <?php echo $vehicle['Vehicle']['power'] ?>                </li>
            </ul>
        </div><!-- /.meta -->
    </div><!-- /.inner -->
</div><!-- /.grid-item -->
</div><!-- /.inner -->
<?php endforeach ?> 
                                    </div><!-- /.grid-carousel -->
            </div><!-- /.inner-block -->
        </div><!-- /.col-md-12 -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="grid-carousel-pager">
                <div class="prev"></div><!-- /.prev -->
                <div class="next"></div><!-- /.next -->
            </div><!-- /.grid-carousel-pager -->
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->
</div><!-- /.grid-block -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section -->

    <div class="section white">
        <div class="container">
            <div class="category-boxes">
                <div class="row">
                    <div class="category-box col-lg-3 col-md-3 col-sm-6">
                        <div class="wrapper">
                            <div class="picture">
                                <a href="detail.html">
                                    <img src="img/filter/sedan.png" class="cover-me" alt="#">
                                </a>
                            </div><!-- /.picture -->

                            <div class="meta">
                                <div class="title">
                                    <a href="detail.html">Sedans</a>
                                </div><!-- /.title -->

                                <div class="offers">133 offers</div><!-- /.offers -->
                            </div><!-- /.meta -->

                            <div class="options">
                                <ul>
                                    <li><a href="detail.html">Notchback</a></li>
                                    <li><a href="detail.html">Fastback</a></li>
                                    <li><a href="detail.html">Hardtop</a></li>
                                    <li><a href="detail.html">Hatchback</a></li>
                                    <li><a href="detail.html">Chauffeured</a></li>
                                </ul>
                            </div><!-- /.options -->
                        </div><!-- /.wrapper -->
                    </div><!-- /.category-box -->

                    <div class="category-box col-lg-3 col-md-3 col-sm-6">
                        <div class="wrapper">
                            <div class="picture">
                                <a href="detail.html">
                                    <img src="img/filter/bike.png" class="cover-me" alt="#">
                                </a>
                            </div><!-- /.picture -->

                            <div class="meta">
                                <div class="title"><a href="filter.html">Motorcycles</a></div><!-- /.title -->
                                <div class="offers">55 offers</div><!-- /.offers -->
                            </div><!-- /.meta -->

                            <div class="options">
                                <ul>
                                    <li><a href="detail.html">Standard</a></li>
                                    <li><a href="detail.html">Cruiser</a></li>
                                    <li><a href="detail.html">Sport bike</a></li>
                                    <li><a href="detail.html">Touring</a></li>
                                    <li><a href="detail.html">Sport touring</a></li>
                                    <li><a href="detail.html">Dual-sport</a></li>
                                </ul>
                            </div><!-- /.options -->
                        </div><!-- /.wrapper -->
                    </div><!-- /.category-box -->

                    <div class="category-box col-lg-3 col-md-3 col-sm-6">
                        <div class="wrapper">
                            <div class="picture">
                                <a href="filter.html"><img src="img/filter/suv.png" alt="#" class="cover-me"></a>
                            </div><!-- /.picture -->
                            
                            <div class="meta">
                                <div class="title">
                                    <a href="detail.html">Pickup &amp; SUVs</a>
                                </div><!-- /.title -->

                                <div class="offers">24 offers</div><!-- /.offers -->
                            </div><!-- /.meta -->

                            <div class="options">
                                <ul>
                                    <li><a href="detail.html">Mini SUV</a></li>
                                    <li><a href="detail.html">Compact SUV</a></li>
                                    <li><a href="detail.html">Mid-size SUV</a></li>
                                    <li><a href="detail.html">Full-size SUV</a></li>
                                    <li><a href="detail.html">Extended-length SUV</a></li>
                                </ul>
                            </div><!-- /.options -->
                        </div><!-- /.wrapper -->
                    </div><!-- /.col-md-3 -->

                    <div class="category-box col-lg-3 col-md-3 col-sm-6">
                        <div class="wrapper">
                            <div class="picture">
                                <a href="detail.html">
                                    <img src="img/filter/sportcar.png" alt="#" class="cover-me">
                                </a>
                            </div>
                            <div class="meta">
                                <div class="title">
                                    <a href="detail.html">Sport cars</a>
                                </div><!-- /.title -->
                                <div class="offers">89 offers</div><!-- /.offers-->
                            </div><!-- /.meta -->

                            <div class="options">
                                <ul>
                                    <li><a href="detail.html">Sports car</a></li>
                                    <li><a href="detail.html">Grand tourer</a></li>
                                    <li><a href="detail.html">Supercar</a></li>
                                    <li><a href="detail.html">Muscle car</a></li>
                                    <li><a href="detail.html">Pony car</a></li>
                                </ul>
                            </div><!-- /.options -->


                        </div><!-- /.wrapper -->
                    </div><!-- /.category-box -->
                </div><!-- /.row -->
            </div><!-- /.category-boxes-->
        </div><!-- /.container -->
    </div><!-- /.section -->

    <div class="section gray-light">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div id="main">
                        <div class="row-block block" id="best-deals">
	<div class="page-header">
		<div class="page-header-inner">
			<div class="heading">
				<h2>Best Deals</h2>
			</div><!-- /.heading -->

			<div class="line">
				<hr/>
			</div><!-- /.line -->
		</div><!-- /.page-header-inner -->
	</div><!-- /.page-header -->


	<div class="row">
		<div class="col-md-12">
			<div class="content white">
				<div class="inner">
																<div class="row-item">
    <div class="inner">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5">
                <div class="picture">
                    <div class="image-slider">
                                                                            <a href="detail.html" class="slide">
                                <img src="img/content/toyota.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota7.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota1.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota2.jpg" alt="#">
                            </a><!-- /.slide -->
                        
                        <div class="cycle-pager"></div><!-- /.cycle-pager -->
                    </div><!-- /.image-slider -->
                </div><!-- /.picture -->
            </div><!-- /.col-md-4 -->

            <div class="col-lg-8 col-md-7 col-sm-7">

                <div class="content-inner">
                    <h3>
                        <a href="detail.html">Toyota Verso</a>
                    </h3>
                    <div class="subtitle">DPF Active</div><!-- /.subtitle -->

                    <div class="price">$16,999</div><!-- /.price -->

                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate neque. Fusce hendrerit fermentum elementum.</p>
                    </div><!-- /.description -->

                    <div class="meta">
                        <ul>
                            <li>
                                <i class="icon icon-normal-dashboard"></i> 2013                            </li>
                            <li>
                                <i class="icon icon-normal-car-door"></i> Fuel                            </li>
                            <li>
                                <i class="icon icon-normal-cog-wheel"></i> 1500                            </li>
                        </ul>
                    </div><!-- /.meta -->
                </div><!-- /.content-inner -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.inner -->
</div><!-- /.row-item -->											<div class="row-item">
    <div class="inner">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5">
                <div class="picture">
                    <div class="image-slider">
                                                                            <a href="detail.html" class="slide">
                                <img src="img/content/toyota5.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota3.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota4.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota6.jpg" alt="#">
                            </a><!-- /.slide -->
                        
                        <div class="cycle-pager"></div><!-- /.cycle-pager -->
                    </div><!-- /.image-slider -->
                </div><!-- /.picture -->
            </div><!-- /.col-md-4 -->

            <div class="col-lg-8 col-md-7 col-sm-7">

                <div class="content-inner">
                    <h3>
                        <a href="detail.html">Toyota Yaris</a>
                    </h3>
                    <div class="subtitle">Active</div><!-- /.subtitle -->

                    <div class="price">$16,999</div><!-- /.price -->

                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate neque. Fusce hendrerit fermentum elementum.</p>
                    </div><!-- /.description -->

                    <div class="meta">
                        <ul>
                            <li>
                                <i class="icon icon-normal-dashboard"></i> 2010                            </li>
                            <li>
                                <i class="icon icon-normal-car-door"></i> Fuel                            </li>
                            <li>
                                <i class="icon icon-normal-cog-wheel"></i> 1500                            </li>
                        </ul>
                    </div><!-- /.meta -->
                </div><!-- /.content-inner -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.inner -->
</div><!-- /.row-item -->											<div class="row-item">
    <div class="inner">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5">
                <div class="picture">
                    <div class="image-slider">
                                                                            <a href="detail.html" class="slide">
                                <img src="img/content/toyota4.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota6.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota5.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota3.jpg" alt="#">
                            </a><!-- /.slide -->
                        
                        <div class="cycle-pager"></div><!-- /.cycle-pager -->
                    </div><!-- /.image-slider -->
                </div><!-- /.picture -->
            </div><!-- /.col-md-4 -->

            <div class="col-lg-8 col-md-7 col-sm-7">

                <div class="content-inner">
                    <h3>
                        <a href="detail.html">Toyota Yaris</a>
                    </h3>
                    <div class="subtitle">Active</div><!-- /.subtitle -->

                    <div class="price">$16,999</div><!-- /.price -->

                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate neque. Fusce hendrerit fermentum elementum.</p>
                    </div><!-- /.description -->

                    <div class="meta">
                        <ul>
                            <li>
                                <i class="icon icon-normal-dashboard"></i> 2010                            </li>
                            <li>
                                <i class="icon icon-normal-car-door"></i> Fuel                            </li>
                            <li>
                                <i class="icon icon-normal-cog-wheel"></i> 1500                            </li>
                        </ul>
                    </div><!-- /.meta -->
                </div><!-- /.content-inner -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.inner -->
</div><!-- /.row-item -->											<div class="row-item">
    <div class="inner">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5">
                <div class="picture">
                    <div class="image-slider">
                                                                            <a href="detail.html" class="slide">
                                <img src="img/content/toyota3.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota4.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota5.jpg" alt="#">
                            </a><!-- /.slide -->
                        
                        <div class="cycle-pager"></div><!-- /.cycle-pager -->
                    </div><!-- /.image-slider -->
                </div><!-- /.picture -->
            </div><!-- /.col-md-4 -->

            <div class="col-lg-8 col-md-7 col-sm-7">

                <div class="content-inner">
                    <h3>
                        <a href="detail.html">Toyota Verso</a>
                    </h3>
                    <div class="subtitle">Valvematic Active</div><!-- /.subtitle -->

                    <div class="price">$16,999</div><!-- /.price -->

                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate neque. Fusce hendrerit fermentum elementum.</p>
                    </div><!-- /.description -->

                    <div class="meta">
                        <ul>
                            <li>
                                <i class="icon icon-normal-dashboard"></i> 2013                            </li>
                            <li>
                                <i class="icon icon-normal-car-door"></i> Fuel                            </li>
                            <li>
                                <i class="icon icon-normal-cog-wheel"></i> 1500                            </li>
                        </ul>
                    </div><!-- /.meta -->
                </div><!-- /.content-inner -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.inner -->
</div><!-- /.row-item -->											<div class="row-item">
    <div class="inner">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5">
                <div class="picture">
                    <div class="image-slider">
                                                                            <a href="detail.html" class="slide">
                                <img src="img/content/toyota2.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota7.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota1.jpg" alt="#">
                            </a><!-- /.slide -->
                                                    <a href="detail.html" class="slide">
                                <img src="img/content/toyota.jpg" alt="#">
                            </a><!-- /.slide -->
                        
                        <div class="cycle-pager"></div><!-- /.cycle-pager -->
                    </div><!-- /.image-slider -->
                </div><!-- /.picture -->
            </div><!-- /.col-md-4 -->

            <div class="col-lg-8 col-md-7 col-sm-7">

                <div class="content-inner">
                    <h3>
                        <a href="detail.html">Toyota Verso</a>
                    </h3>
                    <div class="subtitle">DPF Active</div><!-- /.subtitle -->

                    <div class="price">$16,999</div><!-- /.price -->

                    <div class="description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate neque. Fusce hendrerit fermentum elementum.</p>
                    </div><!-- /.description -->

                    <div class="meta">
                        <ul>
                            <li>
                                <i class="icon icon-normal-dashboard"></i> 2013                            </li>
                            <li>
                                <i class="icon icon-normal-car-door"></i> Fuel                            </li>
                            <li>
                                <i class="icon icon-normal-cog-wheel"></i> 1500                            </li>
                        </ul>
                    </div><!-- /.meta -->
                </div><!-- /.content-inner -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.inner -->
</div><!-- /.row-item -->									</div><!-- /.inner -->
			</div><!-- /.content -->
		</div><!-- /.col-md-12 -->
	</div><!-- /.row -->
</div><!-- /.block -->                    </div><!-- /#main -->
                </div><!-- /.col-md-9 -->

                <div class="col-md-3 col-sm-12">
                    <div class="sidebar">
                        <div id="newsletter" class='block default'>
  <div class="block-inner">
    <div class="block-title">
      <h3>Subscribe to newsletter</h3>
    </div>

    <form>
      <div class="form-group">
        <input placeholder="Your e-mail" type="text" name="maker" class="form-control">
      </div>

      <div class="form-group">
        <button class="send btn btn-primary btn-primary-color">Subscribe</button>
      </div>
    </form>
  </div>
</div>                        <div class="latest-reviews block block-shadow white">
	<div class="block-inner">
		<div class="block-title">
			<h3>Latest Reviews</h3>
		</div><!-- /.block-title -->

		<div class="inner">
			<div class="row">
				<div class="item-wrapper col-lg-12 col-md-12 col-sm-4">
					<div class="item">
						<div class="picture hidden-sm">
							<a href="detail.html">
								<img src="img/review.png" alt="#">
							</a>
						</div><!-- /.picture -->

						<div class="title">
							<a href="detail.html">Toyota Landcruiser</a>
						</div><!-- /.title -->

						<div class="date">10/12/2013</div><!-- /.date -->

						<div class="description">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate...
							</p>
						</div><!-- /.description -->
					</div><!-- /.item -->
				</div><!-- /.item-wrapper -->

				<div class="item-wrapper col-lg-12 col-md-12 col-sm-4">
					<div class="item">
						<div class="title">
							<a href="detail.html">Toyota RAV</a>
						</div><!-- /.title -->

						<div class="date">12/12/2013</div><!-- /.date -->

						<div class="description">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate...
							</p>
						</div><!-- /.description -->
					</div><!-- /.item -->	
				</div><!-- /.item-wrapper -->

				<div class="item-wrapper col-lg-12 col-md-12 col-sm-4">
					<div class="item">
						<div class="title">
							<a href="detail.html">Toyota 4Runner</a>
						</div><!-- /.title -->

						<div class="date">20/12/2013</div><!-- /.date -->

						<div class="description">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate...
					</p>
				</div><!-- /.description -->
					</div><!-- /.item -->			
				</div><!-- /.item-wrapper -->
			</div><!-- /.row -->
		</div><!-- /.inner -->
	</div><!-- /.block-inner -->
</div><!-- /.block -->                        <div id="random-cars" class="random-cars block block-shadow white">

	<div class="block-inner">
		<div class="block-title">
			<h3>Recent Cars</h3>
		</div><!-- /.block-title -->

		
		<div class="row">
							<div class="teaser-item-wrapper col-lg-12 col-md-12 col-sm-4">
					<div class="teaser-item">
    <div class="title">
        <a href="detail.html">Toyota Landcruiser</a>
    </div><!-- /.title -->

    <div class="subtitle">
        MX 234    </div><!-- /.subtitle -->

    <div class="row">
        <div class="col-sm-5 col-md-5 picture-wrapper">
            <div class="picture">
                                <a href="detail.html">
                    <span class="hover">
                        <span class="hover-inner">
                            <i class="icon icon-normal-link"></i>
                        </span><!-- /.hover-inner -->
                    </span><!-- /.hover -->

                    <img src="img/content/toyota4.jpg" alt="#">
                </a>
            </div><!-- /.picture -->
        </div><!-- /.picture-wrapper -->

        <div class="col-sm-7 col-md-7 content-wrapper ">
            <div class="price">$9,799</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div><!-- /.content-wrapper -->
    </div><!-- /.row -->
</div><!-- /.teaser-item -->				</div><!-- /.teaser-item-wrapper -->
							<div class="teaser-item-wrapper col-lg-12 col-md-12 col-sm-4">
					<div class="teaser-item">
    <div class="title">
        <a href="detail.html">Toyota Verso</a>
    </div><!-- /.title -->

    <div class="subtitle">
        DPF Active    </div><!-- /.subtitle -->

    <div class="row">
        <div class="col-sm-5 col-md-5 picture-wrapper">
            <div class="picture">
                                <a href="detail.html">
                    <span class="hover">
                        <span class="hover-inner">
                            <i class="icon icon-normal-link"></i>
                        </span><!-- /.hover-inner -->
                    </span><!-- /.hover -->

                    <img src="img/content/toyota7.jpg" alt="#">
                </a>
            </div><!-- /.picture -->
        </div><!-- /.picture-wrapper -->

        <div class="col-sm-7 col-md-7 content-wrapper ">
            <div class="price">$9,799</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div><!-- /.content-wrapper -->
    </div><!-- /.row -->
</div><!-- /.teaser-item -->				</div><!-- /.teaser-item-wrapper -->
							<div class="teaser-item-wrapper col-lg-12 col-md-12 col-sm-4">
					<div class="teaser-item">
    <div class="title">
        <a href="detail.html">Toyota Verso</a>
    </div><!-- /.title -->

    <div class="subtitle">
        Valvematic Active    </div><!-- /.subtitle -->

    <div class="row">
        <div class="col-sm-5 col-md-5 picture-wrapper">
            <div class="picture">
                                <a href="detail.html">
                    <span class="hover">
                        <span class="hover-inner">
                            <i class="icon icon-normal-link"></i>
                        </span><!-- /.hover-inner -->
                    </span><!-- /.hover -->

                    <img src="img/content/toyota4.jpg" alt="#">
                </a>
            </div><!-- /.picture -->
        </div><!-- /.picture-wrapper -->

        <div class="col-sm-7 col-md-7 content-wrapper ">
            <div class="price">$9,799</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div><!-- /.content-wrapper -->
    </div><!-- /.row -->
</div><!-- /.teaser-item -->				</div><!-- /.teaser-item-wrapper -->
					</div><!-- /.row -->
	</div><!-- /.block-inner -->
</div><!-- /.block -->                    </div><!-- /.sidebar -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->

            <div id="content-bottom">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonials-block block">
	<div class="page-header center">
		<div class="page-header-inner">
			<div class="line">
				<hr/>
			</div>

			<div class="heading">
				<h2>Our Satisfied Customers</h2>
			</div><!-- /.heading -->

			<div class="line">
				<hr/>
			</div><!-- /.line -->
		</div><!-- /.page-header-inner -->
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-sm-12 col-md-6">
			<div class="testimonial white">
				<div class="inner">
					<div class="row">
						<div class="col-sm-3 col-md-4">
							<div class="picture">
								<img src="img/testimonials-1.png" alt="#">
							</div><!-- /.picture -->
						</div><!-- /.col-md-4 -->

						<div class="col-sm-9 col-md-8">
							<div class="description quote">
								<p>
									<i>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ligula ipsum, ornare ac augue
										in, suscipit pretium purus. Vestibulum turpis felis, gravida ac justo.
									</i>
								</p>
							</div><!-- /.description -->

							<div class="star-rating">
								<input name="star0" type="radio" class="star icon-normal-star" checked="checked" disabled="disabled">
								<input name="star0" type="radio" class="star icon-normal-star" checked="checked" disabled="disabled">
								<input name="star0" type="radio" class="star icon-normal-star" checked="checked" disabled="disabled">
								<input name="star0" type="radio" class="star icon-normal-star" checked="checked" disabled="disabled">
								<input name="star0" type="radio" class="star icon-normal-star" checked="checked" disabled="disabled">
							</div><!-- /.star-rating -->

							<div class="author">
								<strong>Fanny Harley</strong>
							</div><!-- /.author -->
						</div><!-- /.col-md-8 -->
					</div><!-- /.row -->
				</div><!-- /.inner -->
			</div><!-- /.testimonial -->
		</div><!-- /.col-md-6 -->


		<div class="col-sm-12 col-md-6">
			<div class="testimonial white">
				<div class="inner">
					<div class="row">
						<div class="col-sm-3 col-md-4">
							<div class="picture">
								<img src="img/testimonials-2.png" alt="#">
							</div><!-- /.picture -->
						</div><!-- /.col-md-4 -->

						<div class="col-sm-9 col-md-8">
							<div class="description quote">
								<p>
									<i>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ligula ipsum, ornare ac augue
										in, suscipit pretium purus. Vestibulum turpis felis, gravida ac justo.
									</i>
								</p>
							</div><!-- /.description -->

							<div class="star-rating">
								<input name="star1" type="radio" class="star icon-normal-star" checked="checked" disabled="disabled">
								<input name="star1" type="radio" class="star icon-normal-star" checked="checked" disabled="disabled">
								<input name="star1" type="radio" class="star icon-normal-star" checked="checked" disabled="disabled">
								<input name="star1" type="radio" class="star icon-normal-star" disabled="disabled">
								<input name="star1" type="radio" class="star icon-normal-star" disabled="disabled">
							</div><!-- /.star-rating -->

							<div class="author">
								<strong>Chavi Ernanéz</strong>
							</div><!-- /.author -->
						</div><!-- /.col-md-8 -->
					</div><!-- /.row -->
				</div><!-- /.inner -->
			</div><!-- /.testimonial -->
		</div><!-- /.col-md-6 -->
	</div><!-- /.row -->
</div><!-- /.testimonials-block -->                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="features-block block">
	<div class="row">
		<div class="feature">
			<div class="col-xs-12 col-md-4 col-sm-4">
				<div class="row">
					<div class="col-xs-12 col-md-5">
						<div class="feature-icon">
							<div class="feature-icon-inverse">
								<i class="icon-outline-car"></i>
							</div><!-- /.feature-icon-inverse -->

							<div class="feature-icon-normal">
								<i class="icon-normal-car"></i>
							</div><!-- /.feature-icon-normal -->
						</div><!-- /.feature-icon -->
					</div><!-- /.col-md-5 -->

					<div class="col-xs-12 col-md-7">
						<h3>Great Prices</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque dolor, placerat mattis justo id, convallis porta nulla</p>
					</div><!-- /.col-md-7 -->
				</div><!-- /.row -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.feature -->

		<div class="feature">
			<div class="col-xs-12 col-md-4 col-sm-4">
				<div class="row">
					<div class="col-xs-12 col-md-5">
						<div class="feature-icon">
							<div class="feature-icon-inverse">
								<i class="icon-outline-currency-dollar"></i>
							</div><!-- /.feature-icon-inverse -->

							<div class="feature-icon-normal">
								<i class="icon-normal-currency-dollar"></i>
							</div><!-- /.feature-icon-normal -->
						</div><!-- /.feature-icon -->
					</div><!-- /.col-md-5 -->

					<div class="col-xs-12 col-md-7">
						<h3>Wide Selection</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque dolor, placerat mattis justo id, convallis porta nulla</p>
					</div><!-- /.col-md-7 -->
				</div><!-- /.row -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.feature -->

		<div class="feature">
			<div class="col-xs-12 col-md-4 col-sm-4">
				<div class="row">
					<div class="col-xs-12 col-md-5">
						<div class="feature-icon">
							<div class="feature-icon-inverse">
								<i class="icon-outline-car-door"></i>
							</div><!-- /.feature-icon-inverse -->

							<div class="feature-icon-normal">
								<i class="icon-normal-car-door"></i>
							</div><!-- /.feature-icon-normal -->
						</div><!-- /.feature-icon -->
					</div><!-- /.col-md-5 -->

					<div class="col-xs-12 col-md-7">
						<h3>24/7 Hotline</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque dolor, placerat mattis justo id, convallis porta nulla</p>
					</div><!-- /.col-md-7 -->
				</div><!-- /.row -->
			</div><!-- /.col-md-4 -->
		</div><!-- /.feature -->		
	</div><!-- /.row -->
</div><!-- /.block -->                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /#content-bottom -->
        </div><!-- /.container -->
    </div><!-- /.section -->

    <div class="section gray-light ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partners-block block">
        <div class="page-header">
            <div class="page-header-inner">


                <div class="heading">
                    <h2>Our Partners</h2>
                </div><!-- /.heading -->

                <div class="line">
                    <hr/>
                </div><!-- /.line -->
            </div><!-- /.page-header-inner -->
        </div><!-- /.page-header -->

	<div class="inner-block white block-shadow">
		<div class="row">
			<div class="col-sm-2 col-md-2">
				<div class="partner">
					<a href="#">
						<img src="img/partners/volkswagen.png" alt="#">
					</a>
				</div><!-- /.partner -->
			</div><!-- /.col-md-2 -->

			<div class="col-sm-2 col-md-2">
				<div class="partner">
					<a href="#">
						<img src="img/partners/ford.png" alt="#">
					</a>
				</div><!-- /.partner -->
			</div><!-- /.col-md-2 -->

			<div class="col-sm-2 col-md-2">
				<div class="partner">
					<a href="#">
						<img src="img/partners/honda.png" alt="#">
					</a>
				</div><!-- /.partner -->
			</div><!-- /.col-md-2 -->

			<div class="col-sm-2 col-md-2">
				<div class="partner">
					<a href="#">
						<img src="img/partners/mercedes.png" alt="#">
					</a>
				</div><!-- /.partner -->
			</div><!-- /.col-md-2 -->

			<div class="col-sm-2 col-md-2">
				<div class="partner">
					<a href="#">
						<img src="img/partners/toyota.png" alt="#">
					</a>
				</div><!-- /.partner -->
			</div><!-- /.col-md-2 -->

			<div class="col-sm-2 col-md-2">
				<div class="partner">
					<a href="#">
						<img src="img/partners/bmw.png" alt="#">
					</a>
				</div><!-- /.partner -->
			</div><!-- /.col-md-2 -->
		</div><!-- /.row -->
	</div><!-- /.inner-block -->
</div><!-- /.partners-block -->                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section -->
</div>    
<div class="vehicles index">
	<h2><?php echo __('Vehicles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('mark_id'); ?></th>
			<th><?php echo $this->Paginator->sort('modele_id'); ?></th>
			<th><?php echo $this->Paginator->sort('power'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('mileage'); ?></th>
			<th><?php echo $this->Paginator->sort('consumption'); ?></th>
			<th><?php echo $this->Paginator->sort('fuel'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('date_mise_en_circulation'); ?></th>
			<th><?php echo $this->Paginator->sort('nbr_portes'); ?></th>
			<th><?php echo $this->Paginator->sort('extcolor'); ?></th>
			<th><?php echo $this->Paginator->sort('intcolor'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('sold'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php debug($vehicles) ?>
	<tr>	<?php foreach ($vehicles as $vehicle): ?>
	
		<td><?php echo h($vehicle['Vehicle']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vehicle['Mark']['name'], array('controller' => 'marks', 'action' => 'view', $vehicle['Mark']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($vehicle['Modele']['name'], array('controller' => 'modeles', 'action' => 'view', $vehicle['Modele']['id'])); ?>
		</td>
		<td><?php echo h($vehicle['Vehicle']['power']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['price']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['mileage']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['consumption']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['fuel']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['year']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['date_mise_en_circulation']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['nbr_portes']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['extcolor']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['intcolor']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['image']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['description']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['sold']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['sold_date']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['created']); ?>&nbsp;</td>
		<td><?php echo h($vehicle['Vehicle']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vehicle['Vehicle']['id']), null, __('Are you sure you want to delete # %s?', $vehicle['Vehicle']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Vehicle'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modeles'), array('controller' => 'modeles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modele'), array('controller' => 'modeles', 'action' => 'add')); ?> </li>
	</ul>
</div>
