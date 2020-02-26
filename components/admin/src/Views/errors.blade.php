@if (session('status'))
    @php( $status = session('status') )
    <div class="alert alert-dismissible fade show {{ $status['success'] ? 'alert-success' : 'alert-danger' }}" role="alert">
        {{ $status['message']}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
