@if ($paginator->hasPages())
    <nav>
        <ul class="pagination flex justify-center space-x-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true"><span class="px-2 py-1 rounded-md bg-gray-300 text-gray-600">@lang('pagination.previous')</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-2 py-1 rounded-md bg-blue-500 text-white">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-2 py-1 rounded-md bg-blue-500 text-white">@lang('pagination.next')</a></li>
            @else
                <li class="disabled" aria-disabled="true"><span class="px-2 py-1 rounded-md bg-gray-300 text-gray-600">@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
@endif
