<!-- jQuery  -->
<script src="{{ asset('backend/js/jquery.min.js')}}"></script>
<script src="{{ asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('backend/js/modernizr.min.js')}}"></script>
<script src="{{ asset('backend/js/detect.js')}}"></script>
<script src="{{ asset('backend/js/fastclick.js')}}"></script>
<script src="{{ asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('backend/js/jquery.blockUI.js')}}"></script>
<script src="{{ asset('backend/js/waves.js')}}"></script>
<script src="{{ asset('backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{ asset('backend/js/jquery.scrollTo.min.js')}}"></script>

<!-- skycons -->
<script src="{{ asset('backend/plugins/skycons/skycons.min.js')}}"></script>

<!-- skycons -->
<script src="{{ asset('backend/plugins/peity/jquery.peity.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{ asset('backend/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('backend/plugins/raphael/raphael-min.js') }}"></script>


<!-- dashboard -->
<script src="{{ asset('backend/pages/dashboard.js') }}"></script>


<!-- Tinymce js -->
<script src="{{ asset('backend/plugins/tinymce/tinymce.min.js') }}"></script>

<script>
    $(document).ready(function () {
        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>

<!-- Required datatable js -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('backend/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('backend/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('backend/pages/datatables.init.js') }}"></script>



<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        "lengthMenu": [[5, 7, 10, -1], [5, 7, 10, "All"]]
    } );
} );
</script>

<script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
   @if(Session::has('sukses')) 
        <script>toastr.success("{{ Session::get('sukses') }}")</script>
    @endif

    @if(Session::has('gagal')) 
    <script>toastr.error("{{ Session::get('gagal') }}")</script>
@endif


<!-- App js -->
<script src="{{asset('backend/js/app.js')}}"></script>




