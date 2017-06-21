@section('title')
{{ $title }}
@stop
@section('nav')
<li><a href="#">Buku</a></li>
<li><a href="#">Member</a></li>
<li><a href="#">Peminjaman</a></li>
@stop
@section('breadcrumb')
<li>{{ $title }}</li>
@stop
@section('content')
Selamat datang di Menu Administrasi Larapus. Silahkan pilih menu administrasi yang diinginkan.
@stop