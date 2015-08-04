<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pricing Plan</title>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <div class="container">
        <div role="tabpanel" class="padding-md">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#pricing" aria-controls="home" role="tab" data-toggle="tab"><span class="badge">1</span> Pricing plan</a></li>
                <li role="presentation"><a href="#add-on" aria-controls="profile" role="tab" data-toggle="tab"><span class="badge">2</span> Add-ons</a></li>
                <li role="presentation"><a href="#checkout" aria-controls="profile" role="tab" data-toggle="tab"><span class="badge">3</span> Checkout</a></li>
                <li role="presentation"><a href="#receipt" aria-controls="profile" role="tab" data-toggle="tab"><span class="badge">4</span> Receipt</a></li>
            </ul>
            <br>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="pricing">
                    <h3 class="underline">Select the package that best suits your needs</h3>
                    <div class="row">
                        <div class="col-sm-3 package-a">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="text-center">PACKAGE A</th>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="fa-ul benefits">
                                            <li><i class="fa-li fa fa-check text-success"></i> 1 job post <small>(30 days)</small></li>
                                            <li class="text-muted"><i class="fa-li fa fa-close"></i> <strong>Highlight</strong> the job <small>(1 week)</small></li>
                                            <li class="text-muted"><i class="fa-li fa fa-close"></i> <strong>Feature</strong> on homepage <small>(1 week)</small></li>
                                            <li class="text-muted"><i class="fa-li fa fa-close"></i><strong> Search</strong> for talent <small>(30 days)</small></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <h3>1.500.000<br><small>VND</small></h3>
                                        <p><a href="" class="btn btn-black">Buy now</a></p>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-3 package-b">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="text-center">PACKAGE B</th>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="fa-ul benefits">
                                            <li><i class="fa-li fa fa-check text-success"></i> 1 job post <small>(30 days)</small></li>
                                            <li><i class="fa-li fa fa-check text-success"></i> <strong>Highlight</strong> the job <small>(1 week)</small></li>
                                            <li class="text-muted"><i class="fa-li fa fa-close"></i> <strong>Feature</strong> on homepage <small>(1 week)</small></li>
                                            <li class="text-muted"><i class="fa-li fa fa-close"></i><strong> Search</strong> for talent <small>(30 days)</small></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <h3>2.000.000<br><small>VND/job</small></h3>
                                        <p><a href="" class="btn btn-black">Buy now</a></p>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-3 package-c">
                            <table class="table table-bordered">
                                <tr>

                                    <th class="text-center">PACKAGE C</i></span></th>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="fa-ul benefits">
                                            <li><i class="fa-li fa fa-check text-success"></i> 1 job post <small>(30 days)</small></li>
                                            <li><i class="fa-li fa fa-check text-success"></i> <strong>Highlight</strong> the job <small>(1 week)</small></li>
                                            <li><i class="fa-li fa fa-check text-success"></i> <strong>Feature</strong> on homepage <small>(1 week)</small></li>
                                            <li class="text-muted"><i class="fa-li fa fa-close"></i><strong> Search</strong> for talent <small>(30 days)</small></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <h3>5.500.000<br><small>VND/job</small></h3>
                                        <p><a href="" class="btn btn-black">Buy now</a></p>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-3 package-d">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="text-center">PACKAGE D</th>
                                </tr>
                                <tr>
                                    <td>
                                        <ul class="fa-ul benefits">
                                            <li><i class="fa-li fa fa-check text-success"></i> 1 job post <small>(30 days)</small></li>
                                            <li><i class="fa-li fa fa-check text-success"></i> <strong>Highlight</strong> the job <small>(1 week)</small></li>
                                            <li><i class="fa-li fa fa-check text-success"></i> <strong>Feature</strong> on homepage <small>(1 week)</small></li>
                                            <li><i class="fa-li fa fa-check text-success"></i><strong> Search</strong> for talent <small>(30 days)</small></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <h3>9.000.000<br><small>VND/job</small></h3>
                                        <p><a href="" class="btn btn-black">Buy now</a></p>

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="add-on">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3 class="underline">Maximize your job view with Add-ons</h3>
                            <table class="table table-hover add-on">
                                <tr>
                                    <td class="col-sm-1"><img src="images/iconplus4.png"></td>
                                    <td class="col-sm-8">
                                        <h4>Plus 4 jobs</h4>
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> 4.800.000 VND
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1"><img src="images/iconplus9.png"></td>
                                    <td class="col-sm-8">
                                        <h4>Plus 9 jobs</h4>
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> 10.800.000 VND
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1"><img src="images/iconhighlight.png"></td>
                                    <td class="col-sm-8">
                                        <h4>Highlight the job for 1 week</h4>
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> 800.000 VND
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1"><img src="images/iconfeature.png"></td>
                                    <td class="col-sm-8">
                                        <h4>Feature on homepage</h4>
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> 4.500.000 VND
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1"><img src="images/iconrenew.png"></td>
                                    <td class="col-sm-8">
                                        <h4>Renew job for 30 days</h4>
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> 800.000 VND
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1"><img src="images/iconsearch.png"></td>
                                    <td class="col-sm-8">
                                        <h4>Search for talent</h4>
                                    </td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox"> 4.500.000 VND
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <a href=""><small><i class="fa fa-angle-left"></i> Back to Pricing Plan</small></a>
                            <a href="" class="btn btn-black pull-right">Checkout</a>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="underline">Order Summary</h3>
                            <div class="well">
                                <table class="table">
                                    <tr>
                                        <td><strong>Package B</strong><br>1 job<br>Highlight</td>
                                        <td>1 x</td>
                                        <td>2.000.000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Renew job</strong></td>
                                        <td>1 x</td>
                                        <td>800.000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Subtotal<br>Discount<br>VAT 10%</td>
                                        <td>2.800.000<br>0<br>280.000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h4>Total</h4></td>
                                        <td><h4>3.080.000</h4></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane" id="checkout">
                    <div class="row">
                        <div class="col-sm-8">
                            <form>
                                <label>Coupon code</label>
                                <div class="input-group col-sm-6">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn ">
                                        <button class="btn btn-black" type="button">Apply</button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox"> Send me newsletter with updates and special offers
                                    </label>
                                </div>
                                <hr>
                                <p class="pull-right"><img src="images/mastercard.png" alt="mastercard"> <img src="images/visa.png" alt="visacard"></p>
                                <form>
                                    <h3 class="underline">Payment</h3>
                                    <div class="form-group">
                                        <label >Cardholder name</label>
                                        <input type="text" class="form-control" placeholder="Name on your card">
                                    </div>
                                    <div class="form-group">
                                        <label>Card number</label>
                                        <input type="text" class="form-control" placeholder="Number with no dashes or spaces">
                                    </div>
                                    <div class="form-group">
                                        <label>Expiration date</label>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" placeholder="mm">
                                            </div>
                                            <p class="pull-left">/</p>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" placeholder="yy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Security Code</label>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="xxx">
                                            </div>
                                            <div class="col-sm-1">
                                                <img src="images/csc.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="well">
                                        <h3 class="underline">Red invoice</h3>
                                        <p>If you would like to receive red invoice, please provide the following information. We will send you the invoice by post.</p>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Send me the red invoice
                                          </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tax Number</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control">
                                              <option>Ho Chi Minh</option>
                                              <option>Ha Noi</option>
                                              <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control">
                                              <option>Vietnam</option>
                                            </select>
                                        </div>
                                    </div>

                                </form>
                                <hr>
                            </form>
                            <a href=""><small><i class="fa fa-angle-left"></i> Back to Add-ons</small></a>
                            <a href="" class="btn btn-black pull-right">Confirm Payment</a>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="underline">Order Summary</h3>
                            <div class="well">
                                <table class="table">
                                    <tr>
                                        <td><strong>Package B</strong><br>1 job<br>Highlight</td>
                                        <td>1 x</td>
                                        <td>2.000.000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Renew job</strong></td>
                                        <td>1 x</td>
                                        <td>800.000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Subtotal<br>Discount<br>VAT 10%</td>
                                        <td>2.800.000<br>0<br>280.000</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><h4>Total</h4></td>
                                        <td><h4>3.080.000</h4></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="receipt">
                    <div class="row">
                        <div class="col-md-9">
                            <h2>Thanks for your order!</h2>
                            <p>A receipt was sent to your e-mail. Your package is active now. </p>
                            <h3 class="underline">Order summary</h3>
                            <dl class="dl-horizontal">
                                <dt>Number</dt>
                                <dd>12345</dd>
                                <dt>Invoice date</dt>
                                <dd>03/24/2015</dd>
                            </dl>
                            <table class="table">
                                <tr>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                                <tr>
                                    <td><strong>Package B</strong><br>1 job<br>Highlight</td>
                                    <td>1</td>
                                    <td>2.000.000</td>
                                </tr>
                                <tr>
                                    <td><strong>Renew job</strong></td>
                                    <td>1</td>
                                    <td>800.000</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right">Subtotal<br>Discount<br>VAT 10%</td>
                                    <td>2.800.000<br>0<br>280.000</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right"><h4>Total</h4></td>
                                    <td><h4>3.080.000</h4></td>
                                </tr>
                            </table>
                            <a href=""><i class="fa fa-print"></i> Print</a>
                            <a href="" class="btn btn-black pull-right">Post a job</a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    @include('includes.footer')

</body>
</html>