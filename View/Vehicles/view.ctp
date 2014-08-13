
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,400,700,400italic,700italic" rel="stylesheet" type="text/css"  media="screen, projection">

<div id="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <div class="title">
                            <h1>
                            	<?php echo h($vehicle['Mark']['name']);  ?>    
                            	<?php echo h($vehicle['Modele']['name']); ?>
                            </h1>
                        </div><!-- /.title -->
                    </div><!-- /.heading -->
                </div><!-- /.col-md-8 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /#page-heading -->

<div class="section gray-light">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="action-buttons">
                        <div class="buy-it-now">
                            <div class="label">Buy now</div>
                            <div class="price"><?php echo h($vehicle['Vehicle']['price']); ?> DH</div>
                        </div><!-- /.buy-it-now -->

                    </div><!-- /.action-buttons -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="main">
                        <div class="car car-detail">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="gallery-wrapper">
                                                <div class="gallery">
                                                    <div class="slide active">
                                                        <div class="picture-wrapper">
                                                            <?php echo $this->Html->image('content/toyota1.jpg'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="slide">
                                                        <div class="picture-wrapper">
                                                        <?php echo $this->Html->image('content/toyota2.jpg'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="slide">
                                                        <div class="picture-wrapper">
                                                            <?php echo $this->Html->image('content/toyota3.jpg'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="slide">
                                                        <div class="picture-wrapper">
                                                            <?php echo $this->Html->image('content/toyota4.jpg'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="slide">
                                                        <div class="picture-wrapper">
                                                            <?php echo $this->Html->image('content/toyota5.jpg'); ?>
                                                        </div>
                                                    </div>
                                                </div><!-- /.gallery -->

                                                <div id="gallery-pager" class="white block-shadow">
                                                    <div class="prev">
                                                        <i class="icon-normal-left-arrow-small"></i>
                                                    </div>

                                                    <div class="pager">
                                                    </div>

                                                    <div class="next">
                                                        <i class="icon-normal-right-arrow-small"></i>
                                                    </div>
                                                </div><!-- /#gallery-pager -->


                                                <div class="gallery-thumbnails">
                                                    <div class="thumbnail-0">
                                                       <?php echo $this->Html->image('content/toyota1.jpg'); ?>
                                                    </div>
                                                    <div class="thumbnail-1">
                                                        <?php echo $this->Html->image('content/toyota2.jpg'); ?>
                                                    </div>
                                                    <div class="thumbnail-2">
                                                        <?php echo $this->Html->image('content/toyota3.jpg'); ?>
                                                    </div>
                                                    <div class="thumbnail-3">
                                                     <?php echo $this->Html->image('content/toyota4.jpg'); ?>
                                                    </div>
                                                    <div class="thumbnail-4">
                                                        <?php echo $this->Html->image('content/toyota5.jpg'); ?>
                                                    </div>
                                                </div><!-- /.gallery-thumbnails -->

                                            </div> <!-- /#gallery-wrapper -->
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="block block-shadow white block-margin">
                                                <div class="block-inner">
                                                    <div id="detail-map">
                                                    </div>
                                                </div>
                                            </div><!-- /.block -->
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div>

                                <div class="col-md-6">
                                    <div class="overview">
                                        <div id="tab-container" class="tab-container">

                                            <ul class='nav nav-tabs'>
                                                <li class='tab'><a href="#overview">Informations</a></li>
                                                
                                            </ul><!-- /.nav-tabs -->

                                            <div class="block white block-shadow">
                                                <div class="block-inner">
                                                    <div id="overview" class="active">
                                                        <div class="row">
                                                            <div class="col-sm-5 col-md-5">
                                                                <div class="producer-logo">
                                                                    <?php echo $this->Html->image('uploads/marks/'.h($vehicle['Mark']['image']), array('alt' => h($vehicle['Mark']['name']),'height'=>'100px', 'width'=>'100px')); ?>
                                                                </div>
                                                               
                                                              <?php echo $this->Html->link('Contactez Nous', array('controller' => 'pages', 'action' => 'contact'),array('class'=>'btn btn-primary')); ?>
                                                                <div class="actions">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="icon icon-normal-piggy-bank"></i>Leasing options
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="icon icon-normal-school-ring"></i>Watch this product
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="icon icon-normal-profile-rays"></i>Send to friend
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <i class="icon icon-normal-printer"></i>Print this page
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div><!-- /.actions-->
                                                            </div><!-- /.col-md-5 -->

                                                            <div class="col-sm-7 col-md-7">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="property">Year</td>
                                                                            <td class="value"><?php echo h($vehicle['Vehicle']['year']) ?></td>
                                                                        </tr>
																		<tr>
                                                                            <td class="property">Kilométrage</td>
                                                                            <td class="value"><?php echo h($vehicle['Vehicle']['mileage']) ?> Km</td>
                                                                        </tr>
 																		<tr>
                                                                            <td class="property">Nombre de portes</td>
                                                                            <td class="value"><?php echo h($vehicle['Vehicle']['nbr_portes']) ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="property">Puissance fiscale</td>
                                                                            <td class="value"><?php echo h($vehicle['Vehicle']['power']) ?> Chevaux</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="property">Energie : </td>
                                                                            <td class="value"><?php echo h($vehicle['Vehicle']['fuel']) ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="property">Mise en circulation</td>
                                                                            <td class="value"><?php echo h($vehicle['Vehicle']['date_mise_en_circulation']) ?></td>
                                                                        </tr>


                                                                        <tr>
                                                                            <td class="property">Exterier color</td>
                                                                            <td class="value"><?php echo h($vehicle['Vehicle']['extcolor']) ?></td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td class="property">Interier color</td>
                                                                            <td class="value"><?php echo h($vehicle['Vehicle']['intcolor']) ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table><!-- /.table -->
                                                            </div><!-- /.col-md-7 -->
                                                        </div><!-- /.row -->

                                                        <div class="info">
                                                            <p><?php echo h($vehicle['Vehicle']['description']); ?></p>
                                                        </div><!-- /.info -->
                                                    </div><!-- /#overview -->

                                                

                                            </div><!-- /.block-inner -->
                                            </div><!-- /.block -->
                                        </div><!-- /#tab-container -->
                                    </div><!-- ./overview -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        <div id="recent-cars" class="grid-block block">
                            
                                    <?php if (count($others) > 0 ): ?>
                            <div class="page-header">
                                <div class="page-header-inner">
                                    <div class="heading">
                                    	<h2>Voitures Similaires</h2>
                                        
                                    </div><!-- /.heading -->

                                    <div class="line">
                                        <hr/>
                                    </div><!-- /.line -->
                                </div><!-- /.page-header-inner -->
                            </div><!-- /.page-header -->

                                    <?php endif ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="inner-block white">
                                        <div class="grid-carousel">
                                                                                                                                        <div class="inner">
  <?php foreach ($others as $car ): ?>
 <div class="grid-item">	
    <div class="inner">
        <div class="picture">
            <div class="image-slider">

                    <?php echo $this->Html->image('uploads/vehicules/'.h($car['Vehicle']['image']),array('height'=>'200px','width'=>'280px')); ?>
                
                <div class="cycle-pager"></div><!-- /.cycle-pager -->
            </div><!-- /.image-slider -->
        </div><!-- /.picture -->

        <h3>
        <?php  //var $name =  h($car['Mark']['name']) . h($car['Modele']['name']) ;  ?>
            <?php echo $this->Html->link( h($car['Mark']['name']) .' '. h($car['Modele']['name'])  , array('controller' => 'vehicles', 'action' => 'view',$car['Vehicle']['id'])); ?>
        </h3>

        <div class="price"><?php echo  h($car['Vehicle']['price']); ?> DH</div><!-- /.price -->

        <div class="meta">
            <ul class="clearfix ">
                <li>
                    <i class="icon icon-normal-dashboard"></i> <?php echo $car['Vehicle']['year']  ; ?>                </li>

                <li>
                    <i class="icon icon-normal-car-door"></i> <?php echo $car['Vehicle']['fuel']  ; ?>                </li>

                <li>
                    <i class="icon icon-normal-cog-wheel"></i> <?php echo $car['Vehicle']['power']  ; ?>                </li>
            </ul>
        </div><!-- /.meta -->
    </div><!-- /.inner -->

</div><!-- /.grid-item -->     
</div><!-- /.inner -->
<?php endforeach ?>                                                                                              

                                   </div><!-- /.inner -->
                                                                                    </div><!-- /.grid-carousel -->
                                    </div><!-- /.inner-block -->
                                </div><!-- /.col-md-12 -->
                            </div>
					<?php if (count($others) > 0 ): ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="grid-carousel-pager">
                                        <div class="prev"></div><!-- /.prev -->
                                        <div class="next"></div><!-- /.next -->
                                    </div><!-- /.grid-carousel-pager -->
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                    <?php endif ?>
                        </div><!-- /.grid-block -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                    <!-- /#main -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section -->
