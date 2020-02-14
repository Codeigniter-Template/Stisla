<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Wizard</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Components</a>
        </div>
        <div class="breadcrumb-item">
          Wizard
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Wizard</h2>
      <p class="section-lead">
        The wizard is a component to simplify a process with a step-by-step method.
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Order Status</h4>
            </div>
            <div class="card-body">
              <div class="row mt-4">
                <div class="col-12 col-lg-8 offset-lg-2">
                  <div class="wizard-steps">
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-tshirt"></i>
                      </div>
                      <div class="wizard-step-label">
                        Order Placed
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-credit-card"></i>
                      </div>
                      <div class="wizard-step-label">
                        Payment Completed
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-shipping-fast"></i>
                      </div>
                      <div class="wizard-step-label">
                        Product Shipped
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-success">
                      <div class="wizard-step-icon">
                        <i class="fas fa-check"></i>
                      </div>
                      <div class="wizard-step-label">
                        Order Completed
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-12 col-lg-8 offset-lg-2">
                  <div class="wizard-steps">
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-tshirt"></i>
                      </div>
                      <div class="wizard-step-label">
                        Order Placed
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-credit-card"></i>
                      </div>
                      <div class="wizard-step-label">
                        Payment Completed
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-shipping-fast"></i>
                      </div>
                      <div class="wizard-step-label">
                        Product Shipped
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-danger">
                      <div class="wizard-step-icon">
                        <i class="fas fa-times"></i>
                      </div>
                      <div class="wizard-step-label">
                        Order Canceled
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-12 col-lg-8 offset-lg-2">
                  <div class="wizard-steps">
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-tshirt"></i>
                      </div>
                      <div class="wizard-step-label">
                        Order Placed
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-credit-card"></i>
                      </div>
                      <div class="wizard-step-label">
                        Payment Completed
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-shipping-fast"></i>
                      </div>
                      <div class="wizard-step-label">
                        Product Shipped
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-warning">
                      <div class="wizard-step-icon">
                        <i class="fas fa-stopwatch"></i>
                      </div>
                      <div class="wizard-step-label">
                        Order Pending
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-12 col-lg-8 offset-lg-2">
                  <div class="wizard-steps">
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-tshirt"></i>
                      </div>
                      <div class="wizard-step-label">
                        Order Placed
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-credit-card"></i>
                      </div>
                      <div class="wizard-step-label">
                        Payment Completed
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="fas fa-shipping-fast"></i>
                      </div>
                      <div class="wizard-step-label">
                        Product Shipped
                      </div>
                    </div>
                    <div class="wizard-step wizard-step-info">
                      <div class="wizard-step-icon">
                        <i class="fas fa-info"></i>
                      </div>
                      <div class="wizard-step-label">
                        Order Completed
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Create New App</h4>
            </div>
            <div class="card-body">
              <div class="row mt-4">
                <div class="col-12 col-lg-8 offset-lg-2">
                  <div class="wizard-steps">
                    <div class="wizard-step wizard-step-active">
                      <div class="wizard-step-icon">
                        <i class="far fa-user"></i>
                      </div>
                      <div class="wizard-step-label">
                        User Account
                      </div>
                    </div>
                    <div class="wizard-step">
                      <div class="wizard-step-icon">
                        <i class="fas fa-box-open"></i>
                      </div>
                      <div class="wizard-step-label">
                        Create an App
                      </div>
                    </div>
                    <div class="wizard-step">
                      <div class="wizard-step-icon">
                        <i class="fas fa-server"></i>
                      </div>
                      <div class="wizard-step-label">
                        Server Information
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <form class="wizard-content mt-2">
                <div class="wizard-pane">
                  <div class="form-group row align-items-center">
                    <label class="col-md-4 text-md-right text-left">Name</label>
                    <div class="col-lg-4 col-md-6">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row align-items-center">
                    <label class="col-md-4 text-md-right text-left">Email</label>
                    <div class="col-lg-4 col-md-6">
                      <input type="email" name="email" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-4 text-md-right text-left mt-2">Address</label>
                    <div class="col-lg-4 col-md-6">
                      <textarea class="form-control" name="address"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-4 text-md-right text-left mt-2">Role</label>
                    <div class="col-lg-4 col-md-6">
                      <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                          <input type="radio" name="value" value="developer" class="selectgroup-input">
                          <span class="selectgroup-button">Developer</span>
                        </label>
                        <label class="selectgroup-item">
                          <input type="radio" name="value" value="ceo" class="selectgroup-input">
                          <span class="selectgroup-button">CEO</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-4"></div>
                    <div class="col-lg-4 col-md-6">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                        <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-4"></div>
                    <div class="col-lg-4 col-md-6 text-right">
                      <a href="#" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>