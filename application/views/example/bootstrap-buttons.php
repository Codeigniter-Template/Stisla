<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Buttons</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Bootstrap Components</a>
        </div>
        <div class="breadcrumb-item">
          Button
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Buttons</h2>
      <p class="section-lead">
        Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Basic</h4>
            </div>
            <div class="card-body">
              <p class="text-muted">
                Use the <code>.btn .btn-{color}</code> classes.
              </p>
              <div class="buttons">
                <a href="#" class="btn btn-primary">Primary</a>
                <a href="#" class="btn btn-secondary">Secondary</a>
                <a href="#" class="btn btn-info">Info</a>
                <a href="#" class="btn btn-warning">Warning</a>
                <a href="#" class="btn btn-danger">Danger</a>
                <a href="#" class="btn btn-success">Success</a>
                <a href="#" class="btn btn-light">Light</a>
                <a href="#" class="btn btn-dark">Dark</a>
                <a href="#" class="btn">Link</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Buttons <code>.btn-outline</code></h4>
            </div>
            <div class="card-body">
              <p class="text-muted">
                Use the <code>.btn .btn-outline-{color}</code> classes.
              </p>
              <div class="buttons">
                <a href="#" class="btn btn-outline-primary">Primary</a>
                <a href="#" class="btn btn-outline-secondary">Secondary</a>
                <a href="#" class="btn btn-outline-info">Info</a>
                <a href="#" class="btn btn-outline-warning">Warning</a>
                <a href="#" class="btn btn-outline-danger">Danger</a>
                <a href="#" class="btn btn-outline-success">Success</a>
                <a href="#" class="btn btn-outline-light">Light</a>
                <a href="#" class="btn btn-outline-dark">Dark</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Button Sizes</h4>
            </div>
            <div class="card-body">
              <p class="text-muted">
                Use the <code>.btn-lg</code> or <code>.btn-sm</code> classes.
              </p>
              <div class="buttons">
                <a href="#" class="btn btn-sm btn-warning">Small</a>
                <a href="#" class="btn btn-danger">Normal</a>
                <a href="#" class="btn btn-lg btn-dark">Large</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Button States</h4>
            </div>
            <div class="card-body">
              <p class="text-muted">
                Use the <code>.disabled</code> or <code>.btn-progress</code> classes.
              </p>
              <div class="buttons">
                <a href="#" class="btn btn-primary">Normal</a>
                <a href="#" class="btn disabled btn-primary">Disabled</a>
                <a href="#" class="btn disabled btn-primary btn-progress">Progress</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Icon Button</h4>
            </div>
            <div class="card-body">
              <p class="text-muted">
                Use the <code>.btn-icon</code> and <code>.icon-left</code> classes.
              </p>
              <div class="buttons">
                <a href="#" class="btn btn-icon icon-left"><i class="far fa-user"></i> Default</a>
                <a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Primary</a>
                <a href="#" class="btn btn-icon icon-left btn-secondary"><i class="far fa-user"></i> Secondary</a>
                <a href="#" class="btn btn-icon icon-left btn-info"><i class="fas fa-info-circle"></i> Info</a>
                <a href="#" class="btn btn-icon icon-left btn-warning"><i class="fas fa-exclamation-triangle"></i> Warning</a>
                <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Danger</a>
                <a href="#" class="btn btn-icon icon-left btn-success"><i class="fas fa-check"></i> Success</a>
                <a href="#" class="btn btn-icon icon-left btn-light"><i class="fas fa-star"></i> Light</a>
                <a href="#" class="btn btn-icon icon-left btn-dark"><i class="far fa-file"></i> Dark</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Only Icon Button</h4>
            </div>
            <div class="card-body">
              <p class="text-muted">
                Use the <code>.btn-icon</code> class.
              </p>
              <div class="buttons">
                <a href="#" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
                <a href="#" class="btn btn-icon btn-secondary"><i class="far fa-user"></i></a>
                <a href="#" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                <a href="#" class="btn btn-icon btn-warning"><i class="fas fa-exclamation-triangle"></i></a>
                <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                <a href="#" class="btn btn-icon btn-success"><i class="fas fa-check"></i></a>
                <a href="#" class="btn btn-icon btn-light"><i class="fas fa-star"></i></a>
                <a href="#" class="btn btn-icon btn-dark"><i class="far fa-file"></i></a>
              </div>
              <p class="text-muted mt-2">
                Sizes.
              </p>
              <div class="buttons">
                <a href="#" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-exclamation-triangle"></i></a>
                <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                <a href="#" class="btn btn-icon btn-lg btn-success"><i class="fas fa-check"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Button Group</h4>
            </div>
            <div class="card-body">
              <div class="btn-group mb-3" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
              </div>
              <div class="btn-group mb-3" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-danger">Left</button>
                <button type="button" class="btn btn-warning">Middle</button>
                <button type="button" class="btn btn-success">Right</button>
              </div>
              <div class="btn-group mb-3 btn-group-sm" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
              </div>
              <div class="clearfix"></div>
              <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-danger">Left</button>
                <button type="button" class="btn btn-danger">Middle</button>
                <button type="button" class="btn btn-danger">Right</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Vertical Variation</h4>
            </div>
            <div class="card-body">
              <div class="btn-group-vertical" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
                <button type="button" class="btn btn-secondary">Justify</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>