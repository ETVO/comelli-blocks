<?php

function render_block_plantas($attributes, $content)
{
    $title = $attributes['title'];
    if($title == '') $title = 'Características do Empreendimento';

    ob_start(); // Start HTML buffering
?>
    <div class="comelli-plantas">
        <div class="container col-md-10 col-xl-8">
            <h2 class="title">
                <?php echo $title; ?>
            </h2>
            <div class="row w-100 m-0 g-3">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
