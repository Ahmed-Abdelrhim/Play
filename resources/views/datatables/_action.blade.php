<div style="display: flex;justify-content: space-between;">
    @can('edit post')
        <a class="btn btn-primary btn-sm" href="{{route('update.post',$row['id'])}}">
            <i class="fa fa-edit" ></i>
        </a>
    @endcan

    @can('edit post')
        <form method="POST" action="{{route('delete.post',$row->id)}}" class="d-inline" id="destroy-post">
            @csrf
            <input type="hidden" name="_method" value="delete">
            <button type="submit" class="btn btn-danger btn-sm delete_patient">
                <i class="fa fa-trash"></i>
            </button>
        </form>
    @endcan
</div>
