   
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_email.css" media="all">
   
<center>
<div class="page-header"><h1>Bienvenido a tu cuenta Drum-Mail</h1></div>

<div  id="form" class="container">
<form  class="form-horizontal" method="POST" action="<?php echo base_url(); ?>user/autenticar">
  <div class="form-group">
    <label for="username" class="col-xs-4 control-label"></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nusername" placeholder="Usuario">
    </div>
  </div>
  <div  class="form-group">
    <label for="password" class="col-xs-4 control-label"></label>
    <div class="col-xs-4">
      <input type="password" class="form-control" name="npassword" placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-xs-4">
      <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Iniciar sesión</button>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-xs-4" >

      <a id="log"  href="<?php echo base_url(); ?>user/registrar">Registrate ahora</a>
      </form>
    </div>
  </div>
</form>
</div>

    <img src="https://atmail.com/images/feature-mobile.png">
</center>