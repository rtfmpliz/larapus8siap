<?php

class Author extends BaseModel {

	// Add your validation rules here
	public static $rules = [
	// 'name' => 'required|unique:authors'
		// 'title' => 'required'
	
	'name' => 'required|unique:authors,name,:id'
	];

	// Don't forget to fill this array
	protected $fillable = ['name'];
	public function books()
{
return $this->hasMany('Book');
}

}