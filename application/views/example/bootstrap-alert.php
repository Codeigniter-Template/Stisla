<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Alert</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Bootstrap Components</a>
        </div>
        <div class="breadcrumb-item">
          Alert
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Alerts</h2>
      <p class="section-lead">
        Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Default</h4>
            </div>
            <div class="card-body">
              <div class="alert alert-primary">
                This is a primary alert.
              </div>
              <div class="alert alert-secondary">
                This is a secondary alert.
              </div>
              <div class="alert alert-success">
                This is a success alert.
              </div>
              <div class="alert alert-danger">
                This is a danger alert.
              </div>
              <div class="alert alert-warning">
                This is a warning alert.
              </div>
              <div class="alert alert-info">
                This is a info alert.
              </div>
              <div class="alert alert-light">
                This is a light alert.
              </div>
              <div class="alert alert-dark">
                This is a dark alert.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Icon</h4>
            </div>
            <div class="card-body">
              <div class="alert alert-primary alert-has-icon">
                <div class="alert-icon">
                  <i class="far fa-lightbulb"></i>
                </div>
                <div class="alert-body">
                  <div class="alert-title">
                    Primary
                  </div>
                  This is a primary alert.
                </div>
              </div>
              <div class="alert alert-secondary alert-has-icon">
                <div class="alert-icon">
                  <i class="far fa-lightbulb"></i>
                </div>
                <div class="alert-body">
                  <div class="alert-title">
                    Secondary
                  </div>
                  This is a secondary alert.
                </div>
              </div>
              <div class="alert alert-success alert-has-icon">
                <div class="alert-icon">
                  <i class="far fa-lightbulb"></i>
                </div>
                <div class="alert-body">
                  <div class="alert-title">
                    Success
                  </div>
                  This is a success alert.
                </div>
              </div>
              <div class="alert alert-danger alert-has-icon">
                <div class="alert-icon">
                  <i class="far fa-lightbulb"></i>
                </div>
                <div class="alert-body">
                  <div class="alert-title">
                    Danger
                  </div>
                  This is a danger alert.
                </div>
              </div>
              <div class="alert alert-warning alert-has-icon">
                <div class="alert-icon">
                  <i class="far fa-lightbulb"></i>
                </div>
                <div class="alert-body">
                  <div class="alert-title">
                    Warning
                  </div>
                  This is a warning alert.
                </div>
              </div>
              <div class="alert alert-info alert-has-icon">
                <div class="alert-icon">
                  <i class="far fa-lightbulb"></i>
                </div>
                <div class="alert-body">
                  <div class="alert-title">
                    Info
                  </div>
                  This is a info alert.
                </div>
              </div>
              <div class="alert alert-light alert-has-icon">
                <div class="alert-icon">
                  <i class="far fa-lightbulb"></i>
                </div>
                <div class="alert-body">
                  <div class="alert-title">
                    Light
                  </div>
                  This is a light alert.
                </div>
              </div>
              <div class="alert alert-dark alert-has-icon">
                <div class="alert-icon">
                  <i class="far fa-lightbulb"></i>
                </div>
                <div class="alert-body">
                  <div class="alert-title">
                    Dark
                  </div>
                  This is a dark alert.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Title</h4>
            </div>
            <div class="card-body">
              <div class="alert alert-primary">
                <div class="alert-title">
                  Primary
                </div>
                This is a primary alert.
              </div>
              <div class="alert alert-secondary">
                <div class="alert-title">
                  Secondary
                </div>
                This is a secondary alert.
              </div>
              <div class="alert alert-success">
                <div class="alert-title">
                  Success
                </div>
                This is a success alert.
              </div>
              <div class="alert alert-danger">
                <div class="alert-title">
                  Danger
                </div>
                This is a danger alert.
              </div>
              <div class="alert alert-warning">
                <div class="alert-title">
                  Warning
                </div>
                This is a warning alert.
              </div>
              <div class="alert alert-info">
                <div class="alert-title">
                  Info
                </div>
                This is a info alert.
              </div>
              <div class="alert alert-light">
                <div class="alert-title">
                  Light
                </div>
                This is a light alert.
              </div>
              <div class="alert alert-dark">
                <div class="alert-title">
                  Dark
                </div>
                This is a dark alert.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Dismissable</h4>
            </div>
            <div class="card-body">
              <div class="alert alert-primary alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  This is a primary alert.
                </div>
              </div>
              <div class="alert alert-secondary alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  This is a secondary alert.
                </div>
              </div>
              <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  This is a success alert.
                </div>
              </div>
              <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  This is a danger alert.
                </div>
              </div>
              <div class="alert alert-warning alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  This is a warning alert.
                </div>
              </div>
              <div class="alert alert-info alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  This is a info alert.
                </div>
              </div>
              <div class="alert alert-light alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  This is a light alert.
                </div>
              </div>
              <div class="alert alert-dark alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  This is a dark alert.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>