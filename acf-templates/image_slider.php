<?php
// Image slider layout for Pages Block
?>
<section class="two-columns-section image_slider section_spacing_top_small">
    <div class="container">

        <?php
        $row_class = '';
        $align_class = 'right';
        //Loopa 
        $category = get_sub_field('category');
        $heading = get_sub_field('heading');
        $description = get_sub_field('description');
        $images_to_the_right = get_sub_field('images_to_the_right');

        if ($images_to_the_right === 'false') {
            $row_class = 'reversed';
            $align_class = 'left';
        }
        ?>
        <div class="row <?php echo $row_class; ?>">

            <div class="col-lg-4">
                <?php if ($category) { ?>
                    <span class="category"><?php echo $category; ?></span>
                <?php } ?>

                <?php if ($heading) { ?>
                    <h2 class="heading"><?php echo $heading; ?></h2>
                <?php } ?>

                <?php if ($description) { ?>
                    <p class="description"><?php echo $description; ?></p>
                <?php } ?>
            </div>

            <div class="col-lg-8">
                <div class="image_slider_wrapper <?php echo $align_class; ?>">

                    <div class="big_images">
                        <?php if (have_rows('images')) {
                            while (have_rows('images')) {
                                the_row();

                                $image = get_sub_field('img');
                                if (!empty($image)) { ?>

                                    <img class="big_img_item"
                                        src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php
                                }
                            }
                        } ?>
                    </div>

                    <div class="thumbnails">
                        <?php if (have_rows('images')) {
                            while (have_rows('images')) {
                                the_row();

                                $image = get_sub_field('img');
                                if (!empty($image)) { ?>
                                    <img class="thumbnail_item"
                                        src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>