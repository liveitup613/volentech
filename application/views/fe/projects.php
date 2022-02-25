<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Feb 14 2022 06:14:05 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="62097af6825589dff3527a00" data-wf-site="62097af682558945435279fd">

<?php
    function getFormatedDate($date) {        
        return date('M j, Y',strtotime($date));
    }
?>

<head>
  <meta charset="utf-8">
  <title>VolenTech - Engineering Services</title>  
  <link href="<?php echo base_url('assets/css/normalize.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/webflow.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/volentech.webflow.css');?>" rel="stylesheet" type="text/css">
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
  <link href="<?php echo base_url('assets/images/icon.png');?>" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo base_url('assets/images/webclip.svg');?>" rel="apple-touch-icon">
</head>

<body>
  <div style="opacity:0" class="page-wrapper">
    <?php 
        $this->load->view('fe/layout/header');
    ?>    
    
    <section class="section padding-200px wf-section" style="padding-top: 80px;">
      <div class="container-default w-container">
        <div data-w-id="c5418fc2-dea6-fe29-f1eb-cf1619c0c2cd"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="content-top home-portfolio">
          <div class="split-content text-center" style="width: 100%;">            
            <h2 class="title home-portfolio ">Our Projects</h2>
          </div>          
        </div>
        <div data-w-id="e848fa87-ee26-271f-5275-6035ac54721f"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="w-dyn-list">
          <div role="list" class="projects-grid section-projects w-dyn-items">
                <?php 
                    for ($i = 0; $i < count($portfolios); $i++) 
                    {
                        $slideIndex = $i + 1;
                    
                ?>  
            <div role="listitem" class="project-item w-dyn-item">
              <div class="project-item-wrapper w-inline-block">
                <div class="image-wrapper project-item-image">
                  <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <input type="hidden" id="slideConter<?php echo $slideIndex;?>" value="1"/>
                    <?php
                        $slide_cnt = 1;
                        foreach ($portfolios[$i]['Slides'] as $slide) {
                            echo '
                            <div class="mySlides fade slide' . $slideIndex . '">
                                <div class="numbertext">' . $slide_cnt . ' / ' . count($portfolios[$i]['Slides']) . '</div>
                                <img src="'. base_url('assets/images/slides/'.$slide['Attach']).'" style="width:100%">
                            </div>';
                            $slide_cnt++;
                        }
                    ?>                    
                  
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1, <?php echo $slideIndex;?>)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, <?php echo $slideIndex;?>)">&#10095;</a>
                  </div>
                  <!-- <img src="images/portfolio1-1.png" loading="eager" alt="" class="image project-item-image"> -->
                </div>
                <div class="project-item-main-content">
                  <div class="project-item-content">
                    <h3 class="title h3-size"><?php echo $portfolios[$i]['Title'];?></h3>                    
                    <div class="project-item-content-top">
                      <div><?php echo $portfolios[$i]['Location'];?></div>
                      <div class="project-item-content-top-divider"></div>
                      <div><?php echo getFormatedDate($portfolios[$i]['Date']);?></div>
                    </div>
                    <div class="project-item-content-top">
                      <ul>
                        <?php
                          foreach ($portfolios[$i]['Descriptions'] as $description)
                            echo '<li>' . $description['Title'] . '</li>';
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
                }
                if (count($portfolios) == 0) {
                    echo '
                        <div class="empty-state w-dyn-empty">
                            <div>No items found.</div>
                        </div>';
                }
              ?>
          </div>
        </div>
        <div data-w-id="7eb1ff62-f4cb-2337-17e8-dbd8913217e4"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="flex-vc">
          <div class="_2-buttons">
            <a href="<?php echo base_url('contact');?>" class="button-primary _2-buttons-button w-button">Get in touch  <span
                class="button-arrow"></span></a>
            <!-- <a href="portfolio.html" class="button-secondary _2-buttons-button w-button">Browse portfolio</a> -->
          </div>
        </div>
      </div>
      <div class="bg page-lines-wrapper">
        <div style="filter:invert(100%);width:0px" class="page-lines-outside">
          <div class="page-lines-inside"></div>
        </div>
      </div>
    </section>    
    
    <?php
        $this->load->view('fe/layout/footer');
    ?>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=62097af682558945435279fd"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
  <script src="<?php echo base_url('assets/js/webflow.js');?>" type="text/javascript"></script>  
  <script>
    // Next/previous controls        

    for (var i = 1; i <= <?php echo count($portfolios);?>; i++) 
        plusSlides(0, i);

    function plusSlides(n, index) {
        var slideIndex = $('#slideConter' + index).val();               
        slideIndex = parseInt(slideIndex) + n;
        showSlides(slideIndex, index);
    }    

    function showSlides(slideIndex, index) {
      var i;      
      var slides = document.getElementsByClassName("slide" + index);       
      if (slideIndex > slides.length) {slideIndex = 1}
      if (slideIndex < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }      
      slides[slideIndex-1].style.display = "flex";
      $('#slideConter' + index).val(slideIndex);
    }
  </script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

</html>