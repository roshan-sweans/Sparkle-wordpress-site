<?php

/**
 * Template part for the home page of the website
 * 
 */
?>

<article class="sparkle-article">
    <div class="article-content">
        <div class="article-head">
            <div class="line1"><?php the_field("heading_line_1") ?></div>
            <div class="line2"><?php the_field("heading_line_2") ?></div>
        </div>
        <div class="article-text">
            <?php the_field("article_content") ?>
        </div>
    </div>
    <?php
    $img = get_field("article_logo")
    ?>
    <img src="<?php echo esc_url($img["url"]) ?>" alt="<?php echo esc_attr($img["alt"]) ?>" class="article-icon">
</article>
<?php $image = get_field("services_background_image"); ?>
<div class="services" style="background-image:url(<?php echo esc_url($image["url"]) ?>);">
    <div class="services-head">
        <div class="s-head"><?php the_field("services_heading") ?></div>
        <?php $ic = get_field("services_icon_i") ?>
        <div class="serv-icon-contain">
            <div class="line"></div>
            <img class="serv-icon" src="<?php echo esc_url($ic["url"]) ?>" alt="<?php echo esc_attr($ic["alt"]) ?>">
            <div class="line"></div>
        </div>
    </div>
    <div id="services" class="owl-carousel owl-theme">
        <?php query_posts(array(
            "post_type" => "services",
            "post_per_page" => -1
        ));
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?> <div class="item">
                    <a href="<?php echo  esc_url(get_permalink()) ?>">
                        <div class="post-service">
                            <?php $icon = get_field("service_icon") ?>
                            <div class="s-icon">
                                <img class="service-icon" src="<?php echo esc_url($icon["url"]) ?>" alt="<?php echo esc_attr($icon["alt"]) ?>">
                            </div>

                            <div class="short-head-services">
                                <?php the_field("short_headline"); ?>
                            </div>
                            <div class="excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </a>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_query();
        ?>
    </div>
</div>
<div class="doctors">
    <div class="float-contain">
        <?php $image = get_field("smart_image"); ?>
        <img src="<?php echo esc_url($image["url"]) ?>" alt="<?php echo esc_attr($image["alt"]) ?>" class="smart-vector">
    </div>
    <div class="services-head">
        <div class="s-head"><?php the_field("doctor_head") ?></div>
        <div class="serv-icon-contain">
            <div class="line"></div>
            <img class="serv-icon" src="<?php echo esc_url($ic["url"]) ?>" alt="<?php echo esc_attr($ic["alt"]) ?>">
            <div class="line"></div>
        </div>
    </div>
    <!-- <div id="docs" class="owl-carousel owl-theme"> -->
        <?php query_posts(array(
            "post_type" => "doctors",
            "post_per_page" => -1
        ));
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <div class="item">
                    <div class="doc-card">
                        <?php $d_img  =  get_field("display_picture"); ?>
                        <div class="doc-image">
                            <img src="<?php echo esc_url($d_img["url"]) ?>" alt="<?php echo esc_attr($d_img["alt"]) ?>">
                        </div>
                        <div class="doc-details">
                            <div class="doc-content">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="doc-name">Dr.
                                <?php the_title(); ?>
                            </div>
                            <div class="department">
                                <?php $terms = wp_get_post_terms(get_the_ID(), array('department'));
                                foreach ($terms as $term) :
                                    echo $term->name; ?>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif; 
        wp_reset_query();?>
    <!-- </div> -->



<!-- This is the testimonials are displayed  -->


    <?php $image = get_field("testimonial_background_image"); ?>
    <div class="services" style="background-image:url(<?php echo esc_url($image["url"]) ?>);">
    <div class="services-head">
        <div class="s-head t-head"><?php the_field("testimonial_heading") ?></div>
        <?php $ic = get_field("services_icon_i") ?>
        <div class="serv-icon-contain">
            <div class="line"></div>
            <img class="serv-icon" src="<?php echo esc_url($ic["url"]) ?>" alt="<?php echo esc_attr($ic["alt"]) ?>">
            <div class="line"></div>
        </div>
    </div>

    <!-- <div id="testimonials" class="owl-carousel owl-theme"> -->

        <?php query_posts(array(
            "post_type" => "testimonials",
            "post_per_page" => 3
        ));
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?> <div class="item">
                    <a href="<?php echo  esc_url(get_permalink()) ?>">
                        <div class="post-service">
                            <img src="<?php get_template_directory_uri().'/images/quote.png' ?>" alt="Quote icon" class="special-icon">
                            <div class="short-head-services">
                                <?php the_title(); ?>
                            </div>
                            <div class="excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <?php $icon = get_field("display_picture") ?>
                            <div class="t-icon">
                                <img class="testimonial-icon" src="<?php echo esc_url($icon["url"]) ?>" alt="<?php echo esc_attr($icon["alt"]) ?>">
                            </div>
                        </div>
                    </a>
                </div>
        <?php
            endwhile;
        endif;
        wp_reset_query();
        ?>
    </div>
</div>