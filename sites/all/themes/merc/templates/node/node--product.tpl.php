<article<?php print $attributes; ?>>
    <?php print $user_picture; ?>
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
        <header>
            <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
        </header>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <div<?php print $content_attributes; ?>>
        <div class="content-product-top grid-9">
            <div class="image-cloud grid-4">
                <?php print render($content['field_product_image']); ?>
            </div>
            <div class="small-info grid-4">
                <header>
                    <h2<?php print $title_attributes; ?>><?php print $node->title ?></h2>
                </header>
                <?php //krumo($content) ?>
                <?php print str_replace('SKU','Model',render($content['product:sku']['#markup'])) ?>
                <?php print render($content['field_brand']) ?>
                <?php print render($content['field_made_in']) ?>
                <?php print render($content['field_waranty']) ?>
                <?php if($node->field_catalog): ?>
                <div class="field field-name-field-catalog field-type-file field-label-hidden">
                    <div class="field-items">
                        <div class="field-item even">
                            <span class="file">

                                <a href="<?php print file_create_url($node->field_catalog[LANGUAGE_NONE][0]['uri']) ?>" type="text/plain; length=1024">Xem Catalogue</a>
                            </span>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php print render($content['product:commerce_price']) ?>
                <?php print render($content['field_old_price']) ?>
                <?php print render($content['field_product']); ?>
                <?php print render($content['addtoany']) ?>

            </div>
        </div>
        <h2 class="detail-info">Thông tin sản phẩm </h2>
        <div class="content-product-bottom grid-8">

            <?php
            // We hide the comments and links now so that we can render them later.
            hide($content['comments']);
            hide($content['links']);
            hide($content['field_catalog']);
            print render($content);
            ?></div>

    </div>


</article>