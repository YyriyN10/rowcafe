<?php
$video_block = get_sub_field('video_block');
if ($video_block['display'] && $video_block['video_mp4']) { ?>
    <div class="home-about__image">
        <video playsinline muted="" loop="" autoplay="">
            <?php if ($video_block['video_webm']) { ?>
                <source src="<?php echo $video_block['video_webm']; ?>" type="video/webm">
            <?php } ?>
            <source src="<?php echo $video_block['video_mp4']; ?>" type="video/mp4">
        </video>
    </div>
<?php } ?>