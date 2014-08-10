<?php echo $this->Html->script('jquery'); ?>
<?php echo $this->Html->script('jquery.ui'); ?>
<div class="vehicles form">
<?php echo $this->Form->create('Vehicle',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('mark_id',array('empty'=>'Selectionnez la marque','class'=>'mark','label'=>''));
		echo $this->Form->input('modele_id',array('empty'=>'Selectionnez le modéle','class'=>'model','label'=>'')); 
		echo $this->Form->input('power');
		echo $this->Form->input('price');
		echo $this->Form->input('mileage');
		echo $this->Form->input('consumption');
		echo $this->Form->input('year');
		echo $this->Form->input('nbr_portes');
		echo $this->Form->input('date_mise_en_circulation');
		echo $this->Form->input('fuel', array(
		    'options' => array('Essence'=>'Essence','Diesel'=>'Diesel','Electrique'=>'Electrique','Hybrides'=>'Hybrides'),
		    'empty' => 'Selectionnez le Type d\'energie '
		));
		
		//echo $this->Form->year('year',array('label'=>'Année'));
		echo $this->Form->input('extcolor',array('options'=>array('Argent'=>'Argent','Beige'=>'Beige','Blanc'=>'Blanc','Bleu'=>'Bleu','Girs'=>'Girs','Ivoire'=>'Ivoire','Jaune'=>'Jaune','Marron'=>'Marron','Noir'=>'Noir','Or'=>'Or','Orange'=>'Orange','Rouge'=>'Rouge','Vert'=>'Vert','Rose'=>'Rose','Violet'=>'Violet')));
		echo $this->Form->input('intcolor',array('options'=>array('Argent'=>'Argent','Beige'=>'Beige','Blanc'=>'Blanc','Bleu'=>'Bleu','Girs'=>'Girs','Ivoire'=>'Ivoire','Jaune'=>'Jaune','Marron'=>'Marron','Noir'=>'Noir','Or'=>'Or','Orange'=>'Orange','Rouge'=>'Rouge','Vert'=>'Vert','Rose'=>'Rose','Violet'=>'Violet')));

		echo $this->Form->input('description');
		echo "Ajouter les images (Taille Limit : 4.)";
		echo $this->Form->input('image_file',array('label'=>"",'type'=>'file'));//L'image en format jpeg, png ou gif
		//echo $this->Html->link('Ajouter encore',array('controller'=>'','action'=>'#'),array('id'=>'add_more'));7

	?>
	<a style='cursor:pointer;' id="add_more">Ajouter de plus </a>

	<script> 
	
	</script>
	</fieldset>
</div>
<?php echo $this->Form->end(__('Ajouter')); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modeles'), array('controller' => 'modeles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modele'), array('controller' => 'modeles', 'action' => 'add')); ?> </li>
	</ul>
</div>


                        <script>
							$('#add_more').click(function(){
							//alert('ready');
								var  current_count = $("input[type='file']").length;
								
								if (current_count <= 4 ) {
								var next_count = current_count + 1 ;
								$('#VehicleAddForm').append("<div class='input_file'> <label></label><input type='file' name='data[Vehicle][image_file_"+next_count+"]' class='image_"+next_count+"'  /></div>");
								}
							}); 
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