<nav class="main-sidebar-nav">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }}">
                <i class="fas fa-tachometer-alt"></i> <span class="nav-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bezier-curve"></i> <span class="nav-title">Categories</span> <i class="fas fa-caret-right dropdown-indicator"></i>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Add New</a>
                <a class="dropdown-item" href="#">All Categories</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-link"></i> <span class="nav-title">Posts</span> <i class="fas fa-caret-right dropdown-indicator"></i>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">New Post</a>
                <a class="dropdown-item" href="#">All Posts</a>
            </div>
        </li>
    </ul>
</nav>
