<?php
/* Smarty version 4.1.0, created on 2022-05-31 00:54:37
  from 'C:\xampp\htdocs\final\app\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62954b2d33b6e5_28243524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3a6165b92c782ba7ec7edd5a417df7388a103fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\final\\app\\views\\login.html',
      1 => 1653951274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62954b2d33b6e5_28243524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
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
myprofile"><button type="submit" class="btn btn-lg btn-outline-info">Twój profil</button></a>
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
			<div class="col-lg-8 col-lg-push-2 center">
                            <h1> Firm wyszukiwarka</h1>
				<h2>Logowanie</h2>
				<p class="lead">
					Zaloguj się aby móc korzystać ze wszytkich opcji
				</p>
                        </div>
                    <br>
                        
	</div>
</header>

<main class="content">
<div style="height: 50px; width: 100%;"></div>
<div class="row w-75 col-lg-3 left"></div>
<div class="row w-75 col-lg-3 center">
		<form class="form-inline space-before" role="form">
                    <br>
                    <div class="form-group"><input type="text" class="form-control input-lg" id="id_login" name="login" placeholder="login"></div>
                    <br>
                    <br>
                    <div class="form-group"><input type="password" class="form-control input-lg" id="id_pass" name="pass" placeholder="hasło"></div>
                    <br>
                    <div class="form-group space-before"> <button type="submit" value="zaloguj" class="btn btn-lg btn-default">Zaloguj</button> </div>
		</form>
            </div>
	<!-- /Features -->
        <div class="row w-75 col-lg-6 right" style="background-color: #fae6dc; width: 30%; border-radius: 35px; margin-top: 2.5%;">
        <br><p class="lead" align="center">Status logowania </p>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107997359562954b2d335235_95560488', 'messages');
?>

        </div>
<div class="fixed-bottom static default-color" style="position: fixed; height: 20px; bottom: 0; width: 100%; background-color: #ffcdc3">
    <p class="small text-muted text-center small">
        <i style="font-family:'Open sans'"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
info">INFO</a> - STOPKA - PROJEKT OPARTY NA DARMOWYM WIDOKU Z WITRYNY <a href=" https://gettemplate.com/">GETTEMPLATE.COM</a> ORAZ PROJTKU Z WITRYNY <a href=" https://kudlacik.eu/">KUDLACIK.EU</a> - <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
info">INFO</a> </i></p>
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
/* {block 'messages'} */
class Block_107997359562954b2d335235_95560488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_107997359562954b2d335235_95560488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
            <div class="messages bottom-margin" style="margin: 2%;">
                    <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul><br>
            </div>
            <?php }?>
            <?php
}
}
/* {/block 'messages'} */
}
