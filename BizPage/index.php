
<?php get_header() ?>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
              <?php $slider=new WP_Query(
              [
                'post_type'=>'slider',
                'orderby' => 'title', 
              'order' => 'ASC',
              'per_pa'
            ]); 
            $i=0;
          while($slider->have_posts()):$slider->the_post();
            ?>
            <!-- <div class="carousel-item <?php //if($i==0){echo 'active';} $i+=1; ?>">
              

              <div class="carousel-background"><?php //the_post_thumbnail('full') ?></div>
              <div class="carousel-container">
                <div class="carousel-content">
                <h1><?php //the_title() ?></h1>
                  <p><?php //the_content() ?></p>
                  <p><a class="btn-get-started scrollto" href="#featured-services">Sign up today</a></p>
                </div>
              </div>
            </div> -->

            <div class="carousel-item <?php if($i==0){echo 'active';} $i+=1; ?>">
            <div class="carousel-background"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php the_title() ?></h2>
                <p><?php the_content() ?></p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
            

        <header class="section-header">
        <h3><?php echo get_theme_mod('add_title_of_about','about') ?></h3>
          <p><?php echo get_theme_mod('add_about_of_about','about in') ?></p>
        </header>

        <div class="row about-cols">
            <?php $about=new WP_Query(
                  [
                    'post_type'=>'about',
                    'orderby' => 'title', 
                  'order' => 'ASC',
                  'posts_per_page'=>3,
                ]); 
                $i=0;
                while($about->have_posts()):$about->the_post();
                ?>

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
              <?php the_post_thumbnail(array(380, 187)) ?>
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#"><?php the_title() ?></a></h2>
              <p><?php the_content() ?></p>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
          <!-- <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div> -->

          <!-- <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
              </p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
        <h3><?php echo get_theme_mod('add_title_of_service','service') ?></h3>
          <p><?php echo get_theme_mod('add_about_of_service','service in') ?></p>
        </header>

        <div class="row">

        <?php $service=new WP_Query(
                  [
                    'post_type'=>'service',
                    'orderby' => 'title', 
                  'order' => 'ASC',
                  'posts_per_page'=>6,
                ]); 
                $i=0;
                while($service->have_posts()):$service->the_post();
                ?>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                  <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                  <h4 class="title"><a href=""><?php the_title() ?></a></h4>
                  <p class="description"><?php the_content() ?></p>
                </div>
          <?php endwhile; wp_reset_postdata(); ?>

          
          <!-- <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div> -->

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3><?php echo get_theme_mod('add_title_of_skill',"Skills") ?></h3>
          <p><?php echo get_theme_mod('add_about_of_skill',"Skills") ?></p>
        </header>

        <div class="skills-content">

        <?php $skills=new WP_Query(
                  [
                    'post_type'=>'skill',
                    'orderby' => 'title', 
                  'order' => 'ASC',
                  'posts_per_page'=>5,
                ]); 
                $i=0;
                while($skills->have_posts()):$skills->the_post();
                ?>
            <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span style="font-weight: bold; font-size:20px; padding-top:30px " class="skill"><?php the_title() ?><i class="val"><?php the_content() ?></i></span>
            </div>
          </div>
          <?php endwhile;  ?>

          

          <!-- <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div> -->

        </div>

      </div>
    </section>

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3><?php echo get_theme_mod('add_title_of_fact','Fact') ?></h3>
          <p><?php echo get_theme_mod('add_about_of_fact','Fact in') ?></p>
        </header>

        <div class="row counters">

        <?php $fact=new WP_Query(
                  [
                    'post_type'=>'fact',
                    'orderby' => 'title', 
                  'order' => 'ASC',
                  'posts_per_page' => 4,
                ]); 
                $i=0;
                while($fact->have_posts()):$fact->the_post();
                ?>
              <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php the_content() ?></span>
            <h2><?php the_title() ?></h2>
  				</div>
          
          <?php endwhile; wp_reset_postdata(); ?>

  				

          <!-- <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
  				</div> -->

  			</div>

        <div class="facts-img">
          <img src="<?php echo get_theme_mod('fact_image') ?>" alt="" class="img-fluid">
          
        </div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="<?php echo get_stylesheet_directory_uri() ?>./img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3><?php echo get_theme_mod('add_title_of_client', 'Our Client') ?></h3>
          <p><?php echo get_theme_mod('add_about_of_client', 'Our Client') ?></p>
        </header>

        <div class="owl-carousel clients-carousel">

        <?php $client=new WP_Query(
                  [
                    'post_type'=>'client',
                    'orderby' => 'title', 
                  'order' => 'ASC',
                  'posts_per_page'=>3,
                ]); 
                $i=0;
                while($client->have_posts()):$client->the_post();
                ?>

          
              <div class="img">
              <?php the_post_thumbnail(array(380, 187)) ?>
              </div>
              
          <?php endwhile; wp_reset_postdata(); ?>

          <!-- <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/clients/client-1.png" alt="">
          <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/clients/client-2.png" alt="">
          <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/clients/client-3.png" alt="">
          <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/clients/client-4.png" alt="">
          <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/clients/client-5.png" alt="">
          <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/clients/client-6.png" alt="">
          <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/clients/client-7.png" alt="">
          <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/clients/client-8.png" alt=""> -->
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp" style="background:#da206369">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">
        <?php $testimonial=new WP_Query(
                  [
                    'post_type'=>'testimonial',
                    'orderby' => 'title', 
                  'order' => 'ASC',
                  'posts_per_page'=>4,
                ]); 
                if($testimonial->have_posts()){
                while($testimonial->have_posts()):$testimonial->the_post();
                ?>
          <div class="testimonial-item">
            <!-- <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/testimonial-1.jpg" class="testimonial-img" alt=""> -->
            <div class="testimonial-img" style="width:300px;"><?php the_post_thumbnail(array(100, 100)) ?></div>
            
            <h3><?php the_title() ?></h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="<?php echo get_stylesheet_directory_uri() ?>./img/quote-sign-left.png" class="quote-sign-left" alt="">
              <?php the_content() ?>
              <img src="<?php echo get_stylesheet_directory_uri() ?>./img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
          <?php endwhile; } ?>

          <!-- <div class="testimonial-item">
            <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/testimonial-2.jpg" class="testimonial-img" alt="">
            
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div> -->

          <!-- <div class="testimonial-item">
            <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div> -->

          <!-- <div class="testimonial-item">
            <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div> -->

          <!-- <div class="testimonial-item">
            <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div> -->

        </div>

      </div>
    </section><!-- #testimonials -->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Latest News</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">
          <?php if (have_posts()){
            while (have_posts()): the_post(); ?>
          
          <a href="<?php the_permalink() ?>">
            <div class="testimonial-item">
            <div class="testimonial-img" style="width:600px"><?php the_post_thumbnail(array(380, 187)) ?></div>
              <h3><?php the_title() ?></h3>
              <p>
               <?php the_excerpt() ?>
              </p>
            </div>
          </a>
          <?php
          endwhile;
          } ?>
        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3><?php echo get_theme_mod('add_title_of_Team', 'Team') ?></h3>
          <p><?php echo get_theme_mod('add_about_of_Team', 'Our Team') ?></p>
        </div>

        <div class="row">
            
        
        <?php $team=new WP_Query(
                  [
                    'post_type'=>'team',
                    'orderby' => 'title', 
                  'order' => 'ASC',
                  'posts_per_page'=>4,
                ]); 
                if($team->have_posts()){
                while($team->have_posts()):$team->the_post();
                ?>

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <!-- <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/team-1.jpg" class="img-fluid" alt=""> -->
              <?php the_post_thumbnail(array(380, 187)) ?>
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?php the_title() ?></h4>
                  <span><?php the_content() ?></span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata();} ?>
          
          <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="<?php //echo get_stylesheet_directory_uri() ?>./img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3><?php echo get_theme_mod('add_title_of_contract','Contract') ?></h3>
          <p><?php echo get_theme_mod('add_about_of_contract','Contract') ?></p>
        </div>

        <div class="row contact-info">

        <?php $contract=new WP_Query(
                  [
                    'post_type'=>'contract',
                    'orderby' => 'title', 
                  'order' => 'ASC',
                  'posts_per_page'=>3,
                ]); 
                if($contract->have_posts()){
                while($contract->have_posts()):$contract->the_post();
                ?>
          

            <div class="col-md-4">
            <div class="contact-phone">
                <?php the_post_thumbnail() ?>
                
                <h3><?php the_title() ?></h3>
                <address><?php the_content() ?></address>
              </div>
            </div>
          <?php endwhile; wp_reset_postdata();} ?>
          <!-- <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+880-1580331370</a></p>
            </div>
          </div> -->

          <!-- <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">abdullahalnazad850@gmail.com</a></p>
            </div>
          </div> -->

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
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
<?php get_footer() ?>