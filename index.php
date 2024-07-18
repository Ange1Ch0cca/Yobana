<?php get_header(); ?>

<!-- Product List Start -->
<div class="product-view">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',  // Mostrar entradas estándar de WordPress
                        'posts_per_page' => 6,  // Número de entradas por página que quieres mostrar
                        'paged' => $paged,
                    );

                    if (is_category() || is_tag()) {
                        $args['category_name'] = get_query_var('category_name');
                        $args['tag'] = get_query_var('tag');
                    }

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                                    <div class="product-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium'); // Tamaño de imagen ajustable según tus necesidades 
                                            ?>
                                        </a>
                                        <div class="product-action">
                                            <a href="<?php the_permalink(); ?>"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><?php the_excerpt(); ?></h3>
                                        <a class="btn" href="<?php the_permalink(); ?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
                </div>

                <!-- Pagination Start -->
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <?php
                        echo paginate_links(array(
                            'total' => $query->max_num_pages,
                            'current' => $paged,
                            'prev_text' => __('Previous'),
                            'next_text' => __('Next'),
                        ));
                        ?>
                    </nav>
                </div>
                <!-- Pagination End -->

            <?php
                        wp_reset_postdata();
                    else:
                        echo '<p>No posts found.</p>';
                    endif;
            ?>
            </div>

            <!-- Side Bar Start -->
            <div class="col-lg-4 sidebar">
                <div class="sidebar-widget category">
                    <h2 class="title">Categorías</h2>
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                            <?php
                            $categories = get_categories(); // Obtener todas las categorías de las entradas de WordPress

                            foreach ($categories as $category) {
                                $category_link = get_category_link($category->term_id); // Obtener el enlace de la categoría
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo esc_url($category_link); ?>"><i class="fa fa-folder"></i><?php echo esc_html($category->name); ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
                <div class="sidebar-widget tag">
                    <h2 class="title">Etiquetas</h2>
                    <?php
                    $tags = get_tags(); // Obtener todas las etiquetas de las entradas de WordPress

                    foreach ($tags as $tag) {
                        $tag_link = get_tag_link($tag->term_id); // Obtener el enlace de la etiqueta
                    ?>
                        <a href="<?php echo esc_url($tag_link); ?>"><?php echo esc_html($tag->name); ?></a>
                    <?php } ?>
                </div>
            </div>
            <!-- Side Bar End -->

        </div>
    </div>
</div>
<!-- Product List End -->

<?php get_footer(); ?>
