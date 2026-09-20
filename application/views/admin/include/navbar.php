
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?= base_url('index') ?>" class="navbar-brand">
        <span class="brand-text font-weight-light"> <b>Typing</b> Master</span>
      </a>
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">User</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?php echo base_url('admin/user') ?>" class="dropdown-item">Show User </a></li>

              <li class="dropdown-divider"></li>
            
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Test</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="<?php echo base_url('admin/test');?>" class="dropdown-item">Show Test </a></li>
              <li><a href="<?= base_url('admin/test/insert')?>" class="dropdown-item">Add Test  </a></li>

              <li class="dropdown-divider"></li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('compition-request')?>" class="nav-link">Compition</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('setting')?>" class="nav-link">Setting</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('message-show')?>" class="nav-link">Message</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('logout')?>" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <?php if($this->session->userdata('admin')){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link"  href="<?= base_url('logout')?>">
           <i class=" fa fa-sign-out" title="Logout" ></i> logout
          </a>
        </li>
        <?php } ?> 
       
      </ul>
    </div>
</nav>
