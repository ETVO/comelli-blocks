<?php

function render_block_photos($attributes)
{
    $title = $attributes['title'];
    if ($title == '') $title = 'Fotos do Empreendimento';
    $images = $attributes['images'];

    $auto_slide = false;
    $interval = 5000;

    $block_id = 'comelliPhotos' . rand(0, 100);

    ob_start(); // Start HTML buffering
    if (count($images) > 0) :
?>
        <div class="comelli-photos">

            <h2 class="title">
                <?php echo $title; ?>
                </h1>

                <div class="container col-md-10 col-lg-12 col-xl-9">
                    <div class="row mx-auto my-auto justify-content-center">
                        <div class="multi-carousel carousel slide" data-bs-ride="<?php echo ($auto_slide) ? "carousel" : "false" ?>" <?php echo ($auto_slide) ? 'data-bs-interval="' . $interval . '"' : ""; ?> data-bs-pause="false" id="<?php echo $block_id; ?>">
                            <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $block_id; ?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"><?php echo __("Anterior"); ?></span>
                            </button>
                            <div class="carousel-inner">
                                <?php foreach ($images as $image) : ?>
                                    <div class="carousel-item">
                                        <div class="inner col-md-6">
                                            <img src="<?php echo $image['url']; ?>" alt="">
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>
                            <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $block_id; ?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"><?php echo __("Próximo"); ?></span>
                            </button>
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
