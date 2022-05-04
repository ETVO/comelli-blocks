<?php

function render_block_title($attributes)
{
    $title = $attributes['title'];
    $image_url = $attributes['image'];

    ob_start(); // Start HTML buffering
    if ($image_url) :
?>
        <div class="comelli-title">
            <img src="<?php echo $image_url; ?>" alt="">
            <div class="overlay position-absolute top-0 w-100 h-100 d-flex">
                <div class="container d-flex">
                    <div class="inner">
                        <h1 class="title text-break"><?php echo $title; ?></h1>
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
