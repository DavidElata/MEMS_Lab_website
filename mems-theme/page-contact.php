<?php get_header(); ?>

    <main>

        <div class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>David Elata</strong></p>
            <p>Head, MicroSystems Laboratory</p>
            <p>Department of Mechanical Engineering</p>
            <p>Technion – Israel Institute of Technology</p>
            <p style="margin-top:10px;">
                Tel: <a href="tel:+97248293184">+972-4-829-3184</a>
            </p>
            <p>
                Email: <a href="mailto:elata@technion.ac.il">elata@technion.ac.il</a>
            </p>
        </div>

        <div class="contact-form">
            <h2>Send a Message</h2>
            <p class="required-note">Fields marked with * are required.</p>
            <form method="POST" action="<?php echo esc_url( get_permalink() ); ?>">
                <?php wp_nonce_field( 'mems_contact_form', 'mems_contact_nonce' ); ?>
                <div class="form-row">
                    <div class="form-group">
                        <label for="full-name">Full Name</label>
                        <input type="text" id="full-name" name="full_name" placeholder="Your full name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required placeholder="your@email.com">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="tel">Tel.</label>
                        <input type="tel" id="tel" name="tel" placeholder="+1 234 567 8900">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Your address">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required placeholder="Message subject">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required placeholder="Your message…"></textarea>
                    </div>
                </div>
                <button type="submit" name="mems_contact_submit" class="submit-btn">Send Message</button>
            </form>
            <?php if ( isset( $_POST['mems_contact_submit'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['mems_contact_nonce'] ?? '' ) ), 'mems_contact_form' ) ) : ?>
                <p style="color:green; margin-top:16px;">Thank you — your message has been sent.</p>
            <?php endif; ?>
        </div>

    </main>

<?php get_footer(); ?>
