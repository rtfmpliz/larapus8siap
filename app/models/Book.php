
<?php

class Book extends BaseModel{
protected $appends = ['stock'];
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'

	'title' => 'required|unique:books,title,:id',

 'author_id' => 'required|exists:authors,id',

 'amount' => 'numeric',
 'cover' => 'image|max:4096'

	];
protected $fillable = ['title','author_id','amount'];

	// Don't forget to fill this array
	// protected $fillable = [];
	public function author()
{
return $this->belongsTo('Author');
}

public function users()
{
return $this->belongsToMany('User')->withPivot('returned')->withTimestamps();
}
// public function borrow()
// {
// // ambil user yang sedang login
// $user = Sentry::getUser();
// // attach user ke buku
// return $this->users()->attach($user);
// }
 // public function borrow()
 // {
 // $user = Sentry::getUser();
 // // cek apakah buku ini sedang dipinjam oleh user
 // if( $user->books()->wherePivot('book_id',$this->id)->wherePivot('returned', 0)->count() > 0 ) {
 // throw new BookAlreadyBorrowedException("Buku $this->title sedang Anda pinjam.");
 // }
 // return $this->users()->attach($user);
 // }

public function borrow()
{
$user = Sentry::getUser();
// cek apakah buku ini sedang dipinjam oleh user
if($user->books()->wherePivot('book_id',$this->id)->wherePivot('returned', 0)->count() > 0 ) {
throw new BookAlreadyBorrowedException("Buku $this->title sedang Anda pinjam.");
}
if($this->stock == 0) {
throw new BookOutOfStockException("Buku $this->title sudah tidak tersedia.");
}
return $this->users()->attach($user);
}

 // public function returnBack()
 // {
 // $user = Sentry::getUser();
 // return $user->books()->updateExistingPivot($this->id, ['returned'=>1], true);
 // }

public function returnBack()
{
$user = Sentry::getUser();
DB::table('book_user')
->where('book_id', $this->id)
->where('user_id', $user->id)
->where('returned', 0)
->update(array(
'returned' => 1,
'updated_at' => $this->freshTimestamp()
));
}

public function getStockAttribute()
{
$borrowed = DB::table('book_user')
->where('book_id', $this->id)
->where('returned', 0)
->count();
$stock = $this->amount - $borrowed;
return $stock;
}
public static function boot()
{
parent::boot();
self::updating(function($book)
{
$borrowed = DB::table('book_user')
->where('book_id', $book->id)
->where('returned', 0)
->count();
if ($book->amount < $borrowed) {
Session::flash('errorMessage', "Jumlah buku $book->title harus >= $borrowed");
return false;
}
});

self::deleting(function($book)
{
$borrowed = DB::table('book_user')
->where('book_id', $book->id)
->where('returned', 0)
->count();
if ($borrowed > 0) {
Session::flash('errorMessage', "Buku $book->title masih dipinjam.");
return false;
}
});
}

// public function update($id)
// {
// $book = Book::findOrFail($id);
// $validator = Validator::make($data = Input::all(), $book->updateRules());
// if ($validator->fails())
// {
// return Redirect::back()->withErrors($validator)->withInput();
// }
// if (!$book->update($data)) {
// return Redirect::back();
// }
// return Redirect::route('admin.books.index')->with("successMessage", "Berhasil menyimpan $book->title. ");
// }

}
