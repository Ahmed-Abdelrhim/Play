<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('js/datatable.js')}}"></script>
<script type="text/javascript">
    $(function () {
        var table = $('#datatable-example').DataTable({
            processing: true,
            serverSide: true,
            pagingType: 'full_numbers',
            paging: true,
            pagingTypeSince: 'numbers',
            'fixedHeader': true,

            order: [
                [0, 'desc']
            ],
            ajax: "{{Route('product.dataTables')}}",
            columns: [
                {
                    data: 'id',
                    name: 'id',
                },
                {
                    data: 'name',
                    name: 'name',
                },
                {
                    data: 'price',
                    name: 'price',
                },
                {
                    data: 'discount',
                    name: 'discount',
                },
                {
                    data: 'action',
                    name: 'action'
                }

            ]
        });

        $(document).on('click', '.delete_patient', function (e) {
            e.preventDefault();
            var el = $(this);
            swal({
                    title: "Are you sure to delete Product ?",
                    type: "warning",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Delete",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: false,
                    buttons: true,
                }
            );
        });
        $(document).on('click', '.swal-button--confirm', function (e) {
            $('#destroy-post').submit();
        });

    });
</script>
