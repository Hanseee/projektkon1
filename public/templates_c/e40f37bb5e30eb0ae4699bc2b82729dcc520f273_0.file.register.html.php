<?php
/* Smarty version 4.1.0, created on 2022-05-31 00:55:17
  from 'C:\xampp\htdocs\final\app\views\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62954b55934a19_43849342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e40f37bb5e30eb0ae4699bc2b82729dcc520f273' => 
    array (
      0 => 'C:\\xampp\\htdocs\\final\\app\\views\\register.html',
      1 => 1653951316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62954b55934a19_43849342 (Smarty_Internal_Template $_smarty_tpl) {
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
			<div class="col-lg-8 col-lg-push-2 text-center">
				<h1>Rejestracja</h1>
				<p class="lead">
					Tutaj utworzysz nowe konto
                                </p>
                                <p class="small text-muted">Hasło musi mieć minimum 6 i maksimum 20 znaków</p>
			</div>
		</div>
	</div>
</header>

<main class="content">
	<!-- Features -->
        <div class="col-lg-4 container space-before"></div>
	<div class="col-lg-4 container text-center space-before">
               <p class="lead">Tutaj dane:</p>
		<div class="featurelist text-center space-after">
                    <form class="form-inline" role="form">
                                        <div class="form-group space-after"><input type="text" class="form-control input-lg" name="login" id="id_login" placeholder="Nazwa użytkownika"></div><br>  
					<div class="form-group space-after"><input type="password" class="form-control input-lg" name="pass" id="id_pass" placeholder="Hasło"></div><br>  
                                        <div class="form-group space-after"><input type="password" class="form-control input-lg" name="pass2" id="id_pass2" placeholder="Powtórz hasło"></div><br>  
                                        <div class="form-group space-after">
                                                <label for="cars">Rola:</label><br>
                                                <select name="role" id="role">
                                                    <option value="user"> &nbsp; Użytkownik &nbsp; </option>
                                                    <option value="owner"> &nbsp; Właściciel &nbsp; </option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                        </div><br>
                                        <div class="form-group space-after"> <button type="submit" class="btn btn-lg btn-default">Zarejestruj</button> </div>
				</form>
		</div>
	</div>

<div class="col-lg-4 container" style="background-color: #fae6dc; width: 30%; border-radius: 35px; margin-top: 2.5%;">
    <br><p class="lead" align="center"> Status rejestracji </p>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96618164862954b5592d046_85612530', 'messages');
?>

</div>
        
        
        
        <!-- /Features -->
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
class Block_96618164862954b5592d046_85612530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_96618164862954b5592d046_85612530',
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
