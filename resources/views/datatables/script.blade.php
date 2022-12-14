<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('js/datatable.js')}}"></script>
<script type="text/javascript">
    $(function () {
        var table = $('#datatable-example').DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4'B><'col-sm-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-4'i><'col-sm-8'p>>",
            buttons: [
                {
                    extend: 'copyHtml5',
                    text: '<i class="fas fa-copy"></i> ',
                    titleAttr: 'Copy'
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i> ',
                    titleAttr: 'Excel'
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fas fa-file-csv"></i> ',
                    titleAttr: 'CSV'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"></i> ',
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
                    data: 'difference',
                    name: 'difference'
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
                    title: "Are you sure to delete patient ?",
                    type: "warning",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Delete",
                    cancelButtonText: "Cancel",
                    closeOnConfirm: false,
                    buttons: true,
                }
                // , function () {
                //     $(el).parent().submit();
                // }
            );
        });
        $(document).on('click', '.swal-button--confirm', function (e) {
            // e.preventDefault();
            // var el = $(this);
            // $(el).parent().submit();
            $('#destroy-post').submit();
        });

    });
</script>
