<?php
get_header(); ?>

<div class="deer-test-single-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="deer-test-single">


        <?php 
            // Display the cover image from ACF or fallback to featured image
            $cover_image = get_field('cover_image');
            if ($cover_image) : ?>
        <div class="deer-test-cover-image">
            <img src="<?php echo esc_url($cover_image['url']); ?>" alt="<?php the_title(); ?>">
        </div>
        <?php elseif (has_post_thumbnail()) : ?>
        <div class="deer-test-cover-image">
            <?php the_post_thumbnail('large'); ?>
        </div>
        <?php endif; ?>

        <div class="deer-test-details">

            <h1 class="deer-test-title"><?php the_title(); ?></h1>
            <?php
                // Fetch ACF fields
                $start_date = get_field('start_date');
                $end_date = get_field('end_date');
                $application_link = get_field('application_link');
                $description = get_field('description');

                ?>

            <div class="deer-test-meta">
                <?php if ($start_date) : ?>
                <span>
                    <div class="image-ctm">
                        <img src="http://localhost/dd-wordpress-test/wp-content/uploads/2024/11/timetable.png" alt=""
                            srcset="">
                    </div><span class="ctm-p"><strong>Start Date:</strong>
                        <?php echo esc_html($start_date); ?></span>
                </span>
                <?php endif; ?>
                <?php if ($end_date) : ?>
                <span>
                    <div class="image-ctm">
                        <img src="http://localhost/dd-wordpress-test/wp-content/uploads/2024/11/timetable.png" alt=""
                            srcset="">
                    </div>
                    <span class="ctm-p"><strong>End Date:</strong> <?php echo esc_html($end_date); ?></span>
                </span>
                <?php endif; ?>

            </div>

            <div class="deer-test-content">
                <p><?php echo strip_tags($description); ?>
                </p>
            </div>

            <?php if ($application_link) : ?>
            <div class="btn-apply"><a href="<?php echo esc_url($application_link['url']); ?>"
                target="<?php echo ($application_link['target']); ?>">Apply Now</a></div>
            <?php endif; ?>
        </div>
    </div>
    <?php endwhile; endif; ?>
</div>

<?php
get_footer();
?>