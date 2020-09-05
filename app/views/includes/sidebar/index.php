<aside class="main-sidebar">
  <!-- style="background-color: #2a496e;color: white !important;" -->
  <section class="sidebar">
     <div class="user-panel">
      <div class="pull-left image">
        <img src="<?=IMAGES;?>head.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?=name();?></p>
        <div><i class="fa fa-circle text-success"></i> <?=type();?></div>
      </div>
    </div>
    <div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header navigation">MENUS</li>
        <li class="treeview">
          <a href="a"><i class="fa fa-sun-o"></i> <span>JOBS</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=URL_ROOT;?>page/job"><i class="fa fa-list"></i><span>LIST</span></a></li>
            <li><a href="<?=URL_ROOT;?>page/joballocation"><i class="fa fa-tasks"></i><span>JOB ALLOCATION</span></a></li>
            <li><a href="<?=URL_ROOT;?>page/manpower_add"><i class="fa fa-users"></i><span>MANPOWER</span></a></li>
          </ul>
        </li>
        <li><a href="<?=URL_ROOT;?>page/release"><i class="fa fa-check"></i> <span>RELEASE</span></a></li>
        <li><a href="<?=URL_ROOT;?>page/sms"><i class="fa fa-comment"></i> <span>SMS</span></a></li>
        <li><a href="<?=URL_ROOT;?>page/email"><i class="fa fa-envelope"></i> <span>EMAIL</span></a></li>
        <li><a href="<?=URL_ROOT;?>page/call"><i class="fa fa-phone"></i> <span>CALL</span></a></li>
        <li><a href="<?=URL_ROOT;?>page/settings"><i class="fa fa-gear"></i> <span>SETTINGS</span></a></li>
      </ul>
    </div>
  </section>
</aside>