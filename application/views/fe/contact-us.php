<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Feb 14 2022 06:14:05 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="62097af6825589d103527a0b" data-wf-site="62097af682558945435279fd">
<head>
  <meta charset="utf-8">
  <title>Contact - VolenTech</title>  
  <link href="<?php echo base_url('assets/css/normalize.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/webflow.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/volentech.webflow.css');?>" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
  <link href="<?php echo base_url('assets/images/icon.png');?>" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo base_url('assets/images/webclip.svg');?>" rel="apple-touch-icon">
  <?php echo $map['js'];?>
</head>
<body>
  <div style="opacity:0" class="page-wrapper">
    <?php
        $this->load->view('fe/layout/header');
    ?>
    <section class="section contact-hero wf-section">
      <div class="container-medium-644px contact-hero">
        <h1 data-w-id="865519f3-344d-95fa-daa5-a0d3d9cf9a55" style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="title contact-hero">Get in touch</h1>
        <p data-w-id="9b1526cf-dd9e-38dd-2ed8-c8772f7e712c" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="paragraph-large contact-hero">We are always available to answer to our customers about their queries. Feel free to contact us anytime.</span></p>
      </div>
      <div class="container-medium-954px">
        <div data-w-id="3fc91898-3560-9774-bb13-9677ebf6296e" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="card contact-hero">
          <div class="contact-form-block w-form">
            <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="get" class="contact-form">
              <div class="input-wrapper"><label for="name">Name</label><input type="text" class="input w-input" maxlength="256" name="name" data-name="Name" placeholder="John Carter" id="name" required=""></div>
              <div class="input-wrapper"><label for="email">Email</label><input type="email" class="input w-input" maxlength="256" name="email" data-name="Email" placeholder="email@example.com" id="email" required=""></div>
              <div class="input-wrapper"><label for="Phone">Phone number</label><input type="tel" class="input w-input" maxlength="256" name="phone" data-name="Phone" placeholder="(123) - 465 7890" id="phone" required=""></div>
              <div class="input-wrapper"><label for="Subject">Subject</label><input type="text" class="input w-input" maxlength="256" name="Subject" data-name="Subject" placeholder="Ex. Services" id="subject" required=""></div>
              <div id="w-node-_3fc91898-3560-9774-bb13-9677ebf62981-03527a0b" class="input-wrapper"><label for="Message">Message</label><textarea placeholder="Please describe what service you are interested in..." maxlength="5000" id="message" name="message" data-name="Message" class="text-area w-input" rows="5" cols="5"></textarea></div>
              <div id="w-node-_3fc91898-3560-9774-bb13-9677ebf62985-03527a0b" class="button-primary form"><button type="button" data-wait="Please wait..." class="form-button w-button" id="btnSend">Send message </button>
                <div class="button-arrow"><span class="button-arrow form"></span></div>
              </div>
            </form>
            <div class="success-message w-form-done">
              <div>Your message has been submitted. <br>We will get back to you within 24-48 hours.</div>
            </div>
            <div class="error-message w-form-fail">
              <div>Oops! Something went wrong.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg contact-hero">
        <div class="bg page-lines-wrapper">
          <div class="page-lines-outside dark">
            <div class="page-lines-inside dark"></div>
          </div>
        </div>
      </div>
      <div class="bg page-lines-wrapper">
        <div class="page-lines-outside">
          <div class="page-lines-inside"></div>
        </div>
      </div>
    </section>
    <section class="section wf-section">
      <div class="container-default w-container">
        <div data-w-id="e172d1eb-d5eb-66f4-5600-896b247eb781" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="contact-map-wrapper">
          <div class="card contact-map-links">
            <h2 class="title color-neutral-100 contact-map-links">Get in touch</h2>
            <div class="contact-info-wrapper">
              <div class="contact-info-content-top"><img src="<?php echo base_url('assets/images/icon-1-links-contact-architecture-x-template.svg');?>" loading="eager" alt="Location Icon - Architecture X Webflow Template" class="image contact-info-icon">
                <div>Address</div>
              </div>
              <div class="paragraph-large contact-info">824 Londonderry Drive<br>Sunnyvale, CA 94087
                </div>
            </div>
            <div class="contact-info-wrapper last">
              <div class="contact-info-content-top"><img src="<?php echo base_url('assets/images/icon-2-links-contact-architecture-x-template.svg');?>" loading="eager" alt="Phone Icon - Architecture X Webflow Template" class="image contact-info-icon">
                <div>Contact</div>
              </div>
              <a href="tel:(123)456-7890" class="paragraph-large contact-info-link">(669) 256 – 8234</a>
              <a href="mailto:contact@architecture.com" class="paragraph-large contact-info-link last">yugansh@volentech.com</a>
            </div>
          </div>
          <div class="contact-map">
          <?php 
                echo $map['html'];
            ?>
            </div>
        </div>
      </div>
      <div class="bg page-lines-wrapper">
        <div class="page-lines-outside">
          <div class="page-lines-inside"></div>
        </div>
      </div>
    </section>
    <section class="section bg-neutral-800 wf-section">
      <div class="container-default w-container">
        <h2 data-w-id="e39a5cf4-49e1-a3fa-a637-d39139021ef8" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="title color-neutral-100 faqs">Have any questions?</h2>
        <div data-w-id="b692330a-33c7-793e-9574-2575812b8436" style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="faqs-wrapper">
          <div class="split-content faqs-left">
              <?php
                for($i = 0; $i < count($questions); $i += 2) {
                    echo '
                    <div class="faq-wrapper '. ($i == 0 ? "first" : "").'">
                        <div class="faq-content-top">
                        <h3 class="title h4-size faq">'.$questions[$i]['Question'].'</h3>
                        <div class="faq-icon-wrapper">
                            <div class="faq-icon-1"></div>
                            <div class="faq-icon-2"></div>
                        </div>
                        </div>
                        <div class="faq-content-bottom">
                        <div class="space faq"></div>
                        <p class="paragraph color-neutral-500 faq">'.$questions[$i]['Answer'].'</p>
                        </div>
                    </div>
                    ';
                }
              ?>
          </div>
          <div class="split-content faqs-right">
              <?php
                for($i = 1; $i < count($questions); $i += 2) {
                    echo '
                    <div class="faq-wrapper '. ($i == 1 ? "first" : "").'">
                        <div class="faq-content-top">
                        <h3 class="title h4-size faq">'.$questions[$i]['Question'].'</h3>
                        <div class="faq-icon-wrapper">
                            <div class="faq-icon-1"></div>
                            <div class="faq-icon-2"></div>
                        </div>
                        </div>
                        <div class="faq-content-bottom">
                        <div class="space faq"></div>
                        <p class="paragraph color-neutral-500 faq">'.$questions[$i]['Answer'].'</p>
                        </div>
                    </div>
                    ';
                }
              ?>
          </div>
        </div>
        <?php
            if (count($questions) == 0)
                echo '
                <div class="empty-state w-dyn-empty">
                    <div>No items found.</div>
                </div>
                ';
        ?>
      </div>
      <div class="bg page-lines-wrapper">
        <div class="page-lines-outside dark">
          <div class="page-lines-inside dark"></div>
        </div>
      </div>
    </section>
    <?php
        $this->load->view('fe/layout/footer');
    ?>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=62097af682558945435279fd" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="<?php echo base_url('assets/js/webflow.js');?>" type="text/javascript"></script> 

  <script src="<?php echo base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>

  <script>
      var base_url = "<?php echo base_url();?>";    
  </script>

  <script src="<?php echo base_url('assets/layouts/layout3/scripts/pages/sendEmail.js');?>" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>