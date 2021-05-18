<header>
    <section id='section_1'>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="logo" class="text-center" >
                        <img src="{{asset('img/logo_small.png')}}" alt="BoolPress_logo">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-xs-12">
                        <div id="nav_menu" class="text-center">
                            <ul>
                                <li><a class="{{Request::route()->getName() == 'pagina-home' ? 'active' : ''}}" href="{{ route('pagina-home') }}">Home</a></li>
                                <li><a class="{{Request::route()->getName() == 'posts.index' ? 'active' : ''}}" href="{{ route('posts.index') }}">Posts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>