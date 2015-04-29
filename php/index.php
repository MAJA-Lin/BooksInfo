<?php /* Template Name: mainhomepage */ ?>

<!-- Header -->
<?php include (TEMPLATEPATH . '/header.php'); ?>
<!-- End Header -->

<!-- middle content area -->
<div id="midbox">

<!-- sidebar -->
<div id="homesidebar">
<img src="http://www.heidicool.com/samplewordpress/wp-content/themes/1genericsampletheme/images/wordpress.png" alt="WordPress Logo" />
</div>
<!-- end sidebar -->

<!-- main content area -->
<div id="mainhome">
<a name="maincontent" id="maincontent"></a>
<!-- WordPress Loop -->
<div class="blogpostwrapper">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="blogpost">
<h3 class="entrytitle" id="post-<?php the_ID(); ?>"> <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?> </a> </h3>
<?php the_content(); ?>
</div>

<?php endwhile; ?>
<?php else : ?>
<h6 class="center">Not Found</h6>
<p class="center">Sorry, but you are looking for something that isn't here.</p>

<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
</div>
<!-- End WordPress Loop -->

</div>
<!-- end main content area -->

</div>
<!-- end middle content area -->

<!-- Footer -->
<?php include (TEMPLATEPATH . '/footer.php'); ?>

