<?php
/**
 * Title: Contact Form Section
 * Slug: jaxwebtwentyfive/contact-form
 * Categories: featured, jaxwebtwentyfive-contact
 * Description: Contact form with company information and social links
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"gray-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gray-1-background-color has-background" style="padding-top:4rem;padding-right:1.5rem;padding-bottom:4rem;padding-left:1.5rem">
  
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center","level":2,"textColor":"primary","className":"section-title"} -->
    <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color section-title">Kontakt os</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","textColor":"gray-5","className":"section-subtitle"} -->
    <p class="has-text-align-center has-gray-5-color has-text-color section-subtitle">Lad os tale om dit næste projekt. Vi er klar til at hjælpe dig med at realisere dine digitale drømme.</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
  
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
  <div class="wp-block-columns alignwide">
    
    <!-- wp:column {"width":"60%"} -->
    <div class="wp-block-column" style="flex-basis:60%">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"1rem"}},"backgroundColor":"white","className":"contact-form"} -->
      <div class="wp-block-group contact-form has-white-background-color has-background" style="border-radius:1rem;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
        
        <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","fontSize":"1.5rem"},"spacing":{"margin":{"bottom":"1.5rem"}}},"textColor":"primary"} -->
        <h3 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:1.5rem;font-size:1.5rem;font-weight:600">Send os en besked</h3>
        <!-- /wp:heading -->
        
        <!-- wp:html -->
        <form class="contact-form-fields">
          <div class="form-row">
            <div class="form-group">
              <label for="name">Navn *</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="company">Virksomhed</label>
            <input type="text" id="company" name="company">
          </div>
          <div class="form-group">
            <label for="phone">Telefon</label>
            <input type="tel" id="phone" name="phone">
          </div>
          <div class="form-group">
            <label for="message">Besked *</label>
            <textarea id="message" name="message" rows="6" required placeholder="Fortæl os om dit projekt..."></textarea>
          </div>
          <button type="submit" class="submit-button">Send besked</button>
        </form>
        <!-- /wp:html -->
        
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%">
      
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}},"border":{"radius":"1rem"}},"backgroundColor":"white","className":"contact-info"} -->
      <div class="wp-block-group contact-info has-white-background-color has-background" style="border-radius:1rem;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
        
        <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","fontSize":"1.5rem"},"spacing":{"margin":{"bottom":"1.5rem"}}},"textColor":"primary"} -->
        <h3 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:1.5rem;font-size:1.5rem;font-weight:600">Kontaktoplysninger</h3>
        <!-- /wp:heading -->
        
        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"1.5rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="margin-bottom:1.5rem">
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"}},"textColor":"complementary"} -->
          <p class="has-complementary-color has-text-color" style="font-size:1.25rem">📧</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"gray-5"} -->
          <p class="has-gray-5-color has-text-color" style="font-size:0.875rem">hello@jaxweb.dk</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"1.5rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="margin-bottom:1.5rem">
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"}},"textColor":"complementary"} -->
          <p class="has-complementary-color has-text-color" style="font-size:1.25rem">📱</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"gray-5"} -->
          <p class="has-gray-5-color has-text-color" style="font-size:0.875rem">+45 12 34 56 78</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="margin-bottom:2rem">
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"}},"textColor":"complementary"} -->
          <p class="has-complementary-color has-text-color" style="font-size:1.25rem">📍</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"gray-5"} -->
          <p class="has-gray-5-color has-text-color" style="font-size:0.875rem">Copenhagen, Denmark</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","fontSize":"1.125rem"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"primary"} -->
        <h4 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:1rem;font-size:1.125rem;font-weight:600">Følg os</h4>
        <!-- /wp:heading -->
        
        <!-- wp:social-links {"iconColor":"gray-5","iconColorValue":"#6B7280","className":"is-style-logos-only"} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only">
          <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
          <!-- wp:social-link {"url":"#","service":"twitter"} /-->
          <!-- wp:social-link {"url":"#","service":"instagram"} /-->
        </ul>
        <!-- /wp:social-links -->
        
      </div>
      <!-- /wp:group -->
      
    </div>
    <!-- /wp:column -->
    
  </div>
  <!-- /wp:columns -->
  
</div>
<!-- /wp:group -->
