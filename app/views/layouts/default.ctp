<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='Content-Type' content='Type=text/html; charset=utf-8'>
<title>Welcome to GreyB Project Information Interface.</title>
<link href="/greyb/favicon.ico" type="image/x-icon" rel="icon" /><link href="/cake_project/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<link type="text/css" href="/dashboard/css/jquery.ui.all.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/dashboard/css/cake.generic.css" /><link rel="stylesheet" type="text/css" href="/dashboard/css/business.css" />
<script type="text/javascript" src="/dashboard/js/jquery.js"></script>
<script type="text/javascript" src="/dashboard/js/jquery.form.js"></script>
<script type="text/javascript" src="/dashboard/js/jquery.jeditable.js"></script>
</head>
<body>
	<div id="container">
		<div id="header">
			
			<?php echo $this->Html->image("logo.png");?>&nbsp;&nbsp;&nbsp;<?php echo $this->Html->image("welcome.gif");?>
	 <span style="float: right; margin-right: 40px; margin-top:20px;"><a style="color: #ee3322;" href="<?php echo $this->Html->url('/users/logout', true); ?>">Logout</a></span>

			
		</div>
		<div id="content">

<?php echo $session->flash();
	//echo $session->flash('auth');
//	echo $this->Html->script('jquery-1.4.2.min');
echo $html->script('prototype');
echo $html->script('scriptaculous');
 ?>
<?php //$this->redirect($this->Auth->logout());?>

<?php echo $content_for_layout; ?>

</div>

<div id="container"><?php //echo $this->element('footer');?><?php //echo $this->element('sql_dump'); ?></div>


<?php //echo $this->Js->writeBuffer(); ?>

</body>
</html>
