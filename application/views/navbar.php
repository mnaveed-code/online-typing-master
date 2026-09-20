
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="#" class="navbar-brand">
        <span class="brand-text font-weight-light"> <b>Typing</b> Master</span>
      </a>
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav">
          <?php if($this->session->userdata('user')) { ?>
          <li class="nav-item">
            <a href="<?php echo base_url('user/profile') ?>" class="nav-link">Profile</a>
          </li>
          <?php } ?>

          <li class="nav-item">
            <a href="<?= base_url('user/practise')?>" class="nav-link">Practise</a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('user/test')?>" class="nav-link">Test</a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/compition')?>" class="nav-link">Compition</a>
          </li>
          <?php if($this->session->userdata('user')){ ?>
          <li class="nav-item">
            <a href="<?= base_url('test/result_show')?>" class="nav-link">Result</a>
          </li> 
          <?php }?>
        </ul>
      </div>    
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
       
        <?php if($this->session->userdata('user')){ ?>
        <li class="nav-item dropdown">
          <a class="nav-link"  href="<?= base_url('logout-user')?>"> logout </a>
        </li>
        <?php } ?> 
        </li>
      </ul>
    </div>
</nav>
