<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Toastr</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Modules</a>
        </div>
        <div class="breadcrumb-item">
          Toastr
        </div>
      </div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Toastr</h2>
      <p class="section-lead">
        We use 'iziToast' made by @Dolce. You can check the full documentation <a href="http://izitoast.marcelodolce.com/">here</a>.
      </p>
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-2">
                Info Message
              </div>
              <button class="btn btn-primary" id="toastr-1">Launch</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-2">
                Success Message
              </div>
              <button class="btn btn-primary" id="toastr-2">Launch</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-2">
                Warning Message
              </div>
              <button class="btn btn-primary" id="toastr-3">Launch</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-2">
                Error Message
              </div>
              <button class="btn btn-primary" id="toastr-4">Launch</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-2">
                Toastr Right Bottom
              </div>
              <button class="btn btn-primary" id="toastr-5">Launch</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-2">
                Toastr Center Bottom
              </div>
              <button class="btn btn-primary" id="toastr-6">Launch</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-2">
                Toastr Left Bottom
              </div>
              <button class="btn btn-primary" id="toastr-7">Launch</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="mb-2">
                Toastr Top Center
              </div>
              <button class="btn btn-primary" id="toastr-8">Launch</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>