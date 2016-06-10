   <script>
        function habilitar(value)
        {
            if(value=="pn")
            {
                // habilitamos
             	document.getElementById("dni").disabled=false;
             	document.getElementById("ruc").disabled=true;
             	document.getElementById("razonsocial").disabled=true;
             	document.getElementById("first_name").disabled=false;
             	document.getElementById("last_name").disabled=false;
                document.getElementById("account_number").disabled=true;

            }else if(value=="pj"){
                // deshabilitamos
             
                document.getElementById("dni").disabled=true;
                document.getElementById("ruc").disabled=false;
                document.getElementById("razonsocial").disabled=false;
                document.getElementById("first_name").disabled=true;
             	document.getElementById("last_name").disabled=true;
             	document.getElementById("account_number").disabled=false;
               
            }
        }
    </script>

 
<div class="field_row clearfix">
<?php echo form_label($this->lang->line('common_tpcustomer').':','gender',array('class'=>'required')); ?>
<div class='form_field'>



</div>
<input type="radio" name="gender" value="pn" onchange="habilitar(this.value);"> Persona Natural &nbsp;  &nbsp;
<input type="radio" name="gender" value="pj" onchange="habilitar(this.value);"> Persona Juridica
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_dni').':','dni'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'dni',
		'id'=>'dni',
		'disabled' => 'true',
		'value'=>$person_info->first_name)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_ruc').':','ruc'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'ruc',
		'id'=>'ruc',
		'disabled' => 'true',
		'value'=>$person_info->first_name)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_razonsocial').':','razonsocial'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'razonsocial',
		'id'=>'razonsocial',
		'disabled' => 'true',
		'value'=>$person_info->first_name)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_first_name').':','first_name',array('class'=>'required')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'first_name',
		'id'=>'first_name',
		'disabled' => 'true',
		'value'=>$person_info->first_name)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_last_name').':','last_name',array('class'=>'required')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'last_name',
		'id'=>'last_name',
		'disabled' => 'true',
		'value'=>$person_info->last_name)
	);?>
	</div>
</div>
<!--
<div class="field_row clearfix">
<?php echo form_label($this->lang->line('common_gender').':', 'gender',
!empty($basic_version) ? array('class'=>'required') : array()); ?>
	<div class='form_field'>
	<?php echo form_radio(array(
		'name'=>'gender',
		'type'=>'radio',
		'id'=>'gender',
		'value'=>1,
		'checked'=>$person_info->gender === '1')
	);
	echo '&nbsp;' . $this->lang->line('common_gender_male') . '&nbsp;';
	echo form_radio(array(
		'name'=>'gender',
		'type'=>'radio',
		'id'=>'gender',
		'value'=>0,
		'checked'=>$person_info->gender === '0')
	);
	echo '&nbsp;' . $this->lang->line('common_gender_female');
	?>
	</div>
</div>
-->
<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_email').':','email',array('class'=>'required')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'email',
		'id'=>'email',
		'value'=>$person_info->email)
	);?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_phone_number').':','phone_number',array('class'=>'required')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'phone_number',
		'id'=>'phone_number',
		'value'=>$person_info->phone_number));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_address_1').':','address_1',array('class'=>'required')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'address_1',
		'id'=>'address_1',
		'value'=>$person_info->address_1));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_address_2').':', 'address_2'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'address_2',
		'id'=>'address_2',
		'value'=>$person_info->address_2));?>
	</div>
</div>

<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_city').':', 'city',array('class'=>'required')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'city',
		'id'=>'city',
		'value'=>$person_info->city));?>
	</div>
</div>

<!--
<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_state').':', 'state'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'state',
		'id'=>'state',
		'value'=>$person_info->state));?>
	</div>
</div>
-->

<!--
<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_zip').':', 'zip'); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'zip',
		'id'=>'postcode',
		'value'=>$person_info->zip));?>
	</div>
</div>
-->


<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_country').':','country',array('class'=>'required')); ?>
	<div class='form_field'>
	<?php echo form_input(array(
		'name'=>'country',
		'id'=>'country',
		'value'=>$person_info->country));?>
	</div>
</div>


<!--
<div class="field_row clearfix">	
<?php echo form_label($this->lang->line('common_comments').':', 'comments'); ?>
	<div class='form_field'>
	<?php echo form_textarea(array(
		'name'=>'comments',
		'id'=>'comments',
		'value'=>$person_info->comments,
		'rows'=>'5',
		'cols'=>'17')		
	);?>
	</div>
</div>
-->


<script type='text/javascript' language="javascript">
//validation and submit handling
$(document).ready(function()
{
	nominatim.init({
		fields : {
			postcode : {  
				dependencies :  ["postcode", "city", "state", "country"], 
				response : {  
					field : 'postalcode', 
					format: ["postcode", "village|town|hamlet|city_district|city", "state", "country"] 
				}
			},
	
			city : {
				dependencies :  ["postcode", "city", "state", "country"], 
				response : {  
					format: ["postcode", "village|town|hamlet|city_district|city", "state", "country"] 
				}
			},
	
			state : {
				dependencies :  ["state", "country"]
			},
	
			country : {
				dependencies :  ["state", "country"] 
			}
			
		},
		language : '<?php echo $this->config->item('language');?>'
	});

});
</script>