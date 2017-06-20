{{ Datatable::table()
->addColumn('id','title', 'author', 'amount', '')
->setOptions('aoColumnDefs',array(
array(
'bVisible' => false,
'aTargets' => [0]),
array(
'sTitle' => 'Judul',
'aTargets' => [1]),
array(
'sTitle' => 'Jumlah',
'aTargets' => [2]),
array(
'sTitle' => 'Penulis',
'aTargets' => [3]),
array(
'bSortable' => false,
'aTargets' => [4])
))
->setOptions('bProcessing', true)
->setUrl(route('datatable.books.borrow'))
->render('datatable.uikit') }}