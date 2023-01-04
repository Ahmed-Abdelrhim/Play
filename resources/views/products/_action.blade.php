<div style="display: flex;">
    @if(auth()->guard('author')->user()->hasPermissionTo('update product'))
        <a class="btn btn-primary btn-sm"
           href="{{route('product.edit', [ Str::random(15) , $row['id'] , Str::random(15)] )}}" >
            <i class="fa fa-edit edit-product"></i>
        </a>
    @endif

    @if(auth()->guard('author')->user()->hasPermissionTo('delete product'))
        <form method="POST" action="{{route('product.delete',$row->id)}}" class="d-inline" id="destroy-post"
              style="margin-left: 5px;">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <button type="submit" class="btn btn-danger btn-sm delete_patient">
                <i class="fa fa-trash"></i>
            </button>
        </form>
    @endif
</div>

