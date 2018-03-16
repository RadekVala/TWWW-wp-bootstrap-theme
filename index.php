<?php 
    get_header();
?>
   

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>
        
      <div class="row">
        <div class="col-sm-8">
            <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                //
                // Post Content here
                ?>
                <article>
                    <h1>
                        <a href="<?php the_permalink(); ?>" >
                            <?php the_title(); ?>
                        </a>                                
                    </h1>
                    <p><?php the_content(); ?></p>
                </article>      
                <?php
                
                //
            } // end while
        } // end if
    ?>
        </div>
          
        <div class="col-sm-4">
            <?php get_sidebar('sidebar-1'); ?>
        </div>   
      </div>
        
    
        
      
    </main><!-- /.container -->


<?php
    get_footer();
?>