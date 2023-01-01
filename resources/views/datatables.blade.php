@extends('layouts.app')
@section('content')
    <div class="scroller"></div>
    <div class="container">
        <div class="col-sm-4">
            <button class="btn btn-primary">pdf</button>
            <br>
        </div>
        <table class="table table-dark" id="datatable-example">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Name</th>
                <th scope="col">Diff</th>
                <th scope="col">Time</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var table = $('#datatable-example').DataTable({
                dom: "<'row'<'col-sm-4'l><'col-sm-4'B><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-4'i><'col-sm-8'p>>",
                buttons: [
                    {
                        extend: 'copyHtml5',
                        text: '<i class="fas fa-copy"></i> ' ,
                        titleAttr: 'Copy'
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel"></i> ' ,
                        titleAttr: 'Excel'
                    },
                    {
                        extend: 'csvHtml5',
                        text: '<i class="fas fa-file-csv"></i> ' ,
                        titleAttr: 'CSV'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fas fa-file-pdf"></i> ' ,
                        titleAttr: 'PDF'
                    },
                    {
                        extend: 'colvis',
                        text: '<i class="fas fa-eye"></i>',
                        titleAttr: 'PDF'
                    }
                ],
                processing: true,
                serverSide: true,
                pagingType: 'full_numbers',
                paging: true,
                pagingTypeSince: 'numbers',
                'fixedHeader': true,

                order: [
                    [0, 'desc']
                ],
                ajax: "{{Route('dataTables.all')}}",
                columns: [
                    {
                    data: 'id',
                    name: 'id',
                },
                    {
                        data: 'title',
                        name: 'title',
                    },
                    {
                        data: 'content',
                        name: 'content',
                    },
                    {
                        data: 'author',
                        name: 'author',
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data : 'difference',
                        name : 'difference'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }

                ]
            });
        });
    </script>
    <script src="{{asset('js/datatable.js')}}"></script>
@endpush
