<?php

function render_block_ref($attributes)
{
    $name = $attributes['name'];
    $distance = $attributes['distance'];

    ob_start(); // Start HTML buffering
?>

    <div class="comelli-ref">
        <span class="icon bi-geo-alt-fill"></span>
        <span class="name"><?php echo $name; ?></span>
        <span class="distance"><?php echo $distance; ?></span>
    </div>
<?php

    $output = ob_get_contents(); // collect buffered contents

    ob_end_clean(); // Stop HTML buffering

    return $output; // Render contents
}
