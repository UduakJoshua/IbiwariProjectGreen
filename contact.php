    <?php
     
     include_once 'model/controller.php';
     ?>

    <?php
     
     include_once 'inc/header.php';
     ?>
      <!--header ends here-->

        
  
      <!--Google map-->

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.3056895877207!2d6.994157013747759!3d4.888390296450649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069d18554358f2b%3A0x699d777dbcb8709e!2s66%20Akwaka%20Road%2C%20Rumuodomaya%2C%20Port%20Harcourt!5e0!3m2!1sen!2sng!4v1603742614836!5m2!1sen!2sng" 
        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!--google map ends here-->

      <!--contact us begin here-->
      <section class="contact-form">
        <div class="container">
          <?php
            require_once 'model/display.php';
          
          ?>
          <div class="row ">
            <div class="col-lg-8 contact__left">
              <h4>We Love to Hear From You</h4>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="contact--form" method="POST" >
                <label for="name">Enter Your Full Name</label><br>
                <input type="text" name="name" placeholder="uduak joshua"><br>

                <label for="mail">Enter Your e-mail</label><br>
                <input type="text" name="mail" placeholder="uduakjoshua@gmail.com"><br>

                <label for="subject">Enter Your subject</label><br>
                <input type="text" name="subject" placeholder="subject"><br>

                <textarea name="message" id="contact-message" cols="30" rows="10"></textarea><br>
                <button class="btn" type="submit" name="submit">Submit</button>


              </form>
            </div>

            <div class="col-lg-4 contact__right">
              <h4>Contact Us</h4>
              <div>
                <a href="#"><i class="fa fa-phone "> <br>08033096091 | 08170687489 | 08032790923</i></a></br>
                <a href="#"><i class="fa fa-envelope "> <br>ibinyingibrothers6600@gmail.com</i></a></br>
                <a href="#"><i class="fa fa-map-marker "> <br>66 Akwaka Road, Rumuodomaya, Obio/Akpor LGA Port Harcourt
                   Rivers State, Nigeria </i></a>
              </div>
              <h4>Working Hours</h4>
              <p>Monday - Friday | 8a.m - 4p.m</p>
              

            </div>
          </div>
        </div>

      </section>
      <!--contact us ends here-->

    
      <?php
     
     include_once 'inc/footer.php';
     ?>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>