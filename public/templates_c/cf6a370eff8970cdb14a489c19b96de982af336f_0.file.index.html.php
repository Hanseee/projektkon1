<?php
/* Smarty version 4.1.0, created on 2022-05-27 00:01:13
  from 'C:\xampp\htdocs\final\app\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628ff8a9eef1e2_95815816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf6a370eff8970cdb14a489c19b96de982af336f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\final\\app\\views\\index.html',
      1 => 1653602470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628ff8a9eef1e2_95815816 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en" style="height: 100%">
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

<body style="height: 100%">

<div class="container" style="margin: 1em 0em 1em 3em; width: 100%;">
    <div class="row"> 
        <div class="col-lg-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
index"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/assets/images/LOGO1.png" style="border-radius: 35px;" align="center"></a>
        </div>
        <div class="col-lg-4"></div>
            <div class="col-lg-4" align="center">
                <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout"><button type="submit" class="btn btn-lg btn-outline-info">Wyloguj</button></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
myprofile"><button type="submit" class="btn btn-lg btn-outline-info">chuj wie</button></a>
                <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login"><button type="submit" class="btn btn-lg btn-outline-info">Logowanie</button></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register"><button type="submit" class="btn btn-lg btn-outline-info">Rejestracja</button></a>
                <?php }?>
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
                                <br>
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
<div class="fixed-bottom static default-color" style="position: fixed; height: 20px; bottom: 0; width: 100%; background-color: #ffcdc3">
    <p class="text-center small">
        <i style="font-family:'Open sans'"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
info">INFO</a> - STOPKA - PROJEKT OPARTY NA DARMOWYM WIDOKU Z WITRYNY <a href=" https://gettemplate.com/">GETTEMPLATE.COM</a> ORAZ PROJTKU Z WITRYNY <a href=" https://kudlacik.eu/">KUDLACIK.EU</a> - <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
info">INFO</a> </i>
    </p>
</div>
        
</main>


<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/template.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}