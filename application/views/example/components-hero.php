<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Hero</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Components</a>
        </div>
        <div class="breadcrumb-item">
          Hero
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Hero</h2>
      <p class="section-lead">
        Components that can be used to make something bigger than the header.
      </p>

      <div class="row">
        <div class="col-12 mb-4">
          <div class="hero bg-primary text-white">
            <div class="hero-inner">
              <h2>Welcome Back, Ujang!</h2>
              <p class="lead">
                This page is a place to manage posts, categories and more.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 mb-4">
          <div class="hero bg-primary text-white">
            <div class="hero-inner">
              <h2>Welcome, Ujang!</h2>
              <p class="lead">
                You almost arrived, complete the information about your account to complete registration.
              </p>
              <div class="mt-4">
                <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mb-4">
          <div class="hero align-items-center bg-success text-white">
            <div class="hero-inner text-center">
              <h2>Congratulations</h2>
              <p class="lead">
                You have successfully registered with our system. Next, you can log in to the dashboard with your account.
              </p>
              <div class="mt-4">
                <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-sign-in-alt"></i> Login</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mb-4">
          <div class="hero text-white hero-bg-image hero-bg-parallax" style="background-image: url('<?php echo base_url(); ?>assets/img/unsplash/andre-benz-1214056-unsplash.jpg');">
            <div class="hero-inner">
              <h2>Welcome, Ujang!</h2>
              <p class="lead">
                You almost arrived, complete the information about your account to complete registration.
              </p>
              <div class="mt-4">
                <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mb-4">
          <div class="hero text-white hero-bg-image" style="background-image: url('<?php echo base_url(); ?>assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash.jpg');">
            <div class="hero-inner">
              <h2>Welcome, Ujang!</h2>
              <p class="lead">
                You almost arrived, complete the information about your account to complete registration.
              </p>
              <div class="mt-4">
                <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup Account</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>