<?php
/**
 * Title: Contact Form Section
 * Slug: jaxwebtwentyfive/contact-form
 * Categories: contact, forms
 * Description: Professional contact form with contact information
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|4xl","bottom":"var:preset|spacing|4xl","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--4xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--4xl);padding-left:var(--wp--preset--spacing--md)">
  
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"700","fontSize":"2.25rem"}},"textColor":"primary"} -->
    <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-size:2.25rem;font-weight:700">Lad os starte dit projekt</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.6"},"spacing":{"margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|3xl"}}},"textColor":"gray-5"} -->
    <p class="has-text-align-center has-gray-5-color has-text-color" style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--3xl);font-size:1.125rem;line-height:1.6">Kontakt os i dag for en uforpligtende snak om dit næste digitale projekt</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
  
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|3xl"}}}} -->
  <div class="wp-block-columns alignwide">
    
    <!-- wp:column {"width":"60%"} -->
    <div class="wp-block-column" style="flex-basis:60%">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl","left":"var:preset|spacing|2xl","right":"var:preset|spacing|2xl"}},"border":{"radius":"1rem"}},"backgroundColor":"gray-1","shadow":"var:preset|shadow|natural","layout":{"type":"constrained"}} -->
      <div class="wp-block-group has-gray-1-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--2xl);padding-right:var(--wp--preset--spacing--2xl);padding-bottom:var(--wp--preset--spacing--2xl);padding-left:var(--wp--preset--spacing--2xl);box-shadow:var(--wp--preset--shadow--natural)">
        
        <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","fontSize":"1.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|lg"}}},"textColor":"primary"} -->
        <h3 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--lg);font-size:1.5rem;font-weight:600">Send os en besked</h3>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|md"}}},"textColor":"gray-5"} -->
        <p class="has-gray-5-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--md)">Udfyld formularen nedenfor, så vender vi tilbage til dig inden for 24 timer.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:html -->
        <form class="contact-form" style="display: flex; flex-direction: column; gap: 1.5rem;">
          <div style="display: flex; gap: 1rem;">
            <div style="flex: 1;">
              <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--wp--preset--color--primary);">Navn *</label>
              <input type="text" id="name" name="name" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--wp--preset--color--gray-3); border-radius: 0.5rem; font-size: 1rem;">
            </div>
            <div style="flex: 1;">
              <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--wp--preset--color--primary);">Email *</label>
              <input type="email" id="email" name="email" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--wp--preset--color--gray-3); border-radius: 0.5rem; font-size: 1rem;">
            </div>
          </div>
          
          <div>
            <label for="phone" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--wp--preset--color--primary);">Telefon</label>
            <input type="tel" id="phone" name="phone" style="width: 100%; padding: 0.75rem; border: 2px solid var(--wp--preset--color--gray-3); border-radius: 0.5rem; font-size: 1rem;">
          </div>
          
          <div>
            <label for="company" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--wp--preset--color--primary);">Virksomhed</label>
            <input type="text" id="company" name="company" style="width: 100%; padding: 0.75rem; border: 2px solid var(--wp--preset--color--gray-3); border-radius: 0.5rem; font-size: 1rem;">
          </div>
          
          <div>
            <label for="service" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--wp--preset--color--primary);">Hvilken service er du interesseret i?</label>
            <select id="service" name="service" style="width: 100%; padding: 0.75rem; border: 2px solid var(--wp--preset--color--gray-3); border-radius: 0.5rem; font-size: 1rem;">
              <option value="">Vælg en service...</option>
              <option value="basic">Basic Website (15.000 kr)</option>
              <option value="professional">Professional Website (35.000 kr)</option>
              <option value="enterprise">Enterprise Website (75.000 kr)</option>
              <option value="ecommerce">E-commerce løsning</option>
              <option value="redesign">Website redesign</option>
              <option value="maintenance">Support & vedligeholdelse</option>
              <option value="other">Andet/Usikker</option>
            </select>
          </div>
          
          <div>
            <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: var(--wp--preset--color--primary);">Besked *</label>
            <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 0.75rem; border: 2px solid var(--wp--preset--color--gray-3); border-radius: 0.5rem; font-size: 1rem; resize: vertical;" placeholder="Fortæl os om dit projekt og dine ønsker..."></textarea>
          </div>
          
          <button type="submit" style="background: var(--wp--preset--color--complementary); color: white; padding: 1rem 2rem; border: none; border-radius: 0.75rem; font-size: 1.125rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Send besked</button>
        </form>
        <!-- /wp:html -->
        
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"40%"} -->
    <div class="wp-block-column" style="flex-basis:40%">
      
      <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","fontSize":"1.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|lg"}}},"textColor":"primary"} -->
      <h3 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--lg);font-size:1.5rem;font-weight:600">Kontakt oplysninger</h3>
      <!-- /wp:heading -->
      
      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|lg"}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group">
        
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}},"border":{"radius":"1rem"}},"backgroundColor":"gray-1","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group has-gray-1-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
          <!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"0.75rem","right":"0.75rem"}},"border":{"radius":"0.75rem"}},"backgroundColor":"complementary","layout":{"type":"flex","justifyContent":"center"}} -->
          <div class="wp-block-group has-complementary-background-color has-background" style="border-radius:0.75rem;padding-top:0.75rem;padding-right:0.75rem;padding-bottom:0.75rem;padding-left:0.75rem">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"white"} -->
            <p class="has-white-color has-text-color" style="font-size:1.5rem">📞</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          
          <!-- wp:group {"layout":{"type":"constrained"}} -->
          <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"1rem"},"spacing":{"margin":{"bottom":"0.25rem"}}},"textColor":"primary"} -->
            <p class="has-primary-color has-text-color" style="margin-bottom:0.25rem;font-size:1rem;font-weight:600">Telefon</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"gray-5"} -->
            <p class="has-gray-5-color has-text-color" style="margin-top:0;font-size:1rem">+45 12 34 56 78</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}},"border":{"radius":"1rem"}},"backgroundColor":"gray-1","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group has-gray-1-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
          <!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"0.75rem","right":"0.75rem"}},"border":{"radius":"0.75rem"}},"backgroundColor":"accent-blue","layout":{"type":"flex","justifyContent":"center"}} -->
          <div class="wp-block-group has-accent-blue-background-color has-background" style="border-radius:0.75rem;padding-top:0.75rem;padding-right:0.75rem;padding-bottom:0.75rem;padding-left:0.75rem">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"white"} -->
            <p class="has-white-color has-text-color" style="font-size:1.5rem">✉️</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          
          <!-- wp:group {"layout":{"type":"constrained"}} -->
          <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"1rem"},"spacing":{"margin":{"bottom":"0.25rem"}}},"textColor":"primary"} -->
            <p class="has-primary-color has-text-color" style="margin-bottom:0.25rem;font-size:1rem;font-weight:600">Email</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"spacing":{"margin":{"top":"0"}}},"textColor":"gray-5"} -->
            <p class="has-gray-5-color has-text-color" style="margin-top:0;font-size:1rem">hej@jaxweb.dk</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}},"border":{"radius":"1rem"}},"backgroundColor":"gray-1","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group has-gray-1-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
          <!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"0.75rem","right":"0.75rem"}},"border":{"radius":"0.75rem"}},"backgroundColor":"tint-4","layout":{"type":"flex","justifyContent":"center"}} -->
          <div class="wp-block-group has-tint-4-background-color has-background" style="border-radius:0.75rem;padding-top:0.75rem;padding-right:0.75rem;padding-bottom:0.75rem;padding-left:0.75rem">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"white"} -->
            <p class="has-white-color has-text-color" style="font-size:1.5rem">⏰</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          
          <!-- wp:group {"layout":{"type":"constrained"}} -->
          <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"1rem"},"spacing":{"margin":{"bottom":"0.25rem"}}},"textColor":"primary"} -->
            <p class="has-primary-color has-text-color" style="margin-bottom:0.25rem;font-size:1rem;font-weight:600">Åbningstider</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.5"},"spacing":{"margin":{"top":"0"}}},"textColor":"gray-5"} -->
            <p class="has-gray-5-color has-text-color" style="margin-top:0;font-size:0.875rem;line-height:1.5">Man-Fre: 9:00-17:00<br>Weekend: Efter aftale</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        
      </div>
      <!-- /wp:group -->
      
      <!-- wp:spacer {"height":"var:preset|spacing|lg"} -->
      <div style="height:var(--wp--preset--spacing--lg)" aria-hidden="true" class="wp-block-spacer"></div>
      <!-- /wp:spacer -->
      
      <!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","fontSize":"1.125rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|md"}}},"textColor":"primary"} -->
      <h4 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--md);font-size:1.125rem;font-weight:600">Følg os på sociale medier</h4>
      <!-- /wp:heading -->
      
      <!-- wp:social-links {"iconColor":"gray-5","iconColorValue":"#5E6369","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|md"}}}} -->
      <ul class="wp-block-social-links has-icon-color">
        <!-- wp:social-link {"url":"#","service":"facebook"} /-->
        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
      </ul>
      <!-- /wp:social-links -->
      
    </div>
    <!-- /wp:column -->
    
  </div>
  <!-- /wp:columns -->
  
</div>
<!-- /wp:group -->
