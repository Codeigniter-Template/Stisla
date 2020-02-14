<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Advanced Route</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Google Maps</a>
        </div>
        <div class="breadcrumb-item">
          Advanced Route
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Advanced Route</h2>
      <p class="section-lead">
        The same as the 'route' example, but in this example it will be a bit cooler. Click the 'Start Travel' button to start seeing magic.
      </p>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Advanced Routes</h4>
            </div>
            <div class="card-body">
              <div id="map" data-height="300"></div>
              <div class="text-center mt-4">
                <a href="javascript:;" class="btn btn-primary btn-icon icon-left" id="start-travel">
                  <i class="fas fa-play"></i>  Start Travel
                </a>
              </div>
              <div class="mt-4">
                <ul id="instructions" class="list-unstyled list-unstyled-border"></ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>