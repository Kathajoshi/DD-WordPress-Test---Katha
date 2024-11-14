<?php
get_header(); 


$start_date = get_field('start_date');
$end_date = get_field('end_date');
?>

<div class="deer-tests-container">
    <h1 class="deer-tests-heading">Deer Tests</h1>
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="card">
            <?php
            // Get the ACF field 'cover_image'
            $image = get_field('cover_image');
            // Use the featured image as a fallback
            if (!empty($image)) {
                $image_url = esc_url($image['url']);
                $image_alt = esc_attr($image['alt']);
            } elseif (has_post_thumbnail()) {
                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                $image_alt = get_the_title();
            } else {
                $image_url = 'https://via.placeholder.com/600'; // Optional: Placeholder image if no image is set
                $image_alt = 'Placeholder Image';
            }
            ?>

            <a class="deer-test-read-more" href="<?php the_permalink(); ?>">
                <div class="main-header">

                    <div class="card__header">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="card__image"
                            width="600">
                    </div>
                    
                    <div class="card__body">
                        <div class="date-ctm">
    
                            <?php if ($start_date) : ?>
                            <span class="ctm-icon-box">
                                <div class="image-ctm">
                                    <img src="http://localhost/dd-wordpress-test/wp-content/uploads/2024/11/timetable.png"
                                        alt="" srcset="">
                                </div>
                                <span class="ctm-p">
                                    <span class="main-date">
                                        <strong>Start Date:</strong>
                                    </span>
                                    <div class="main-date-ctm">
                                        <?php echo esc_html($start_date); ?></div>
                                </span>
                            </span>
                            <?php endif; ?>
                            <?php if ($end_date) : ?>
                            <span class="ctm-icon-box">
                                <div class="image-ctm">
                                    <img src="http://localhost/dd-wordpress-test/wp-content/uploads/2024/11/timetable.png"
                                        alt="" srcset="">
                                </div>
                                <span class="ctm-p"><strong>End Date:</strong> <?php echo esc_html($end_date); ?></span>
                            </span>
                            <?php endif; ?>
                        </div>
                        <h4><?php the_title(); ?></h4>
                        <div class="ctm-ptag"><?php the_excerpt(); ?></div>
                    </div>

                </div>


                <div class="card__footer">
                    <div class="user">
                        <span class="deer-test-read-more">Read More</span>
                    </div>
                </div>
            </a>
        </div>

        <?php endwhile; else : ?>
        <p>No Deer Tests found.</p>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
?>