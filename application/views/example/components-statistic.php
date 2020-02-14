<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Statistic</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Components</a>
        </div>
        <div class="breadcrumb-item">
          Statistic
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Statistics</h2>
      <p class="section-lead">
        The chat component and is equipped with a JavaScript API, making it easy for you to integrate with Back-end.
      </p>

      <div class="row">
        <div class="col-12 col-sm-12 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Summary</h4>
              <div class="card-header-action">
                <a href="#summary-chart" data-tab="summary-tab" class="btn active">Chart</a>
                <a href="#summary-text" data-tab="summary-tab" class="btn">Text</a>
              </div>
            </div>
            <div class="card-body">
              <div class="summary">
                <div class="summary-info" data-tab-group="summary-tab" id="summary-text">
                  <h4>$1,858</h4>
                  <div class="text-muted">
                    Sold 4 items on 2 customers
                  </div>
                  <div class="d-block mt-2">
                    <a href="#">View All</a>
                  </div>
                </div>
                <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart">
                  <canvas id="myChart" height="180"></canvas>
                </div>
                <div class="summary-item">
                  <h6 class="mt-3">Item List <span class="text-muted">(4 Items)</span></h6>
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <a href="#">
                        <img alt="image" class="mr-3 rounded" width="50" src="<?php echo base_url(); ?>assets/img/products/product-4-50.png">
                      </a>
                      <div class="media-body">
                        <div class="media-right">
                          $805
                        </div>
                        <div class="media-title">
                          <a href="#">iBook Noob</a>
                        </div>
                        <div class="text-small text-muted">
                          by <a href="#">Ahmad Sutisna</a> <div class="bullet"></div>
                          Sunday
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <a href="#">
                        <img alt="image" class="mr-3 rounded" width="50" src="<?php echo base_url(); ?>assets/img/products/product-1-50.png">
                      </a>
                      <div class="media-body">
                        <div class="media-right">
                          $405
                        </div>
                        <div class="media-title">
                          <a href="#">Headphone Blitz</a>
                        </div>
                        <div class="text-small text-muted">
                          by <a href="#">Hasan Basri</a> <div class="bullet"></div>
                          Sunday
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <a href="#">
                        <img alt="image" class="mr-3 rounded" width="50" src="<?php echo base_url(); ?>assets/img/products/product-2-50.png">
                      </a>
                      <div class="media-body">
                        <div class="media-right">
                          $499
                        </div>
                        <div class="media-title">
                          <a href="#">RocketZ</a>
                        </div>
                        <div class="text-muted text-small">
                          by <a href="#">Hasan Basri</a> <div class="bullet"></div>
                          Sunday
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <a href="#">
                        <img alt="image" class="mr-3 rounded" width="50" src="<?php echo base_url(); ?>assets/img/products/product-3-50.png">
                      </a>
                      <div class="media-body">
                        <div class="media-right">
                          $149
                        </div>
                        <div class="media-title">
                          <a href="#">Xiaomay Readme 4.0</a>
                        </div>
                        <div class="text-small text-muted">
                          by <a href="#">Kusnaedi</a> <div class="bullet"></div>
                          Tuesday
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Statistics</h4>
              <div class="card-header-action">
                <a href="#" class="btn active">Week</a>
                <a href="#" class="btn">Month</a>
                <a href="#" class="btn">Year</a>
              </div>
            </div>
            <div class="card-body">
              <canvas id="myChart2" height="180"></canvas>
              <div class="statistic-details mt-1">
                <div class="statistic-details-item">
                  <div class="text-small text-muted">
                    <span class="text-primary"><i class="fas fa-caret-up"></i></span> 7%
                  </div>
                  <div class="detail-value">
                    $243
                  </div>
                  <div class="detail-name">
                    Today
                  </div>
                </div>
                <div class="statistic-details-item">
                  <div class="text-small text-muted">
                    <span class="text-danger"><i class="fas fa-caret-down"></i></span> 23%
                  </div>
                  <div class="detail-value">
                    $2,902
                  </div>
                  <div class="detail-name">
                    This Week
                  </div>
                </div>
                <div class="statistic-details-item">
                  <div class="text-small text-muted">
                    <span class="text-primary"><i class="fas fa-caret-up"></i></span>9%
                  </div>
                  <div class="detail-value">
                    $12,821
                  </div>
                  <div class="detail-name">
                    This Month
                  </div>
                </div>
                <div class="statistic-details-item">
                  <div class="text-small text-muted">
                    <span class="text-primary"><i class="fas fa-caret-up"></i></span> 19%
                  </div>
                  <div class="detail-value">
                    $92,142
                  </div>
                  <div class="detail-name">
                    This Year
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card mt-4">
            <div class="card-header">
              <h4>Popular Browser</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col mb-4 mb-lg-0 text-center">
                  <div class="browser browser-chrome"></div>
                  <div class="mt-2 font-weight-bold">
                    Chrome
                  </div>
                  <div class="text-small text-muted">
                    <span class="text-primary"><i class="fas fa-caret-up"></i></span> 48%
                  </div>
                </div>
                <div class="col mb-4 mb-lg-0 text-center">
                  <div class="browser browser-firefox"></div>
                  <div class="mt-2 font-weight-bold">
                    Firefox
                  </div>
                  <div class="text-small text-muted">
                    <span class="text-primary"><i class="fas fa-caret-up"></i></span> 26%
                  </div>
                </div>
                <div class="col mb-4 mb-lg-0 text-center">
                  <div class="browser browser-safari"></div>
                  <div class="mt-2 font-weight-bold">
                    Safari
                  </div>
                  <div class="text-small text-muted">
                    <span class="text-danger"><i class="fas fa-caret-down"></i></span> 14%
                  </div>
                </div>
                <div class="col mb-4 mb-lg-0 text-center">
                  <div class="browser browser-opera"></div>
                  <div class="mt-2 font-weight-bold">
                    Opera
                  </div>
                  <div class="text-small text-muted">
                    7%
                  </div>
                </div>
                <div class="col mb-4 mb-lg-0 text-center">
                  <div class="browser browser-internet-explorer"></div>
                  <div class="mt-2 font-weight-bold">
                    IE
                  </div>
                  <div class="text-small text-muted">
                    <span class="text-primary"><i class="fas fa-caret-up"></i></span> 5%
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Visitors</h4>
            </div>
            <div class="card-body">
              <div id="visitorMap" data-height="190"></div>
            </div>
            <div class="card-footer card-footer-grey pt-0">
              <div class="statistic-details mt-4 align-items-center justify-content-center">
                <div class="statistic-details-item col-sm-4 col-12">
                  <div class="detail-chart">
                    <div class="sparkline-line-chart"></div>
                  </div>
                  <div class="detail-value">
                    12,329
                  </div>
                  <div class="detail-name">
                    Visits
                  </div>
                </div>
                <div class="statistic-details-item col-sm-4 col-12">
                  <div class="detail-chart">
                    <div class="sparkline-line-chart"></div>
                  </div>
                  <div class="detail-value">
                    28%
                  </div>
                  <div class="detail-name">
                    Referral
                  </div>
                </div>
                <div class="statistic-details-item col-sm-4 col-12">
                  <div class="detail-chart">
                    <div class="sparkline-line-chart"></div>
                  </div>
                  <div class="detail-value">
                    72%
                  </div>
                  <div class="detail-name">
                    Organic
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3 col-6 mb-md-0 mb-4 text-center">
                  <div class="img-shadow flag-icon flag-icon-id"></div>
                  <div class="mt-2 font-weight-bold text-nowrap">
                    Indonesia
                  </div>
                  <div class="text-small text-muted">
                    8,400
                  </div>
                </div>
                <div class="col-sm-3 col-6 mb-md-0 mb-4 text-center">
                  <div class="img-shadow flag-icon flag-icon-ps"></div>
                  <div class="mt-2 font-weight-bold text-nowrap">
                    Palestine
                  </div>
                  <div class="text-small text-muted">
                    <span class="text-primary"><i class="fas fa-caret-up"></i></span> 7,328
                  </div>
                </div>
                <div class="col-sm-3 col-6 text-center">
                  <div class="img-shadow flag-icon flag-icon-sy"></div>
                  <div class="mt-2 font-weight-bold text-nowrap">
                    Syiria
                  </div>
                  <div class="text-small text-muted">
                    <span class="text-danger"><i class="fas fa-caret-down"></i></span> 5,830
                  </div>
                </div>
                <div class="col-sm-3 col-6 text-center">
                  <div class="img-shadow flag-icon flag-icon-my"></div>
                  <div class="mt-2 font-weight-bold text-nowrap">
                    Malaysia
                  </div>
                  <div class="text-small text-muted">
                    4,763
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 mt-lg-0 mt-sm-4">
          <div class="card">
            <div class="card-header">
              <h4>Referral URL</h4>
            </div>
            <div class="card-body">
              <canvas id="myChart3" height="170"></canvas>

              <div class="mb-4 mt-4">
                <div class="text-small float-right font-weight-bold text-muted">
                  558
                </div>
                <div class="font-weight-bold mb-1">
                  Google
                </div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">
                  338
                </div>
                <div class="font-weight-bold mb-1">
                  Facebook
                </div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">
                  238
                </div>
                <div class="font-weight-bold mb-1">
                  Bing
                </div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">
                  190
                </div>
                <div class="font-weight-bold mb-1">
                  Yahoo
                </div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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