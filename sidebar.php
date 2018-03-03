<div id="slide-out" class="side-nav sidebar-menu fixed">
    <!--titulo-->
    <section class="section port_title">
        <header>
            <h1 class="title"><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
            <h2 class="slogan"><?php bloginfo('description'); ?></h2>
        </header>
    </section>
    <div class="divider"></div>
    <!--fim titulo-->
    <!--menu-->
    <section class="section widget_estrut">
        <header class="port_title_widget">
            <h6 class="title_widget">Menu</h6>
        </header>
        <div class="divider"></div>
        <ul>
            <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
            <?php wp_list_categories('title_li='); ?>
            <?php wp_list_pages('title_li='); ?>
        </ul>
    </section>
    <!--fim Menu-->
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar()): ?>
    <?php endif; ?>
</div>