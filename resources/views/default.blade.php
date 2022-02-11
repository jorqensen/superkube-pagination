@if($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="pagination">
        <ul class="pagination-list">
            {{-- Previous Page Link --}}
            @if(! $paginator->onFirstPage())
                <li class="pagination-item">
                    <a href="{{ $paginator->previousPageUrl() }}" class="pagination-link pagination-prev">&lt; {{ __('Prev') }}</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach($elements as $element)
                {{-- Ellipsis Seperator --}}
                @if(is_string($element))
                    <li class="pagination-item">
                        <span class="pagination-ellipsis">&hellip;</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if(is_array($element))
                    @foreach($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagination-item active">
                                <a href="{{ $url }}" class="pagination-link">{{ $page }}</a>
                            </li>
                        @else
                            <li class="pagination-item">
                                <a href="{{ $url }}" class="pagination-link">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if(! $paginator->onLastPage())
                <li class="pagination-item">
                    <a href="{{ $paginator->nextPageUrl() }}" class="pagination-link pagination-prev">{{ __('Next') }} &gt;</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
