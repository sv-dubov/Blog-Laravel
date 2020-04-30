<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Admin-panel</span>
        </a>
    </li>
    <li><a href="{{route('posts.index')}}"><i class="fa fa-sticky-note-o"></i> <span>Posts</span></a></li>
    <li><a href="{{route('categories.index')}}"><i class="fa fa-list-ul"></i> <span>Categories</span></a></li>
    <li><a href="{{route('tags.index')}}"><i class="fa fa-tags"></i> <span>Tags</span></a></li>
    <li>
        <a href="/admin/comments">
            <i class="fa fa-commenting"></i> <span>Comments</span>
            <span class="pull-right-container">
                <small class="label pull-right bg-red">{{$newCommentsCount}}</small>
            </span>
        </a>
    </li>
    <li><a href="{{route('users.index')}}"><i class="fa fa-users"></i> <span>Users</span></a></li>
    <li><a href="{{route('subscribers.index')}}"><i class="fa fa-user-plus"></i> <span>Subscribers</span></a></li>
</ul>
