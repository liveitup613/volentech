<?php
    header('Access-Control-Allow-Origin: *');
?>
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
    <section data-w-id="57d3c755-db9e-0845-8dbe-6719d43fd1e2" class="section home-hero wf-section">
      <div class="container-default w-container">
        <h1 data-w-id="553af6a3-865f-d37b-3150-a1d3d3c08f62"
          style="opacity:0;-webkit-transform:translate3d(0, 0, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.9, 0.9, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
          class="title display-1 home-hero">We are a fine Engineering Firm in <span class="no-wrap">California</span>
        </h1>
        <p style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="paragraph-large home-hero">As a premier group of Engineers we bring ideas and concepts into reality
          working with a wide range of Technologies.</p>
        <div
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="home-hero-content-bottom">
          <h1 class="title home-hero">Where creativity meets productivity</h1>
          <a href="#home-services" data-w-id="e43530a2-a9ef-963b-a9aa-f9eaffb60e7b"
            class="home-hero-scroll-down-wrapper w-inline-block">
            <div
              style="-webkit-transform:translate3d(0, -185%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -185%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -185%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -185%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
              class="home-hero-scroll-down-arrow"></div>
          </a>
        </div>
        <div style="opacity:0" class="image-wrapper home-hero">
          <div class="hover-panel">            
          </div>          
          <video src="<?php echo base_url('assets/images/background.mp4');?>" class="image home-hero" muted loop autoplay></video>                    
        </div>           
      </div>
      <div class="bg page-lines-wrapper">
        <div style="filter:invert(100%);width:0px" class="page-lines-outside">
          <div class="page-lines-inside"></div>
        </div>
      </div>
      <div class="bg home-hero">
        <div class="bg page-lines-wrapper">
          <div class="page-lines-outside dark">
            <div class="page-lines-inside dark"></div>
          </div>
        </div>
      </div>
    </section>
    <section id="home-services" class="section padding-240px bg-neutral-800 wf-section">
      <div class="container-default w-container">
        <div data-w-id="cfa66492-4bb4-45bd-9f22-34765dea0288"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="home-services-content-top">          
          <h2 class="title color-neutral-100 home-services">Our services</h2>
          <p class="paragraph color-neutral-400 home-services">We have a broad range of expertise in Hardware, Software and Firmware development</p>
        </div>
        <div data-delay="4000" data-animation="slide" class="home-services-slider w-slider" data-autoplay="false"
          data-easing="ease"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          data-hide-arrows="false" data-disable-swipe="false" data-w-id="5d0cfc5a-b05b-5064-51dc-29b93e3bd66f"
          data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
          <div class="home-services-mask w-slider-mask">
            <div class="home-service-slide w-slide">
              <a href="<?php echo base_url('service/hardware');?>" class="service-item-wrapper w-inline-block">
                <div class="image-wrapper service-item"><img src="<?php echo base_url('assets/images/service1.jpg');?>"
                    loading="eager"
                    sizes="(max-width: 479px) 93vw, (max-width: 767px) 94vw, (max-width: 991px) 46vw, (max-width: 1919px) 30vw, 390.296875px"
                    srcset="<?php echo base_url('assets/images/service1-500.png');?> 500w, <?php echo base_url('assets/images/service1.png');?> 780w"
                    alt="Architectural Design - Architecture X Webflow Template" class="image service-item"></div>
                <div class="service-item-content">
                  <h3 class="title h3-size home-services">Hardware Design</h3>
                  <p class="paragraph service-item home-services">We offer a comprehensive electronic product design solution at a minimal cost and fastest turn-time</p>
                  <div class="link-underline-wrapper color-neutral-100">
                    <div>View service</div>
                    <div class="underline-wrapper dark">
                      <div class="underline bg-neutral-100"></div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="home-service-slide w-slide">
              <a href="<?php echo base_url('service/embedded');?>" class="service-item-wrapper w-inline-block">
                <div class="image-wrapper service-item"><img src="<?php echo base_url('assets/images/service2.png');?>"
                    loading="eager"
                    sizes="(max-width: 479px) 93vw, (max-width: 767px) 94vw, (max-width: 991px) 46vw, (max-width: 1919px) 30vw, 390.296875px"
                    srcset="<?php echo base_url('assets/images/service2-500.png');?> 500w, <?php echo base_url('assets/images/service2.png');?> 780w"
                    alt="Interior Design - Architecture X Webflow Template" class="image service-item"></div>
                <div class="service-item-content">
                  <h3 class="title h3-size home-services">Embedded Firmware Design</h3>
                  <p class="paragraph service-item home-services">We develop custom Embedded firmware solutions from scratch to integrate with a wide range of hardware products</p>
                  <div class="link-underline-wrapper color-neutral-100">
                    <div>View service</div>
                    <div class="underline-wrapper dark">
                      <div class="underline bg-neutral-100"></div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="home-service-slide w-slide">
              <a href="<?php echo base_url('service/software');?>" class="service-item-wrapper w-inline-block">
                <div class="image-wrapper service-item"><img src="<?php echo base_url('assets/images/service3.png');?>"
                    loading="eager"
                    sizes="(max-width: 479px) 93vw, (max-width: 767px) 94vw, (max-width: 991px) 46vw, (max-width: 1919px) 30vw, 390.296875px"
                    srcset="<?php echo base_url('assets/images/service3-500.png');?> 500w, <?php echo base_url('assets/images/service3.png');?> 780w"
                    alt="Space Planning - Architecture X Webflow Template" class="image service-item"></div>
                <div class="service-item-content">
                  <h3 class="title h3-size home-services">Software Development</h3>
                  <p class="paragraph service-item home-services">Our expertise in various programming languages essentially satisfy our customers with range of applications</p>
                  <div class="link-underline-wrapper color-neutral-100">
                    <div>View service</div>
                    <div class="underline-wrapper dark">
                      <div class="underline bg-neutral-100"></div>
                    </div>
                  </div>
                </div>
              </a>
            </div>            
          </div>          
          <div class="slide-nav w-slider-nav w-round"></div>
        </div>
      </div>
      <div class="bg page-lines-wrapper">
        <div class="page-lines-outside dark">
          <div class="page-lines-inside dark"></div>
        </div>
      </div>
    </section>
    <section class="section wf-section">
      <div class="container-default w-container">
        <div data-w-id="21e99aaa-b226-b7ae-34e1-9618a1a378bc"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="home-about-wrapper">
          <div class="image-wrapper home-about"><img src="<?php echo base_url('assets/images/image-home-about-architecture-x-template.png');?>"
              loading="eager" sizes="(max-width: 479px) 93vw, (max-width: 767px) 94vw, (max-width: 991px) 95vw, 816px"
              srcset="<?php echo base_url('assets/images/image-home-about-architecture-x-template-p-500.png');?> 500w, <?php echo base_url('assets/images/image-home-about-architecture-x-template.png');?> 1632w"
              alt="About Us - Architecture X Webflow Template" class="image home-about"></div>
          <div class="home-about-content">            
            <h2 class="title home-about">About our firm</h2>
            <p class="paragraph home-about">Volentech is a multi-discipline engineering design firm experienced in the latest cutting edge technologies offering our customers innovative solutions in Hardware, Firmware, Embedded and Software applications. We deliver projects with complete customer satisfaction using end user feedbacks.</p>
            <a href="<?php echo base_url('about');?>" class="button-primary w-button">Learn More  <span class="button-arrow"></span></a>
          </div>
        </div>
      </div>
      <div class="bg page-lines-wrapper">
        <div style="filter:invert(100%);width:0px" class="page-lines-outside">
          <div class="page-lines-inside"></div>
        </div>
      </div>
    </section>
    <section class="section bg-neutral-800 wf-section">
      <div class="container-default w-container">
        <div class="cta-wrapper">
          <h2 data-w-id="268b4553-3866-b42d-d8c1-c33a8931c248" class="title color-neutral-100 cta">Get in touch today to
            get a free project quote.</h2>
          <div data-w-id="268b4553-3866-b42d-d8c1-c33a8931c24a" class="_2-buttons">
            <a href="<?php echo base_url('contact');?>" class="button-primary button-white _2-buttons-button w-button">Get in touch  <span
                class="button-arrow"></span></a>
            <a href="<?php echo base_url('about');?>" class="button-secondary button-white _2-buttons-button w-button">Browse services</a>
          </div>
        </div>
      </div>
    </section>
    <section class="section padding-240px wf-section">
      <div class="container-default w-container">
        <div data-w-id="c5418fc2-dea6-fe29-f1eb-cf1619c0c2cd"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="content-top home-portfolio">
          <div class="split-content content-top-home-portfolio-left">            
            <h2 class="title home-portfolio">Our portfolio</h2>
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
      </div>
      <div class="bg page-lines-wrapper">
        <div style="filter:invert(100%);width:0px" class="page-lines-outside">
          <div class="page-lines-inside"></div>
        </div>
      </div>
    </section>
    <section class="section bg-neutral-800 wf-section">
      <div class="container-default w-container">
        <div data-w-id="abac474b-8276-17ea-2a02-ab696d3fd815"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="home-project-featured-wrapper">
          <div class="home-project-featured-content">            
            <h2 class="title color-neutral-100 home-project-featured-title">Take a look at our most recent project</h2>            
            <a href="<?php echo base_url('contact');?>" class="button-primary button-white w-button" style="margin-top: 1rem">Get in touch  <span
                class="button-arrow"></span></a>
          </div>
          <div class="home-project-featured-video-button-wrapper">
            <a href="#" data-w-id="2e4bc713-c11d-72d4-d327-91a5a53a6a09"
              class="home-project-featured-video-button w-inline-block w-lightbox"><img
                src="<?php echo base_url('assets/images/icon-play-button-architecture-x-template.svg');?>" loading="eager"
                alt="Play Icon - Architecture X Webflow Template" class="image home-project-featured-video-button-icon">
              <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "https://youtube.com/watch?v=iKw3OCmTmgg",
      "originalUrl": "https://youtube.com/watch?v=iKw3OCmTmgg",
      "width": 940,
      "height": 528,
      "thumbnailUrl": "http://i.ytimg.com/vi/iKw3OCmTmgg/hqdefault.jpg",
      "html": "<iframe class=\"embedly-embed\" src=\"https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FiKw3OCmTmgg&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DiKw3OCmTmgg&image=http%3A%2F%2Fi.ytimg.com%2Fvi%2FiKw3OCmTmgg%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube\" width=\"940\" height=\"528\" scrolling=\"no\" title=\"YouTube embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>",
      "type": "video"
    }
  ],
  "group": ""
}</script>
            </a>
          </div>
          <div class="image-wrapper home-project-featured"><img
              src="<?php echo base_url('assets/images/image-home-project-architecture-x-template.png');?>" loading="eager"
              sizes="(max-width: 479px) 93vw, (max-width: 767px) 94vw, (max-width: 1919px) 95vw, 1176px"
              srcset="<?php echo base_url('assets/images/image-home-project-architecture-x-template-p-500.png');?> 500w, <?php echo base_url('assets/images/image-home-project-architecture-x-template-p-800.png');?> 800w, <?php echo base_url('assets/images/image-home-project-architecture-x-template-p-1600.png');?> 1600w, <?php echo base_url('assets/images/image-home-project-architecture-x-template-p-2000.png');?> 2000w, <?php echo base_url('assets/images/image-home-project-architecture-x-template.png');?> 2352w"
              alt="Hire Architects - Architecture X Webflow Template" class="image home-project-featured">
            <div class="bg home-project-featured-filter"></div>
          </div>
        </div>
      </div>
      <div class="bg page-lines-wrapper">
        <div class="page-lines-outside dark">
          <div class="page-lines-inside dark"></div>
        </div>
      </div>
    </section>
    <section class="section padding-240px wf-section">
      <div class="container-default w-container">
        <div data-w-id="00df75c9-5790-33b1-2bf8-b8433f789867"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="home-testimonial-title-wrapper">          
          <h2 class="title home-testimonial">What our <span class="no-wrap">clients say</span></h2>
        </div>
        <div data-delay="4000" data-animation="slide" class="home-services-slider w-slider" data-autoplay="false"
          data-easing="ease"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          data-hide-arrows="false" data-disable-swipe="false" data-w-id="5d0cfc5a-b05b-5064-51dc-29b93e3bd66f"
          data-autoplay-limit="0" data-nav-spacing="1" data-duration="500" data-infinite="true">
          <div class="home-services-mask w-slider-mask">
              <?php
                foreach ($comments as $comment) 
                {
                    ?>                  
            <div class="clients-slide w-slide">              
              <div data-w-id="9ac9e72c-b2a3-e44f-f928-4458189ae6af"
                style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="home-testimonial-wrapper">
                <div class="image-wrapper testimonial"><img src="<?php echo base_url('assets/images/image-testimonials-architecture-x-template.png');?>"
                    loading="eager" sizes="(max-width: 479px) 93vw, (max-width: 767px) 94vw, (max-width: 991px) 95vw, 897px"
                    srcset="<?php echo base_url('assets/images/image-testimonials-architecture-x-template-p-500.png');?> 500w, <?php echo base_url('assets/images/image-testimonials-architecture-x-template-p-800.png');?> 800w, <?php echo base_url('assets/images/image-testimonials-architecture-x-template-p-1080.png');?> 1080w, <?php echo base_url('assets/images/image-testimonials-architecture-x-template-p-1600.png');?> 1600w, <?php echo base_url('assets/images/image-testimonials-architecture-x-template.png');?> 1794w"
                    alt="Testimonial House - Architecture X Webflow Template" class="image testimonial"></div>
                <div class="card testimonial">
                  <h3 class="title card-testimonial"><?php echo $comment['Title'];?></h3>
                  <p class="paragraph card-testimonial"><?php echo $comment['Content'];?></p>
                  <div class="card-testimonial-content-bottom"><img
                      src="<?php echo base_url('assets/images/image-testimonial-architecture-x-template_1image-testimonial-architecture-x-template.jpg');?>"
                      loading="eager" alt="Testimonial - Architecture X Webflow Template" class="image card-testimonial">
                    <div class="card-testimonial-name-wrapper">
                      <div class="card-testimonial-name"><?php echo $comment['Author'];?></div>
                      <div class="card-testimonial-rol"><?php echo $comment['Location'];?></div>
                    </div>
                  </div>
                </div>
              </div>              
            </div>
                <?php
                }

                if (count($comments) == 0) {
                    echo '
                    <div class="empty-state w-dyn-empty">
                        <div>No items found.</div>
                    </div>
                    ';
                }
                ?>                        
          </div>
          <?php
            if (count($comments) != 0) 
            {
                ?>
              
          <div class="slide-left-arrow w-slider-arrow-left dark-border">
            <div></div>
          </div>
          <div class="slide-right-arrow w-slider-arrow-right dark-border">
            <div></div>
          </div>
          <?php
            }
            ?>
          <div class="slide-nav w-slider-nav w-round"></div>
        </div>                
      </div>
      <div class="bg page-lines-wrapper">
        <div style="filter:invert(100%);width:0px" class="page-lines-outside">
          <div class="page-lines-inside"></div>
        </div>
      </div>
    </section>
    <section class="section padding-240px bg-neutral-800 wf-section">
      <div class="container-default w-container">
        <div data-w-id="6c4d6b55-f0c1-9be4-33e9-42b8d9349df2"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="content-top blog-section">
          <div class="split-content content-top-blog-section-left">            
            <h2 class="title color-neutral-100 blog-section">News &amp; Articles</h2>
          </div>          
        </div>
        <div data-w-id="9ea82a3c-cb89-1c6f-9fdd-792e333e0898"
          style="-webkit-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 40px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
          class="w-dyn-list">
          <div role="list" class="blog-grid blog-section-grid w-dyn-items">
            <?php
                foreach ($articles as $article) 
                {
            ?>
                    
            <div role="listitem" class="post-item w-dyn-item">
              <a href="<?php echo $article['Link'];?>" class="post-item-wrapper w-inline-block" target="blank">
                <div class="image-wrapper post-item-image">
                    <img src="<?php echo base_url('assets/images/articles/'.$article['Image']);?>" loading="eager" alt=""
                    class="image post-item-image">
                </div>
                <div class="post-item-content">
                  <div class="post-item-content-top color-neutral-500">
                    <div><?php echo getFormatedDate($article['Date']);?></div>
                    <div class="post-item-content-top-divider bg-neutral-600"></div>
                    <div class="post-item-reading-time">
                      <div class="post-item-reading-time-number"><?php echo $article['Duration'];?></div>
                      <div>min read</div>
                    </div>
                  </div>
                  <h3 class="title post-item-title color-neutral-100"><?php echo $article['Title'];?></h3>
                  <div class="link-underline-wrapper color-neutral-100 weight-medium">
                    <div>Read more</div>
                    <div class="underline-wrapper dark">
                      <div class="underline bg-neutral-100"></div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <?php
                }
              ?>
          </div>
            <?php 
            if (count($articles) == 0)
                echo '<div class="empty-state w-dyn-empty">
                        <div>We haven&#x27;t added any articles.</div>
                    </div>';
            ?>
        </div>
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