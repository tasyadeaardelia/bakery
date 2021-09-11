@foreach($logo as $item)
    @if($item->category === 'favicon')
        <link rel="shortcut icon" href="{{ asset('library/logo/'.$item->logo)}}">
    @endif
@endforeach

<!-- DataTables -->
<link href="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ asset('backend/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />      

<!--Morris Chart CSS -->
<link rel="stylesheet" href="{{ asset('backend/plugins/morris/morris.css')}}">

<link href="{{ asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/style.css')}}" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">

