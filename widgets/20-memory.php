<div class="component">
    <div class="header">
        <?php
        if (isset($system->memory->brand))
            echo $system->memory->brand . ' ' . $system->memory->type . ' ' . $system->memory->speed;
        else
            echo "Memory";
        ?>
    </div>
        <?php if ($system->memory->percentage < 70): ?>
            <div class="state green">
        <?php elseif ($system->memory->percentage < 80): ?>
            <div class="state yellow">
        <?php else: ?>
            <div class="state red">
        <?php endif; ?>
            <?php echo round($system->memory->used / 1024); ?> MB
        </div>
    <div class="information">
        <ul>
            <li>
                <small>Total</small>
                <?php echo round($system->memory->total / 1024); ?> MB
            </li>
            <li>
                <small>Free</small>
                <?php echo round($system->memory->free / 1024); ?> MB
            </li>
            <li>
                <small>Percent.</small>
                <?php echo round($system->memory->percentage); ?>%
            </li>
        </ul>
    </div>
</div>