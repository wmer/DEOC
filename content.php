<article class="card" id="post-<?php the_ID(); ?>" itemprop='blogPost' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
    <header class="card-image">
        <?php the_post_thumbnail() ?>
        <a class="card-title" itemprop="url" href="<?php the_permalink(); //link da postagem ?>"><h1 itemprop="name"><?php the_title(); //Titulo Post ?></h1></a>
    </header>
    <div class="divider"></div>
    <div class="infos_post">
        <i class="fa fa-user"></i> <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php the_author_posts_link(); ?></span></span> - <i class="fa fa-calendar"></i> <span itemprop="datePublished" content="<?php the_date('Y-m-d');?>T<?php the_time('G:i'); ?>"><?php the_time(get_option( 'date_format' )); //Data ?></span>
        <span class="badge"><i class="fa fa-eye"></i> <?php echo getPostViews($post->ID); ?></span>
        <?php edit_post_link(__( 'Editar Post'), '&ensp;&ensp; -- &ensp;&ensp;'); ?>
    </div>
    <div class="card-content" itemprop='description articleBody'>
        <?php the_excerpt(); //Conteudo Post limitado, the_content() exibe completo ?>
    </div>
    <div class="card-action">
        <a title="Continuar Lendo" href="<?php the_permalink(); ?>" style="color: #FF0004">Continuar Lendo...</a>
    </div>
</article>