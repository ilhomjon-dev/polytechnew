<?php

/**
 * SpecialOccasionBanner Class
 *
 * This class is responsible for displaying a special occasion banner in the WordPress admin.
 *
 */
class WPVR_Special_Occasion_Banner {

    /**
     * The occasion identifier.
     *
     * @var string
     */
    private $occasion;

    /**
     * The start date and time for displaying the banner.
     *
     * @var int
     */
    private $start_date;

    /**
     * The end date and time for displaying the banner.
     *
     * @var int
     */
    private $end_date;

    /**
     * Constructor method for SpecialOccasionBanner class.
     *
     * @param string $occasion   The occasion identifier.
     * @param string $start_date The start date and time for displaying the banner.
     * @param string $end_date   The end date and time for displaying the banner.
     */
    public function __construct($occasion, $start_date, $end_date) {
        $this->occasion     = $occasion;
        $this->start_date   = strtotime($start_date);
        $this->end_date     = strtotime($end_date);

        if ( !defined('WPVR_PRO_VERSION') && 'no' === get_option( '_wpvr_eid_ul_fitar_24', 'no' )) {
//        if ( 'no' === get_option( '_wpvr_eid_ul_fitar_24', 'no' )) {

            // Hook into the admin_notices action to display the banner
            add_action('admin_notices', array($this, 'display_banner'));

            // Add styles
            add_action('admin_head', array($this, 'add_styles'));
        }
    }


    /**
     * Displays the special occasion banner if the current date and time are within the specified range.
     */
    public function display_banner() {

        $screen                     = get_current_screen();
        $promotional_notice_pages   = ['dashboard', 'plugins', 'edit-wpvr_item', 'toplevel_page_wpvr', 'wp-vr_page_wpvr-setup-wizard'];
        $current_date_time          = current_time('timestamp');

        if (!in_array($screen->id, $promotional_notice_pages)) {
            return;
        }

        if ( $current_date_time < $this->start_date || $current_date_time > $this->end_date ) {
            return;
        }
        // Calculate the time remaining in seconds
        $time_remaining = $this->end_date - $current_date_time;
        $btn_link = 'https://rextheme.com/wpvr/?utm_source=plugin-CTA&utm_medium=plugin&utm_campaign=eid-fitr-campaign-24#pricing';
        ?>
        <div class="wpvr-<?php echo esc_attr($this->occasion); ?>-banner notice">
            <div class="wpvr-promotional-banner">
                <div class="banner-overflow">
                    
                    <div class="rextheme-eid__container-area">

                        <div class="rextheme-eid__image rextheme-eid__image--one">
                            <figure>
                                <img src="<?php echo esc_url( WPVR_PLUGIN_DIR_URL.'admin/icon/eid-ul-fitr/eid-mubark.webp' ); ?>" alt="Eid Mubark Rextheme" />
                            </figure>
                        </div>

                        <div class="rextheme-eid__content-area">

                            <div class="rextheme-eid__image rextheme-eid__image--two">
                                <figure>
                                    <img src="<?php echo esc_url( WPVR_PLUGIN_DIR_URL.'admin/icon/eid-ul-fitr/eid-mubarak-icon.webp' ); ?>" alt="Eid Mubark Rextheme" />
                                </figure>
                            </div>

                            <div class="rextheme-eid__image--group">

                                <div class="rextheme-eid__image rextheme-eid__image--three">
                                    <figure>
                                        <img src="<?php echo esc_url( WPVR_PLUGIN_DIR_URL.'admin/icon/eid-ul-fitr/celebrate.webp' ); ?>" alt="Celebrate Rextheme" />
                                    </figure>
                                </div>

                                <div class="rextheme-eid__image rextheme-eid__image--four">
                                    <figure>
                                        <img src="<?php echo esc_url(WPVR_PLUGIN_DIR_URL.'admin/icon/eid-ul-fitr/eid-discount.webp' ); ?>" alt="25% discount"  />
                                    </figure>
                                </div>

                            </div>

                            <!-- .rextheme-eid__image end -->
                            <div class="rextheme-eid__btn-area">
                                <a href="<?php echo esc_url($btn_link); ?>" role="button" class="rextheme-eid__btn" target="_blank">
                                    Get <span class="rextheme-eid__stroke-font">25%</span> OFF
                                </a>

                            </div>

                        </div>

                        <div class="rextheme-eid__image rextheme-eid__image--five">
                            <figure>
                                <img src="<?php echo esc_url( WPVR_PLUGIN_DIR_URL.'admin/icon/eid-ul-fitr/masjid.webp' ); ?>" alt="Masjid"  />
                            </figure>
                        </div>

                    </div>

                </div>

                <a class="close-promotional-banner wpvr-black-friday-close-promotional-banner" type="button" aria-label="close banner" id="wpvr-black-friday-close-button">
                    <svg width="12" height="13" fill="none" viewBox="0 0 12 13" xmlns="http://www.w3.org/2000/svg"><path stroke="#7A8B9A" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 1.97L1 11.96m0-9.99l10 9.99"/></svg>
                </a>

            </div>
        </div>

        <script>
            var timeRemaining = <?php echo esc_js($time_remaining); ?>;

            // Update the countdown every second
            setInterval(function() {
                // var countdownElement    = document.getElementById('wpvr_countdown');
                // var daysElement         = document.getElementById('wpvr_days');
                // var hoursElement        = document.getElementById('wpvr_hours');
                // var minutesElement      = document.getElementById('wpvr_minutes');

                // Decrease the remaining time
                timeRemaining--;

                // Calculate new days, hours, and minutes
                var days = Math.floor(timeRemaining / (60 * 60 * 24));
                var hours = Math.floor((timeRemaining % (60 * 60 * 24)) / (60 * 60));
                var minutes = Math.floor((timeRemaining % (60 * 60)) / 60);


                // Format values with leading zeros
                days = (days < 10) ? '0' + days : days;
                hours = (hours < 10) ? '0' + hours : hours;
                minutes = (minutes < 10) ? '0' + minutes : minutes;

                // Update the HTML
                // daysElement.textContent = days;
                // hoursElement.textContent = hours;
                // minutesElement.textContent = minutes;

                // Check if the countdown has ended
                if (timeRemaining <= 0) {
                    countdownElement.innerHTML = 'Campaign Ended';
                }
            }, 1000); // Update every second
        </script>
        <?php
    }


    /**
     * Adds internal CSS styles for the special occasion banners.
     */
    public function add_styles() {

        ?>
        <style id="wpvr-promotional-banner-style" type="text/css">


            @font-face {
                font-family: 'Lexend Deca';
                src: url(<?php echo WPVR_PLUGIN_DIR_URL.'admin/fonts/campaign-font/LexendDeca-SemiBold.woff2';?>) format('woff2'),
                    url(<?php echo WPVR_PLUGIN_DIR_URL.'admin/fonts/campaign-font/LexendDeca-SemiBold.woff';?>) format('woff');
                font-weight: 600;
                font-style: normal;
                font-display: swap;
            }

            @font-face {
                font-family: 'Lexend Deca';
                src: url(<?php echo WPVR_PLUGIN_DIR_URL.'admin/fonts/campaign-font/LexendDeca-Bold.woff2';?>) format('woff2'),
                    url(<?php echo WPVR_PLUGIN_DIR_URL.'admin/fonts/campaign-font/LexendDeca-Bold.woff';?>) format('woff');
                font-weight: bold;
                font-style: normal;
                font-display: swap;
            }
        

            .wpvr-promotional-banner, 
            .wpvr-promotional-banner * {
                box-sizing: border-box;
            }
                    
            .wpvr-christmas-banner.notice {
                border: none;
                padding: 0;
                display: block;
                background: transparent;
                box-shadow: none;
            }

            .wp-vr_page_wpvr-setup-wizard .wpvr-promotional-banner,
            .wp-vr_page_wpvr-addons .wpvr-promotional-banner,
            .toplevel_page_wpvr .wpvr-promotional-banner {
                width: calc(100% - 20px);
                margin: 20px 0;
            }

            .wp-vr_page_wpvr-setup-wizard .wpvr-christmas-banner.notice,
            .wp-vr_page_wpvr-addons .wpvr-christmas-banner.notice,
            .toplevel_page_wpvr .wpvr-christmas-banner.notice {
                margin: 0;
            }

            .wpvr-promotional-banner {
                background-color: #d6e4ff;
                width: 100%;
                background-image: url(<?php echo esc_url( WPVR_PLUGIN_DIR_URL.'admin/icon/eid-ul-fitr/notification-bar-bg.webp' )?>);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                border: none;
                box-shadow: none;
                display: block;
                max-height: 110px;
            }

            .wpvr-promotional-banner .banner-overflow {
                overflow: hidden;
                position: relative;
                width: 100%;
            }

            .wpvr-promotional-banner .close-promotional-banner {
                position: absolute;
                top: -10px;
                right: -9px;
                background: #fff;
                border: none;
                padding: 8px 9px;
                border-radius: 50%;
                cursor: pointer;
                z-index: 9;
            }

            .wpvr-promotional-banner .close-promotional-banner svg {
                display: block;
                width: 10px;
            }

            .rextheme-eid__container {
                width: 100%;
                margin: 0 auto;
                max-width: 1640px;
                position: relative;
                padding-right: 15px;
                padding-left: 15px;
            }

            .rextheme-eid__container-area {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .rextheme-eid__content-area {
                width: 100%;
                display: flex;
                align-items: center;
                max-width: 1340px;
                position: relative;
                padding-right: 15px;
                padding-left: 15px;
                margin: 0 auto;
            }
            .rextheme-eid__image--group {
                display: flex;
                align-items: center;
                gap: 40px;
                padding: 0 140px 0 170px;
            }
      
            .rextheme-eid__image--one img {
                width: 100%;
                max-width: 85px;
                margin-left: 30px;
            }
            .rextheme-eid__image--two img {
                width: 100%;
                max-width: 154px;
            }
            .rextheme-eid__image--three img {
                width: 100%;
                max-width: 225px;
            }
            .rextheme-eid__image--four img {
                width: 100%;
                max-width: 362px;
            }
            .rextheme-eid__image--five img {
                width: 100%;
                max-width: 78px;
                margin-right: 30px;
            }
            .rextheme-eid__image figure {
                margin: 0;
            }
            .rextheme-eid__text-container {
                position: relative;
                max-width: 330px;
            }
            .rextheme-eid__campaign-text-icon {
                position: absolute;
                top: -10px;
                right: -15px;
                max-width: 100%;
                max-height: 24px;
            }
            .rextheme-eid__btn-area {
                display: flex;
                align-items: flex-end;
                justify-content: flex-end;
                position: relative;
            }
            .rextheme-eid__btn {
                position: relative;
                font-family: 'Lexend Deca';
                font-size: 18px;
                font-style: normal;
                font-weight: 600;
                color: #fff;
                line-height: 1;
                text-align: center;
                border-radius: 30px;
                background: linear-gradient(180deg, #6460fe 11.67%, #211cfd 100%);
                box-shadow: 0px 8px 20px rgba(12, 10, 81, 0.25);
                padding: 17px 28px;
                display: inline-block;
                cursor: pointer;
                text-transform: uppercase;
                transition: all 0.3s ease;
                text-decoration: none;
            }

            .rextheme-eid__btn-area a:focus {
                color: #fff;
                box-shadow: none;
                outline: 0px solid transparent;
            }

            .rextheme-eid__btn::before {
                content: url(<?php echo esc_url( WPVR_PLUGIN_DIR_URL.'admin/icon/eid-ul-fitr/pattern-vectors.webp' )?>);
                position: absolute;
                top: -38%;
                right: -40px;
            }
            .rextheme-eid__btn:hover {
                background-color: #201cfe;
                color: #fff;
            }
            .rextheme-eid__btn-icon {
                position: absolute;
                top: -14px;
                right: -23px;
                width: 40px;
                height: 35px;
            }
            .rextheme-eid__stroke-font {
                font-size: 26px;
                font-weight: 700;
            }
            @media only screen and (max-width: 1440px) {
                .rextheme-eid__image--group {
                    gap: 20px;
                    padding: 0 30px 0 40px;
                }

                .wpvr-promotional-banner {
                    max-height: 90px;
                }

                .rextheme-eid__image--one img {
                    max-width: 75px;
                    margin-left: 30px;
                }

                .rextheme-eid__stroke-font {
                    font-size: 20px;
                    font-weight: 700;
                }

                .rextheme-eid__image--five img {
                    max-width: 60px;
                    margin-right: 30px;
                }

                .rextheme-eid__image--two img {
                    max-width: 110px;
                }

                .rextheme-eid__content-area {
                    max-width: 900px;
                }

                .rextheme-eid__image--four img {
                    width: 100%;
                    max-width: 300px;
                }

                .rextheme-eid__image--three img {
                    width: 100%;
                    max-width: 175px;
                }

                .rextheme-eid__btn {
                    font-size: 16px;
                    font-weight: 600;
                    line-height: 34px;
                    border-radius: 30px;
                    padding: 8px 27px;
                }

            
            }

            @media only screen and (max-width: 1399px) {

                .rextheme-eid__btn::before {
                    top: -38%;
                    right: -20px;
                }

                .rextheme-eid__image--five img {
                    margin-right: 20px;
                }

                .rextheme-eid__image--one img {
                    margin-left: 20px;
                }

                
            }

            @media only screen and (max-width: 1024px) {

                .wpvr-promotional-banner {
                    max-height: 63px;
                }

                .rextheme-eid__content-area {
                    max-width: 653px;
                }

                .rextheme-eid__image--five img {
                    max-width: 46px;
                }

                .rextheme-eid__image--one img {
                    max-width: 56px;
                }

                .rextheme-eid__image--five img {
                    max-width: 45px;
                }
                .rextheme-eid__image--two img {
                    max-width: 85px;
                }
                .rextheme-eid__image--group {
                    gap: 20px;
                    padding: 0 20px 0 25px;
                }
                .rextheme-eid__image--four img {
                    max-width: 200px;
                }
                .rextheme-eid__image--three img {
                    max-width: 130px;
                }
                .rextheme-eid__btn::before {
                    display: none;
                }
                .rextheme-eid__btn {
                    font-size: 12px;
                    line-height: 26px;
                    padding: 8px 21px;
                    font-weight: 400;
                }
                .rextheme-eid__stroke-font {
                    font-size: 18px;
                }

                .rextheme-eid__btn-area {
                    margin-top: -5px;
                }

                .rextheme-eid__btn {
                    box-shadow: none;
                }

            
            }

            @media only screen and (max-width: 768px) {

                .rextheme-eid__btn-area {
                    margin-top: -6px;
                }

                .rextheme-eid__content-area {
                    max-width: 690px;
                }
                .wpvr-promotional-banner {
                    max-height: 62px;
                }

                .rextheme-eid__image--one img {
                    display: none;
                }

                .rextheme-eid__image--two img {
                    max-width: 84px;
                }

                .rextheme-eid__image--group {
                    gap: 15px;
                    padding: 0px 50px 0 66px;
                }
                .rextheme-eid__image--three img {
                    max-width: 110px;
                }
                .rextheme-eid__image--four img {
                    max-width: 200px;
                }
                .rextheme-eid__image--five img {
                    display: none;
                }
                .rextheme-eid__btn {
                    font-size: 12px;
                    line-height: 1;
                    font-weight: 400;
                    padding: 13px 20px;
                    margin-left: 0;
                    box-shadow: none;
                }

                .rextheme-eid__stroke-font {
                    font-size: 18px;
                }
            }
            
            @media only screen and (max-width: 767px) {
                .wpvr-promotional-banner {
                    padding-top: 20px;
                    padding-bottom: 30px;
                    max-height: none;
                }

                .wpvr-promotional-banner {
                    max-height: none;
                }

                .rextheme-eid__image--two {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    flex-direction: row-reverse;
                }
            
                .rextheme-eid__image--five, .rextheme-eid__image--one {
                    display: none;
                }
                .rextheme-eid__image--four img {
                    margin-right: -25px;
                }
            
                .rextheme-eid__stroke-font {
                    font-size: 16px;
                }
                .rextheme-eid__content-area {
                    flex-direction: column;
                    gap: 25px;
                    text-align: center;
                    align-items: center;
                }
                .rextheme-eid__btn-area {
                    justify-content: center;
                    padding-top: 5px;
                }
                .rextheme-eid__btn {
                    font-size: 12px;
                    padding: 15px 24px;
                }
                .rextheme-eid__image--group {
                    gap: 10px;
                    padding: 0;
                }
            }

            
        </style>
        <?php

    }

}