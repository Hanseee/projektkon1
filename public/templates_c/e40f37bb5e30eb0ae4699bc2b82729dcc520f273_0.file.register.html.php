<?php
/* Smarty version 4.1.0, created on 2022-05-26 23:46:35
  from 'C:\xampp\htdocs\final\app\views\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628ff53bbb6ce0_40531136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e40f37bb5e30eb0ae4699bc2b82729dcc520f273' => 
    array (
      0 => 'C:\\xampp\\htdocs\\final\\app\\views\\register.html',
      1 => 1653601474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628ff53bbb6ce0_40531136 (Smarty_Internal_Template $_smarty_tpl) {
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
				<p class="small text-muted">Strona dopilnuje, żebyś nie oszukiwał</p>
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
                                        <div class="form-group space-after"><input type="text" class="form-control input-lg" id="name" placeholder="Nazwa użytkownika"></div><br>  
					<div class="form-group space-after"><input type="text" class="form-control input-lg" id="pass" placeholder="Hasło"></div><br>  
                                        <div class="form-group space-after"><input type="text" class="form-control input-lg" id="pass2" placeholder="Powtórz hasło"></div><br>  
                                        <div class="form-group space-after">
                                            <p>Rola:</p>
                                            <input type="radio" id="reg1" name="role" value="user"><label for="reg1" title="Użytkownik może przeglądać firmy ale nie może tworzyć własnych."> Użytkownik </label>
                                            <input type="radio" id="reg2" name="role" value="owner"><label for="reg2" title="Właściciel może przeglądać firmy oraz tworzyć własne, publiczne lub prywatne. Utworzenie konta właściciela wiąże się z opłatami."> Właściciel </label>
                                        </div><br>
                                        <div class="form-group">
                                            <p>Czy akceptujesz regulamin?:</p>
                                            <input type="radio" id="reg1" name="reg" value="tak"><label for="reg1" title="Od przystąpienia do umowy nie ma odwrotu"> tak </label>
                                            <input type="radio" id="reg2" name="reg" value="nie"><label for="reg2" title="Nie będziesz mógł założyć konta"> nie </label>
                                        </div><br>
                                        <div class="form-group space-before space-after"> <button type="submit" class="btn btn-lg btn-default">Zarejestruj</button> </div>
				</form>
		</div>
	</div>
	<div class="col-lg-4 container space-before"></div>
        <!-- /Features -->
<div class="fixed-bottom static default-color" style="position: fixed; height: 20px; bottom: 0; width: 100%; background-color: #ffcdc3">
    <p class="text-center small">
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
}
