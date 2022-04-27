<?php

function render_block_hero($attributes, $content)
{

    $auto_slide = false;
    $interval = 5000;

    $block_id = 'comelli-hero' . rand(0, 100);

    ob_start(); // Start HTML buffering
?>

    <section class="comelli-hero carousel slide" data-bs-ride="<?php echo ($auto_slide) ? "carousel" : "false" ?>" <?php echo ($auto_slide) ? 'data-bs-interval="' . $interval . '"' : ""; ?>" data-bs-pause="false" data-custom-indicators="true" id="<?php echo $block_id; ?>">

        <div class="carousel-inner">
            <?php echo $content ?>
        </div>

        <div class="d-none d-lg-block">
            <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $block_id; ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo __("Anterior"); ?></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $block_id; ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden"><?php echo __("Próximo"); ?></span>
            </button>
        </div>

        <div class="d-flex d-lg-none">
            <div class="mx-auto d-flex mb-2">
                <button class="carousel-control-prev me-1" type="button" data-bs-target="#<?php echo $block_id; ?>" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"><?php echo __("Anterior"); ?></span>
                </button>
                <button class="carousel-control-next ms-1" type="button" data-bs-target="#<?php echo $block_id; ?>" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"><?php echo __("Próximo"); ?></span>
                </button>
            </div>
        </div>
    </section>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
