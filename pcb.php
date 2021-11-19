<?php include 'include/header.php'; ?>
<!-- Start Main NavBar -->
<?php include 'include/navbar.php'; ?>

      <!-- End Main NavBar -->
      <h1 class="contact-h1">MICROMST | PCB-InDustry</h1>
  <!-- Start PCB-InDustry -->
        <!--Start Slider-->

        <!--End Slider-->
        <!--Start pcb  Post-->
<div class="card">
        <div class="card-body">
          <h5 class="card-title">Electronic circuit industry</h5>
          <p class="card-text">
            Micromst is one of the first and leading companies in the field of electronic circuit industry in Egypt and the Arab world
            Where Micromst company takes into account the international standards and quality in the industry to bring out a product worthy of you
            <br>
            1. Application phase <br>
            2 - the stage of drawing and design <br>
            3 - stage of processing pieces in terms of cleaning and grinding <br>
            4- Installation stage <br>
            5 - the stage of drawing on the pieces and is done through high-precision machines <br>
            6- Punching stage of different sizes where the piece is punched as required in all punching sizes <br>
            7. Cutting Stage The cutting is very precise <br>
            8 - stage printing Soldier Masak or Green Mask <br>
            9 - the stage of mobilization and transmission
          </p>
        </div>
      </div>
      <!--End pcb Post-->
      <!--Start PCB form-->
      <form method="post" action="function/sendpcb.php" enctype="multipart/form-data">
            <div class="container">
              <h2 class="pcb-h1">Order Your PCB <br>Now</h2> <br>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="full-name">Full Name</label>
                  <input type="name" class="form-control" name="full_name" id="full-name" placeholder="Full Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="full-name">Mobile</label>
                    <input type="tel" name="mobile" class="form-control" id="full-name" placeholder="Your Phone Number">
                  </div>
                  <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                   </div>
                   <div class="custom-file">
                     <input type="file" name="cv" class="custom-file-input" id="inputGroupFile01"
                       aria-describedby="inputGroupFileAddon01">
                     <label class="custom-file-label" for="inputGroupFile01">Choose Your PDF file</label>
                   </div>
                 </div>
              </div>
              <div class="form-group">
                <label for="message">Your Message</label>
                <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write Your Message Here"></textarea>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-2 col-sm-2">
                  <button style="margin-right: 21px;" type="submit" class="btn btn-primary submit">ORDER NOW</button>
                </div>
                <div  class=" form-group hiddendiv col-lg-10 col-sm-10">
                </div>
              </div>
            </div>
        </form>
      <!--End PCB Form-->
 <!-- End PCB-InDustry -->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<!-- <script type="text/javascript">
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


</script> -->
</html>
