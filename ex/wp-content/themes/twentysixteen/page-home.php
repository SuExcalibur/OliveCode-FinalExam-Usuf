<?php
/**
 * Template Name: Caohagan Home
 */
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Cahagan Island</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
  </head>

  <body>
    <main>
      <div id="wrapper" class="height">
        <div id="bgobj" class="height">
          <div class="bgimg1">
            <img src="<?php bloginfo('template_url'); ?>/img/idx-bkphoto1.png" width="988" height="680">
            <div id="sitehead">
              <img src="<?php bloginfo('template_url'); ?>/img/idx-sitehead.png" alt="Caohagan Island -カオハガン島オフィシャルサイト-" width="789" height="479">
            </div>
          </div>

          <div class="bgimg2">
            <img src="<?php bloginfo('template_url'); ?>/img/idx-bkphoto2.png" width="836" height="689">
          </div>
          <div class="bgimg3">
            <img src="<?php bloginfo('template_url'); ?>/img/idx-bkphoto3.png" width="719" height="542">
          </div>
        </div>
        <!-- End of bgobj -->

        <div id="round-img-container">
          <div class="round-img ri1">
            <img src="<?php bloginfo('template_url'); ?>/img/bln_photo1.jpg" style="height: 250px; width: 250px;">
          </div>
          <div class="round-img ri2">
            <img src="<?php bloginfo('template_url'); ?>/img/bln_photo2.jpg" style="height: 170px; width: 170px;">
          </div>
          <div class="round-img ri3">
            <img src="<?php bloginfo('template_url'); ?>/img/bln_photo3.jpg" style="height: 220px; width: 220px;">
          </div>
          <div class="round-img ri4">
            <img src="<?php bloginfo('template_url'); ?>/img/bln_photo4.jpg" style="width: 190px; height: 190px;">
          </div>
          <div class="round-img ri5">
            <img src="<?php bloginfo('template_url'); ?>/img/bln_photo5.jpg" style="width: 240px; height: 240px;">
          </div>
          <div class="round-img ri6">
            <img src="<?php bloginfo('template_url'); ?>/img/bln_photo6.jpg" style="width: 230px; height: 230px;">
          </div>
          <div class="round-img ri7">
            <img src="<?php bloginfo('template_url'); ?>/img/bln_photo7.jpg" style="width: 200px; height: 200px;">
          </div>
          <div class="round-img ri8">
            <img src="<?php bloginfo('template_url'); ?>/img/bln_photo8.jpg" style="width: 220px; height: 220px;">
          </div>
          <div class="round-img ri9">
            <img src="<?php bloginfo('template_url'); ?>/img/bln_photo9.jpg" style="width: 190px; height: 190px;">
          </div>
          <div class="round-img ri10">
            <img src="<?php bloginfo('template_url'); ?>/img/bln_photo10.jpg" style="width: 300px; height: 300px;">
          </div>
          <div class="round-img ri11">
            <img src="<?php bloginfo('template_url'); ?>/img/bln_photo11.jpg" style="width: 200px; height: 200px;">
          </div>
        </div>
        <!-- End of round-img-container -->
        <div id="content">
          <!--News Contents-->
          <div id="news1" class="news">
            <div class="article">
              <a href="javascript:content('fig05','news1')">
                <h4>お知らせ</h4>
                <dl>
                  <dt>2014年6月25日</dt>
                  <dd>島主コラムを更新しました。</dd>
                </dl>
                <img src="<?php bloginfo('template_url'); ?>/img/tmp_arrow-a.png">
              </a>
            </div>
          </div>
          <!--End of news1-->
          <div id="news2" class="news">
            <div class="article">
              <a href="javascript:content('fig05','news2')">
                <h4>お知らせ</h4>
                <dl>
                  <dt>2014年10月8日</dt>
                  <dd>カオハガン・ハウス求人　2014年12月末まで</dd>
                </dl>
                <img src="<?php bloginfo('template_url'); ?>/img/tmp_arrow-a.png">
              </a>
            </div>
          </div>
          <!--End of news contents -->

          <section id="section1" style="height: 1062px;">
            <article>
              <div class="section-content">
                <div class="figImg"><img src="<?php bloginfo('template_url'); ?>/img/idx_ti_fig01.png" width="36" height="14"></div>
                <div class="section-title">
                  <h2>
                  <!--section1 title-->
                  <?php echo get_post(7)->post_title; ?></h2>
                </div>
                <div class="figCopy">
                  <!--section1 figCopy-->
                  <?php echo category_description( get_cat_ID('fig01') ); ?>
                </div>
                <div class="section-text">
                  <!--section1 Text-->
                  <?php echo get_post(7)->post_content; ?>
                </div>
                <!--End of section-text -->
                <div class="brushLine"></div>
                <nav class="nav">
                  <ul>
                    <li><a href="javascript:content('fig01','about')">カオハガン島の概要</a></li>
                    <li><a href="javascript:content('fig01','history')">島の沿革</a></li>
                    <li><a href="javascript:content('fig01','caohagan2050')" class="cnt">カオハガン2050</a></li>
                    <li><a href="javascript:content('fig01','ngo')" class="cnt">NGO南の島から</a></li>
                    <li><a href="javascript:content('fig01','sanctuary')" class="cnt">熱帯珊瑚礁保護区</a></li>
                    <li><a href="javascript:content('fig01','islandmaster')" class="cnt">島主紹介</a></li>
                  </ul>
                </nav>
              </div>
              <!-- End of section-content -->
            </article>
            <div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/img/idx_cnt_fig01_bk_t.png" width="339" height="443"></div>
            <div class="idx-bkMid" style="height: 328px;"></div>
            <div class="idx-bkBtm" style="top: 735px;"><img src="<?php bloginfo('template_url'); ?>/img/idx_cnt_fig01_bk_b.png" width="339" height="325"></div>
          </section>
          <!--End of section1 -->

          <section id="section2">
            <article>
              <div class="section-content">
                <div class="figImg"><img src="<?php bloginfo('template_url'); ?>/img/idx_ti_fig02.png" width="38" height="14" alt="fig01"></div>
                <div class="section-title">
                  <h2>
              <!--section2 title-->
              <?php echo get_post(9)->post_title; ?>
                  </h2>
                </div>
                <div class="figCopy">
                  <!--section2 figCopy-->
                  <?php echo category_description(get_cat_ID('fig02')); ?>
                </div>
                <div class="section-text">
                  <!--section2 Text-->
                  <?php echo get_post(9)->post_content ?>
                </div>
                <!-- End of section-text -->
                <div class="brushLine"></div>
                <div class="nav">
                  <ul>
                    <li><a href="javascript:content('fig02','islandlife')">島民のくらし</a></li>
                    <li><a href="javascript:content('fig02','activity')">アクティビティ</a></li>
                    <li><a href="javascript:content('fig02','craft')">カオハガンクラフト</a></li>
                  </ul>
                </div>
              </div>
              <!-- End of section-content -->
            </article>
            <div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/img/idx_cnt_fig02_bk_t.png" width="513" height="246"></div>
            <div class="idx-bkMid" style="height: 69px;"></div>
            <div class="idx-bkBtm" style="top: 279px;"><img src="<?php bloginfo('template_url'); ?>/img/idx_cnt_fig02_bk_b.png" width="513" height="300"></div>
          </section>
          <!-- End of section2 -->

          <section id="section3" style="height: 597px;">
            <article>
              <div class="section-content">
                <div class="figImg"><img src="<?php bloginfo('template_url'); ?>/img/idx_ti_fig03.png" width="38" height="14" alt="fig01"></div>
                <div class="section-title">
                  <h2>
                  <!--section3 title-->
              <?php echo get_post(11)->post_title; ?>
                  </h2>
                </div>
                <div class="figCopy">
                  <!--section3 figCopy-->
                  <?php echo category_description( get_cat_ID('fig03') ); ?>
                </div>
                <div class="section-text">
                  <!--section3 Text-->
                  <?php echo get_post(11)->post_content; ?>
                </div>
                <!-- End of section-text -->
                <div class="brushLine"></div>
                <div class="nav">
                  <ul>
                    <li><a href="javascript:content('fig03','caohaganhouse')">カオハガン・ハウス</a></li>
                    <li><a href="javascript:content('fig03','access')">島までのアクセス</a></li>
                    <li><a href="javascript:content('fig03','expenses')">宿泊費用</a></li>
                    <li><a href="javascript:content('fig03','reservation')">宿泊予約</a></li>
                    <li><a href="javascript:content('fig03','onedaytour')">一日体験ツアー</a></li>
                    <li><a href="javascript:content('fig03','qanda')">Q&amp;A</a></li>
                  </ul>
                </div>
              </div>
              <!-- End of section-content -->
            </article>
            <div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/img/idx_cnt_fig03_bk_t.png" width="396" height="273"></div>
            <div class="idx-bkMid" style="height: 178px;"></div>
            <div class="idx-bkBtm" style="top: 415px;"><img src="<?php bloginfo('template_url'); ?>/img/idx_cnt_fig03_bk_b.png" width="396" height="180"></div>
          </section>
          <!-- End of section3 -->

          <section id="section4" style="height: 509px;">
            <article>
              <div class="section-content">
                <div class="figImg"><img src="<?php bloginfo('template_url'); ?>/img/idx_ti_fig04.png" width="38" height="14" alt="fig01"></div>
                <div class="section-title">
                  <h2>
                  <!--section4 title-->
              <?php echo get_post(13)->post_title; ?>
                  </h2>
                </div>
                <div class="figCopy">
                  <!--section4 figCopy-->
                  <?php echo category_description( get_cat_ID('fig04') ); ?>
                </div>
                <div class="section-text">
                  <!--section4 Text-->
                  <?php echo get_post(13)->post_content; ?>
                </div>
                <!-- End of section-text -->
                <div class="brushLine"></div>
                <div class="nav">
                  <ul>
                    <li><a href="javascript:content('fig04','about4')">カオハガンキルトについて</a></li>
                    <li><a href="javascript:content('fig04','gallery')">カオハガンキルトギャラリー</a></li>
                    <li><a href="javascript:content('fig04','quiltgarden')">CaohaganQuilt+Garden</a></li>
                  </ul>
                </div>
              </div>
              <!-- End of section-content -->
            </article>
            <div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/img/idx_cnt_fig04_bk_t.png" width="545" height="247"></div>
            <div class="idx-bkMid" style="height: 184px;"></div>
            <div class="idx-bkBtm" style="top: 266px;"><img src="<?php bloginfo('template_url'); ?>/img/idx_cnt_fig04_bk_b.png" width="545" height="241"></div>
          </section>
          <!-- End of section4 -->

          <section id="section5" style="height: 634px;">
            <article>
              <div class="section-content">
                <div class="figImg"><img src="<?php bloginfo('template_url'); ?>/img/idx_ti_fig05.png" width="38" height="14" alt="fig01"></div>
                <div class="section-title">
                  <h2>
                  <!--section5 title-->
                  <?php echo get_post(15)->post_title; ?></h2>
                </div>
                <!--section5 Date-->
                <div class="figDate">2014年4月7日</div>
                <div class="figTitle">
                  <?php echo category_description( get_cat_ID('fig05') ); ?>
                </div>
                <div class="section-text">
                  <!--section5 Text-->
                  <?php 
              global $more; $more = FALSE;
			         the_content('...');
              echo get_post(15)->post_content; ?>
                </div>
                <!-- End of section-text -->
                <div class="nav">
                  <ul>
                    <li><a href="javascript:content('fig05','news1')">続きを読む</a></li>
                  </ul>
                </div>
              </div>
              <!-- End of section-content -->
            </article>
            <div class="idx-bkTop"><img src="<?php bloginfo('template_url'); ?>/img/idx_cnt_fig05_bk_t.png" width="395" height="280"></div>
            <div class="idx-bkMid" style="height: 108px;"></div>
            <div class="idx-bkBtm" style="top: 352px;"><img src="<?php bloginfo('template_url'); ?>/img/idx_cnt_fig05_bk_b.png" width="395" height="280"></div>
          </section>
          <!-- End of section5 -->

        </div>
        <!-- End of content -->
      </div>
      <footer>
        <div class="foot-content">
          <img id="bird1" src="<?php bloginfo('template_url'); ?>/img/foot_bird1.png" width="122" height="112">
          <img id="bird2" src="<?php bloginfo('template_url'); ?>/img/foot_bird2.png" width="118" height="104">
          <img id="tree" src="<?php bloginfo('template_url'); ?>/img/foot_tree.png" width="162" height="190">
          <img id="logo" src="<?php bloginfo('template_url'); ?>/img/foot_logo.png" alt="Caohagan Island" width="344" height="75">
          <img id="copyright" src="<?php bloginfo('template_url'); ?>/img/foot_copyright.png" alt="Copyright(C)2013 Caohagan Island All Rights Reserved." width="280" height="11">
        </div>
      </footer>
      <!-- End of wrapper -->
    </main>
    <!--  Scripts  -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.2.0.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <!--  Scripts  -->
  </body>

  </html>
