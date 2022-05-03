<?php

function render_block_slide($attributes)
{
    $title = $attributes['title'];
    $image_url = $attributes['image'];

    ob_start(); // Start HTML buffering
    if ($image_url) :
?>
        <div class="comelli-slide carousel-item">
            <img src="<?php echo $image_url; ?>" alt="">
            <div class="overlay">
                <h5><?php echo $title; ?></h5>
            </div>
        </div>
<?php
    endif;

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
