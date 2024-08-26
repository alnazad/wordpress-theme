<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link"  href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                            </li>
                            
                        </ul>
                    </div> -->
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary_menu',
                            'menu_class' => "navbar-nav me-auto mb-2 mb-lg-0",
                            "container_class" => "collapse navbar-collapse",
                            "container_id" => "navbarSupportedContent",
                            "walker" => new AWP_Menu_Walker(),
                            // 'items_wrap' => '%3$s',
                        )
                    );
                    ?>
                </div>
            </nav>
            <?php
            // the_custom_logo();

            ?>
        </div>
    </div>
    <div class="row">
        <h1>Home page</h1>
        <?php
        if (have_posts()) {
            while (have_posts()) : the_post();
        ?>
                <div class="col-4">
                    <h1>
                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    </h1>
                    <?php
                    the_post_thumbnail(array(100, 100))
                    ?>
                    <p><?php the_excerpt() ?></p>
                </div>
        <?php
            endwhile;
        } else {
            echo "No post found!";
        }
        ?>
    </div>
</div>
<?php
get_footer();
