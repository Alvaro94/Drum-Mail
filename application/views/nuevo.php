
  	<center><h2>Redactar Correo</h2></center>
		<br/>
<div class="container ">

  <form class="form-horizontal" method="POST" action="<?php echo base_url();?>correo/insert/">
   <div class="form-group">
    <label  class="col-xs-4 control-label"></label>
    <div class="col-xs-4">
      <input type="email" class="form-control" name="nemail" placeholder="Destinatario">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-xs-4 control-label"></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nasunto" placeholder="Asunto">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-xs-4 control-label"></label>
    
     <div class="col-xs-4">
    <textarea name="nmensaje" class="form-control" style=" width: 365px; height: 200px;">
    </textarea><br />
     </div>
  
	</div>
   
  <div class="row">
    <div class="col-sm-offset-4 col-xs-4">
      <button type="submit" class="btn btn-primary btn-lg btn-block" name="enviar" >Enviar</button>
    </div>
  </div>
 </br>
  <div class="form-group">
    <div class="col-sm-offset-4 col-xs-4" >
      
      <a class="btn btn-danger btn-lg btn-block" href="<?php echo base_url();?>correo/vista/">Cancelar</a>
      </form>
    </div>
</form>
</div>
