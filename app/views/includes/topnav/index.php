<nav class="navbar navbar-static-top mynav" role="navigation">
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="color:#fff;">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- style="background-color: #2e97a9;color: white;" -->
          <i class="fa fa-user-circle"></i>
          <span class="hidden-xs">Welcome, <b><?=name();?></b></span>
        </a>
        <ul class="dropdown-menu">
          <li class="user-header">
            <!--   style="background: #2e97a9 !important;" -->
            <img src="<?=ASSETS;?>images/head.png" class="img-circle" alt="User Image">
            <p style="color:white;">
              <b><i><?=email();?></i></b>
              <small>
               <?=type();?> since <?=normal_date(date_added());?>
              </small>
            </p>
          </li>
          <li class="user-footer" style="background: #ffffff !important;">
            <div class="center">
              <div class="col-xs-6">
                <form action="<?=URL_ROOT;?>user/profile">
                  <button type="submit" name="submit" class="btn btn-default btn-block pull-right btn-log"> Profile</button><br>
                </form>
              </div>
              <div class="col-xs-6">
                <form action="<?=URL_ROOT;?>user/logout">
                  <button type="submit" name="submit" class="btn btn-primary btn-block pull-right btn-log"> Sign Out</button><br>
                  <!-- style="color:white;" -->
                </form>
              </div>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>