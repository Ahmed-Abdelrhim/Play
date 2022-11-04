@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table table-dark" id="datatable-example">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">author_id</th>
            </tr>
            </thead>
            <tbody>
{{--            <tr>--}}
{{--                <th scope="row">1</th>--}}
{{--                <td>Mark</td>--}}
{{--                <td>Otto</td>--}}
{{--                <td>@mdo</td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <th scope="row">2</th>--}}
{{--                <td>Jacob</td>--}}
{{--                <td>Thornton</td>--}}
{{--                <td>@fat</td>--}}
{{--            </tr>--}}

            </tbody>
        </table>
    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var table = $('#datatable-example').DataTable({
                processing: true,
                serverSide: true,
                order: [
                    [0, 'desc']
                ],
                ajax: "{{Route('dataTables.all')}}",
                columns: [{
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
                        data: 'author_id',
                        name: 'author_id',
                    },

                ]
            });
        });
    </script>
@endpush
