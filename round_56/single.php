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
        <?php
        if (have_posts()) {
            $i=0;
            while (have_posts()) : the_post();
            $i+=1;
        ?>
            <div class="col-12">
                <h1>
                    <?php the_title() ?>
                </h1>
                <em><?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></em><br>
                <?php  
                the_post_thumbnail('full')
                ?>
                <p><?php the_content() ?></p>
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
