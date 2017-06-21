{{-- <li><a href="#">Dashboard</a></li>
<li><a href="#">Buku</a></li>
<li><a href="#">Profil</a></li> --}}

{{ HTML::smartNav(route('dashboard'), 'Dashboard')}}
{{ HTML::smartNav(route('member.books'), 'Buku')}}
<li><a href="#">Profil</a></li>