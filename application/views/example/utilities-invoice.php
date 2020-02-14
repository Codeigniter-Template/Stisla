<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_layout/header');
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Invoice</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
          <a href="#">Dashboard</a>
        </div>
        <div class="breadcrumb-item">
          Invoice
        </div>
      </div>
    </div>

    <div class="section-body">
      <div class="invoice">
        <div class="invoice-print">
          <div class="row">
            <div class="col-lg-12">
              <div class="invoice-title">
                <h2>Invoice</h2>
                <div class="invoice-number">
                  Order #12345
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <address>
                    <strong>Billed To:</strong><br>
                    Ujang Maman<br>
                    1234 Main<br>
                    Apt. 4B<br>
                    Bogor Barat, Indonesia
                  </address>
                </div>
                <div class="col-md-6 text-md-right">
                  <address>
                    <strong>Shipped To:</strong><br>
                    Muhamad Nauval Azhar<br>
                    1234 Main<br>
                    Apt. 4B<br>
                    Bogor Barat, Indonesia
                  </address>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <address>
                    <strong>Payment Method:</strong><br>
                    Visa ending **** 4242<br>
                    ujang@maman.com
                  </address>
                </div>
                <div class="col-md-6 text-md-right">
                  <address>
                    <strong>Order Date:</strong><br>
                    September 19, 2018<br><br>
                  </address>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-12">
              <div class="section-title">
                Order Summary
              </div>
              <p class="section-lead">
                All items here cannot be deleted.
              </p>
              <div class="table-responsive">
                <table class="table table-striped table-hover table-md">
                  <tr>
                    <th data-width="40">#</th>
                    <th>Item</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-right">Totals</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Mouse Wireless</td>
                    <td class="text-center">$10.99</td>
                    <td class="text-center">1</td>
                    <td class="text-right">$10.99</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Keyboard Wireless</td>
                    <td class="text-center">$20.00</td>
                    <td class="text-center">3</td>
                    <td class="text-right">$60.00</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Headphone Blitz TDR-3000</td>
                    <td class="text-center">$600.00</td>
                    <td class="text-center">1</td>
                    <td class="text-right">$600.00</td>
                  </tr>
                </table>
              </div>
              <div class="row mt-4">
                <div class="col-lg-8">
                  <div class="section-title">
                    Payment Method
                  </div>
                  <p class="section-lead">
                    The payment method that we provide is to make it easier for you to pay invoices.
                  </p>
                  <div class="images">
                    <img src="<?php echo base_url(); ?>assets/img/visa.png" alt="visa">
                    <img src="<?php echo base_url(); ?>assets/img/jcb.png" alt="jcb">
                    <img src="<?php echo base_url(); ?>assets/img/mastercard.png" alt="mastercard">
                    <img src="<?php echo base_url(); ?>assets/img/paypal.png" alt="paypal">
                  </div>
                </div>
                <div class="col-lg-4 text-right">
                  <div class="invoice-detail-item">
                    <div class="invoice-detail-name">
                      Subtotal
                    </div>
                    <div class="invoice-detail-value">
                      $670.99
                    </div>
                  </div>
                  <div class="invoice-detail-item">
                    <div class="invoice-detail-name">
                      Shipping
                    </div>
                    <div class="invoice-detail-value">
                      $15
                    </div>
                  </div>
                  <hr class="mt-2 mb-2">
                  <div class="invoice-detail-item">
                    <div class="invoice-detail-name">
                      Total
                    </div>
                    <div class="invoice-detail-value invoice-detail-value-lg">
                      $685.99
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="text-md-right">
          <div class="float-lg-left mb-lg-0 mb-3">
            <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process Payment</button>
            <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
          </div>
          <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('_layout/footer'); ?>