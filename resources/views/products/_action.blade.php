<div style="display: flex;">
{{--    @can('edit product')--}}
        <a class="btn btn-primary btn-sm" href="{{route('product.edit',$row['id'])}}">

            <i class="fa fa-edit" ></i>
        </a>
{{--    @endcan--}}

{{--    @can('delete product')--}}
        <form method="POST" action="{{route('product.delete',$row->id)}}" class="d-inline" id="destroy-post" style="margin-left: 5px;">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <button type="submit" class="btn btn-danger btn-sm delete_patient">
                <i class="fa fa-trash"></i>
            </button>
        </form>
{{--    @endcan--}}
</div>

