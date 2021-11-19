<?php include 'include/header.php'; ?>
<!-- Start Main NavBar -->
<?php include 'include/navbar.php'; ?>

      <!-- End Main NavBar -->
      <h1 class="contact-h1">MICROMST | Contact Us</h1>
      <div class="contact-img">
          <img src="img/contact-us.png" alt="ContactUS" class="img-fluid">
      </div>

      <!--Start Contact Form-->
  <form id="myform">
    <div class="container">
      <p class="contact-p">Welcome to the Contact Us page This page was created to receiving your questions and inquiries about the services provided by MICROMST in all areas<br> of software both separately
           <br>-Programing <br>-IOT <br>-PCBinDustry <br>-Softwar Development <br>Please Contact Us By This Form : </p> <br>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="full-name">Full Name</label>
          <input type="name" class="form-control fullname" id="full-name" placeholder="Full Name">
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control email" id="email" placeholder="Your Email">
        </div>
        <div class="form-group col-md-6">
            <label for="full-name">Mobile</label>
            <input type="tel" class="form-control mobile" id="full-name" placeholder="Your Phone Number">
          </div>
      </div>
      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write Your Message Here"></textarea>
      </div>
      <div class="form-row">
        <div class="form-group col-lg-2 col-sm-2">
          <button style="margin-right: 21px;" type="submit" class="btn btn-primary submit">Send Now</button>
        </div>
        <div  class=" form-group hiddendiv col-lg-10 col-sm-10">
        </div>
      </div>
    </div>
</form>
  <!-- End Contact Form -->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

<script type="text/javascript">
  $(document).on('click','.submit',function(ev){
    ev.preventDefault();
    var fullname = $('.fullname').val();
    var email = $('.email').val();
    var mobile = $('.mobile').val();
    var message = $('#message').val();

    $.post('function/sendmessage.php',{fullname:fullname,email:email,mobile:mobile,message:message},function(data){
      if(data == 1 ){
          $('.hiddendiv').html('<div style="border-radius:4px;background-color:rgba(126,204,48,.9);color: white;padding-top:-21px;padding-top:7px;padding-left:16px;font-size:18px;height:39px;"> Message sent successfully</div>');
          $('.fullname').val("");
          $('.email').val("");
          $('.mobile').val("");
          $('.message').val("");
        }
        if(data == 2 ){
          $('.hiddendiv').html('<div style="border-radius:4px;background-color: rgba(255,47,0,0.71);color: white;padding-top:-21px;padding-top:7px;padding-left:16px;font-size:18px;height:39px;"> Please Fill All Fields!</div>');
        }
        if(data == 3 ){
          $('.hiddendiv').html('<div style="border-radius:4px;background-color: rgba(255,47,0,0.71);color: white;padding-top:-21px;padding-top:7px;padding-left:16px;font-size:18px;height:39px;"> Please Insert Valid email address !</div>');
        }
        if(data == 4 ){
          $('.hiddendiv').html('<div style="border-radius:4px;background-color: rgba(255,47,0,0.71);color: white;padding-top:-21px;padding-top:7px;padding-left:16px;font-size:18px;height:39px;"> Message already sent !</div>');
        }

    })
  })


</script>
</html>
