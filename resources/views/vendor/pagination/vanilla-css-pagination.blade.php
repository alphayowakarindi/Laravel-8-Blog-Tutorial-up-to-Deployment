@if ($paginator->hasPages())
    <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a href="" style="pointer-events: none; opacity:0.5;">
                    &laquo;
                </a>
            @else
                <a>
                    <a href="{{ $paginator->previousPageUrl() }}">&laquo;</a>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a>{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="active">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
  
                    <a href="{{ $paginator->nextPageUrl() }}">&raquo;</a>
            @else
                <a style="pointer-events: none; opacity:0.5;">
                   &raquo;
                </a>
            @endif
    
    </div>
@endif


