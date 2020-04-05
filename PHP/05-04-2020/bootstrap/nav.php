<nav class="navbar navbar-expand-md bg-dark navbar-dark clearfix fixed-top" style="z-index: 100">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">PHP</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
    	<?php if(!isset($_SESSION['uname'])): ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">login</a>
      </li>
      <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">logout</a>
      </li>
  	<?php endif; ?>
    </ul>
  </div>
</nav>