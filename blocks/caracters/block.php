<?php

function render_block_caracters($attributes, $content)
{

    ob_start(); // Start HTML buffering
?>
    <div class="comelli-caracters">
        <div class="container col-md-10 col-lg-9 col-xl-8">
            <h2 class="title">
                Características do Empreendimento
            </h2>
            <div class="row w-100 m-0">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
