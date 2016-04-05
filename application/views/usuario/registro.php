
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_email.css" media="all">

<h1 id="tittle">Crear cuenta Drum-Mail</h1>
<br>

<div id="form"class="container ">

  <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>user/insert">
   <div class="form-group">
    <label  class="col-xs-4 control-label"></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nusername" placeholder="Usuario">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-xs-4 control-label"></label>
    <div class="col-xs-4">
      <input type="password" class="form-control" name="npassword" placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-xs-4 control-label"></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nname" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-xs-4 control-label"></label>
    <div class="col-xs-4">
      <input type="email" class="form-control" name="ncorreo" placeholder="Email">
    </div>
  </div>


  <div class="row">
    <div class="col-sm-offset-4 col-xs-4">
      <button type="submit" class="btn btn-primary btn-lg btn-block" name="guardar" >Terminar Registro</button>
    </div>
  </div>
</br>
  <div class="form-group">
    <div class="col-sm-offset-4 col-xs-4" >

      <a class="btn btn-warning btn-lg btn-block" href="<?php echo base_url(); ?>user/login">Ir a Login</a>
      </form>
    </div>

</form>
</div>
</div>
<br>
<img  src="http://www.osoolmedia.com/img/e-marketing.png">
