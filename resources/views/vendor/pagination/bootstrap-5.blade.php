@if ($paginator->hasPages())

    <div class="row">
        <div class="col-12 text-center">
            <div class="vs-pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <a href="#" class="pagi-btn">Prev</a> 
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" class="pagi-btn">Prev</a>  
                @endif
                <ul >
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </ul>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages()) 
                    <a href="{{ $paginator->nextPageUrl() }}" class="pagi-btn">next</a>
                @else
                    <a href="#" class="pagi-btn">next</a>
                @endif
            </div>
        </div>
    </div> 
@endif
