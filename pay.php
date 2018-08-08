<!doctype html>
<html lang="en">
  <head>
    <!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
  </head>

  <body>
  <!-- START NAVBAR -->
    <?php include_once('inc/navbar.php'); ?>
  <!-- END NAVBAR -->

    <div class="wrapper fadeIn animated">
       <!-- CONTENT -->


        <div class="container pb-5">
            <div class="col-12 pay-m-t px-0">
                <div class="pay-font">Private Horoscope</div>
                <div class="pay-font2">(included personality, life, monthly life detail, couple and other useful information)</div>
            </div>

            <div class="form-row pay-m-t">
                <div class="col-xl-5 col-lg-5 col-md-5 col-11">
                    <div class="pay-font3">Price : 30 USD</div>
                    <div class="pay-font3">Full Name or Nickname</div>
                    <input type="email" class="form-control pay-form" id="" placeholder="User">
                </div>
                <div class="col-xl-1 col-lg-1 col-md-1 col-1">
                    <i class="fa fa-check-circle pay-ok2" aria-hidden="true"></i>
                </div>
            </div>

            <div class="form-row pay-m-t">
                <div class="form-group col-xl-5 col-lg-5 col-md-5 col-11">
                  <label for="" class="pay-font3">E-mail to receive the document</label>
                  <input type="email" class="form-control pay-form" id="" placeholder="Email">
                </div>
                <div class="col-xl-1 col-lg-1 col-md-1 col-1">
                  <i class="fa fa-check-circle pay-ok" aria-hidden="true"></i>
                </div>
                <div class="form-group col-xl-5 col-lg-5 col-md-5 col-11">
                  <label for="" class="pay-font3">Confirm E-mail</label>
                  <input type="email" class="form-control pay-form" id="" placeholder="Email">
                </div>
                <div class="col-xl-1 col-lg-1 col-md-1 col-1">
                  <i class="fa fa-check-circle pay-ok" aria-hidden="true"></i>
                </div>
            </div>

            <div class="form-row pay-m-t">
              <div class="form-group col-xl-5 col-lg-5 col-md-5">
                <label for="" class="pay-font3">Country of Birth</label>
                <select class="pay-selected custom-select">
                    <option value="0">Afghanistan</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
              </div>
              <div class="form-group offset-xl-1 offset-lg-1 offset-md-1 col-xl-5 col-lg-5 col-md-5">
                <label for="" class="pay-font3">State of Birth</label>
                <select class="pay-selected custom-select">
                    <option value="0">Kabul</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
              </div>
            </div>

            <div class="form-row pay-m-t">
              <div class="form-group col-xl-5 col-lg-5 col-md-5">
                <label for="" class="pay-font3">Date of Birth</label>
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-4 col-4">
                    <label for="" class="pay-font4">Day</label>
                    <select class="pay-selected2 custom-select">
                        <option value="0">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                    </select>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-4 col-4">
                    <label for="" class="pay-font4">Month</label>
                    <select class="pay-selected2 custom-select">
                        <option value="0">12</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-4 col-4">
                    <label for="" class="pay-font4">Year</label>
                    <select class="pay-selected2 custom-select">
                        <option value="0">2018</option>
                        <option value="1">2019</option>
                        <option value="2">2020</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group offset-xl-1 offset-lg-1 offset-md-1 col-xl-5 col-lg-5 col-md-5">
                <label for="" class="pay-font3">Time of Birth</label>
                <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-4 col-4">
                    <label for="" class="pay-font4">Hour</label>
                    <select class="pay-selected2 custom-select">
                        <option value="0">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                    </select>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 col-4">
                    <label for="" class="pay-font4">Minute</label>
                    <select class="pay-selected2 custom-select">
                        <option value="0">12</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-row pay-m-t">
              <div class="form-group col-xl-5 col-lg-5 col-md-5">
                <label for="" class="pay-font3">Gender</label>
                <div class="form-row">
                  <div class="form-inline col-xl-3 col-lg-3 col-md-4 col-3">
                    <label class="pay-select">
                        <input type="radio" name="radio" checked="checked">
                        <span class="checkmark"></span>
                        <span for="" class="pay-font5">Male</span>
                    </label>
                  </div>
                  <div class="form-inline col-xl-3 col-lg-3 col-md-4 col-3">
                    <label class="pay-select">
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                        <span for="" class="pay-font6">Female</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group offset-xl-1 offset-lg-1 offset-md-1 col-xl-5 col-lg-5 col-md-5 col-12 text-center text-lg-left text-md-left">
                <p class="pay-font7">*If you don't know the accurate time of birth,<br>
                  please insert the approximate hour, without<br>
                  minute. If you totally don't know the time and<br>
                  not sure about daytime or nighttime, please<br>
                  insert 12:00
                </p>
              </div>
            </div>

        <!-- BUTTON -------------------------------------------------->
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6"></div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-12">
              <div class="pay-overlay-image">
                 <img src="assets/images/pay/pp.jpg" class="pay-image-full">
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 text-center col-12">
              <a href="pay-confirm.php">
                <button type="submit" class="btn pay-btn">Submit</button>
              </a>
            </div>
          </div>
        <!-- END BUTTON -------------------------------------------------->

            <!-- END CONTANER ------>
        </div>
        <!-- END CONTENT ---------->
    </div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
