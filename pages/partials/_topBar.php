<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home"><strong>Simple Blog</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php if(isset($_SESSION['userLogin']) && !empty($_SESSION['userLogin'])):?>
          <a class="nav-link active" href="index?url=addPost">addPost</a>
          <a class="nav-link active" href="index?url=logout">Logout</a>
        <?php else:?>
        <li class="nav-item">
          <a class="nav-link active" href="index?url=register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index?url=login">Login</a>
        </li>
        <?php endif?>
      </ul>
    </div>
  </div>
</nav>