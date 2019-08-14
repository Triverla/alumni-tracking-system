<?php
session_start();
 include 'includes/header.php' ?>
 <!-- process content -->
 <div class="process-content">
        <div class="container">

          <!-- SIgn Up -->
          <div class="moti-sign">
            <h3>Annual Reunion Contribution</h3>
            <div class="form-sec form-in-part">

              <!-- Choose Plan -->
              <div class="chose-plan select-plan">
                <div class="row">

                  <!-- Plan 1 -->
                  <div class="col-md-6 text-center">
                    <h6>Amount <a href="#.">Edit</a></h6>
                    <!-- Price Head -->
                    <div class="plan-head"> N1000<span>/ mo</span> </div>
                  </div>

                  <!-- Plan 1 -->
                  <div class="col-md-6">
                    <p>Monthly <span>N1000</span></p>
                    <p>Subtotal <span>N12000</span></p>
                    <p>Estimated tax (0.00%) <span>N0.00</span></p>
                    <p class="total">Total <span>N12000</span></p>
                  </div>
                </div>
              </div>

              <!-- Plan Note -->
              <div class="plan-note">
                <p>Our Reunion is scheduled to hold on December 30, 2019. Please Donate to this cause and let's make BSU 
                great again.</p>
              </div>

              <!-- Billing Method -->
              <div class="bill-method">



                <div class="row">
                  <div class="col-md-6">
                    <label>
                      <input type="radio" name="card">
                      <img src="assets/img/cards.png" alt=" ">
                    </label>


                  </div>

                  <div class="col-md-6">
                    <label>
                      <input type="radio" name="card">
                      <img src="assets/img/card-paypal.png" alt=" ">
                    </label>


                  </div>

                </div>





              </div>


              <!-- Billing Form -->
              <div class="billing-form">
                <form>
                  <ul class="row">
                    <li class="col-md-6">
                      <label> Your name *
                        <input type="text" placeholder="" class="form-control" >
                      </label>
                    </li>

                    <!-- First Name -->
                    <li class="col-md-6">
                      <label> First Name
                        <input type="text" placeholder="" class="form-control" >
                      </label>
                    </li>

                    <!-- Credit or debit card number  -->
                    <li class="col-md-6">
                      <label> Credit or debit card number *
                        <input type="text" placeholder="" class="form-control" >
                      </label>
                    </li>

                    <!-- Expiration date  -->
                    <li class="col-md-6">
                      <div class="row card-input">
                        <div class="col-md-7">
                          <label> Expiration date * </label>
                          <div class="row">
                            <div class="col-sm-6">
                              <select class="fst">
                                <option value="#">MM</option>
                                <option value="#">01</option>
                                <option value="#">02</option>
                                <option value="#">03</option>
                                <option value="#">04</option>
                                <option value="#">05</option>
                                <option value="#">06</option>
                                <option value="#">07</option>
                                <option value="#">08</option>
                              </select>
                            </div>

                            <!-- YYYY -->
                            <div class="col-sm-6">
                              <select>
                                <option value="#">YYYY</option>
                                <option value="#">2016</option>
                                <option value="#">2016</option>
                                <option value="#">2016</option>
                                <option value="#">2016</option>
                                <option value="#">2016</option>
                                <option value="#">2016</option>
                                <option value="#">2016</option>
                                <option value="#">2016</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <!-- Security date * -->
                        <div class="col-md-5">
                          <label class="sec-card"> Security date *
                            <input type="text" placeholder="" class="form-control" >
                          </label>
                        </div>
                      </div>
                    </li>

                    <!-- Country -->
                    <li class="col-md-6">
                      <label> Country * </label>
                      <select>
                        <option value="Nigeria">Nigeria</option>
                      </select>
                    </li>

                    <li class="col-md-6">
                      <label> Amount *
                        <input type="text" placeholder="Amount" class="form-control" >
                      </label>
                    </li>
                    <li class="col-md-12 text-center"> <a href="#." class="btn-new">Make Payment</a> </li>
                  </ul>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>