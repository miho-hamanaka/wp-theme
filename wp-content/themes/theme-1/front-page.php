<?php get_header(); ?>

<div id="contents" class="global-wrapper">
  <!-- <ul class="breadcrumb clearfix">
    <li><a href="#">TOP</a></li>
    <li ><a class="breadcrumb-active" href="<?php echo esc_url(home_url('/')); ?>">コラム</a> </li>
  </ul> -->
  <!-- パンクズ -->
  <div class="global-container">
    <main id="contents_right" class="posts">
      <section>
        <ul class="hero-wrapper">
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-1.png" alt="hero-1"></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-2.png" alt="hero-2"></li>
          <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-3.png" alt="hero-3"></li>
        </ul>
      </section>
      <!-- 記事画像 -->
      <section class="global-outer">
        <h2 class="global-heading">Category</h2>
        <ul class="global-category">
        <?php
        $args = [
          'orderby' => 'count',
          'order' => 'DSC', // 降順で指定
        ];
        $categories = get_categories($args);
        foreach ($categories as $category) {
            echo '<li class="global-category_item"><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a> </li> ';
        }
        ?>
        </ul>
      </section>
      <!-- カテゴリー -->
      <section class="global-outer">
        <h2 class="global-heading">新着記事</h2>
          <?php
            $args = [
              'posts_per_page' => 3,
            ];
            $posts = get_posts($args);
            foreach ($posts as $post):
            setup_postdata($post);
          ?>
          <div class="post">
            <div class="thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a><br>
              <?php //the_category();?>
            </div>
            <div class="detail">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <!-- <p class="post-date"><i class="far fa-clock"></i><?php the_time('Y年m月j日'); ?></p> -->
                <?php
                if (mb_strlen($post->post_content, 'UTF-8') > 80) {
                    $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 80, 'UTF-8'));
                    echo $content.'…';
                } else {
                    echo str_replace('\n', '', strip_tags($post->post_content));
                }
                ?>
            </div>
          </div>
          <?php
            endforeach;
            wp_reset_postdata();
          ?>
          <p>
            <?php
            //$news = get_term_by('slug', 'flower', 'category');
            //$news_link = get_term_link($news, 'category');
            ?>
            <!-- <a href="<?php echo $news_link; ?>" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a> -->
          </p>
      </section>
      <!-- 新着記事 -->
      <section>
        <h2 class="global-heading">RIZAP COOK 銀座店</h2>
        <div class="outline_wrapper">
          <p class="outline_catch">調理器具持参不要! ひろびろ清潔! 集中して学べる環境が揃っています</p>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rizap-cook-ginza.png" alt="RIZAP COOK 銀座店">
          <p class="cv-btn shine"><a href="#">プロによる個別指導を受けてみる</a></p>
        </div>
        <div class="outline_data">
          <dl class="outline_data_inner">
            <dt class="outline_data_title">住所</dt>
            <dd class="outline_data_content">〒104-0061 東京都中央区銀座3-3-1 ZOE銀座 7F</dd>
            <dt class="outline_data_title">TEL</dt>
            <dd class="outline_data_content">0120-941-776
              <span>※受付時間 9:00~21:00 (年末年始を除く)</spn></dd>
            <dt class="outline_data_title">営業時間</dt>
            <dd class="outline_data_content">10:00~22:00</dd>
            <dt class="outline_data_title">最寄駅</dt>
            <dd class="outline_data_content">東京メトロ 銀座駅 C8出口から徒歩2分<br>
              東京メトロ 銀座一丁目駅 5番出口から徒歩2分<br>
              JR 有楽町駅 中央口から徒歩3分</dd>
          </dl>
          <div class="outline_map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.144022347634!2d139.7635790159736!3d35.67345558019599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be448bce407%3A0xaa072dc7ebd09afd!2zWk9F6YqA5bqn!5e0!3m2!1sja!2sjp!4v1504226485011" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </section>
      <!-- RIZAP COOK 銀座店 -->
    </main>
    <!--.posts-->

    <?php //get_sidebar();?>
  </div>

</div>

<?php get_footer(); ?>