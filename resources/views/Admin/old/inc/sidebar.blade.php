		<!-- partial:partials/_sidebar -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Influencers<span>Pro</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <!-- <li class="nav-item nav-category">Main</li> -->
          <li class="nav-item {{ '/' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('/')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item {{ 'admin-users' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('/admin-users')}}" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Admin Users</span>
            </a>
          </li>
          <li class="nav-item {{ 'categories' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('/categories')}}" class="nav-link">
              <i class="link-icon" data-feather="layers"></i>
              <span class="link-title">Categories</span>
            </a>
          </li>
          <li class="nav-item {{ 'add-vendor' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('add-vendor')}}" class="nav-link">
              <i class="link-icon" data-feather="plus-circle"></i>
              <span class="link-title">Add Vendor</span>
            </a>
          </li>
          <li class="nav-item {{ 'add-influencer' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('add-influencer')}}" class="nav-link">
              <i class="link-icon" data-feather="plus-circle"></i>
              <span class="link-title">Add Influencer</span>
            </a>
          </li>
          <li class="nav-item {{ 'vendors-list' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('vendors-list')}}" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">All Vendors</span>
            </a>
          </li>
          <li class="nav-item {{ 'influencers' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('influencers')}}" class="nav-link">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">All Influencers</span>
            </a>
          </li>
          <li class="nav-item {{ 'influencer-transactions' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('influencer-transactions')}}" class="nav-link">
              <i class="link-icon" data-feather="arrow-right-circle"></i>
              <span class="link-title">Influencer Transactions</span>
            </a>
          </li>
          <li class="nav-item {{ 'vendor-transactions' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('vendor-transactions')}}" class="nav-link">
              <i class="link-icon" data-feather="arrow-right-circle"></i>
              <span class="link-title">Vendor Transactions</span>
            </a>
          </li>
        
          <li class="nav-item {{ 'influencer-review' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('influencer-review')}}" class="nav-link">
              <i class="link-icon" data-feather="activity"></i>
              <span class="link-title">Influencer Reviews</span>
            </a>
          </li>
          <li class="nav-item {{ 'vendor-review' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('vendor-review')}}" class="nav-link">
              <i class="link-icon" data-feather="activity"></i>
              <span class="link-title">Vendor Reviews</span>
            </a>
          </li>
          <li class="nav-item {{ 'faq' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('faq')}}" class="nav-link">
              <i class="link-icon" data-feather="droplet"></i>
              <span class="link-title">FAQ'S</span>
            </a>
          </li>
          <li class="nav-item {{ 'change-password' == request()->path() ? 'active' : '' }}">
            <a href="{{ asset('change-password')}}" class="nav-link">
              <i class="link-icon" data-feather="edit"></i>
              <span class="link-title">Change Password</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
		<!-- partial:partials/_sidebar -->