<!-- If you have html on the footer of each page put it here -->
<?php wp_footer(); ?>

<div class="contact-me-section-background">
        <div class="subsection contact-me-name" id="contact">
            <h2 class="subsection-header white-text">Contact me.</h2>
                <div class="contact-me-text-and-form">
                    <div>
                    <p class="love-to-chat white-text">I'd love to chat!</p>
                </div>
                    <div>
                    <div class="contact-me-text-box-holder">
                        <form action="https://umich.us7.list-manage.com/subscribe/post?u=87403ff4a157e16c7744b9932&amp;id=61917b07b2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="">
                        <div class="indicates-required"><span class="asterisk"></span></div>

                   
                        <div class="contact-me-info-fields">
                            <div class=" contact-me-name-box">
                                <label for="mce-FNAME"><span class="asterisk"></span>
                            </label>
                                <input type="text" value="" placeholder="Name" name="FNAME" class="required contact-me-name-field" id="mce-FNAME">
                            </div>
                            <div class=" contact-me-email-box">
                                <label for="mce-EMAIL"><span class="asterisk"></span>
                            </label>
                                <input type="email" value="" placeholder="Email address"name="EMAIL" class="required email contact-me-email-field" id="mce-EMAIL">
                            </div>
                        </div>
                    

                        <div class="mc-field-group contact-me-message-box">
                            <label for="mce-LNAME"><span class="asterisk"></span>
                        </label>
                            <input type="text" value="" placeholder="Write message here"name="LNAME" class="required contact-me-message-field" id="mce-LNAME">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_87403ff4a157e16c7744b9932_61917b07b2" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="button submit-button"></div>
                        </div>
                        </form>
                    <!---
                    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                    -End mc_embed_signup-->
                </div>
            </div>
                </div>
        </div>
    </div>
    
    <div class="subsection" id="footer">
        <div >
            <a href="<?php echo get_theme_mod('linkedin') ?>"><img class="footer-icon" src="<?php echo get_template_directory_uri();?>/img/iconfinder_linkedin.png"></a>
            <a href="<?php echo get_theme_mod('facebook') ?>"><img class="footer-icon" src="<?php echo get_template_directory_uri();?>/img/1509135364flat-facebook-logo-png-icon-circle.png"></a>
            <a href="<?php echo get_theme_mod('instagram') ?>"><img class="footer-icon" src="<?php echo get_template_directory_uri();?>/img/insta-logo.png"></a>
            <a href="<?php echo get_theme_mod('twitter') ?>"><img class="footer-icon" src="<?php echo get_template_directory_uri();?>/img/logo-twitter-png-47449.png"></a>
            <a href="<?php echo get_theme_mod('github') ?>"><img class="footer-icon" src="<?php echo get_template_directory_uri();?>/img/GitHub-Mark.png"></a>
        </div>
        <p>Email me at <a class="footer-link" href="mailto:<?php echo get_theme_mod('email') ?>"><?php echo get_theme_mod('email') ?></a></p>
    </div>

