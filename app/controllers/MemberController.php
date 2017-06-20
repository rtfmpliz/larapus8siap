<?php
class MemberController extends BaseController {
/**
* Tampilkan halaman peminjaman buku
* @return response
*/
// public function books()
// {
// if(Datatable::shouldHandle())
// {
// // eager load author untuk menghemat query sql
// return Datatable::collection(Book::with('author')->get())
// ->showColumns('id', 'title', 'amount')
// // menggunakan closure untuk menampilkan nama penulis dari relasi
// ->addColumn('author', function ($model) {
// return $model->author->name;
// })
// // menggunakan helper untuk membuat link
// ->addColumn('', function ($model) {
// return link_to_route('books.borrow', 'Pinjam', ['book'=>$model->id]);
// })
// ->searchColumns('title', 'amount', 'author')
// ->orderColumns('title', 'amount', 'author')
// ->make();
// }
// return View::make('books.borrow')->withTitle('Pilih buku');
// }


public function books()
{
return View::make('books.borrow')->withTitle('Pilih buku');
}


}