<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner"  style="-webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0; ">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"><!-- Info will appear here --></span>
            <span class="icon-bar"><!-- Info will appear here --></span>
            <span class="icon-bar"><!-- Info will appear here --></span>
          </a>
          <a class="brand" href="<?php echo $this->make_route('/') ?>">Deer CRM</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo $this->make_route('/') ?>"><!-- Info will appear here --></i>Home</a></li>
              <?php if (User::current_user()) { ?>
              <li class="divider-vertical"><!-- Info will appear here --></li>
              <li><a href="<?php echo $this->make_route('/user/' . User::current_user()) ?>">Our Clients</a></li> 
              <li class="divider-vertical"><!-- Info will appear here --></li>  
              <li><a href="<?php echo $this->make_route('/create/' . User::current_user()) ?>">Create New Client</a></li> 
              <li class="divider-vertical"><!-- Info will appear here --></li>  
              </ul>
              <div class="pull-right">
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"><!-- Info will appear here --></b></a>
                        <ul class="dropdown-menu">
                        	<li><a href="<?php echo $this->make_route('/user/' . User::current_user()) ?>"><!-- Info will appear here --></i> Our Clients</a></li> 
                            <li class="divider"><!-- Info will appear here --></li>
                            <li><a href="<?php echo $this->make_route('/create/' . User::current_user()) ?>"><!-- Info will appear here --></i> Create New Client</a></li> 
                            <li class="divider"><!-- Info will appear here --></li>
                            <li><a href="<?php echo $this->make_route('/logout') ?>"><!-- Info will appear here --></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
              </div>           
              <?php } else { ?>
              <li class="divider-vertical"><!-- Info will appear here --></li>
              <li><a href="<?php echo $this->make_route('/signup') ?>">Signup</a></li>
              <li class="divider-vertical"><!-- Info will appear here --></li>
              <li><a href="<?php echo $this->make_route('/login') ?>">Login</a></li>
              <?php } ?>
          </div>
        </div>
      </div>