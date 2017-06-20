<?php

class Book extends BaseModel{

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
public function borrow()
{
// ambil user yang sedang login
$user = Sentry::getUser();
// attach user ke buku
return $this->users()->attach($user);
}
}