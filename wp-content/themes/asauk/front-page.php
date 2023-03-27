<?php

/**
 * Template name: Front Page
 * The template for displaying all single posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package asauk
 */

    get_header();
    $post_id = get_the_ID();
?>

<main>
    <section class="first-section">
        <div class="site-wrapper">
            <div class="container">
                <div class="wrapper">
                    <h1>Support the work of the society</h1>
                    <span><button><p>BECOME A MEMBER</p><img src="<?php echo get_template_directory_uri(); ?> /assets/icons/vector.png" alt="vector"></button></span>
                </div>                
            </div>
       </div>
    </section>
    <section class="second-section">
        <div class="site-wrapper">
            <div class="secondary-wrapper">
                <div class="minor-container" id="minor-container">
                    <div class="first-div" id="first-div" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/africa-writes-woman.png')">
                        <img src="" alt="">
                        <img src="" alt="">
                    </div>
                    <div class="second-div">
                        <h2>What we do. Promoting Africa.</h2>
                        <h5>The Royal African Society is Britian's prime Africa organization. <br><br>
                            Our goal is to promote Africa in business, politics, culture or academia. We are a membership society that works to foster
                            better understanding and strong relationships between Britian, Africa and the world.<br><br>
                            Our in-depth knowledge of the continet and our collaborative approach to programmes and partnerships make us the first choice
                            for anyone who wants to engage, understand, celebrate or learn more about Africa.
                        </h5>
                        <span>
                            <button>
                                <h6>KNOW MORE</h6>
                                <span><img src="<?php echo get_template_directory_uri()?> /assets/icons/vector.png" alt="vector"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div>
                    <h2>Our Pillars</h2>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div>
                    <h2>Events</h2>
                    <div></div>
                    <div></div>
                </div>
                <div>
                    <h2>Latest News</h2>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </section>
    <section class="third-section">
        
    </section>
</main>