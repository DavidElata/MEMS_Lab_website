<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:5px;">
            <a href="https://www.technion.ac.il/en/" target="_blank" rel="noopener">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Images/Eng_Hor_Blue.png" alt="Technion Logo" style="height:70px; width:auto;">
            </a>
            <h1 style="margin:0; color:#00467f; text-align:center; flex:1; padding:0 20px; white-space:nowrap;">Mechanical Engineering Micro Systems</h1>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Images/MEMS_logo.png" alt="MEMS Lab Logo" style="height:60px; width:auto;">
        </div>
        <?php
        $home_url     = esc_url( home_url( '/' ) );
        $research_url = esc_url( home_url( '/research/' ) );
        $people_url   = esc_url( home_url( '/people/' ) );
        $contact_url  = esc_url( home_url( '/contact/' ) );

        $is_home     = is_front_page();
        $is_research = is_page( 'research' );
        $is_people   = is_page( 'people' );
        $is_contact  = is_page( 'contact' );
        ?>
        <nav>
            <a href="<?php echo $home_url; ?>"     <?php echo $is_home     ? 'class="active"' : ''; ?>>Home</a>
            <a href="<?php echo $research_url; ?>" <?php echo $is_research ? 'class="active"' : ''; ?>>Research</a>
            <a href="<?php echo $people_url; ?>"   <?php echo $is_people   ? 'class="active"' : ''; ?>>People</a>
            <a href="<?php echo $contact_url; ?>"  <?php echo $is_contact  ? 'class="active"' : ''; ?>>Contact</a>
        </nav>
    </header>
