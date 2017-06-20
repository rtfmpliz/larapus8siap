{{-- @extends('layouts.guest')
@section('content')
<h1 class="uk-heading-large">Daftar Buku</h1>
<table class="uk-table uk-table-striped uk-table-hover">
<thead>
<tr>
<th>Judul</th>
<th>Penulis</th>
<th>Stok</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>Kupinang Engkau dengan Hamdalah</td>
<td>Mohammad Fauzil Adhim</td>
<td>2/3</td>
<td><a href="#">Pinjam buku</a></td>
</tr>
<tr>
<td>Jalan Cinta Para Pejuang</td>
<td>Salim A. Fillah</td>
<td>0/3</td>
<td><span class="uk-text-muted">Pinjam buku</span></td>
</tr>
<tr>
<td>Nikmatnya Pacaran Setelah Pernikahan</td>
<td>Salim A. Fillah</td>
<td>1/3</td>
<td><a href="#">Pinjam buku</a></td>
</tr>
<tr>
<td>Cinta & Seks Rumah Tangga Muslim</td>
<td>Aam Amiruddin</td>
<td>1/3</td>
<td><a href="#">Pinjam buku</a></td>
</tr>
</tbody>
</table>
@stop --}}


@section('asset')
@include('layouts.partials.datatable')
@stop
@section('content')
<h1 class="uk-heading-large">{{ $title }}</h1>
@include('books._borrowdatatable')
@stop