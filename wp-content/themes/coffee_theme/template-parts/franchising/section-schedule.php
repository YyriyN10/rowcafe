<?php
$schedule = get_sub_field('schedule_block');
if ($schedule['display']) { ?>
    <div class="income-schedule">
        <div class="title"><?php echo $schedule['title']; ?></div>
        <div class="income-schedule__text">
            <?php echo $schedule['text']; ?>
        </div>
        <div class="income-schedule__image">
            <img src="<?php echo $schedule['img']['sizes']['franchising_schedule']; ?>" width="926" height="444"
                 alt="<?php echo $schedule['img']['alt']; ?>">
        </div>
    </div>
<?php }
