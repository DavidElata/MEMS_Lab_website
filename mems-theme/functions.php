<?php
/**
 * MEMS Lab Theme Functions
 */

function mems_enqueue_styles() {
    wp_enqueue_style( 'mems-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'mems_enqueue_styles' );

function mems_theme_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mems' ),
    ) );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mems_theme_setup' );

/**
 * Contact form handler — sends email server-side via wp_mail.
 */
function mems_handle_contact_form() {
    if ( ! isset( $_POST['mems_contact_nonce'] ) ||
         ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['mems_contact_nonce'] ) ), 'mems_contact_form' ) ) {
        return;
    }
    if ( isset( $_POST['mems_contact_submit'] ) ) {
        $name    = sanitize_text_field( wp_unslash( $_POST['full_name'] ?? '' ) );
        $email   = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
        $tel     = sanitize_text_field( wp_unslash( $_POST['tel'] ?? '' ) );
        $address = sanitize_text_field( wp_unslash( $_POST['address'] ?? '' ) );
        $subject = sanitize_text_field( wp_unslash( $_POST['subject'] ?? '' ) );
        $message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

        if ( empty( $email ) || empty( $subject ) ) {
            return;
        }

        $to      = 'elata@technion.ac.il';
        $headers = array( 'Reply-To: ' . $name . ' <' . $email . '>' );
        $body    = "From: {$name}\nEmail: {$email}\nTel: {$tel}\nAddress: {$address}\n\n{$message}";

        wp_mail( $to, $subject, $body, $headers );
    }
}
add_action( 'init', 'mems_handle_contact_form' );
