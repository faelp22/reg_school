<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Reg_School</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li class="active"><a href="<?php echo $link_projeto;?>">Inicio</a></li>
      	<li><a href="<?php echo $link_projeto;?>">Serviços</a></li>
      	<li><a href="<?php echo $link_projeto;?>">Projetos</a></li>
      	<li><a href="<?php echo $link_projeto;?>">Quem somos</a></li>
      	<li><a href="<?php echo $link_projeto;?>">Contato</a></li>
       </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquisar">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="?option=login">Logar</a></li>
            <li><a href="?option=cad">Cadastra-se</a></li>
            <li class="divider"></li>
            <li><a href="?option=logout">Sair</a></li>
          </ul>
  		</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
