<nav class="main-header navbar navbar-expand navbar-info navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#" title="Sign Out" tooltip>
        <i class="far fa-user"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <div class="media">
            <img src="<?=ASSETS;?>images/favicon-bk.png" alt="logo" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                
              </h3>
              <p class="text-sm"> </p>
            </div>
          </div>
        </a>
        <div class="dropdown-divider"></div>
        <div class="dropdown-item">
          <form action="<?=URL_ROOT;?>user/logout">
            <button type="submit" name="submit" class="btn btn-info btn-block pull-right"><i class="fas fa-sign-out-alt"></i> Sign Out</button><br>
          </form>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-slide="true" href="#down" title="Go Down" tooltip>
        <i class="fa fa-chevron-down"></i>
      </a>
    </li>
  </ul>
</nav>