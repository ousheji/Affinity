<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="content-post post tag-jian-ti-zhong-wen" role="main">

  <div class="content-post-title">
    <h1><?php $this->title() ?></h1>
  </div>
  <div class="content-post-meta">
    <time class="post-date" datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y年m月d日'); ?></time> · <?php $this->category(', '); ?></div>
  <div class="content-post-body">
  <?php $this->content(); ?>
  </div>
  <div class="content-post-meta post-meta-tags">
    <?php $this->tags(' , ', true, 'none'); ?>
  </div>
  <div class="content-post-author">
    <div class="tile">
      <div class="tile-icon">
        <figure class="gavatar avatar-lg">
          <img src="http://gu.yiimg.top/usr/themes/Affinity/310.png" />
        </figure>
      </div>
      <div class="tile-content">
        <p class="tile-title"><strong>公子欧</strong></p>
            <p class="tile-subtitle">业余站长，草根平民，喜好广泛，技术低端，好结识朋友，一时无聊建立本站！</p>
      </div>
    </div>
  </div>

  <div class="content-post-comments">
  </div>

  <div class="doc_comments">
  <?php $this->need('comments.php'); ?>
  </div>

</article>


<?php $this->need('footer.php'); ?>
