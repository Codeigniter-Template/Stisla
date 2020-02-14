<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Avatar</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Components</a>
        </div>
        <div class="breadcrumb-item">
          Avatar
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Avatar</h2>
      <p class="section-lead">
        Avatars are user profile pictures. Thanks to <a href="https://picturepan2.github.io/spectre/components/avatars.html">Spectre.css</a>.
      </p>

      <div class="row">
        <div class="col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-header">
              <h4>Avatar</h4>
            </div>
            <div class="card-body">
              <figure class="avatar mr-2 avatar-xl">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" alt="...">
              </figure>
              <figure class="avatar mr-2 avatar-lg">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-2.png" alt="...">
              </figure>
              <figure class="avatar mr-2">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-5.png" alt="...">
              </figure>
              <figure class="avatar mr-2 avatar-sm">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-3.png" alt="...">
              </figure>
              <figure class="avatar mr-2 avatar-xs">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-4.png" alt="...">
              </figure>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-header">
              <h4>Avatar Icon</h4>
            </div>
            <div class="card-body">
              <figure class="avatar mr-2 avatar-xl">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" alt="...">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-5.png" class="avatar-icon" alt="...">
              </figure>
              <figure class="avatar mr-2 avatar-lg">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-2.png" alt="...">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-4.png" class="avatar-icon" alt="...">
              </figure>
              <figure class="avatar mr-2">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-3.png" alt="...">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-3.png" class="avatar-icon" alt="...">
              </figure>
              <figure class="avatar mr-2 avatar-sm">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-4.png" alt="...">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-2.png" class="avatar-icon" alt="...">
              </figure>
              <figure class="avatar mr-2 avatar-xs">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-5.png" alt="...">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="avatar-icon" alt="...">
              </figure>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-header">
              <h4>Avatar Presence</h4>
            </div>
            <div class="card-body">
              <figure class="avatar mr-2 avatar-xl">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" alt="...">
                <i class="avatar-presence online"></i>
              </figure>
              <figure class="avatar mr-2 avatar-lg">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-2.png" alt="...">
                <i class="avatar-presence busy"></i>
              </figure>
              <figure class="avatar mr-2">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-3.png" alt="...">
                <i class="avatar-presence away"></i>
              </figure>
              <figure class="avatar mr-2 avatar-sm">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-4.png" alt="...">
                <i class="avatar-presence offline"></i>
              </figure>
              <figure class="avatar mr-2 avatar-xs">
                <img src="<?php echo base_url(); ?>assets/img/avatar/avatar-5.png" alt="...">
                <i class="avatar-presence online"></i>
              </figure>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-header">
              <h4>Avatar Initial</h4>
            </div>
            <div class="card-body">
              <figure class="avatar mr-2 avatar-xl" data-initial="UM"></figure>
              <figure class="avatar mr-2 avatar-lg bg-danger text-white" data-initial="UM"></figure>
              <figure class="avatar mr-2 bg-warning text-white" data-initial="UM"></figure>
              <figure class="avatar mr-2 avatar-sm bg-success text-white" data-initial="UM"></figure>
              <figure class="avatar mr-2 avatar-xs bg-info text-white" data-initial="UM"></figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>