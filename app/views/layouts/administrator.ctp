<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$headerString 		= $this->Menu->makeBusinessHeader($authUser);
$businessUserMenu = $this->Menu->makeBusinessMenu($this->params, $this->here, $authUser);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
	echo $this->Html->meta('icon')."\n";
	echo $this->Html->css('cake.generic')."\n";
	echo $this->Html->css('business')."\n";
	//echo $this->Html->css('style2')."\n";
	echo $this->Html->script('jquery')."\n";
	echo $this->Html->script('showEffect')."\n";
	echo $scripts_for_layout;
	echo $html->script('prototype');
	echo $html->script('scriptaculous'); 
	?>
	<style type="text/css">
<!--
#apDiv1 {
	position:relative;
	
	
	width:278px;
	height:116px;
	z-index:1;
}
div.actions 
{
  width:150px;
  padding-right:10px;
} 
-->
</style>
</head>
<body>	
	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<td align="left" valign="top" >
				<table width="990" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top" align="center">
						<!-- HEDER STARTS HERE -->
						<?php echo $headerString; ?>
						<!-- HEDER ENDS HERE -->
						</td>
					</tr>
					<tr>
						<td valign="top" align="center" height="25px;">&nbsp;</td>
					</tr>
					
					<tr>
						<td align="left" valign="top">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<!-- BUSINESS USER MENU STARTS HERE -->
							<?php //echo $businessUserMenu; ?>
							<!-- BUSINESS USER MENU ENDS HERE -->
							<tr>
							   <td class="admin_left_td">
							   <?php echo $this->element('admin/administrator-left', array('authUser', $authUser)); ?>
							   </td>
								<td class="admin_content">
								<!-- CONTENT STARTS HERE -->
								<?php
	 							echo $session->flash();
	 							echo $session->flash('auth');
	 							
	 							?>
								<?php echo $content_for_layout; ?>
								<?php 
								//echo $this->element('business/home');
								?>
								<!-- CONTENT ENDS HERE -->
								</td>
							</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
		<tr>
			<td align="left" valign="top">
            	<!-- FOOTER STARTS HERE -->
		<div class="footer_bg"><?php echo $this->element('common/footer');?></div>
            	<!-- FOOTER ENDS HERE -->
            </td>
          </tr>
</table>
</body>
</html>
