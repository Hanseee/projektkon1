<?php
/* Smarty version 4.1.0, created on 2022-05-10 10:30:44
  from 'C:\xampp\htdocs\amelia\app\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627a22b4a217a9_15912190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee8c979d4f09ecc48e89d0deead76ef190b45487' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia\\app\\views\\index.html',
      1 => 1652171441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a22b4a217a9_15912190 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Coming Soon html5 template by GetTemplate</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> 
	<link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

<div class="container" style="margin: 1em 0em 1em 3em">
    <div class="row"> 
        <div class="col-lg-3 text-left">miejsce na logo</div>
        <div class="col-lg-6"></div>
        <div class="col-lg-3 text-right">
            <button type="submit" class="btn btn-lg btn-outline-info">Logowanie/wylogowanie</button>           
        </div>
    </div>
</div>
    
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-push-2 text-center">
				<h1>Firm wyszukiwarka</h1>
				<p class="lead">
					Znajdź firmę w naszej bazie danych
				</p>
				<form class="form-inline" role="form">
					<div class="form-group"><input type="text" class="form-control input-lg" id="exampleInputEmail2" placeholder="Nazwa"></div>
					<div class="form-group"><input type="text" class="form-control input-lg" id="exampleInputEmail2" placeholder="Właściciel"></div>
                                        <div class="form-group"><input type="text" class="form-control input-lg" id="exampleInputEmail2" placeholder="Kod firmy"></div>                                     
                                        <div class="form-group space-before"> <button type="submit" class="btn btn-lg btn-default">Szukaj</button> </div>
				</form>
				<p class="small text-muted" style="margin: 2em 1em 2em 1em">Musisz być zalogowany żeby widzieć firmy. Tylko właściciele widzą prywatne firmy</p>
			</div>
		</div>
	</div>
</header>

<main class="content">

	<section class="container space-before space-after">
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">
				<h1 class="text-center">Kontekst</h1>
				<p class="lead text-center">
					... default pusto, wyniki
				</p> 
			</div>
		</div>
	</section>

	<!-- Features -->
	<section class="container space-before">
		<div class="row featurelist space-after">
			
		</div>
	</section>
	<!-- /Features -->

</main>

<p class="small text-muted text-center">Copyright &copy; 2014, Your name. Design by: <a href="http://gettemplate.com/" rel="designer" title="Free Bootstrap templates">GetTemplate</a></p>
<br>

<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/template.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
