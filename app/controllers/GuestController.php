<?php
class GuestController extends BaseController {
/**
* Layout yang akan digunakan untuk controller ini
*/
protected $layout = 'layouts.guest';
// public function login()
// {
// $this->layout->content = View::make('guest.login');
// }

public function login()
{
// redirect ke dashboard jika user sudah login
if (Sentry::check()) {
	Session::reflash();
return Redirect::to('dashboard');
}
$this->layout->content = View::make('guest.login');}

public function index()
{
// Redirect ke dashboard jika user sudah login
if (Sentry::check()) {
return Redirect::to('dashboard');
}
// Tampilkan halaman index
$this->layout->content = View::make('guest.index')->withTitle("Daftar Buku");
}
}
?>