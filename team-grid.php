<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<?php $col_number = get_field('select_grid_coulmn');
//print_r($col_number);
//$col= $col_number['value'];
?>
<section class="team_outer_flex">
    <?php if( have_rows('add_team_members') ): ?>
    <?php while( have_rows('add_team_members') ) : the_row(); ?>
    <div class="container col-<?php echo $col_number; ?>">
        <div class="single-fields">
            <div class="team-image-area" style="background-image:url(<?php echo get_sub_field('profile_image');?>);">
            </div>
        </div>
        <div class="single-fields">
            <h2><?php echo get_sub_field('name');?></h2>
        </div>
        <?php if(get_sub_field('display_position')==1 ){ ?>
        <div class="single-fields">
            <h2><?php echo get_sub_field('position');?></h2>
        </div>
        <?php } ?>
        <div class="single-fields">
            <h2><i class="fa-solid fa-envelope"></i> <?php echo get_sub_field('e-mail');?></h2>
        </div>
        <?php if(get_sub_field('phone_number') ){ ?>
        <div class="single-fields">
            <h2><i class="fa-solid fa-phone"></i> <?php echo get_sub_field('phone_number');?></h2>
        </div>
        <?php } ?>
        <div class="single-fields">
            <?php echo get_sub_field('description');?>
        </div>
    </div>
    <?php  endwhile; ?>
    <?php endif; ?>
</section>
<style>
    .container {
        max-width: 300px;
        margin: 0 auto;
        padding: 12px;
        background-color: #edededb0;
        border: 1px solid #ccc;
    }
    .single-fields h2 {
        font-size: 16px;
        font-weight: 600;
        margin: 6px 0;
    }
    .team-image-area {
        width: 150px;
        height: 150px;
        background-position: center;
        border-radius: 100%;
        border: 1px solid #ccc;
        margin: 0 auto;
        background-size: cover;
    }
    .single-fields p {
        font-size: 13px;
    }
    section.team_outer_flex {
        display: flex;
        flex-wrap: wrap;
        max-width: 1024px;
        margin: 0 auto;
    }
    .container.col-1 {
        width: 100%;
        max-width: 90%;
    }
    .container.col-2 {
        width: 100%;
        max-width: 45%;
    }
    .container.col-3 {
        width: 100%;
        max-width: 30%;
    }
</style>