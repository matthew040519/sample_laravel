<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.min.css') }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" /> -->

     
    </head>
    <body>
        <div id="app">
                        <nav id="navbar-main" class="navbar is-fixed-top">
                <div class="navbar-brand">
                  <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
                    <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
                  </a>
                  <div class="navbar-item has-control">
                    <div class="control"><input placeholder="Search everywhere..." class="input"></div>
                  </div>
                </div>
                <div class="navbar-brand is-right">
                  <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
                    <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
                  </a>
                </div>
                <div class="navbar-menu fadeIn animated faster" id="navbar-menu">
                  <div class="navbar-end">
                    <!-- <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider is-hoverable">
                      <a class="navbar-link is-arrowless">
                        <span class="icon"><i class="mdi mdi-menu"></i></span>
                        <span>Sample Menu</span>
                        <span class="icon">
                        <i class="mdi mdi-chevron-down"></i>
                      </span>
                      </a>
                      <div class="navbar-dropdown">
                        <a href="profile.html" class="navbar-item">
                          <span class="icon"><i class="mdi mdi-account"></i></span>
                          <span>My Profile</span>
                        </a>
                        <a class="navbar-item">
                          <span class="icon"><i class="mdi mdi-settings"></i></span>
                          <span>Settings</span>
                        </a>
                        <a class="navbar-item">
                          <span class="icon"><i class="mdi mdi-email"></i></span>
                          <span>Messages</span>
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item">
                          <span class="icon"><i class="mdi mdi-logout"></i></span>
                          <span>Log Out</span>
                        </a>
                      </div>
                    </div> -->
                    <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
                      <a class="navbar-link is-arrowless">
                        <div class="is-user-avatar">
                          <img src="data:image/png;base64,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" alt="John Doe">
                        </div>
                        <div class="is-user-name"><span>{{ session('username') }}</span></div>
                        <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
                      </a>
                      <div class="navbar-dropdown">
                        <a href="profile.html" class="navbar-item">
                          <span class="icon"><i class="mdi mdi-account"></i></span>
                          <span>My Profile</span>
                        </a>
                        <!-- <a class="navbar-item">
                          <span class="icon"><i class="mdi mdi-settings"></i></span>
                          <span>Settings</span>
                        </a>
                        <a class="navbar-item">
                          <span class="icon"><i class="mdi mdi-email"></i></span>
                          <span>Messages</span>
                        </a> -->
                        <hr class="navbar-divider">
                        <a href="/logout" class="navbar-item">
                          <span class="icon"><i class="mdi mdi-logout"></i></span>
                          <span>Log Out</span>
                        </a>
                      </div>
                    </div>
                   <!--  <a href="https://justboil.me/bulma-admin-template/one-html" title="About" class="navbar-item has-divider is-desktop-icon-only">
                      <span class="icon"><i class="mdi mdi-help-circle-outline"></i></span>
                      <span>About</span>
                    </a>
                    <a title="Log out" href="/logout" class="navbar-item is-desktop-icon-only">
                      <span class="icon"><i class="mdi mdi-logout"></i></span>
                      <span>Log out</span>
                    </a> -->
                  </div>
                </div>
              </nav>
                  <aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div class="aside-tools-label">
        <span><b>Sample</b> Admin Template</span>
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li>
          <a href="/mainpage" class="is-active router-link-active has-icon">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">Entry</p>
      <ul class="menu-list">
        <li>
          <a href="/product" class="has-icon">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Product</span>
          </a>
        </li>
       <!--  <li>
          <a href="forms.html" class="has-icon">
            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
            <span class="menu-item-label">Forms</span>
          </a>
        </li>
        <li>
          <a href="profile.html" class="has-icon">
            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
            <span class="menu-item-label">Profile</span>
          </a>
        </li>
        <li>
          <a class="has-icon has-dropdown-icon">
            <span class="icon"><i class="mdi mdi-view-list"></i></span>
            <span class="menu-item-label">Product</span>
            <div class="dropdown-icon">
              <span class="icon"><i class="mdi mdi-plus"></i></span>
            </div>
          </a>
          <ul>
            <li>
              <a href="#void">
                <span></span>
              </a>
            </li>
            <li>
              <a href="#void">
                <span>Sub-item Two</span>
              </a>
            </li>
          </ul>
        </li> -->
      </ul>
     <!--  <p class="menu-label">About</p>
      <ul class="menu-list">
        <li>
          <a href="https://admin-one-html.justboil.me/" target="_blank" class="has-icon">
            <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
            <span class="menu-item-label">Premium Demo</span>
          </a>
        </li>
        <li>
          <a href="https://justboil.me/bulma-admin-template/one-html" class="has-icon">
            <span class="icon"><i class="mdi mdi-help-circle"></i></span>
            <span class="menu-item-label">About</span>
          </a>
        </li>
      </ul> -->
    </div>
  </aside>
                   @yield('content')
        </div>
   
        <script type="text/javascript" src="{{ asset('js/main.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="{{ asset('js/chart.sample.min.js') }}"></script>

<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
    </body>
</html>
