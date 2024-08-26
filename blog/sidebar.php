<h1>this is sidebar</h1>

<?php
dynamic_sidebar('sidebar-1')
?>
<h1>----------------</h1>
<?php
dynamic_sidebar('sidebar-2')
?>
<h1>-----------------</h1>
<?php
$slider=new WP_Query(
    [
      'post_type'=>'slider',
      'orderby' => 'title', 
    'order' => 'ASC',
    'per_pa'
  ]); 
while($slider->have_posts()):$slider->the_post();?>
<?php the_post_thumbnail('thumbnail') ?>
<?php endwhile;?>
<?php echo do_shortcode( '[contact_form]' ); ?>