<?php

function render_block_banner($attributes)
{
    $title = $attributes['title'];
    $action = $attributes['action'];
    $image_url = $attributes['image'];
    $mobile_image_url = $attributes['mobile_image'];

    ob_start(); // Start HTML buffering
    if ($image_url) :
?>
        <div class="comelli-hero-banner carousel-item">
            <img class="d-none d-sm-block" src="<?php echo $image_url; ?>" alt="">
            <img class="d-block d-sm-none" src="<?php echo $mobile_image_url; ?>" alt="">
            <div class="overlay position-absolute top-0 w-100 h-100 d-flex">
                <div class="container d-flex">
                    <div class="banner-content w-100 d-flex">
                        <!-- <div class="titles">
                            <h1 class="title"><?php echo $title; ?></h1>
                        </div> -->
                        <?php if ($action) : ?>
                            <div class="action">
                                <a class="btn btn-primary" href="<?php echo $action; ?>">Saiba Mais</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    endif;

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
