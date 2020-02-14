<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Modal</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Bootstrap Components</a>
        </div>
        <div class="breadcrumb-item">
          Modal
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Modal</h2>
      <p class="section-lead">
        Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="modal-dialog m-0" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal Template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>
                  Modal body text goes here.
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
          <div class="card card-mt">
            <div class="card-header">
              <h4>Modal Confirm</h4>
            </div>
            <div class="card-body">
              <p class="mb-2">
                You can easily change the default browser confirmation box with a bootstrap modal.
              </p>
              <button class="btn btn-danger" data-confirm="Realy?|Do you want to continue?" data-confirm-yes="alert('Deleted :)');">Delete</button>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>The Bootstrap Way</h4>
            </div>
            <div class="card-body">
              <p class="mb-2">
                Use the Bootstrap method to create modal. You need to create an HTML structure for modal and the following button will trigger it.
              </p>
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Aw, yeah!</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Modal Demo</h4>
            </div>
            <div class="card-body">
              <p class="mb-2">
                We've created a plugin to easily create a bootstrap modal.
              </p>
              <button class="btn btn-primary" id="modal-1">Launch Modal</button>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Modal Center</h4>
            </div>
            <div class="card-body">
              <p class="mb-2">
                You can change the modal position to center.
              </p>
              <button class="btn btn-primary" id="modal-2">Launch Modal</button>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>The Others</h4>
            </div>
            <div class="card-body">
              <p class="mb-2">
                Check the <code>modal.js</code> code in the <code>dist/js/page</code> folder to get the source code.
              </p>
              <div class="buttons">
                <button class="btn btn-primary" id="modal-3">Buttons</button>
                <button class="btn btn-primary" id="modal-4">Footer Background</button>
                <button class="btn btn-primary" id="modal-5">Login</button>
                <button class="btn btn-primary" id="modal-6">Something in the Footer</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <form class="modal-part" id="modal-login-part">
    <p>
      This login form is taken from elements with <code>#modal-login-part</code> id.
    </p>
    <div class="form-group">
      <label>Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-envelope"></i>
          </div>
        </div>
        <input type="text" class="form-control" placeholder="Email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label>Password</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-lock"></i>
          </div>
        </div>
        <input type="password" class="form-control" placeholder="Password" name="password">
      </div>
    </div>
    <div class="form-group mb-0">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
        <label class="custom-control-label" for="remember-me">Remember Me</label>
      </div>
    </div>
  </form>

  <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Modal body text goes here.
          </p>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('_layout/footer'); ?>