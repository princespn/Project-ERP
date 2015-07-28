<div class="user form">
	<table>
		<tr>
			<td><h2><?php __('Add User'); ?></h2></td>
			<td class="actions_top"><?php echo $this->Html->link($this->Html->image("icon/back.png",array('alt'=>'Back', 'title'=>'Back')), array('action' => 'index'), array('escape' => false)); ?></td>
		</tr>
	</table>
	
	
	<?php echo $this->Form->create('User', array('url' => array('plugin'=>null,'controller' => 'user', 'action' => 'add'))); ?> 
	<?php
		echo $this->Form->input('group_id');
		echo $this->Form->input('email');
		echo $this->Form->input('username');
		echo $this->Form->input('phone');
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		if(empty($country))
		{ 
			$country	= array(
				'9999999'	=>	'Other'
			);
		}
		echo $this->Form->input('country_id', array('empty'=>'Choose Country', 'options' => $country));
		$options = array('url' => array('prefix' => null, 'admin' => false, 'plugins'=>null,'controller'=>'user', 'action'=>'country_state_city_ajax/state' . DS . $this->params['controller'] . DS . $this->params['action']),'update' => 'state_block');
		echo $this->Ajax->observeField('UserCountryId',$options);
		
		?>
		<div id='state_block'>
		<?php 
		if(empty($state))
		{ 
			$state	= array(
				'9999999'	=>	'Other'
			);
		}
			
		echo $this->Form->input('state_id', array('empty'=>'Choose State', 'options' => $state));
		$options = array('url' => array('prefix' => null, 'admin' => false, 'plugins'=>null,'controller'=>'user', 'action'=>'country_state_city_ajax/city' . DS . $this->params['controller'] . DS . $this->params['action']),'update' => 'city_block');
		echo $this->Ajax->observeField('UserStateId',$options);
		?>
		</div>
		<div id="city_block">
		<?php 
		if(empty($city))
		{ 
			$city	= array(
				'9999999'	=>	'Other'
			);
		}
		
		echo $this->Form->input('city_id', array('empty'=>'Choose City', 'options' => $city));
		?>
		<?php echo $this->Form->input('pin');?>
		</div>
		<br />
		<hr>
		<br />
		<?php 
		echo $this->Form->input('password');
		echo $this->Form->input('password_confirm', array('type'=>'password'));
		?>
	<?php echo $this->Form->end(__('Submit', true));?>
</div>