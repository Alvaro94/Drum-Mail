<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_email.css" media="all">


<?php if (isset($this->session->userdata['logged_in'])) {
	$username = ($this->session->userdata['logged_in']['username']);
	$email = ($this->session->userdata['logged_in']['email']);
}?>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container-fluid">
<!--header section -->
          <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a id="nav" class="navbar-brand" href="#">Drum-Mail</a>
          </div>
<!-- menu section -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
               <ul class="nav navbar-nav navbar-left">

               <li ole="presentation" class="active"><a id="nav"rhref="#salida" aria-controls="salida" role="tab" data-toggle="tab">Salida</a></li>
                <li role="presentation"><a href="#enviados" aria-controls="enviados" role="tab" data-toggle="tab">Enviados</a></li>

           </ul>
               <ul class="nav navbar-nav navbar-right">
               <li><a id="nav">Bienvenido <?php echo $username ?></a></li>
               <li><a id="nav" href="<?php echo base_url('user/logout') ?>">Salir</a></li>
               </ul>
          </div>
     </div>
</nav>