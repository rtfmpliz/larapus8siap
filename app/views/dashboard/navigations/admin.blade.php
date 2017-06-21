{{-- <li><a href="#">Buku</a></li>
<li><a href="#">Member</a></li>
<li><a href="#">Peminjaman</a></li> --}}

{{ HTML::smartNav(route('dashboard'), 'Dashboard')}}
{{ HTML::smartNav(route('admin.books.index'), 'Buku')}}
{{ HTML::smartNav(route('admin.authors.index'), 'Penulis')}}
{{ HTML::smartNav('#', 'Member')}}
{{ HTML::smartNav('#', 'Peminjaman')}}