<?php
/**
 * The sidebar containing the main widget area
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="sidebar">
    <ul>
        <li>
            <?php dynamic_sidebar('sidebar-1'); ?>
        </li>
    </ul>
</aside>
