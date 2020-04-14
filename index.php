<?php include "header.php"; ?>

<!--==========================
    Intro Section
  ============================-->
<section id="intro">

  <div class="intro-content">
    <h2>Making <span>your ideas</span><br>happen!</h2>
    <div>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
      <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
    </div>
  </div>

  <div id="intro-carousel" class="owl-carousel">
    <?php
    $result = $db->prepare("SELECT * FROM slider ORDER BY id DESC Limit 8");
    $result->execute();
    for ($i = 0; $row = $result->fetch(); $i++) {
    ?>
      <div class="item" style="background-image: url('uploads/slider/<?php echo $row['file']; ?>');"></div>
    <?php } ?>
  </div>

</section><!-- #intro -->

<main id="main">

  <!--==========================
      About Section
    ============================-->
  <section id="about" class="wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 about-img">
          <img src="img/about-img.jpg" alt="">
        </div>

        <div class="col-lg-6 content">
          <h2>The center has been devoted to space science research and Geomatics education. </h2>
          <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

          <ul>
            <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>

        </div>
      </div>

    </div>
  </section><!-- #about -->

  <!--==========================
      Services Section
    ============================-->
  <section id="services">
    <div class="container">
      <div class="section-header">
        <h2>Services</h2>
        <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
      </div>

      <div class="row">
        <?php
        $result = $db->prepare("SELECT * FROM service ORDER BY id DESC Limit 4");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
        ?>
          <?php if ($row['id']%2 == 1) {
            $motion = "fadeInRight";
          } else {
            $motion = "fadeInLeft";
          }
          ?>
          <div class="col-lg-6">
            <div class="box wow <?php echo $motion ?>" style="word-break: break-all">
              <div class="icon"><i><img src="uploads/service/<?php echo $row['file']; ?>" alt="" height="80" width="80"></i></div>
              <h4 class="title"><a href="service-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['service_title'] ?></a></h4>
              <p class="description"><?php echo $row['service_detail'] ?></p>
            </div>
          </div>
        <?php } ?>

      </div>

    </div>
  </section><!-- #services -->

  <!--==========================
      Clients Section
    ============================-->
  <section id="clients" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Clients</h2>
        <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
      </div>

      <div class="owl-carousel clients-carousel">
        <?php
        $result = $db->prepare("SELECT * FROM client ORDER BY id DESC");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
        ?>
          <a href="client-detail.php?id=<?php echo $row['id']; ?>">
            <img src="uploads/client/<?php echo $row['file']; ?>" alt="" title="<?php echo $row['client_name']; ?>">
          </a>
        <?php } ?>
      </div>

    </div>
  </section><!-- #clients -->

  <!--==========================
      Our Project Section
    ============================-->

  <section id="portfolio" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Our Projects</h2>
        <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row no-gutters">
        <?php
        $result = $db->prepare("SELECT * FROM project ORDER BY id DESC Limit 8");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
        ?>
          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="uploads/project/<?php echo $row['file']; ?>" title="This is Sample Title" caption="<?php echo strip_tags(substr($row['project_detail'], 0, 20)); ?>..." class="portfolio-popup">
                <img src="uploads/project/<?php echo $row['file']; ?>" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info">
                    <h2 class="wow fadeInUp"><?php echo $row['project_title']; ?></h2>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div><br>
    <center><a href="project.php" style="color:#50d8af;font-size:20px;text-decoration:underline">View All</a></center>
  </section><!-- #portfolio -->

  <!--==========================
      Our Blog Section
    ============================-->

  <section class="ftco-section bg-light wow fadeInUp" id="blog-section">
    <div class="container">
      <div class="container">
        <div class="section-header">
          <h2>Our Blogs</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
      </div>
      <?php
      $result = $db->prepare("SELECT * FROM blog ORDER BY id DESC Limit 3");
      $result->execute();
      for ($i = 0; $row = $result->fetch(); $i++) {
      ?>
        <div class="col flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-detail.php?id=<?php echo $row['id']; ?>">
                <div style="height:250px;overflow:hidden;background:url('uploads/blog/<?php echo $row['file']; ?>');background-size:cover;background-position:center">
                </div>
              </a>
              <div class="text mt-3 float-left d-block">
                <div class="d-flex align-items-center mb-3 meta">
                  <p class="mb-0">
                    <span class="mr-2"><i class="fa fa-calendar"></i> <?php echo $row['date']; ?></span>
                    <a href="#" class="mr-2" style="color:#50d8af;text-decoration:none">Admin</a>
                  </p>
                </div>
                <h3 class="heading"><a href="blog-detail.php?id=<?php echo $row['id']; ?>" style="color:#50d8af"><?php echo $row['blog_title']; ?></a></h3>
                <p><?php echo strip_tags(substr($row['blog_detail'], 0, 180)); ?>...</p>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </div><br>
    <center><a href="blog.php" style="color:#50d8af;font-size:20px;text-decoration:underline">View More</a></center>
  </section><!-- #blog -->

  <!--==========================
      Testimonials Section
    ============================-->
  <section id="testimonials" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Testimonials</h2>
        <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
      </div>
      <div class="owl-carousel testimonials-carousel">
        <?php
        $result = $db->prepare("SELECT * FROM testimonial ORDER BY id DESC Limit 6");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
        ?>
          <div class="testimonial-item" style="word-break: break-all">
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              <?php echo $row['client_message']; ?>
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p><br>
            <img src="uploads/testimonial/<?php echo $row['file']; ?>" class="testimonial-img" alt="">
            <h3><?php echo $row['client_name'] ?></h3>
            <h4><?php echo $row['client_designation'] ?></h4>
          </div>
        <?php } ?>

      </div>

    </div>
  </section><!-- #testimonials -->

  <!--==========================
      Call To Action Section
      blah blah
    ============================-->
  <section id="call-to-action" class="wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title">Apply Today !!!!!</h3>
          <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <button type="button" class="cta-btn align-middle btn-outline-info" data-toggle="modal" data-target="#myModal">
            Click To Apply
          </button>
        </div>
      </div>

    </div>
  </section><!-- #call-to-action -->

  <!--==========================
      Modal section
    ============================-->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Contact CSSGS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <div class="form">
              <div id="errormessage"></div>
              <form action="https://formspree.io/mzbrlrvv" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!--==========================
      Our Team Section
    ============================-->
  <section id="team" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Our Team</h2>
      </div>
      <div class="row">
        <?php
        $result = $db->prepare("SELECT * FROM excos ORDER BY id Limit 8");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
        ?>
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic" style="height:200px;overflow:hidden;"><img src="uploads/member/<?php echo $row['file']; ?>" alt="" class="img-fluid"></div>
              <div class="details">
                <h4><?php echo $row['person_name']; ?></h4>
                <span><?php echo $row['designation']; ?></span>
                <div class="social">
                  <a href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                  <a href="<?php echo $row['facebook']; ?>"><i class="fa fa-facebook"></i></a>
                  <a href="<?php echo $row['linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section><!-- #team -->

  <!--==========================
      Contact Section
    ============================-->
  <section id="contact" class="wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h2>Contact Us</h2>
        <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="ion-ios-location-outline"></i>
            <h3>Address</h3>
            <address>Pashchimanchal Campus,Lamachaur-16,Pokhara</address>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+977061440457" style="text-decoration:none">+977061440457</a></p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-email">
            <i class="ion-ios-email-outline"></i>
            <h3>Email</h3>
            <p><a href="mailto:cssgs@wrc.edu.np" style="text-decoration:none">cssgs@wrc.edu.np</a></p>
          </div>
        </div>

      </div>
    </div>

    <div class="container mb-4">
      <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBPfrLjebw0ZGWgGMsweg2gxzlgIIdG8lU&q=Science+%26+Humanities+Block,+Lamachaur+Rd,+Pokhara+33700" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="container">
      <div class="form">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="https://formspree.io/mzbrlrvv" method="post" role="form" class="contactForm">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validation"></div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
    </div>
  </section><!-- #contact -->

</main>

<?php include "footer.php"; ?>