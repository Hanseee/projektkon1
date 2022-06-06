<?php
/* Smarty version 4.1.0, created on 2022-06-06 21:32:33
  from 'C:\xampp\htdocs\final\app\views\myprofile.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e565191f660_30600878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '798eb97fbd5d236a273595f9eeba81543bde492c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\final\\app\\views\\myprofile.html',
      1 => 1654543952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629e565191f660_30600878 (Smarty_Internal_Template $_smarty_tpl) {
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
<body style="height: 100%;">
    
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
myprofile"><button type="submit" class="btn btn-lg btn-outline-info"><?php echo $_smarty_tpl->tpl_vars['logininfo']->value;?>
</button></a>
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
                            <h1> Firm wyszukiwarka</h1><br>
				<h2>Mój profil</h2>
                        </div>
                    <br>
	</div>
</header>
    
<main class="content">
<div style="width: 100%; height: 15%">   
	<section class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">
                            <h1 class="text-center">Dane:</h1><br>
				<p class="lead text-center">
                                    Nazwa użytkownika: &nbsp; <?php echo $_smarty_tpl->tpl_vars['logininfo']->value;?>

                                    <br>
                                    Twoje uprawnienia: &nbsp; <?php echo $_smarty_tpl->tpl_vars['roleinfo']->value;?>

                                    <br>
				</p>
			</div>
		</div>
	</section>
</div>

<?php if (($_smarty_tpl->tpl_vars['roleinfo']->value == "Właściciel" || $_smarty_tpl->tpl_vars['roleinfo']->value == "Administrator")) {?>    
<div class="col-lg-3"></div> 

<div class="col-lg-3 space-after">
    <div class="row center space-after" style="background-color: #fae6dc; border-radius: 35px; margin-top: 2.5%; width: 100%;">
    <p class="lead" align="center" style="margin-top: 5%;"> Twoje firmy: </p>
        <?php if ($_smarty_tpl->tpl_vars['firmylista']->value != NULL) {?>
        <div class="messages bottom-margin" style="margin: 2%;">
        <table id="tab_firmy" class="pure-table pure-table-bordered">
        <thead>
	<tr>
		<th>Nazwa:&nbsp;</th>
		<th>Data założenia:&nbsp;</th>
                <th>Branża:&nbsp;</th>
		<th>Aktywna:&nbsp;</th>
		<th>Prywatna:&nbsp;</th>
	</tr>
        </thead>  
        <tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['firmylista']->value, 'fl');
$_smarty_tpl->tpl_vars['fl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fl']->value) {
$_smarty_tpl->tpl_vars['fl']->do_else = false;
?>
        <tr><td><?php echo $_smarty_tpl->tpl_vars['fl']->value["FIRMA_NAME"];?>
&nbsp;</td><td><?php echo $_smarty_tpl->tpl_vars['fl']->value["FIRMA_DZ"];?>
&nbsp;</td><td><?php echo $_smarty_tpl->tpl_vars['fl']->value["FIRMA_FIELD"];?>
&nbsp;&nbsp;</td><td><?php if ($_smarty_tpl->tpl_vars['fl']->value["FIRMA_AKTYW"] == 0) {?>tak<?php } else { ?>nie<?php }?>&nbsp;</td><td><?php if ($_smarty_tpl->tpl_vars['fl']->value["FIRMA_PRIV"] == 1) {?>tak<?php } else { ?>nie<?php }?>&nbsp;</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><?php } else { ?>
        <p align="center" class="small text-muted space-before"> Nie jesteś właścicielem żadnej firmy</p>
        <?php }?>
        <div align="center">
        <form class="form-inline space-before" role="form">
        <input type="text" class="form-control input-md" id="id_firmausun" name="firmausun" placeholder="Nazwa firmy">    
        <button type="submit" class="btn btn-lg btn-default" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
usunfirmy/firmausun">Usuń</button>
        </form></div>
        
        
    </div>
</div>

<div class="col-lg-3 space-after">
    <div class="row center" style="background-color: #fae6dc; border-radius: 35px; margin-top: 2.5%; width: 100%;">
    <p class="lead" align="center" style="margin-top: 5%; margin-bottom: 5%;"> Nowa firma (bez polskich znaków): </p>
        <div class="featurelist bottom-margin text-center" style="margin: 2%; margin-bottom: 5%;">
        <form class="form-inline" role="form">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1138038249629e565191c1f8_29976510', 'messages');
?>

                <div class="form-group space-after"><input type="text" class="form-control input-lg" name="firmaname" id="firmaname" placeholder="Nazwa firmy"></div><br>  
		<div class="form-group space-after"><input type="text" class="form-control input-lg" name="firmainfo" id="firmainfo" placeholder="Branża"></div><br>  
                <div class="form-group space-after"><input type="text" placeholder="Data utworzenia (Y-M-D)" class="form-control input-lg" name="firmadata" id="firmadata"></div><br>  
                <div class="form-group space-after align-center">
                    <input type="checkbox" name="firmaaktyw" value="firmaaktyw" id="firmaaktyw">
                    <label for="vehicle1"> Firma nieaktywna</label><br>
                    <input type="checkbox" name="firmapriv" value="firmapriv" id="firmapriv">
                    <label for="vehicle2"> Firma prywatna </label><br>
                </div><br>
                <div class="form-group"> <button type="submit" class="btn btn-lg btn-default">Utwórz</button> </div>
		</form>   
        </div>
    </div>
</div>   

<div class="col-lg-3"></div>      
<?php } else { ?>
<div class="col-lg-12"><h1 align="center" style="margin-top: 8%;">Jesteś zwykłym użytkownikiem, nie masz dostępu do tworzenia firm.</h1></div>
<?php }?>
        
<div class="fixed-bottom static default-color" style="position: fixed; height: 20px; bottom: 0; width: 100%; background-color: #ffcdc3">
    <p class="small text-muted text-center small">
        <i style="font-family:'Open sans'"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
info">INFO</a> - STOPKA - PROJEKT OPARTY NA DARMOWYM WIDOKU Z WITRYNY <a href=" https://gettemplate.com/">GETTEMPLATE.COM</a> ORAZ PROJTKU Z WITRYNY <a href=" https://kudlacik.eu/">KUDLACIK.EU</a> - <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
info">INFO</a> </i></p>
</div>
        
</main>
</body>

<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/template.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'messages'} */
class Block_1138038249629e565191c1f8_29976510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1138038249629e565191c1f8_29976510',
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
