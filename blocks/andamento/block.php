<?php

function render_block_andamento($attributes, $content)
{

    $title = $attributes['title'];

    ob_start(); // Start HTML buffering
?>

    <div class="comelli-andamento">

        <img class="texture" src="<?php echo THEME_IMG_URI . 'texture.jpg'; ?>" alt="">
        <div class="content">
            <div class="container col-md-10 col-lg-9">
                <h2 class="title"><?php echo $title; ?></h2>
                <div class="barras">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
