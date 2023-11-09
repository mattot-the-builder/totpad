@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="join sm:hidden sm:flex-1 mx-auto">
            @if ($paginator->onFirstPage())
                <span
                    class="join-item btn btn-disabled">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="join-item btn">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="join-item btn">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="join-item btn btn-disabled">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm leading-5">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div class="join">
                @if ($paginator->onFirstPage())
                    <a class="join-item btn btn-disabled">«</a>
                @else
                    <a class="join-item btn" href="{{ $paginator->previousPageUrl() }}" rel="prev">«</a>
                @endif
                @if ($paginator->currentPage() > 3)
                    <a class="join-item btn" href="{{ $paginator->url(1) }}">1</a>
                @endif
                @if ($paginator->currentPage() > 4)
                    <span class="join-item btn btn-disabled">...</span>
                @endif
                @foreach (range(1, $paginator->lastPage()) as $i)
                    @if ($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                        @if ($i == $paginator->currentPage())
                            <span class="join-item btn">{{ $i }}</span>
                        @else
                            <a class="join-item btn" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                        @endif
                    @endif
                @endforeach
                @if ($paginator->currentPage() < $paginator->lastPage() - 3)
                    <span class="join-item btn btn-disabled">...</span>
                @endif
                @if ($paginator->currentPage() < $paginator->lastPage() - 2)
                    <a class="join-item btn"
                        href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
                @endif
                @if ($paginator->hasMorePages())
                    <a class="join-item btn" href="{{ $paginator->nextPageUrl() }}" rel="next">»</a>
                @else
                    <span class="join-item btn btn-disabled">»</span>
                @endif
            </div>
        </div>
    </nav>
@endif
