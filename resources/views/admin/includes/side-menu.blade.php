<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" style="width: 48px;" src="{{ asset(\Illuminate\Support\Facades\Auth::user()->profile_pict) }}" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
            <p class="app-sidebar__user-designation">{{ Auth::user()->email }}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ route('admin.dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Post Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{ route('admin.post.index') }}"><i class="icon fa fa-circle-o"></i> Posts</a></li>
                <li><a class="treeview-item" href="{{ route('admin.post.create') }}"><i class="icon fa fa-circle-o"></i> Create Post</a></li>
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Kompetisi (Penyisihan 1)</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                @foreach(\App\Kategori::where('id_ormawa', \Illuminate\Support\Facades\Auth::user()->id_ormawa)->get() as $kategori)
                    <li><a class="treeview-item" href="{{ route('admin.tim.index', ['kategori' => $kategori->kategori]) }}"><i class="icon fa fa-circle-o"></i>{{ $kategori->nama_kategori }}</a></li>
                @endforeach
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Kompetisi (Penyisihan 2)</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                @foreach(\App\Kategori::where('id_ormawa', \Illuminate\Support\Facades\Auth::user()->id_ormawa)->get() as $kategori)
                    <li><a class="treeview-item" href="{{ route('admin.tim.index', ['kategori' => $kategori->kategori]) }}"><i class="icon fa fa-circle-o"></i>{{ $kategori->nama_kategori }}</a></li>
                @endforeach
            </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Kompetisi (Final)</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                @foreach(\App\Kategori::where('id_ormawa', \Illuminate\Support\Facades\Auth::user()->id_ormawa)->get() as $kategori)
                    <li><a class="treeview-item" href="{{ route('admin.tim.index', ['kategori' => $kategori->kategori]) }}"><i class="icon fa fa-circle-o"></i>{{ $kategori->nama_kategori }}</a></li>
                @endforeach
            </ul>
        </li>
    </ul>
</aside>