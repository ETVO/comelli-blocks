<?php

function render_block_local($attributes, $content)
{

    $title = $attributes['title'];
    $endereco = get_field('endereco');

    // Treat address data
    $endereco_mapa = htmlspecialchars(strip_tags(str_replace('</p>', '+', $endereco)));

    $map_url = "https://maps.google.com/maps?q=" . $endereco_mapa
        . "&t=m&mrt=yp&z=16&output=embed&iwloc=addr&msa=0";

    $show_endereco = $endereco;

    ob_start(); // Start HTML buffering
?>

    <div class="comelli-local">
        <div class="row w-100 m-0">
            <div class="content col-12 col-md-6">
                <div class="inner">
                    <h2 class="title"><?php echo $title; ?></h2>

                    <div class="endereco">
                        <span class="icon bi-geo-alt-fill"></span>
                        <span class="text"><?php echo $show_endereco; ?></span>
                    </div>

                    <div class="referencias">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
            <div class="map col-12 col-md-6">
                <iframe src="<?php echo $map_url; ?>" frameborder="0"></iframe>
            </div>
        </div>
    </div>

<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
