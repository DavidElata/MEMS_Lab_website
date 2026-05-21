<?php get_header(); ?>

    <div class="content">
        <p class="intro-text">Our research activity focuses on modeling micro actuators and on design of innovative devices with tailored properties. Recently we expanded our interests into Nonlinear Dynamics. Here are some typical fruits of our work. Additional interesting research projects are posted on our Research page. We are eagerly seeking collaboration and if you have interesting problems or challenges, we would love to hear about them.</p>

        <div class="scroll-wrapper">
            <button class="scroll-arrow left"  onclick="document.getElementById('sc').scrollBy({left:-300,behavior:'smooth'})">&#10094;</button>
            <button class="scroll-arrow right" onclick="document.getElementById('sc').scrollBy({left:300,behavior:'smooth'})">&#10095;</button>
            <div class="scroll-container" id="sc">

                <!-- Card 1 (newest) -->
                <div class="sub-window">
                    <h2><em>Nonlinear Dynamics</em>, 2026</h2>
                    <div class="content-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Images/Anisotropic pendulum.png" alt="Anisotropic pendulum image">
                        <div class="text-content">
                            <h3>The intermediate frequency effect and Dzhanibekov-like transitions in the response of the anisotropic pendulum</h3>
                            <p>In this work the free vibration response of the anisotropic pendulum is analyzed. The spherical pendulum has three primary periodic motions of free vibration, but two are degenerate and have the same frequency, leading to Dzhanibekov-like transitions.</p>
                            <span class="read-more">More information in the research tab</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="sub-window">
                    <h2><em>Journal of Sound and Vibration</em>, 2025</h2>
                    <div class="content-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Images/Rotating_anisotropic_rings.gif" alt="Flexural vibrations image">
                        <div class="text-content">
                            <h3>Flexural vibrations of anisotropic thin rotating rings</h3>
                            <p>We present a rigorous analysis of the in-plane flexural vibrations of a thin rotating circular ring. The ring is made from an anisotropic material with cubic symmetry, as is common in single-crystalline silicon ring gyroscopes.</p>
                            <span class="read-more">More information in the research tab</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="sub-window">
                    <h2><em>IEEE Sensors Letters</em>, 2023</h2>
                    <div class="content-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Images/Resonanca.PNG" alt="Resonance of a Linear Mechanical Resonator image">
                        <div class="text-content">
                            <h3>What is the Resonance of a Linear Mechanical Resonator, Peak Amplitude of Displacement or Peak Amplitude of Velocity?</h3>
                            <p>There is some ambiguity in literature with respect to the resonance response of mechanical resonators. Should resonance be associated with the peak amplitude of velocity or with the peak amplitude of displacement? These two issues are addressed here.</p>
                            <span class="read-more">More information in the research tab</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="sub-window">
                    <h2><em>IEEE Journal of Microelectromechanical Systems</em>, 2021</h2>
                    <div class="content-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Images/Float.png" alt="Parametric Resonators With a Floating Rotor image">
                        <div class="text-content">
                            <h3>Parametric Resonators With a Floating Rotor: Sensing Strategy for Devices With an Increased Stiffness and Compact Design</h3>
                            <p>Recently we presented a parametric resonator constructed from a double-sided comb-drive transducer with an electrostatically floating rotor. In the present study we present a parametric resonator utilizing a sensing strategy suited for devices with an increased stiffness and compact design.</p>
                            <span class="read-more">More information in the research tab</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="sub-window">
                    <h2><em>IEEE MEMS-2017</em> Conference, 2017</h2>
                    <div class="content-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Images/Twisting beam.png" alt="A Piezoelectric Twisting Beam">
                        <div class="text-content">
                            <h3>A Piezoelectric Twisting Beam</h3>
                            <p>We demonstrated, for the first time ever, a piezoelectric beam actuator that responds in pure twist. The actuator is constructed from bulk PZT, and interdigitated electrodes rotated at 45º relative to the beam axis are used for both poling and driving.</p>
                            <span class="read-more">More information in the research tab</span>
                        </div>
                    </div>
                </div>

            </div><!-- end scroll-container -->
        </div><!-- end scroll-wrapper -->
    </div>

<?php get_footer(); ?>
