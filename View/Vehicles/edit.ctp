<?php echo $this->Html->script('jquery'); ?>
<?php echo $this->Html->script('jquery.ui'); ?>

<div class="vehicles form">
<?php echo $this->Form->create('Vehicle',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mark_id',array('empty'=>'Selectionnez la marque','class'=>'mark','label'=>''));
		echo $this->Form->input('modele_id',array('empty'=>'Selectionnez le modéle','class'=>'model','label'=>'')); 
		echo $this->Form->input('type_id');
		echo $this->Form->input('power');
		echo $this->Form->input('price');
		echo $this->Form->input('mileage');
		echo $this->Form->input('consumption');
		echo $this->Form->input('year');
		echo $this->Form->input('nbr_portes');
		echo $this->Form->input(
    	'date_mise_en_circulation',
   		 array(
        'type' => 'date',
        'selected' => array(
            'year'=>date('Y')
        ),
        'minYear' => date('Y') - 40,
        'maxYear' => date('Y')
    )
);
		//echo $this->Form->year('year',1980, date('Y'));
		echo $this->Form->input('fuel', array(
		    'options' => array('Essence'=>'Essence','Diesel'=>'Diesel','Electrique'=>'Electrique','Hybrides'=>'Hybrides'),
		    'empty' => 'Choisir ... '
		));
		echo $this->Form->input('extcolor',array('options'=>array('Argent'=>'Argent','Beige'=>'Beige','Blanc'=>'Blanc','Bleu'=>'Bleu','Girs'=>'Girs','Ivoire'=>'Ivoire','Jaune'=>'Jaune','Marron'=>'Marron','Noir'=>'Noir','Or'=>'Or','Orange'=>'Orange','Rouge'=>'Rouge','Vert'=>'Vert','Rose'=>'Rose','Violet'=>'Violet')));
		echo $this->Form->input('intcolor',array('options'=>array('Argent'=>'Argent','Beige'=>'Beige','Blanc'=>'Blanc','Bleu'=>'Bleu','Girs'=>'Girs','Ivoire'=>'Ivoire','Jaune'=>'Jaune','Marron'=>'Marron','Noir'=>'Noir','Or'=>'Or','Orange'=>'Orange','Rouge'=>'Rouge','Vert'=>'Vert','Rose'=>'Rose','Violet'=>'Violet')));
		echo $this->Form->input('description');
		echo $this->Form->input('sold');
		echo $this->Form->input(
    	'sold_date',
   		 array(
        'type' => 'date',
        'selected' => array(
            'year'=>date('Y')
        ),
        'minYear' => date('Y') - 40,
        'maxYear' => date('Y')
    )
);		
		echo "Ajouter les nouvelles images, ces images vont remplacer les anciens (Taille Limit : 5.)";
		echo $this->Form->input('image_file',array('type'=>'file'));

		
	?>

	<a style='cursor:pointer;' id="add_more">Ajouter de plus </a>
	</fieldset>
</div>
<?php echo $this->Form->end(__('Submit')); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vehicle.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Vehicle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Marks'), array('controller' => 'marks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mark'), array('controller' => 'marks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modeles'), array('controller' => 'modeles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modele'), array('controller' => 'modeles', 'action' => 'add')); ?> </li>
	</ul>
	</div>

                        <script>
                        	$('select.mark').change(function(){
                        		//alert('changed');
								$.get('../showModele',{id:$('select.mark option:selected').attr('value')},
									function(data){
										//alert(data);
										$('#modele_id_chosen').remove();
										$('.model').css('display','block');
										var obj = jQuery.parseJSON(data);
										$('.model').html(obj);
									}
								);
							});

							$('#add_more').click(function(){
								var  current_count = $("input[type='file']").length;
								if (current_count <= 4 ) {

								var next_count = current_count + 1 ;
								$('#VehicleEditForm').append("<div class='input_file'> <label></label><input type='file' name='data[Vehicle][image_file_"+next_count+"]' class='image_"+next_count+"'  /></div>");	
								}
							}); 
              </script>

