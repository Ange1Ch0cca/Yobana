<?php get_header(); ?>

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
            <?php
            // Obtener la categoría principal de la entrada actual
            $categories = get_the_category();
            if (!empty($categories)) {
                $category = $categories[0];
                $category_link = get_category_link($category->term_id);
            ?>
                <li class="breadcrumb-item"><a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category->name); ?></a></li>
            <?php
            }
            ?>
            <li class="breadcrumb-item active"><?php the_title(); ?></li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Product Detail Start -->
<div class="product-detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="product-detail-top">
                    <div class="row align-items-center">
                    <div class="col-md-5">
    <div class="product-slider-single normal-slider">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', ['alt' => get_the_title()]); // Mostrar la imagen destacada en tamaño completo ?>
        <?php else : ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-image.jpg" alt="Default Image">
            <!-- Puedes reemplazar 'default-image.jpg' con el nombre de una imagen predeterminada en caso de que la entrada no tenga una imagen destacada -->
        <?php endif; ?>
    </div>
</div>

                        <div class="col-md-7">
                            <div class="product-content">
                                <div class="title">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <div class="price">
                                    <h4>Price:</h4>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <div class="quantity">
                                    <h4>Quantity:</h4>
                                    <div class="qty">
                                        <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                        <input type="text" value="1">
                                        <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="p-size">
                                    <h4>Size:</h4>
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn">S</button>
                                        <button type="button" class="btn">M</button>
                                        <button type="button" class="btn">L</button>
                                        <button type="button" class="btn">XL</button>
                                    </div>
                                </div>
                                <div class="p-color">
                                    <h4>Color:</h4>
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn">White</button>
                                        <button type="button" class="btn">Black</button>
                                        <button type="button" class="btn">Blue</button>
                                    </div>
                                </div>
                                <div class="action">
                                    <a class="btn" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                    <a class="btn" href="#"><i class="fa fa-shopping-bag"></i>Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row product-detail-bottom">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#description">Descripción</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="description" class="container tab-pane active">
                                <h4><?php the_title(); ?></h4>
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="section-header">
                        <h1>Productos Relacionados</h1>
                    </div>

                    <div class="row align-items-center product-slider product-slider-3">
                        <?php
                        // Obtener las categorías de la entrada actual
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            $category_ids = array();

                            // Obtener los IDs de las categorías
                            foreach ($categories as $category) {
                                $category_ids[] = $category->term_id;
                            }

                            // Configurar argumentos para WP_Query
                            $args = array(
                                'category__in' => $category_ids, // Mostrar entradas de las mismas categorías
                                'post_type' => 'post', // Tipo de post
                                'posts_per_page' => 6, // Número de entradas a mostrar
                                'post__not_in' => array(get_the_ID()), // Excluir la entrada actual
                            );

                            $related_posts_query = new WP_Query($args);

                            if ($related_posts_query->have_posts()) :
                                while ($related_posts_query->have_posts()) : $related_posts_query->the_post();
                        ?>
                                    <div class="col-lg-3">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('medium'); // Tamaño de imagen ajustable según tus necesidades 
                                                    ?>
                                                </a>
                                            </div>
                                            <div class="product-price">
                                            <h3 style="color: white;"><?php echo '<span>$</span>' get_the_excerpt(); ?></h3>
                                                <a class="btn" href="<?php the_permalink(); ?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p>No hay productos relacionados.</p>';
                            endif;
                        }
                        ?>
                    </div>
                </div>

            </div>

            <!-- Side Bar Start -->
            <div class="col-lg-4 sidebar">
                <div class="sidebar-widget category">
                    <h2 class="title">Categorias</h2>
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
<!-- Product Detail End -->

<?php get_footer(); ?>