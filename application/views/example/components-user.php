<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          <a href="#">Components</a>
        </div>
        <div class="breadcrumb-item">
          User
        </div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Users</h2>
      <p class="section-lead">
        Components relating to users, lists of users and so on.
      </p>

      <div class="row">
        <div class="col-12 col-sm-12 col-lg-7">
          <div class="card author-box card-primary">
            <div class="card-body">
              <div class="author-box-left">
                <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture">
                <div class="clearfix"></div>
                <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">Follow</a>
              </div>
              <div class="author-box-details">
                <div class="author-box-name">
                  <a href="#">Hasan Basri</a>
                </div>
                <div class="author-box-job">
                  Web Developer
                </div>
                <div class="author-box-description">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                  </p>
                </div>
                <div class="mb-2 mt-3">
                  <div class="text-small font-weight-bold">
                    Follow Hasan On
                  </div>
                </div>
                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-github">
                  <i class="fab fa-github"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                  <i class="fab fa-instagram"></i>
                </a>
                <div class="w-100 d-sm-none"></div>
                <div class="float-right mt-sm-0 mt-3">
                  <a href="#" class="btn">View Posts <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-danger">
            <div class="card-header">
              <h4>Users</h4>
              <div class="card-header-action">
                <a href="#" class="btn btn-danger btn-icon icon-right">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <div class="card-body">
              <div class="owl-carousel owl-theme" id="users-carousel">
                <div>
                  <div class="user-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="img-fluid">
                    <div class="user-details">
                      <div class="user-name">
                        Hasan Basri
                      </div>
                      <div class="text-job text-muted">
                        Web Developer
                      </div>
                      <div class="user-cta">
                        <button class="btn btn-primary follow-btn" data-follow-action="alert('user1 followed');" data-unfollow-action="alert('user1 unfollowed');">Follow</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="user-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-2.png" class="img-fluid">
                    <div class="user-details">
                      <div class="user-name">
                        Kusnaedi
                      </div>
                      <div class="text-job text-muted">
                        Mobile Developer
                      </div>
                      <div class="user-cta">
                        <button class="btn btn-primary follow-btn" data-follow-action="alert('user2 followed');" data-unfollow-action="alert('user2 unfollowed');">Follow</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="user-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-3.png" class="img-fluid">
                    <div class="user-details">
                      <div class="user-name">
                        Bagus Dwi Cahya
                      </div>
                      <div class="text-job text-muted">
                        UI Designer
                      </div>
                      <div class="user-cta">
                        <button class="btn btn-danger following-btn" data-unfollow-action="alert('user3 unfollowed');" data-follow-action="alert('user3 followed');">Following</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="user-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-4.png" class="img-fluid">
                    <div class="user-details">
                      <div class="user-name">
                        Wildan Ahdian
                      </div>
                      <div class="text-job text-muted">
                        Project Manager
                      </div>
                      <div class="user-cta">
                        <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="user-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-5.png" class="img-fluid">
                    <div class="user-details">
                      <div class="user-name">
                        Deden Febriansyah
                      </div>
                      <div class="text-job text-muted">
                        IT Support
                      </div>
                      <div class="user-cta">
                        <button class="btn btn-primary follow-btn" data-follow-action="alert('user5 followed');" data-unfollow-action="alert('user5 unfollowed');">Follow</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-5">
          <div class="card profile-widget">
            <div class="profile-widget-header">
              <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
              <div class="profile-widget-items">
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">
                    Posts
                  </div>
                  <div class="profile-widget-item-value">
                    187
                  </div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">
                    Followers
                  </div>
                  <div class="profile-widget-item-value">
                    6,8K
                  </div>
                </div>
                <div class="profile-widget-item">
                  <div class="profile-widget-item-label">
                    Following
                  </div>
                  <div class="profile-widget-item-value">
                    2,1K
                  </div>
                </div>
              </div>
            </div>
            <div class="profile-widget-description pb-0">
              <div class="profile-widget-name">
                Hasan Basri <div class="text-muted d-inline font-weight-normal">
                  <div class="slash"></div>
                  Web Developer
                </div>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>
            <div class="card-footer text-center pt-0">
              <div class="font-weight-bold mb-2 text-small">
                Follow Hasan On
              </div>
              <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="btn btn-social-icon mr-1 btn-github">
                <i class="fab fa-github"></i>
              </a>
              <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-header">
              <h4>Authors</h4>
            </div>
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="img-fluid" data-toggle="tooltip" title="Syahdan Ubaidillah">
                    <div class="avatar-badge" title="Editor" data-toggle="tooltip">
                      <i class="fas fa-wrench"></i>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-2.png" class="img-fluid" data-toggle="tooltip" title="Danny Stenvenson">
                    <div class="avatar-badge" title="Admin" data-toggle="tooltip">
                      <i class="fas fa-cog"></i>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-3.png" class="img-fluid" data-toggle="tooltip" title="Riko Huang">
                    <div class="avatar-badge" title="Author" data-toggle="tooltip">
                      <i class="fas fa-pencil-alt"></i>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-4.png" class="img-fluid" data-toggle="tooltip" title="Luthfi Hakim">
                    <div class="avatar-badge" title="Author" data-toggle="tooltip">
                      <i class="fas fa-pencil-alt"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-5.png" class="img-fluid" data-toggle="tooltip" title="Alfa Zulkarnain">
                    <div class="avatar-badge" title="Editor" data-toggle="tooltip">
                      <i class="fas fa-wrench"></i>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-4.png" class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                    <div class="avatar-badge" title="Admin" data-toggle="tooltip">
                      <i class="fas fa-cog"></i>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="img-fluid" data-toggle="tooltip" title="Jaka Ramadhan">
                    <div class="avatar-badge" title="Author" data-toggle="tooltip">
                      <i class="fas fa-pencil-alt"></i>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item">
                    <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-2.png" class="img-fluid" data-toggle="tooltip" title="Ryan">
                    <div class="avatar-badge" title="Admin" data-toggle="tooltip">
                      <i class="fas fa-cog"></i>
                    </div>
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
              <h4>Comments</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="70" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png">
                  <div class="media-body">
                    <div class="media-right">
                      <div class="text-primary">
                        Approved
                      </div>
                    </div>
                    <div class="media-title mb-1">
                      Rizal Fakhri
                    </div>
                    <div class="text-time">
                      Yesterday
                    </div>
                    <div class="media-description text-muted">
                      Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="media-links">
                      <a href="#">View</a>
                      <div class="bullet"></div>
                      <a href="#">Edit</a>
                      <div class="bullet"></div>
                      <a href="#" class="text-danger">Trash</a>
                    </div>
                  </div>
                </li>
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="70" src="<?php echo base_url(); ?>assets/img/avatar/avatar-2.png">
                  <div class="media-body">
                    <div class="media-right">
                      <div class="text-warning">
                        Pending
                      </div>
                    </div>
                    <div class="media-title mb-1">
                      Bambang Uciha
                    </div>
                    <div class="text-time">
                      Yesterday
                    </div>
                    <div class="media-description text-muted">
                      Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="media-links">
                      <a href="#">View</a>
                      <div class="bullet"></div>
                      <a href="#">Edit</a>
                      <div class="bullet"></div>
                      <a href="#" class="text-danger">Trash</a>
                    </div>
                  </div>
                </li>
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="70" src="<?php echo base_url(); ?>assets/img/avatar/avatar-3.png">
                  <div class="media-body">
                    <div class="media-right">
                      <div class="text-primary">
                        Approved
                      </div>
                    </div>
                    <div class="media-title mb-1">
                      Ujang Maman
                    </div>
                    <div class="text-time">
                      Yesterday
                    </div>
                    <div class="media-description text-muted">
                      Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident
                    </div>
                    <div class="media-links">
                      <a href="#">View</a>
                      <div class="bullet"></div>
                      <a href="#">Edit</a>
                      <div class="bullet"></div>
                      <a href="#" class="text-danger">Trash</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>User Progress</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="50" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png">
                  <div class="media-body">
                    <div class="media-title">
                      Rizal Fakhri
                    </div>
                    <div class="text-job text-muted">
                      Web Developer
                    </div>
                  </div>
                  <div class="media-progressbar">
                    <div class="progress-text">
                      30%
                    </div>
                    <div class="progress" data-height="6">
                      <div class="progress-bar bg-primary" data-width="30%"></div>
                    </div>
                  </div>
                  <div class="media-cta">
                    <a href="#" class="btn btn-outline-primary">Detail</a>
                  </div>
                </li>
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="50" src="<?php echo base_url(); ?>assets/img/avatar/avatar-5.png">
                  <div class="media-body">
                    <div class="media-title">
                      Irwansyah Saputra
                    </div>
                    <div class="text-job text-muted">
                      Web Developer
                    </div>
                  </div>
                  <div class="media-progressbar">
                    <div class="progress-text">
                      67%
                    </div>
                    <div class="progress" data-height="6">
                      <div class="progress-bar bg-primary" data-width="67%"></div>
                    </div>
                  </div>
                  <div class="media-cta">
                    <a href="#" class="btn btn-outline-primary">Detail</a>
                  </div>
                </li>
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="50" src="<?php echo base_url(); ?>assets/img/avatar/avatar-4.png">
                  <div class="media-body">
                    <div class="media-title">
                      Hasan Basri
                    </div>
                    <div class="text-job text-muted">
                      Web Developer
                    </div>
                  </div>
                  <div class="media-progressbar">
                    <div class="progress-text">
                      45%
                    </div>
                    <div class="progress" data-height="6">
                      <div class="progress-bar bg-primary" data-width="45%"></div>
                    </div>
                  </div>
                  <div class="media-cta">
                    <a href="#" class="btn btn-outline-primary">Detail</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="card mt-4">
            <div class="card-header">
              <h4>User Details</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled user-details list-unstyled-border list-unstyled-noborder">
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="50" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png">
                  <div class="media-body">
                    <div class="media-title">
                      Rizal Fakhri
                    </div>
                    <div class="text-job text-muted">
                      Web Developer
                    </div>
                  </div>
                  <div class="media-items">
                    <div class="media-item">
                      <div class="media-value">
                        1,239
                      </div>
                      <div class="media-label">
                        Posts
                      </div>
                    </div>
                    <div class="media-item">
                      <div class="media-value">
                        10K
                      </div>
                      <div class="media-label">
                        Followers
                      </div>
                    </div>
                    <div class="media-item">
                      <div class="media-value">
                        2,312
                      </div>
                      <div class="media-label">
                        Following
                      </div>
                    </div>
                  </div>
                </li>
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="50" src="<?php echo base_url(); ?>assets/img/avatar/avatar-5.png">
                  <div class="media-body">
                    <div class="media-title">
                      Irwansyah Saputra
                    </div>
                    <div class="text-job text-muted">
                      Web Developer
                    </div>
                  </div>
                  <div class="media-items">
                    <div class="media-item">
                      <div class="media-value">
                        4,872
                      </div>
                      <div class="media-label">
                        Posts
                      </div>
                    </div>
                    <div class="media-item">
                      <div class="media-value">
                        43K
                      </div>
                      <div class="media-label">
                        Followers
                      </div>
                    </div>
                    <div class="media-item">
                      <div class="media-value">
                        1,290
                      </div>
                      <div class="media-label">
                        Following
                      </div>
                    </div>
                  </div>
                </li>
                <li class="media">
                  <img alt="image" class="mr-3 rounded-circle" width="50" src="<?php echo base_url(); ?>assets/img/avatar/avatar-4.png">
                  <div class="media-body">
                    <div class="media-title">
                      Hasan Basri
                    </div>
                    <div class="text-job text-muted">
                      Web Developer
                    </div>
                  </div>
                  <div class="media-items">
                    <div class="media-item">
                      <div class="media-value">
                        1,821
                      </div>
                      <div class="media-label">
                        Posts
                      </div>
                    </div>
                    <div class="media-item">
                      <div class="media-value">
                        14K
                      </div>
                      <div class="media-label">
                        Followers
                      </div>
                    </div>
                    <div class="media-item">
                      <div class="media-value">
                        2,891
                      </div>
                      <div class="media-label">
                        Following
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>