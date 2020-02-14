<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Badge</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Bootstrap Components</a>
        </div>
        <div class="breadcrumb-item">
          Badge
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Badges</h2>
      <p class="section-lead">
        Examples for badges, our small count and labeling component.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Heading</h4>
            </div>
            <div class="card-body">
              <h1>Heading 1 <span class="badge badge-secondary">New</span></h1>
              <h2>Heading 2 <span class="badge badge-secondary">New</span></h2>
              <h3>Heading 3 <span class="badge badge-secondary">New</span></h3>
              <h4>Heading 4 <span class="badge badge-secondary">New</span></h4>
              <h5>Heading 5 <span class="badge badge-secondary">New</span></h5>
              <h6>Heading 6 <span class="badge badge-secondary">New</span></h6>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Variation</h4>
            </div>
            <div class="card-body">
              <div class="badges">
                <span class="badge badge-primary">Primary</span>
                <span class="badge badge-secondary">Secondary</span>
                <span class="badge badge-success">Success</span>
                <span class="badge badge-danger">Danger</span>
                <span class="badge badge-warning">Warning</span>
                <span class="badge badge-info">Info</span>
                <span class="badge badge-light">Light</span>
                <span class="badge badge-dark">Dark</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Button</h4>
            </div>
            <div class="card-body">
              <div class="buttons">
                <div class="section-title mt-0">
                  Simple
                </div>
                <button type="button" class="btn btn-primary">
                  Notifications <span class="badge badge-transparent">4</span>
                </button>
                <button type="button" class="btn btn-danger">
                  Notifications <span class="badge badge-transparent">4</span>
                </button>
                <button type="button" class="btn btn-warning">
                  Notifications <span class="badge badge-transparent">4</span>
                </button>
                <button type="button" class="btn btn-success">
                  Notifications <span class="badge badge-transparent">4</span>
                </button>
                <button type="button" class="btn btn-dark">
                  Notifications <span class="badge badge-transparent">4</span>
                </button>
                <div class="section-title">
                  Icons
                </div>
                <button type="button" class="btn btn-primary btn-icon icon-left">
                  <i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span>
                </button>
                <button type="button" class="btn btn-danger btn-icon icon-left">
                  <i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span>
                </button>
                <button type="button" class="btn btn-warning btn-icon icon-left">
                  <i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span>
                </button>
                <button type="button" class="btn btn-success btn-icon icon-left">
                  <i class="fas fa-plane"></i> Notifications <span class="badge badge-transparent">4</span>
                </button>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Link</h4>
            </div>
            <div class="card-body">
              <div class="badges">
                <a href="#" class="badge badge-primary">Primary</a>
                <a href="#" class="badge badge-secondary">Secondary</a>
                <a href="#" class="badge badge-success">Success</a>
                <a href="#" class="badge badge-danger">Danger</a>
                <a href="#" class="badge badge-warning">Warning</a>
                <a href="#" class="badge badge-info">Info</a>
                <a href="#" class="badge badge-light">Light</a>
                <a href="#" class="badge badge-dark">Dark</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>