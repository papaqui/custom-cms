<?php require( 'init.php '); ?>
<?php 

$site_title = 'Custom CMS';

$post_found = false;
if ( isset( $_GET['view'] ) ) {
  foreach ($all_posts as $post) {
    if( $post['id'] == $_GET['view'] ){      
      $post_found = true;
      $all_posts = [ $post ];
    }
  }
}
?>

  <?php require('templates/header.php'); ?>

  <section class="blog-content">
    <div class="main-container">
      <h2>Add new post</h2>
      <form action="" method="post">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" value="">

      <label for="excerpt">Excerpt</label>
      <input type="text" name="excerpt" id="excerpt" value="">

      <label for="content">Content</label>
      <textarea name="content" id="content" value=""></textarea>
      </form>
    </div>
  </section>

  <?php require('templates/footer.php'); ?>
</body>
</html>