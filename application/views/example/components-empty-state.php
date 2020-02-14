<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Empty State</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Components</a>
        </div>
        <div class="breadcrumb-item">
          Empty State
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Empty States</h2>
      <p class="section-lead">
        Empty state are generally used when there is no data or content.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Empty Data</h4>
            </div>
            <div class="card-body">
              <div class="empty-state" data-height="400">
                <div class="empty-state-icon">
                  <i class="fas fa-question"></i>
                </div>
                <h2>We couldn't find any data</h2>
                <p class="lead">
                  Sorry we can't find any data, to get rid of this message, make at least 1 entry.
                </p>
                <a href="#" class="btn btn-primary mt-4">Create new One</a>
                <a href="#" class="mt-4 bb">Need Help?</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Request Failed</h4>
            </div>
            <div class="card-body">
              <div class="empty-state" data-height="400">
                <div class="empty-state-icon bg-danger">
                  <i class="fas fa-times"></i>
                </div>
                <h2>HTTP Request Failed</h2>
                <p class="lead">
                  We tried it, but failed when requesting data to the server, sorry. (Code: <a href="#" class="bb">14045</a>)
                </p>
                <a href="#" class="btn btn-warning mt-4">Try Again</a>
                <a href="#" class="mt-4 bb">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>