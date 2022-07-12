<?php

function render_block_slider($attributes, $content)
{
    $title = $attributes['title'];
    
    $auto_slide = true;
    $interval = 7000;

    $id = 'slider' . rand(0, 999);

    ob_start(); // Start HTML buffering
?>
    <div class="comelli-slider">

        <div class="content">
            <div class="container d-flex col-md-10 col-lg-9 mx-auto">
                <div class="m-auto">
                    <h2 class="title text-center">nossos valores</h2>
                    <div class="carousel slide" data-bs-ride="<?php echo ($auto_slide) ? "carousel" : "false" ?>" <?php echo ($auto_slide) ? 'data-bs-interval="' . $interval . '"' : ""; ?>" data-bs-pause="false" data-custom-indicators="true" id="<?php echo $id; ?>">
                        <div class="carousel-inner">
                            <?php echo $content; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $id; ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $id; ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
