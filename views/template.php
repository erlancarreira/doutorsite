<html>
	<head>	
		<title>Doutor Site | O seu problema resolvido</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:300,400,600|Roboto:700" rel="stylesheet" lazyload>-->
			  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/images/favicon.png">
			  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
			   <!--<link rel="stylesheet" href="./assets/css/print.css" media="print"> -->
			 
	</head>
<body>
	
	<header id="header" class="header box-shadow">
	  <div class="menu-fixo">	
	  	<!--Classe Pai Nav-Menu-->
					<nav class="nav-menu">

						    <!--Classe Filho-->
					  	<ul class="logo-menu">
					  		<li><a href="<?php echo BASE_URL; ?>"><img class="logo" src="<?php echo BASE_URL; ?>/assets/images/logo-doutor-site.png"></li></a>
					  	 </ul>

          <!--Classe Filho-->
          <nav class="nav-list container">
	            <ul class="home-list">
			          	<li><a data-mostrar href="#" class="ativo">Inicio</a></li>
			          	<li><a data-mostrar href="#" class="ativo">Sobre</a></li>
			          	<li><a data-mostrar href="#" class="ativo">Como funciona</a></li>
			          	<li><a data-mostrar href="#" class="ativo">Contato</a></li>
					        <li data-mostrar class="cad-login-mobile">    
		                    <div class="btn-login"><a href="<?php echo BASE_URL; ?>/cadastrar.php">Cadastrar</a></div>	                 	             
									      <div class="btn-login"><a href="<?php echo BASE_URL; ?>/entrar.php">Login</a></div>
									</li>
	            </ul> 
          </nav>       
                      <!--Classe Filho-->
                   <ul class="btn-cad-login">    
                	    <li class="btn-login"><a href="<?php echo BASE_URL; ?>login/cadastrar">Cadastrar</a></li>	                 	             
							        <li class="btn-login"><a href="<?php echo BASE_URL; ?>login/entrar">Login</a></li>
							     </ul>
                         <!--Classe Filho-->
							     <ul class="btn-hb">
								      <li><a class="container-btn" onclick="myFunction(this)">
								      	<div class="bar1 bg-bar"></div>
											   <div class="bar2 bg-bar"></div>
											  <div class="bar3 bg-bar"></div>
                     </a></li>
								   </ul>				                           
                 
					      <ul class="container-cad-lg">
					          <li class="cadastro oculta">
					      	             	 <form class="form" method="POST">
								              	  <label class="label-mlogin" >Nome de usuário</label> 
								              	   <input type="text" name="nome" class="input-mlogin">
								              	   <label class="label-mlogin">Email</label>
								              	   <input type="email" name="email" class="input-mlogin">
								              	   <label class="label-mlogin">Senha</label>
								              	   <input type="password" name="senha" class="input-mlogin">
								              	     
								              	   
								              	  <input type="submit" value="Entrar" name="Entrar">
								                 </form>
								          
							                 </li>
							               </ul>
              
                      <!--Classe Filho-->      
                            <ul class="container-cad-lg">                  
							              	 <li class="login oculta">

							              	 	
								              	 <form class="form">
								              	 <label class="label-mlogin" >Nome</label> 
								              	   <input type="text" name="nome" class="input-mlogin">
								              	   <label class="label-mlogin"> Senha</label> 
								              	   <input type="password" name="senha" class="input-mlogin">
								              	  <input type="submit" value="Entrar" name="Entrar">
								                 </form>
							                 
							           </li> 
						   </ul>
					     </nav>

               
               

		  </div>
</header>
<?php
    $this->loadViewInTemplate($viewName, $viewData);
 ?>

<footer class="footer">
<section class="section-freelancer">
	  <div class="align-center pad-30 bg-white">
	  	 <ul>
	  	 	 <li>Encontre Freelancers</li>
	  	 	 <li>Trabalhos Freelancers</li>
	  	 	 <li>Contratar Freelancers</li>
	  	 </ul>
	  </div>
</section>

<section class="bg-blue pad-30">

	<div class="container align-center">
		
		<div class="total_f">
			<div class="total-item">
			    <h3>530.897</h3>  
			      <h4>Freelancers</h4>
		  </div>
		
			<div class="total-item">
					<h3>530.897</h3>  
					  <h4>Total de projetos publicados</h4>
		  </div>   
		  
		  <div class="total-item">
					<h3>530.897</h3>  
					  <h4>Usuários cadastrados</h4>
			</div>		  
		</div>

		<div class="total-btn">
			<a href="#" class="btn-2">Crie um projeto</a>
			<a href="#" class="btn-2">Trabalhe como um Freelancer</a>
		</div>

	
	</div>
</section>

<section class="bg-footer">
  <div class="container-footer">
			<div class="free-footer">
			  <h6>Doutor Site | Todos os direitos reservados © <?php $date = date('Y'); echo $date ?></h6>
		  </div>
		<div class="social">
			<ul>
				<li><a href="#" class="imagem-svg">
					<span class="icon-facebook"></span></a></li>
				<li><a href="#" class="imagem-svg">
					<span class="icon-twitter"></span></a></li>
				<li><a href="#" class="imagem-svg">
					<span class="icon-linkedin2"></span></a></li>
			</ul>
		</div>
	</div>
 </section>	
</footer> 

<script src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"> 
        
	      WebFont.load({
	      google: {
	        families: [
	          'Open+Sans+Condensed:300',
	          'Open+Sans:300,400,600',
	          'Roboto:700'
	      ]
	    }
	  });
   

</script>
<script src="<?php echo BASE_URL; ?>assets/js/app.js" type="text/javascript" async></script>
</body>
</html>