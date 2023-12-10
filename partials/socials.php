<?php
    $socials = [
        [
            'name'  => 'LinkedIn',
            'url'   => 'https://linkedin.com/company/',
            'handle'=> 'slicefinance',
            'icon'  => 'linkedin'
        ],
        [
            'name'  => 'Instagram',
            'url'   => 'https://instagram.com/',
            'handle'=> 'slicefinance',
            'icon'  => 'instagram'
        ],
        [
            'name'  => 'Facebook',
            'url'   => 'https://facebook.com/',
            'handle'=> 'slicefinance',
            'icon'  => 'facebook'
        ],
    ]
?>
<span class="socials">
    <?php foreach($socials as $social){ ?>
        <a href="<?php echo $social['url']; ?><?php echo $social['handle']; ?>" target="_blank">
            <span class="label"><?php echo $social['name']; ?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/<?php echo $social['icon']; ?>.svg" alt="><?php echo $social['name']; ?> logo">
        </a>
    <?php }?>
</span>