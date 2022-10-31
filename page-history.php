<?php
/*
Template Name: Наша история
*/
?>

<?php
get_header()
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('story_block_title') ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('first_story_title') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('first_story_descr') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php 
                    $image = get_field('first_story_photo');
                    if(!empty($image)):
                    ?>
                <img class="aboutus__img" 
                    src="<?php echo $image['url']; ?>" 
                    alt="<?php echo $image['alt']; ?>">
                <?php 
                    endif; 
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php 
                    $image = get_field('second_story_photo');
                    if(!empty($image)):
                    ?>
                <img class="aboutus__img" 
                    src="<?php echo $image['url']; ?>" 
                    alt="<?php echo $image['alt']; ?>">
                <?php 
                    endif; 
                ?>
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('second_story_title') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('second_story_descr') ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('third_story_title') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('third_story_descr') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php 
                    $image = get_field('third_story_photo');
                    if(!empty($image)):
                    ?>
                <img class="aboutus__img" 
                    src="<?php echo $image['url']; ?>" 
                    alt="<?php echo $image['alt']; ?>">
                <?php 
                    endif; 
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer()
?>