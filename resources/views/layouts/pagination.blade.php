<div class="join">
    <button class="join-item btn"
        @if($paginator->currentPage() == 1)
            disabled
        @else
            onclick="window.location.href='{{ $paginator->previousPageUrl() }}'"
        @endif
        >«</button>
    <button class="join-item btn">Page {{ $paginator->currentPage() }}</button>
    <button class="join-item btn" 
        @if($paginator->currentPage() == $paginator->lastPage())
            disabled
        @else
            onclick="window.location.href='{{ $paginator->nextPageUrl() }}'"
        @endif
    >»</button>
  </div>