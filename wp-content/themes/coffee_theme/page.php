<?php

get_header();
?>
    <div class="wrapper">
        <?php if(is_account_page()){
            $class = 'account js-account';
        }else{
            $class = 'container';
        } ?>
        <div class="<?php echo $class; ?>">
            <?php if (is_cart()) { ?>
                <div class="container">
                    <div class="main">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php } else {
                the_content();
            } ?>
            <?php ; ?>
        </div>
    </div>
<?php
get_footer();