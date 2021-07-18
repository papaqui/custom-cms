<?php require( 'init.php '); ?>
<?php require( 'templates/header.php' ); ?>
<?php 

$all_posts = get_all_posts();

$post_found = false;
if ( isset( $_GET['view'] ) ) {
  $post_found = get_post( $_GET['view'] );
  if( $post_found ) {
    $all_posts = [ $post_found ];
  }
}

?>

  <section class="blog-content">
    <div class="main-container">
      <h2>Blog posts</h2>
      <div class="blog-posts">
        <?php foreach( $all_posts as $post ): ?> 
        <article class="blog-post">
          <h3>
            <a href="?view=<?php echo $post['id'] ?>">
              <?php echo $post['title']; ?>
            </a>
          </h3>
          <div class="metabox">
            <!-- <p><?php echo $post['published_on'] ?></p> -->
            <p><?php echo strftime( '%d %b %Y', strtotime( $post['published_on'] ) ) ?></p>
          </div>
          <?php if($post_found): ?> 
            <p><?php echo $post['content']; ?></p>
          <?php else: ?>
            <p><?php echo $post['excerpt'] ?></p>
          <?php endif; ?>
        </article>
      <?php endforeach; ?>
      </div>
    </div>
  </section>

  <?php require( 'templates/footer.php' ); ?>
