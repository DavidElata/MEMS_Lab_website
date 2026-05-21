<?php
// Fallback template — redirects to the front page.
get_header();
?>
    <main>
        <p><?php esc_html_e( 'Please use the navigation above.', 'mems' ); ?></p>
    </main>
<?php
get_footer();
