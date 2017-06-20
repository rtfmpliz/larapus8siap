<?php
class BookAlreadyBorrowedException extends Exception { 
public function borrow()
{
$user = Sentry::getUser();
// cek apakah buku ini sedang dipinjam oleh user
if( $user->books()->wherePivot('book_id',$this->id)->wherePivot('returned', 0)->count() > 0 ) {
throw new BookAlreadyBorrowedException("Buku $this->title sedang Anda pinjam.");
}
return $this->users()->attach($user);
}}