<?php

    require 'views/header.php';
?>


<div class="card mb-3">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../assets/img/illustrations/corner-4.png);opacity: 0.7;"></div>
            <!--/.bg-holder-->
            <div class="card-body">
              <h5>Order Details: #<?=$this->order;?></h5>
              <p class="fs--1">April 21, 2019, 5:33 PM</p>
              <div><strong class="mr-2">Status: </strong>
                <span class="badge badge-pill badge-soft-success fs--2">Completed</span>                
              </div>
            </div>
</div>


<div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-4">
                  <h5 class="mb-3 fs-0">Billing Address</h5>
                  <h6 class="mb-2">Antony Hopkins</h6>
                  <p class="mb-1 fs--1">2393 Main Avenue<br>Penasauka, New Jersey 87896</p>
                  <p class="mb-0 fs--1"> <strong>Email: </strong><a href="mailto:ricky@gmail.com">antony@example.com</a></p>
                  <p class="mb-0 fs--1"> <strong>Phone: </strong><a href="tel:7897987987">7897987987</a></p>
                </div>
                <div class="col-lg-4">
                  <h5 class="mb-3 fs-0">Shipping Address</h5>
                  <h6 class="mb-2">Antony Hopkins</h6>
                  <p class="mb-0 fs--1">2393 Main Avenue<br>Penasauka, New Jersey 87896</p>
                  <div class="text-500 fs--1">(Free Shipping)</div>
                </div>
                <div class="col-lg-4">
                  <h5 class="mb-3 fs-0">Payment Method</h5>
                  <div class="media"><img class="mr-3" src="https://prium.github.io/falcon/v2.7.3/default/assets/img/icons/visa.jpg" width="40" alt="">
                    <div class="media-body">
                      <h6 class="mb-0">Antony Hopkins</h6>
                      <p class="mb-0 fs--1">**** **** **** 9809</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>


<div class="card mb-3">
            <div class="card-body">
              <div class="table-responsive fs--1">
                <table class="table table-striped border-bottom">
                  <thead class="bg-200 text-900">
                    <tr>
                      <th class="border-0">Products</th>
                      <th class="border-0 text-center">Quantity</th>
                      <th class="border-0 text-right">Rate</th>
                      <th class="border-0 text-right">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle">
                        <h6 class="mb-0 text-nowrap">Platinum web hosting package</h6>
                        <p class="mb-0">Down 35mb, Up 100mb</p>
                      </td>
                      <td class="align-middle text-center">2</td>
                      <td class="align-middle text-right">$65.00</td>
                      <td class="align-middle text-right">$130.00</td>
                    </tr>
                    <tr>
                      <td class="align-middle">
                        <h6 class="mb-0 text-nowrap">2 Page website design</h6>
                        <p class="mb-0">Includes basic wireframes and responsive templates</p>
                      </td>
                      <td class="align-middle text-center">1</td>
                      <td class="align-middle text-right">$2,100.00</td>
                      <td class="align-middle text-right">$2,100.00</td>
                    </tr>
                    <tr>
                      <td class="align-middle">
                        <h6 class="mb-0 text-nowrap">Mobile App Development</h6>
                        <p class="mb-0">Includes responsive navigation</p>
                      </td>
                      <td class="align-middle text-center">8</td>
                      <td class="align-middle text-right">$5,00.00</td>
                      <td class="align-middle text-right">$4,000.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row no-gutters justify-content-end">
                <div class="col-auto">
                  <table class="table table-sm table-borderless fs--1 text-right">
                    <tbody><tr>
                      <th class="text-900">Subtotal:</th>
                      <td class="font-weight-semi-bold">$6,230.00 </td>
                    </tr>
                    <tr>
                      <th class="text-900">Tax 5%:</th>
                      <td class="font-weight-semi-bold">$311.50</td>
                    </tr>
                    <tr class="border-top">
                      <th class="text-900">Total:</th>
                      <td class="font-weight-semi-bold">$6541.50</td>
                    </tr>
                  </tbody></table>
                </div>
              </div>
            </div>
          </div>

<?php
    require 'views/footer.php';

?>