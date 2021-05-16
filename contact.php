<!doctype html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/all.css" rel="stylesheet">
  <!-- Owl Carousel CSS -->
  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="icon" href="images/tajoddin_img/title.png" type="img/png">
  <title>Tajoddin Group</title>
</head>

<body>
  <!--Topbar Start-->


  <!--Header Start-->

  <?php include('header.php'); ?>
  <!--Header End-->

  <!--Inner Heading Start-->
  <div class="innerHeading">
    <div class="container">
      <h1>Contact Us</h1>
    </div>
  </div>
  <!--Inner Heading End-->

  <!--Inner Content Start-->
  <div class="innercontent wow fadeInUp">
    <div class="container">
      <div class="getTouch">Get In Touch</div>
      <div class="row formcol">
        <div class="col-lg-8">

          <div class="messages"></div>
          <div class="controls">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group has-error has-danger">
                  <input id="form_name" class="form-control rounded" type="text" placeholder="Name" required="">

                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input id="form_email" class="form-control rounded" type="email" placeholder="Email" required="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input id="form_phone" class="form-control rounded" type="text" placeholder="Phone" required="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input id="form_subject" class="form-control rounded" type="text" placeholder="Subject">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <textarea id="form_message" class="form-control rounded" placeholder="Message" rows="4"
                    required=""></textarea>
                </div>
              </div>
              <div class="col-lg-12 contact-wrap">
                <div class="contact-btn">
                  <button type="submit" name="submit" class="sub rounded" onclick="clicks()">Submit Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-4">
          <div class="map">
            <iframe class="rounded"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.119103208702!2d73.03957701490023!3d19.014472687123295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c32a52036bd7%3A0x1dc1df597a6d1d50!2sTaj%20Group!5e0!3m2!1sen!2sin!4v1618300979206!5m2!1sen!2sin"
              width="100%" height="330" frameborder="0" style="border:0;" allowfullscreen="" loading=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Inner Content End-->

  <!--Footer Start-->
  <?php include('footer.php'); ?>
  <!--Footer End-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- Owl Carousel -->
  <script src="js/owl.carousel.js"></script>
  <!-- wow js -->
  <script src="js/animate.js"></script>
  
  <script>
    new WOW().init();
  </script>
  <!-- general script file -->
  <script src="js/wow.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script>
  
      function clicks() {
        if ($.trim($('#form_name').val()) == "") {
          alert("Please fill the name field.");
        } else if ($.trim($('#form_email').val()) == "") {
          alert("Please enter your email.");
        } else if ($.trim($('#form_phone').val()) == "") {
          alert("Please enter your phone.");
        } else {

          $.ajax({
            url: "insert_data.php",
            type: "POST",
            data: {
              uname: $('#form_name').val(),
              email: $('#form_email').val(),
              phone: $('#form_phone').val(),
              sub_ject: $('#form_subject').val(),
              msg: $('#form_message').val()
            },
            success: function (data) {
              console.log(data);

              if ($.trim(data) == "Success") {
                alert("Thank You, We'll respond you shortly.");
                $('#form_name').val("");
                $('#form_email').val("");
                $('#form_phone').val("");
                $('#form_subject').val("");
                $('#form_message').val("");
              } else {
                alert("Error");
              }
            }

          });
        }
      }
  </script>
</body>

</html>