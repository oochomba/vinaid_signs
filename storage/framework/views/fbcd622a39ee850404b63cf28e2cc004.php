  <?php
  $usr = Auth::guard('admin')->user();
  ?>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="<?php echo e(url('')); ?>" target="_blank" class="nav-link">View Website</a>
          </li>
      </ul>

      <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                      <i class="fa fa-search"></i>
                  </button>
              </div>
          </div>
      </form>

      <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fa fa-comments"></i>
                  <span class="badge badge-danger navbar-badge">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                      <div class="media">
                          <img src="<?php echo e(url('assets/dist/img/user1-128x128.jpg')); ?>" alt="User Avatar"
                              class="img-size-50 mr-3 img-circle">
                          <div class="media-body">
                              <h3 class="dropdown-item-title">
                                  Brad Diesel
                                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                              </h3>
                              <p class="text-sm">Call me whenever you can...</p>
                              <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                          </div>
                      </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                      <div class="media">
                          <img src="<?php echo e(url('assets/dist/img/user8-128x128.jpg')); ?>" alt="User Avatar"
                              class="img-size-50 img-circle mr-3">
                          <div class="media-body">
                              <h3 class="dropdown-item-title">
                                  John Pierce
                                  <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                              </h3>
                              <p class="text-sm">I got your message bro</p>
                              <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                          </div>
                      </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                      <div class="media">
                          <img src="<?php echo e(url('assets/dist/img/user3-128x128.jpg')); ?>" alt="User Avatar"
                              class="img-size-50 img-circle mr-3">
                          <div class="media-body">
                              <h3 class="dropdown-item-title">
                                  Nora Silvester
                                  <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                              </h3>
                              <p class="text-sm">The subject goes here</p>
                              <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                          </div>
                      </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fa fa-bell"></i>
                  <span class="badge badge-warning navbar-badge">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">15 Notifications</span>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                      <i class="fa fa-envelope mr-2"></i> 4 new messages
                      <span class="float-right text-muted text-sm">3 mins</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                      <i class="fa fa-users mr-2"></i> 8 friend requests
                      <span class="float-right text-muted text-sm">12 hours</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                      <i class="fa fa-file mr-2"></i> 3 new reports
                      <span class="float-right text-muted text-sm">2 days</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
              </div>
          </li>

      </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- <?php if(!empty($setting->website_name)): ?>
      <a href="<?php echo e(url('admin/dashboard')); ?>" class="brand-link">
          <img src="<?php echo e(url('assets/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><?php echo e($setting->website_name); ?></span>
      </a>
      <?php endif; ?> -->
      <a href="<?php echo e(url('admin/dashboard')); ?>" class="brand-link">
          <img src="<?php echo e(url('assets/dist/img/user2-160x160.jpg')); ?>" alt="<?php echo e(ucwords(Auth::user()->name)); ?>"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><?php echo e(ucwords(Auth::user()->name)); ?></span>
      </a>


      <div class="sidebar">
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <?php if($usr->can('dashboard.view')): ?>
                  <li class="nav-item">
                      <a href="<?php echo e(url('admin/dashboard')); ?>"
                          class="nav-link <?php echo e(Request::segment(2) == 'dashboard' ? 'active' : ''); ?>">
                          <i class="nav-icon fa fa-tachometer"></i>
                          <p> Dashboard </p>
                      </a>
                  </li>
                  <?php endif; ?>

                  <?php if($usr->can('admin.view') || $usr->can('admin.create') || $usr->can('admin.edit') || $usr->can('admin.delete')): ?>
                  <li class="nav-item has-treeview <?php echo e(Request::segment(2) == 'admin' ? 'menu-open' : ''); ?>">
                      <a href="#" class="nav-link <?php echo e(Request::segment(2) == 'admin' ? 'active' : ''); ?>">
                          <i class="nav-icon fa fa-users"></i>
                          <p>
                              Admins
                              <i class="fa fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <?php if($usr->can('admin.view')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/admin/list')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'admin' && Request::segment(3) == 'list' ? 'active' : ''); ?>">
                                  <i class="fa fa-circle nav-icon"></i>
                                  <p>System Admins</p>
                              </a>
                          </li>
                          <?php endif; ?>
                          <?php if($usr->can('admin.create')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/admin/add')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'admin' && Request::segment(3) == 'add' ? 'active' : ''); ?>">
                                  <i class="fa fa-circle nav-icon"></i>
                                  <p>Add Admin</p>
                              </a>
                          </li>
                          <?php endif; ?>
                      </ul>
                  </li>
                  <?php endif; ?>

                  <?php if($usr->can('role.view') || $usr->can('role.create') || $usr->can('role.eidt') || $usr->can('role.delete')): ?>
                  <li class="nav-item has-treeview <?php echo e(Request::segment(2) == 'roles' ? 'menu-open' : ''); ?>">
                      <a href="#" class="nav-link <?php echo e(Request::segment(2) == 'roles' ? 'active' : ''); ?>">
                          <i class="nav-icon fa fa-users"></i>
                          <p>
                              Roles & Permissions
                              <i class="fa fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <?php if($usr->can('role.view')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/roles')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'roles' && Request::segment(3) == '' ? 'active' : ''); ?>">
                                  <i class="fa fa-circle nav-icon"></i>
                                  <p>All Roles</p>
                              </a>
                          </li>
                          <?php endif; ?>
                          <?php if($usr->can('role.view')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/roles/add')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'roles' && Request::segment(3) == 'add' ? 'active' : ''); ?>">
                                  <i class="fa fa-circle nav-icon"></i>
                                  <p>Create Role</p>
                              </a>
                          </li>
                          <?php endif; ?>
                      </ul>
                  </li>
                  <?php endif; ?>

                  <?php if(
                  $usr->can('category.view') ||
                  $usr->can('category.create') ||
                  $usr->can('category.eidt') ||
                  $usr->can('category.delete')): ?>
                  <li class="nav-item has-treeview <?php echo e(Request::segment(2) == 'category' ? 'menu-open' : ''); ?>">
                      <a href="#" class="nav-link <?php echo e(Request::segment(2) == 'category' ? 'active' : ''); ?>">
                          <i class="nav-icon fa fa-list"></i>
                          <p>
                              Category
                              <i class="fa fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <?php if($usr->can('category.view')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/category/list')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'category' && Request::segment(3) == 'list' ? 'active' : ''); ?>">
                                  <i class="fa fa-circle nav-icon"></i>
                                  <p>Categories List</p>
                              </a>
                          </li>
                          <?php endif; ?>
                          <?php if($usr->can('category.create')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/category/add')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'category' && Request::segment(3) == 'add' ? 'active' : ''); ?>">
                                  <i class="fa fa-circle nav-icon"></i>
                                  <p>Add Category</p>
                              </a>
                          </li>
                          <?php endif; ?>

                      </ul>
                  </li>
                  <?php endif; ?>


                  <?php if(
                  $usr->can('product.view') ||
                  $usr->can('product.create') ||
                  $usr->can('product.eidt') ||
                  $usr->can('product.delete')): ?>
                  <li class="nav-item has-treeview <?php echo e(Request::segment(2) == 'product' ? 'menu-open' : ''); ?>">
                      <a href="#" class="nav-link <?php echo e(Request::segment(2) == 'product' ? 'active' : ''); ?>">
                          <i class="nav-icon fa fa-list"></i>
                          <p>
                              Projects
                              <i class="fa fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <?php if($usr->can('product.view')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/product/list')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'product' && Request::segment(3) == 'list' ? 'active' : ''); ?>">
                                  <i class="fa fa-circle nav-icon"></i>
                                  <p>Project List</p>
                              </a>
                          </li>
                          <?php endif; ?>
                          <?php if($usr->can('product.create')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/product/add')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'product' && Request::segment(3) == 'add' ? 'active' : ''); ?>">
                                  <i class="fa fa-circle nav-icon"></i>
                                  <p>Add Project</p>
                              </a>
                          </li>
                          <?php endif; ?>
                      </ul>
                  </li>
                  <?php endif; ?>

                  <?php if(
                  $usr->can('mockup.view') ||
                  $usr->can('mockup.create') ||
                  $usr->can('mockup.eidt') ||
                  $usr->can('mockup.delete')): ?>
                  <li class="nav-item has-treeview <?php echo e(Request::segment(2) == 'mockup' ? 'menu-open' : ''); ?>">
                      <a href="#" class="nav-link <?php echo e(Request::segment(2) == 'mockup' ? 'active' : ''); ?>">
                          <i class="nav-icon fa fa-photo"></i>
                          <p>
                              Mockups
                              <i class="fa fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <?php if($usr->can('mockup.view')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/mockup/list')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'mockup' && Request::segment(3) == 'list' ? 'active' : ''); ?>">
                                  <i class="fa fa-circle nav-icon"></i>
                                  <p>Mockup List</p>
                              </a>
                          </li>
                          <?php endif; ?>
                          <?php if($usr->can('mockup.create')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/mockup/add')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'mockup' && Request::segment(3) == 'add' ? 'active' : ''); ?>">
                                  <i class="fa fa-circle nav-icon"></i>
                                  <p>Add Mockup</p>
                              </a>
                          </li>
                          <?php endif; ?>
                      </ul>
                  </li>
                  <?php endif; ?>

                  <?php if($usr->can('page.create')): ?>
                  <li class="nav-item">
                      <a href="<?php echo e(url('admin/page/list')); ?>"
                          class="nav-link <?php echo e(Request::segment(2) == 'page' && Request::segment(3) ||Request::segment(2) == 'page' && Request::segment(3) == 'edit' ? 'active' : ''); ?>">
                          <i class="nav-icon fa fa-file-o"></i>
                          <p>
                              Page
                          </p>
                      </a>
                  </li>
                  <?php endif; ?>

                  <li class="nav-item">
                      <a href="<?php echo e(url('admin/banners')); ?>"
                          class="nav-link <?php echo e(Request::segment(2) == 'banners' || Request::segment(2) == 'add-banner' ? 'active' : ''); ?>">
                          <i class="nav-icon fa fa-photo"></i>
                          <p>
                              Banners
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="<?php echo e(url('admin/customer-contacts')); ?>" class="nav-link">
                          <i class="nav-icon fa fa-user"></i>
                          <p>
                              Customer Contacts
                          </p>
                      </a>
                  </li>


                  <?php if($usr->can('setting.create') || $usr->can('setting.view')): ?>
                  <li
                      class="nav-item has-treeview <?php echo e(Request::segment(2) == 'smtp-setting' || Request::segment(2) == 'system-setting' || Request::segment(2) == 'payment-setting' ? 'menu-open' : ''); ?>">
                      <a href="#"
                          class="nav-link <?php echo e(Request::segment(2) == 'smtp-setting' || Request::segment(2) == 'system-setting' || Request::segment(2) == 'payment-setting' ? 'active' : ''); ?>">
                          <i class="nav-icon fa fa-cogs"></i>
                          <p>
                              Settings
                              <i class="fa fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <?php if($usr->can('setting.create')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/system-setting')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'system-setting' ? 'active' : ''); ?>">
                                  <i class="nav-icon fa fa-cog"></i>
                                  <p>
                                      System Setting
                                  </p>
                              </a>
                          </li>
                          <?php endif; ?>

                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/smtp-setting')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'smtp-setting' ? 'active' : ''); ?>">
                                  <i class="nav-icon fa fa-server"></i>
                                  <p>
                                      SMTP Setting
                                  </p>
                              </a>
                          </li>

                          <?php if($usr->can('paymentsetting.create')): ?>
                          <li class="nav-item">
                              <a href="<?php echo e(url('admin/payment-setting')); ?>"
                                  class="nav-link <?php echo e(Request::segment(2) == 'payment-setting' ? 'active' : ''); ?>">
                                  <i class="nav-icon fa fa-money"></i>
                                  <p>
                                      Payment Setting
                                  </p>
                              </a>
                          </li>
                          <?php endif; ?>

                      </ul>
                  </li>
                  <?php endif; ?>


                  <li class="nav-item">
                      <a href="<?php echo e(url('admin/logout')); ?>" class="nav-link">
                          <i class="nav-icon fa fa-user"></i>
                          <p>
                              Logout
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
      </div>
  </aside><?php /**PATH C:\Users\Obadiah\Desktop\Intel\Intel\vinaid1.4\resources\views/admin/layouts/partials/header.blade.php ENDPATH**/ ?>