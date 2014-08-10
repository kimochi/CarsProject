<?php echo $this->Html->script('jquery'); ?>
<?php echo $this->Html->script('jquery.ui'); ?>
<div id="content" class="page-filter">

<div class="section gray-light">
<div class="container">
<div class="row">

<div class="col-md-9">
    <div class="row">
        <div class="col-md-12">
            <div class="block block-margin sort">
                <div class="block-inner gray">
                    <div class="pull-left">
                        <p>
                        <?php echo count($vehicl) . " Résultats trouvées"; ?>
                        </p>
                    </div>

                    <form id="sort-form" class="form-inline pull-right">
                        <div class="form-group">
                            <select id="sort" class="form-control" name="sort">
                                <option>Price ASC</option>
                                <option>Price DESC</option>
                                <option>Year ASC</option>
                                <option>Year DESC</option>
                                <option>Engine size ASC</option>
                                <option>Engine size DESC</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="main">
        <div class="row-block block block-margin">
            <div class="row">
                <div class="col-md-12">
                    <div class="content white">
<div class="inner">
<?php if (count($vehicl) > 0 ): ?>
	

<?php foreach ($vehicl as $vehicle): ?>
<?php foreach ($vehicl as $vehicle): ?>

<div class="row-item">
    <div class="inner">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-5">
                <div class="picture">
                    <div class="image-slider">
                    	<?php   
							foreach ($images as $img) {
								//on prend les images de la véhicule en cours
									if ($img['Imagesvehicle']['vehicle_id'] == $vehicle['Vehicle']['id']) {
										//echo $this->Html->link($title, array('controller' => '', 'action' => ''));
										 echo $this->Html->image('uploads/vehicules/'.$img['Imagesvehicle']['image'],array('class'=>"slide"));
									}
								}
							
						?>
                        
                        <div class="cycle-pager"></div><!-- /.cycle-pager -->
                    </div><!-- /.image-slider -->
                </div><!-- /.picture -->
            </div><!-- /.col-md-4 -->

            <div class="col-lg-8 col-md-7 col-sm-7">

                <div class="content-inner">
                    <h3>
                        <?php echo $this->Html->link(h($vehicle['Mark']['name']) . ' '. h($vehicle['Modele']['name']), array('controller' => 'vehicles', 'action' => 'view',h($vehicle['Vehicle']['id']))); ?>
                    </h3>
                    <div class="subtitle">Active</div><!-- /.subtitle -->

                    <div class="price"><?php echo h($vehicle['Vehicle']['price']) . 'DH' ?></div><!-- /.price -->

                    <div class="description">
                        <p><?php echo h($vehicle['Vehicle']['description']) ?></p>
                    </div><!-- /.description -->

                    <div class="meta">
                        <ul>
                            <li>
                                <i class="icon icon-normal-dashboard"></i> <?php echo h($vehicle['Vehicle']['year']) ?>                            </li>
                            <li>
                                <i class="icon icon-normal-car-door"></i> <?php echo h($vehicle['Vehicle']['fuel']) ?>                            </li>
                            <li>
                                <i class="icon icon-normal-cog-wheel"></i> <?php echo h($vehicle['Vehicle']['power']) ?>                            </li>
                        </ul>
                    </div><!-- /.meta -->
                </div><!-- /.content-inner -->
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.inner -->
</div><!-- /.row-item -->
	
<?php endforeach ?>
<?php else: ?>
	<h3>Aucun Résultat n'a été trouvé</h3>
<?php endif ?>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="filter-pager" class="block">
                <div class="block-inner gray">
                    <div class="pager">
                        <div class="row">
                            <ul>
                                <li class="page-controls col-xs-12 col-md-3 col-sm-3">
                                    <ul>
                                        <li class="page page-prev pull-left">
                                        <?php echo $this->Paginator->prev('<' . __(''), array(), null, array('class' => 'prev disabled')); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pages col-xs-12 col-md-6 col-sm-6">
                                    <ul>
                                        <?php echo $this->Paginator->numbers(array('separator' => '	')); ?>
                                    </ul>
                                </li>

                                <li class="page-controls col-xs-12 col-md-3 col-sm-3">
                                    <ul>
                                        <li class="page page-next pull-right"><?php echo $this->Paginator->next(__('>') . ' ', array(), null, array('class' => 'next disabled')); ?>
                                       
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#main -->
</div>

<div class="col-md-3 sidebar">


    <div id="filter" class="filter-cars block block-shadow white">
        <div class="block-inner">
            <div class="block-title">
                <h3>Filtrer</h3>

            </div>

            <div class="block-inner">
                <?php echo $this->Form->create('vehicles',array('type'=>'post','action'=>'search')); ?>
                    <div class="form-section">
                        <div class="form-group">

                               <?php echo $this->Form->input('mark_id',array('empty'=>'Selectionnez la marque','options'=>$marks,'class'=>'mark','label'=>'')); ?>
                       </div>

                        <div class="form-group">
                            <?php echo $this->Form->input('modele_id',array('empty'=>'Selectionnez le modéle','class'=>'model','options'=>'null','label'=>'')); ?>
                        </div>
                        <script>
                        	$('select.mark').change(function(){
                        		//alert('changed');
								$.get('showModele',{id:$('select.mark option:selected').attr('value')},
									function(data){
										//alert(data);
										$('#modele_id_chosen').remove();
										$('.model').css('display','block');
										var obj = jQuery.parseJSON(data);
										$('.model').html(obj);
									}
								);
							});
                        </script>
                        <div class="form-group">
                           <?php echo $this->Form->year('year', 1930, date('Y') ,array('empty'=>'Selectionnez l\'année')); ?>
                        </div>
                    </div>
                    <div class="form-section">

                        <div class="form-group" name="fuel">
                        <?php echo $this->Form->input('fuel', array('label'=>'','empty'=>'Selectionnez le fuel', 'options'=> array( 'Essence'=>'Essence','Diesel'=>'Diesel','Electrique'=>'Electrique','Hybrides'=>'Hybrides'))); ?>
                            
                        </div>
                    </div>
                    <div class="form-section">
                        <div class="form-group">
                            <div class="filter-range-slider" id='price'>
                                <input id="price-input" type="text" name="price" value="0;15000">
                            </div>

                            <div class="filter-range-slider" id="km">
                                <input id="km-input" type="text" name="km" value="0;100000">
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-group">   
                    <?php
                $options = array(
                	'label'=>'Recherchez',
                	'class'=>'send btn btn-primary btn-primary-color'
                	);
                 echo $this->Form->end($options); ?>
                        
                    </div>
             
            </div>
        </div>
    </div>
    <!-- /#filter -->


</div>
</div>
</div>
</div>
</div>