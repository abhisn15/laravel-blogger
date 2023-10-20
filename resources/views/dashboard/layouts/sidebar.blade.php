<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
          </div>
      <style>
        .sidebar {
          height: 100vh;
        }
      </style>

        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard">
                        <i data-feather="home"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
                        href="/dashboard/posts">
                        <i data-feather="file-text"></i>
                        My Posts
                    </a>
                </li>
            </ul>


            @can('admin')

       

            <h6 class=" sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mn-1 text-secondary ">
                <span>Administrator</span>
              </h6>
              <ul class="nav flex-column">
                <li>
                  <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }} d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard/categories">
                    <i data-feather="grid"></i>
                    Post Categories
                  </a>
                </li>
              </ul>
            @endcan

        </div>
    </div>
</div>
