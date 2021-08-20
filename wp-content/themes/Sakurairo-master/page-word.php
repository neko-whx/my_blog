<?php
 
/**
 * Template Name: 说说模版
 */
 
get_header();
?>
 
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="cbp_shuoshuo">
                <?php
                    query_posts("post_type=shuoshuo & post_status=publish & posts_per_page=-1");
                    if (have_posts()) : ?>
                        <ul class="cbp_tmtimeline">
                            <?php
                                while (have_posts()) : the_post(); ?>
                                    <li>
                                        <span class="shuoshuo_author_img"><img src="<?php echo get_avatar_profile_url(get_the_author_meta('ID')); ?>" class="avatar avatar-48" width="48" height="48"></span>
                                        <a class="cbp_tmlabel" href="javascript:void(0)">
                                        <p></p>
                                        <p><?php the_content(); ?></p>
                                        <p></p>
                                        <p class="shuoshuo_time"><i class="fa fa-clock-o"></i> <?php the_time('Y年n月j日G:i'); ?></p>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                        </ul>
                    <?php
                    else : ?>
                        <h3 style="text-align: center;">你还没有发表说说噢！</h3>
                        <p style="text-align: center;">赶快去发表你的第一条说说心情吧！</p>
                    <?php
                    endif; ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', ()=>{
        document.querySelectorAll('.cbp_tmtimeline li').forEach((e)=>{
        e.addEventListener("mouseenter",()=>{
            e.querySelector('.shuoshuo_author_img img').classList.add("zhuan");
        })
        e.addEventListener("mouseleave",()=>{
            e.querySelector('.shuoshuo_author_img img').classList.remove("zhuan");
        })
    })
    }, false);
    </script>
<?php
get_footer();
 