<div class="col-md-2">
    <div class="card bg-light">
        <a href="/"
           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <h3 class="p-2">Profil</h3>
        </a>

        <ul class=" list-group">
            <li class=" list-group-item ">
                <a href="{{route('myprofile')}}" aria-current="page">
                    <i class="fa fa-user-circle mr-2"></i>
                    Profilim
                </a>
            </li>
            <li class="list-group-item ">
                <a href="{{route('mycomments')}}">
                    <i class="fa fa-comment mr-2"></i>
                    Yorumlarım
                </a>
            </li>
            <li class="list-group-item ">
                <a href="{{route('user_content')}}">
                    <i class="fa fa-map-marker mr-3"></i>
                    İçeriklerim
                </a>
            </li>
            <li class="list-group-item ">
                <a href="{{route('user_attend')}}" >
                    <i class="fa fa-check-square mr-2"></i>
                    Katıldığım Etkinlikler
                </a>
            </li>
            <li class="list-group-item ">
                <a href="{{route('logout')}}" class="link-dark">
                    <i class="fa fa-sign-out mr-2"></i>
                    Çıkış Yap
                </a>
            </li>

        </ul>
    </div>
</div>
