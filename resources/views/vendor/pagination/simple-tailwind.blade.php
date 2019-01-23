@if ($paginator->hasPages())
  <ul class="flex list-reset font-bold">

    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <li class="disabled">
                <span
                    class="border py-2 px-4 rounded-l text-indigo-light cursor-not-allowed shadow-inner select-none">@lang('pagination.previous')</span>
      </li>
    @else
      <li>
        <a class="border py-2 px-4 rounded-l no-underline text-indigo-dark"
           href="{{ $paginator->previousPageUrl() }}"
           rel="prev">@lang('pagination.previous')</a>
      </li>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <li>
        <a class="border border-l-0 py-2 px-4 rounded-r no-underline text-indigo-dark"
           href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
      </li>
    @else
      <li class="disabled ">
                <span
                    class="border border-l-0 py-2 px-4 rounded-r text-indigo-light cursor-not-allowed shadow-inner select-none">@lang('pagination.next')</span>
      </li>
    @endif
  </ul>
@endif
