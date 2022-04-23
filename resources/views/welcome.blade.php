<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                    <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider is-hoverable">
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
                    </div>
                    <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
                      <a class="navbar-link is-arrowless">
                        <div class="is-user-avatar">
                          <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe">
                        </div>
                        <div class="is-user-name"><span>John Doe</span></div>
                        <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
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
                    </div>
                    <a href="https://justboil.me/bulma-admin-template/one-html" title="About" class="navbar-item has-divider is-desktop-icon-only">
                      <span class="icon"><i class="mdi mdi-help-circle-outline"></i></span>
                      <span>About</span>
                    </a>
                    <a title="Log out" class="navbar-item is-desktop-icon-only">
                      <span class="icon"><i class="mdi mdi-logout"></i></span>
                      <span>Log out</span>
                    </a>
                  </div>
                </div>
              </nav>
                  <aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div class="aside-tools-label">
        <span><b>Admin</b> One HTML</span>
      </div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">General</p>
      <ul class="menu-list">
        <li>
          <a href="index.html" class="is-active router-link-active has-icon">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">Examples</p>
      <ul class="menu-list">
        <li>
          <a href="tables.html" class="has-icon">
            <span class="icon has-update-mark"><i class="mdi mdi-table"></i></span>
            <span class="menu-item-label">Tables</span>
          </a>
        </li>
        <li>
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
            <span class="menu-item-label">Submenus</span>
            <div class="dropdown-icon">
              <span class="icon"><i class="mdi mdi-plus"></i></span>
            </div>
          </a>
          <ul>
            <li>
              <a href="#void">
                <span>Sub-item One</span>
              </a>
            </li>
            <li>
              <a href="#void">
                <span>Sub-item Two</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <p class="menu-label">About</p>
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
      </ul>
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
