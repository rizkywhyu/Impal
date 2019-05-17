<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Inventaris</title>
<link rel="stylesheet" href="http://103.247.226.138/demo/ci_inventory/asset/css/style_login.css" type="text/css">
<link href="http://103.247.226.138/demo/ci_inventory/asset/css/fonts/stylesheet.css" rel="stylesheet" type="text/css">
<style type="text/css">
button {margin: 0; padding: 0;}
button {margin: 2px; position: relative; padding: 4px 4px 4px 2px; 
cursor: pointer; float: left;  list-style: none;}
button span.ui-icon {float: left; margin: 0 4px;}
</style>
</head>

<body>
<div id="login">
<h1><center>Halaman Login</center></h1>
 

<form action="<?php echo base_url(). 'Login/masuk' ?>" method="post" accept-charset="utf-8"><fieldset>
    <legend>Login</legend>
    <table width="100%">
    <tbody><tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" value="" id="username" class="input-teks-login" autocomplete="off" size="30" placeholder="Masukkan username....."></td>
    </tr>
    <tr>       
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" value="" id="password" class="input-teks-login" autocomplete="off" size="30" placeholder="Masukkan password....."></td>
    </tr>
    </tbody></table>        
</fieldset>
<fieldset class="tblFooters">
    <div id="error">
            </div>
    <button name="submit" type="submit" id="submit" class="easyui-linkbutton" data-options="iconCls:'icon-lock_open'">Login</button></fieldset>

</form>
</div>
</body>
</html>