<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
<script src="haapisnews/search.js"></script>
</head>
<body>

<header>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url() ?>">HAAPISNEWS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php if(is_home() || is_single() ):?>
   <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/global") ?>">Global </a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/opinion") ?>">Opinion</a>
 </li>

 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/politics") ?>">Politics</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/science") ?>">Science</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/business") ?>">Business</a>
 </li>
 <?php elseif(is_page("politics") || is_child(9))  : ?>
  <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/asia") ?>">Asia </a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/Europe") ?>">Europe</a>
 </li>

 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/middle-east") ?>">Middle East</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/africa") ?>">Africa</a>
 </li>


 <?php elseif(is_page("opinion") || is_child(7))  : ?>
  <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/election") ?>">Election </a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/corona") ?>">Corona</a>
 </li>

 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/lifestyle") ?>">Lifestyle</a>
 </li>

  <?php elseif(is_page("science") || is_child(11))  : ?>
    <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/space") ?>">Space </a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/programming") ?>">Programming</a>
 </li>

 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/global-warming") ?>">Global Warming</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/biology") ?>">Biology</a>
 </li>
    <?php elseif(is_page("business") || is_child(13))  : ?>
      <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/economy") ?>">Economy</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/stocks") ?>">Stocks</a>
 </li>

 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/Personal-finance") ?>">Personal Finance</a>
 </li>

 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/tech") ?>">Tech</a>
 </li>

      <?php else  : ?>
        <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/global") ?>">Global </a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/opinion") ?>">Opinion</a>
 </li>

 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/politics") ?>">Politics</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/science") ?>">Science</a>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="<?php echo site_url("/business") ?>">Business</a>
 </li>
 <?php endif; ?>
</ul>
<form class="form-inline my-2 my-lg-0">
 <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
 <?php get_search_form(); ?>
</form>

      
   


  </div>
 

</nav>

</header>