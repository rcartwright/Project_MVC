<?php
include_once 'layout/header.php';
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Project name</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo $_SERVER['HTTP_PATH_BASE']."/Project_MVC/Product/index" ?>">Products</a></li>
        <li><a href="<?php echo $_SERVER['HTTP_PATH_BASE']."/Project_MVC/Category/index" ?>">Categories</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<!-- container -->
<div class="container">


<?php
require($viewloc);
?>

 </div>
    <!-- /container -->

<?php
include_once 'layout/footer.php';
?>