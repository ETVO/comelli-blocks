<?php

function render_block_present($attributes)
{
    $image_url = $attributes['image'];
    $text = $attributes['text'];

    ob_start(); // Start HTML buffering
?>
    <div class="comelli-present">
        <div class="container col-md-10 col-lg-9">
            <div class="row w-100 m-0">
                <div class="image col-12 col-lg-6">
                    <img src="<?php echo $image_url; ?>" alt="">
                </div>
                <div class="text col-12 col-lg-6">
                    <p><?php echo $text; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
