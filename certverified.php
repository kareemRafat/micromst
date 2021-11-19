<?php include 'include/header.php'; ?>
<!-- Start Main NavBar -->
<?php include 'include/navbar.php'; ?>
      <!-- End Main NavBar -->
      <h1 class="contact-h1">MICROMST |Certificate-Verified</h1>
        <!--Start Certificate Verified-->
        <div class="row">
          <div class="container">
            <div class="cer-img">
                <img src="img/cer.png" alt="div-image" class="img-fluid">
            </div>
                <p class="crtvr-p">Micromst has been working throughout its scientific history on the credibility<br> sincerity through the educational content provided by the company in the field of digital technology and software, so we have created that page <br> so as to make sure other institutions and owners of the certificates available to them, where they completed the educational process that it is sound<br>and documented through the code<br>attached to the certificate</p>

                <div class="cert-search text-center">
                    <div class="search text-center col-lg-12">
                    <form class="search-form">
                      <input class="certfy" type="text" placeholder="Enter you certificate id">
                      <input class="validate" type="submit" value="Submit">
                    </form>
                   </div>
                </div>


          <div style="height: 200px;" class="show-certificate text-center">
              <!-- <img src="img/certi.jpg" alt="Certificate-Verified" class="img-fluid"> -->

          </div>

          </div>
        </div>


        <?php include 'include/footer.php'; ?>

        <!--End Certificate Verified-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
     $(document).on('click','.validate',function(ev){
       ev.preventDefault();
      var certificate =$('.certfy').val();

      $.post('function/findcertificate.php',{certificate:certificate},function(data){
        $('.show-certificate').html(data);
      })

     })
</script>
</html>
