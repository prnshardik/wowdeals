@if(isset($data) && $data->isNotEmpty())
    <div id="pagination">{!! $data->links() !!}</div>
@endif
