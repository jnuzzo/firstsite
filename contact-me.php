<?php include 'header.php';  ?>
<?php include 'parts/nuzzo-nav.php'; ?>
<div class="container">
  <div class="int-page">
    <div class="text mt-3">
      <h1>Contact Us!</h1>
    </div>
    <div class="text font-weight-light mb-3">
      <h5>Please fill out the information below to get in touch with Me!</h5>
    </div>
    <form action="functions/mail.php" method="post">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Name</span>
        </div>
        <input type="text" name="name" class="form-control" placeholder="Your Name" aria-label="Enter your name here.">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Email</span>
        <input type="email" name="email" class="form-control" placeholder="Your Email" aria-label="Enter your email address here." required="">
        <div class="input-group-append"></div>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon3">Contact Phone</span>
        </div>
        <input type="text" name="phone" class="form-control" placeholder="Your Phone Number" id="basic-url" aria-label="Enter your best contact phone number here.">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Message</span>
        </div>
        <textarea name="message" rows="4" cols="50" class="form-control" placeholder="Your Comments" aria-label="Enter your message here."></textarea>
      </div>
      <div class="float-right">
        <input type="submit" class="btn btn-primary pull-down">
      </div>
    </form>  
  </div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

  
<?php include 'footer.php';  ?>
