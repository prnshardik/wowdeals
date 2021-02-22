@if(isset($users) && $users->isNotEmpty())
    <div id="pagination">{!! $users->links() !!}</div>
@endif
