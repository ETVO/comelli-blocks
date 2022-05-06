<?php

function render_block_book($attributes)
{
    $title = $attributes['title'];
    if ($title == '') $title = 'Book do Empreendimento';
    $image_url = $attributes['image'];


    $file_url = get_field('book');

    ob_start(); // Start HTML buffering
?>
    <div class="comelli-book">
        <div class="container col-md-10 col-lg-9">
            <div class="row w-100 m-0">
                <div class="content col-12 col-lg-6">
                    <div class="inner">
                        <h2 class="title"><?php echo $title; ?></h2>
                        <div class="download">
                            <a href="<?php echo $file_url; ?>" download>
                                <span class="text">baixar book em PDF</span>
                                <span class="icon bi-download"></span>
                            </a>
                        </div>
                        <div class="action">
                            <a href="<?php echo $file_url; ?>" target="_blank">
                                <span class="text">Acesse aqui</span>
                                <span class="icon bi-box-arrow-up-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="image col-12 col-lg-6">
                    <img src="<?php echo $image_url; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
