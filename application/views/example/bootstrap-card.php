<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Card</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Bootstrap Components</a>
        </div>
        <div class="breadcrumb-item">
          Card
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Cards</h2>
      <p class="section-lead">
        Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Card Title</h4>
            </div>
            <div class="card-body">
              This is some text within a card body.
            </div>
            <div class="card-footer">
              Footer Card
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Card Action Button</h4>
            </div>
            <div class="card-body">
              This is some text within a card body.
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Card Title</h4>
            </div>
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's content.
              </p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Footer <code>bg-whitesmoke</code></h4>
            </div>
            <div class="card-body">
              This is some text within a card body.
            </div>
            <div class="card-footer bg-whitesmoke">
              Footer Card
            </div>
          </div>
        </div>
      </div>

      <h2 class="section-title">Card Variants</h2>
      <p class="section-lead">
        Basically, the Bootstrap card can be given a color variant.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-primary</code>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-secondary">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-secondary</code>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-danger">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-danger</code>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-warning">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-warning</code>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-info">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-info</code>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-success">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-success</code>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-light">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-light</code>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-dark">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-dark</code>
              </p>
            </div>
          </div>
        </div>
      </div>

      <h2 class="section-title">Card Button &amp; Input</h2>
      <p class="section-lead">
        Also, you can give a button or input on the card header.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Card Header</h4>
              <div class="card-header-action">
                <a href="#" class="btn btn-primary">
                  View All
                </a>
              </div>
            </div>
            <div class="card-body">
              <p>
                Write something here
              </p>
            </div>
          </div>
          <div class="card card-primary">
            <div class="card-header">
              <h4>Button Group</h4>
              <div class="card-header-action">
                <div class="btn-group">
                  <a href="#" class="btn btn-primary">Home</a>
                  <a href="#" class="btn btn-primary">Profile</a>
                  <a href="#" class="btn btn-primary">Setting</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <p>
                Write something here
              </p>
            </div>
          </div>
          <div class="card card-success">
            <div class="card-header">
              <h4>Input Text</h4>
              <form class="card-header-form">
                <input type="text" name="search" class="form-control" placeholder="Search">
              </form>
            </div>
            <div class="card-body">
              <p>
                Write something here
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h4>Card Header</h4>
              <div class="card-header-action">
                <a href="#" class="btn btn-primary">View All</a>
                <a href="#" class="btn btn-danger">Delete All</a>
              </div>
            </div>
            <div class="card-body">
              <p>
                Write something here
              </p>
            </div>
          </div>
          <div class="card card-danger">
            <div class="card-header">
              <h4>Dropdown Button</h4>
              <div class="card-header-action">
                <a href="#" class="btn btn-primary">View All</a>
                <div class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                  <div class="dropdown-menu">
                    <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                    <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i> Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <p>
                Write something here
              </p>
            </div>
          </div>
          <div class="card card-warning">
            <div class="card-header">
              <h4>Input Button</h4>
              <form class="card-header-form">
                <div class="input-group">
                  <input type="text" name="search" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-primary btn-icon"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-body">
              <p>
                Write something here
              </p>
            </div>
          </div>
        </div>
      </div>

      <h2 class="section-title">Functionality Card</h2>
      <p class="section-lead">
        You can provide functionality on the card.
      </p>

      <div class="row">
        <div class="col-12 col-sm-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Show/Hide</h4>
              <div class="card-header-action">
                <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
              </div>
            </div>
            <div class="collapse show" id="mycard-collapse">
              <div class="card-body">
                You can show or hide this card.
              </div>
              <div class="card-footer">
                Card Footer
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>My Picture</h4>
              <div class="card-header-action">
                <a href="#" class="btn btn-primary">View All</a>
              </div>
            </div>
            <div class="card-body">
              <div class="mb-2 text-muted">
                Click the picture below to see the magic!
              </div>
              <div class="chocolat-parent">
                <a href="<?php echo base_url(); ?>assets/img/example-image.jpg" class="chocolat-image" title="Just an example">
                  <div data-crop-image="285">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/example-image.jpg" class="img-fluid">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-6">
          <div class="card" id="mycard-dimiss">
            <div class="card-header">
              <h4>Dismiss</h4>
              <div class="card-header-action">
                <a data-dismiss="#mycard-dimiss" class="btn btn-icon btn-danger" href="#"><i class="fas fa-times"></i></a>
              </div>
            </div>
            <div class="card-body">
              You can dimiss this card.
            </div>
            <div class="card-footer">
              Card Footer
            </div>
          </div>
          <div class="card" id="sample-login">
            <form>
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body pb-0">
                <p class="text-muted">
                  Click login to change the card to progress mode.
                </p>
                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-envelope"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Email">
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
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                  </div>
                </div>
              </div>
              <div class="card-footer pt-">
                <button type="submit" onclick="$.cardProgress('#sample-login', {dismiss: true,onDismiss: function() {alert('Dismissed :)')}});return false;" class="btn btn-primary">Login</button>
                <a href="#" class="ml-2">Create new Account?</a>
              </div>
            </form>
          </div>
        </div>
      </div>

      <h2 class="section-title">Sortable Card</h2>
      <p class="section-lead">
        Other cool cards, this one can be sorted.
      </p>

      <div class="row sortable-card">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-primary</code>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-secondary">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-secondary</code>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-danger">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-danger</code>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card card-warning">
            <div class="card-header">
              <h4>Card Header</h4>
            </div>
            <div class="card-body">
              <p>
                Card <code>.card-warning</code>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>