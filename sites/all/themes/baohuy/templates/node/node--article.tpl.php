<article<?php print $attributes; ?>>
    <?php print $user_picture; ?>
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
        <header>
            <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
        </header>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <div class="views-field-created"><span><?php print format_date($node->created,'custom','d/m/Y'); ?></span></div>
    <div class="views-field-created-1"><span><?php print format_date($node->created,'custom','H:m:s'); ?></span></div>

    <div<?php print $content_attributes; ?>>
        <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content);
        ?>
    </div>

    <div class="clearfix">
        <?php if (!empty($content['links'])): ?>
            <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
        <?php endif; ?>

        <?php print render($content['comments']); ?>
    </div>
</article>