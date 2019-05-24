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
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Name</span>
      </div>
      <input type="text" class="form-control" placeholder="Your Name" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon2">Email</span>
      <input type="text" class="form-control" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <div class="input-group-append"></div>
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon3">Contact Phone</span>
      </div>
      <input type="text" class="form-control" placeholder="Your Phone Number" id="basic-url" aria-describedby="basic-addon3">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Message</span>
      </div>
      <textarea class="form-control" placeholder="Your Comments" aria-label="With textarea"></textarea>
    </div>
    <div class="float-right">
      <button type="submit" class="btn btn-primary pull-down">Submit</button>
    </div>
  </div>
</div>  
<?php include 'footer.php';  ?>
