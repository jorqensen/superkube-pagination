@if($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="pagination">
        <ul class="pagination-list">
            {{-- Previous Page Link --}}
            @if(! $paginator->onFirstPage())
                <li class="pagination-item">
                    <a href="{{ $paginator->previousPageUrl() }}" class="pagination-link pagination-prev">&lt; {{ __('Prev') }}</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if(! $paginator->onLastPage())
                <li class="pagination-item">
                    <a href="{{ $paginator->nextPageUrl() }}" class="pagination-link pagination-prev">{{ __('Next') }} &gt;</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
