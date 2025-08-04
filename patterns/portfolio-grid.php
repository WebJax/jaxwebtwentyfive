<?php
/**
 * Title: Portfolio Gallery Grid
 * Slug: jaxwebtwentyfive/portfolio-grid
 * Categories: gallery, portfolio
 * Description: Modern portfolio grid with hover effects
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|4xl","bottom":"var:preset|spacing|4xl","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--4xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--4xl);padding-left:var(--wp--preset--spacing--md)">
  
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontWeight":"700","fontSize":"2.25rem"}},"textColor":"primary"} -->
    <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-size:2.25rem;font-weight:700">Seneste projekter</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.6"},"spacing":{"margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|2xl"}}},"textColor":"gray-5"} -->
    <p class="has-text-align-center has-gray-5-color has-text-color" style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--2xl);font-size:1.125rem;line-height:1.6">Se nogle af vores mest succesfulde projekter</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
  
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|lg"}}}} -->
  <div class="wp-block-columns alignwide">
    
    <!-- wp:column {"width":"50%"} -->
    <div class="wp-block-column" style="flex-basis:50%">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"1rem"},"overflow":"hidden"},"backgroundColor":"gray-1","shadow":"var:preset|shadow|elevated","layout":{"type":"constrained"}} -->
      <div class="wp-block-group has-gray-1-background-color has-background" style="border-radius:1rem;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;box-shadow:var(--wp--preset--shadow--elevated);overflow:hidden">
        
        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-orange"}}} -->
        <figure class="wp-block-image size-large">
          <img alt="Project showcase" style="aspect-ratio:4/3;object-fit:cover;filter:var(--wp--preset--duotone--primary-orange)"/>
        </figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">
          
          <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","fontSize":"1.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}},"textColor":"primary"} -->
          <h3 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--sm);font-size:1.5rem;font-weight:600">E-commerce Platform</h3>
          <!-- /wp:heading -->
          
          <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"gray-5"} -->
          <p class="has-gray-5-color has-text-color" style="line-height:1.6">Moderne webshop med indbygget CMS og betalingsintegration. Resulterede i 200% stigning i online salg.</p>
          <!-- /wp:paragraph -->
          
          <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs","margin":{"top":"var:preset|spacing|lg"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
          <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--lg)">
            <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}},"border":{"radius":"1rem"},"typography":{"fontSize":"0.75rem","fontWeight":"500"}},"backgroundColor":"complementary","textColor":"white"} -->
            <p class="has-white-color has-complementary-background-color has-text-color has-background" style="border-radius:1rem;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem;font-size:0.75rem;font-weight:500">WordPress</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}},"border":{"radius":"1rem"},"typography":{"fontSize":"0.75rem","fontWeight":"500"}},"backgroundColor":"accent-blue","textColor":"white"} -->
            <p class="has-white-color has-accent-blue-background-color has-text-color has-background" style="border-radius:1rem;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem;font-size:0.75rem;font-weight:500">WooCommerce</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"0.75rem","right":"0.75rem"}},"border":{"radius":"1rem"},"typography":{"fontSize":"0.75rem","fontWeight":"500"}},"backgroundColor":"tint-4","textColor":"white"} -->
            <p class="has-white-color has-tint-4-background-color has-text-color has-background" style="border-radius:1rem;padding-top:0.25rem;padding-right:0.75rem;padding-bottom:0.25rem;padding-left:0.75rem;font-size:0.75rem;font-weight:500">Custom Design</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          
        </div>
        <!-- /wp:group -->
        
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    
    <!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|lg"}}} -->
    <div class="wp-block-column" style="flex-basis:50%">
      
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"1rem"},"overflow":"hidden"},"backgroundColor":"gray-1","shadow":"var:preset|shadow|elevated","layout":{"type":"constrained"}} -->
      <div class="wp-block-group has-gray-1-background-color has-background" style="border-radius:1rem;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;box-shadow:var(--wp--preset--shadow--elevated);overflow:hidden">
        
        <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"medium","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-light"}}} -->
        <figure class="wp-block-image size-medium">
          <img alt="Project showcase" style="aspect-ratio:16/9;object-fit:cover;filter:var(--wp--preset--duotone--primary-light)"/>
        </figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
          
          <!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","fontSize":"1.125rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|xs"}}},"textColor":"primary"} -->
          <h4 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xs);font-size:1.125rem;font-weight:600">Virksomhedssite</h4>
          <!-- /wp:heading -->
          
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.5"}},"textColor":"gray-5"} -->
          <p class="has-gray-5-color has-text-color" style="font-size:0.875rem;line-height:1.5">Professionelt website med fokus på konvertering og brugeroplevelse.</p>
          <!-- /wp:paragraph -->
          
        </div>
        <!-- /wp:group -->
        
      </div>
      <!-- /wp:group -->
      
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"1rem"},"overflow":"hidden"},"backgroundColor":"gray-1","shadow":"var:preset|shadow|elevated","layout":{"type":"constrained"}} -->
      <div class="wp-block-group has-gray-1-background-color has-background" style="border-radius:1rem;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;box-shadow:var(--wp--preset--shadow--elevated);overflow:hidden">
        
        <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"medium","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary-orange"}}} -->
        <figure class="wp-block-image size-medium">
          <img alt="Project showcase" style="aspect-ratio:16/9;object-fit:cover;filter:var(--wp--preset--duotone--primary-orange)"/>
        </figure>
        <!-- /wp:image -->
        
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
          
          <!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600","fontSize":"1.125rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|xs"}}},"textColor":"primary"} -->
          <h4 class="wp-block-heading has-primary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xs);font-size:1.125rem;font-weight:600">Portfolio Site</h4>
          <!-- /wp:heading -->
          
          <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.5"}},"textColor":"gray-5"} -->
          <p class="has-gray-5-color has-text-color" style="font-size:0.875rem;line-height:1.5">Kreativ portfolio med animationer og interaktive elementer.</p>
          <!-- /wp:paragraph -->
          
        </div>
        <!-- /wp:group -->
        
      </div>
      <!-- /wp:group -->
      
    </div>
    <!-- /wp:column -->
    
  </div>
  <!-- /wp:columns -->
  
  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|2xl"}}}} -->
  <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--2xl)">
    <!-- wp:button {"backgroundColor":"complementary","textColor":"white","style":{"border":{"radius":"0.75rem"},"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"2rem","right":"2rem"}}},"className":"is-style-fill","fontSize":"lg"} -->
    <div class="wp-block-button has-custom-font-size is-style-fill has-lg-font-size">
      <a class="wp-block-button__link has-white-color has-complementary-background-color has-text-color has-background wp-element-button" style="border-radius:0.75rem;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem;font-weight:600">Se alle projekter</a>
    </div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->
  
</div>
<!-- /wp:group -->
