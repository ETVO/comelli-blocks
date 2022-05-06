<?php

function render_block_barra($attributes)
{
    $desc = $attributes['desc'];
    $percent = $attributes['percent'];

    ob_start(); // Start HTML buffering
?>

    <div class="comelli-barra">
        <div class="m-auto d-none d-md-block">
            <div class="row justify-content-center">
                <span class="desc col-3 col-lg-2">
                    <?php echo $desc; ?>
                </span>
                <div class="progress-wrap col-6 col-lg-4">
                    <div class="progress">
                        <div class="progress-bar" style="width: <?php echo $percent; ?>%;" role="progressbar" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <span class="percent col-2">
                    <?php echo $percent ?>%
                </span>
            </div>
            
        </div>
        <div class="m-auto d-block d-md-none">
            <div class="d-flex">
                <span class="desc">
                    <?php echo $desc; ?>
                </span>
                <span class="percent ms-auto">
                    <?php echo $percent ?>%
                </span>
            </div>
            <div class="progress-wrap">
                <div class="progress">
                    <div class="progress-bar" style="width: <?php echo $percent; ?>%;" role="progressbar" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
