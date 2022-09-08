<?php
/* 
Template Name: Testimonial Page 
*/
?>

<?php get_header(); ?>

<section class="testimonial_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial_title">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="slider testimonial_item">
                    <?php if (class_exists('attachments')) { ?>
                        <?php
                        $attachments = new Attachments('my_attachments'); /* pass the instance name */
                        ?>
                        <?php if ($attachments->exist()) : ?>

                            <?php while ($attachment = $attachments->get()) : ?>
                                <div class="single_testimonial_item">

                                    <div>
                                        <div class="testimonial_content">
                                            <i class="fa fa-quote-right"></i>
                                            <p><?php echo $attachments->field('testimonial'); ?></p>
                                        </div>
                                        <?php echo $attachments->image('thumbnail'); ?>
                                        <div class="author_meta">
                                            <h2><?php echo $attachments->field('name'); ?></h2>
                                            <p>
                                                <?php
                                                echo $attachments->field('position');
                                                echo ", ";
                                                echo $attachments->field('company');
                                                ?>
                                            </p>

                                        </div>

                                    </div>
                                </div>
                            <?php endwhile; ?>

                        <?php endif; ?>
                    <?php } ?>



                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>