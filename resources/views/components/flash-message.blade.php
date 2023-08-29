@if(flash()->message)
    <div class="alert alert-{{flash()->class}} d-flex align-items-center gap-2 alert-dismissible fade show" role="alert">
        @if(flash()->class === 'warning' || flash()->class == 'danger')
            <i class="bi bi-exclamation-triangle-fill"></i>
        @endif
        @if(flash()->class === 'info')
                <i class="bi bi-exclamation-circle-fill"></i>
        @endif

        @if(!flash()->class || flash()->class === 'success')
            <i class="bi bi-check-circle-fill"></i>
        @endif
        <div>
        {{ flash()->message }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
