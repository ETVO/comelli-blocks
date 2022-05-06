<?php

function render_block_carac($attributes)
{
    $title = $attributes['title'];
    $icon_url = $attributes['icon'];

    ob_start(); // Start HTML buffering
    if ($icon_url) :
?>
        <div class="comelli-carac col-6 col-lg-4 col-xxl-3 mx-auto">
            <div class="inner">
                <img class="icon" src="<?php echo $icon_url; ?>" alt="">
                <h6 class="name"><?php echo $title; ?></h6>
            </div>
        </div>
<?php
    endif;

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
