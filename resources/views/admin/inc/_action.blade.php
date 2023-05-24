@can('edit_'.$entity)
    <a href="{{route($entity.'.edit',$id) }}" class="btn btn-outline-info btn-icon rounded-circle modal-btn">
        <div><i class="fa fa-pencil"></i></div>
    </a>
@endcan
@can('delete_'.$entity)
    <a href="{{route($entity.'.destroy',$id) }}" class="btn btn-outline-danger btn-icon rounded-circle ajax-delete" data-set="tr">
        <div><i class="ion-ios-trash-outline"></i></div>
    </a>
@endcan