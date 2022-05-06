<?php

function render_block_planta($attributes)
{
    $number = $attributes['number'];
    $image = $attributes['image'];
    $minimap = $attributes['minimap'];
    $area = $attributes['area'];
    $dormitorios = $attributes['dormitorios'];
    $banheiros = $attributes['banheiros'];

    ob_start(); // Start HTML buffering
    if ($image) :
?>
        <div class="comelli-planta col-12 col-lg-6 col-xl-4 mx-auto">
            <div class="inner">
                <div class="heading">
                    <h6 class="number">
                        <?php echo $number; ?>
                    </h6>
                    <img src="<?php echo $image; ?>" alt="">
                </div>
                <div class="info">
                    <div class="caracters">
                        <div class="carac">
                            <img class="icon" src="<?php echo THEME_IMG_URI . 'area.svg'; ?>"></img>
                            <span class="text"><?php echo $area; ?></span>
                        </div>
                        <div class="carac">
                            <img class="icon" src="<?php echo THEME_IMG_URI . 'dormitorios.svg'; ?>"></img>
                            <span class="text"><?php echo $dormitorios; ?></span>
                        </div>
                        <div class="carac">
                            <img class="icon" src="<?php echo THEME_IMG_URI . 'banheiros.svg'; ?>"></img>
                            <span class="text"><?php echo $banheiros; ?></span>
                        </div>
                    </div>
                    <div class="minimap">
                        <img src="<?php echo $minimap; ?>" alt="">
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
