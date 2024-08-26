<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary_menu'
                )
            );
            ?>
        </div>
    </div>
    <div class="row">
        <h1>Politics</h1>
        <?php
        if (have_posts()) {
            $i = 0;
            while (have_posts()) : the_post();
                $i += 1;
        ?>
                <div class="col-12">
                    <h1 style="background: green; color:red">
                        <a href="<?php the_permalink() ?>" style="color:red"><?php the_title() ?></a>
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
