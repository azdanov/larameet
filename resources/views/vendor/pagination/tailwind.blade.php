@php
  /** @var mixed[] $elements */
  /** @var mixed[]|string $element */
@endphp

@if ($paginator->hasPages())
  <div class="flex items-center">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <span
          class="rounded-l rounded-sm border border-r-0 px-3 py-1 cursor-not-allowed no-underline text-indigo-light select-none">&laquo;</span>
    @else
      <a
          class="rounded-l rounded-sm border border-r-0 px-3 py-1 text-brand-dark hover:bg-brand-light no-underline text-indigo-dark"
          href="{{ $paginator->previousPageUrl() }}"
          rel="prev"
      >
        &laquo;
      </a>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
      {{-- "Three Dots" Separator --}}
      @if (is_string($element))
        <span
            class="border border-r-0 px-3 py-1 cursor-not-allowed no-underline text-indigo-dark select-none">{{ $element }}</span>
        {{-- Array Of Links --}}
      @elseif (is_array($element))
        @foreach ($element as $page => $url)
          @if ($page === $paginator->currentPage())
            <span
                class="border border-r-0 px-3 py-1 cursor-not-allowed bg-brand-light no-underline font-bold text-indigo-dark shadow-inner select-none">{{ $page }}</span>
          @else
            <a class="border border-r-0 px-3 py-1 hover:bg-brand-light text-brand-dark no-underline text-indigo-dark"
               href="{{ $url }}">{{ $page }}</a>
          @endif
        @endforeach
      @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <a class="rounded-r rounded-sm border px-3 py-1 hover:bg-brand-light text-brand-dark no-underline text-indigo-dark"
         href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
    @else
      <span
          class="rounded-r rounded-sm border px-3 py-1 hover:bg-brand-light text-brand-dark no-underline cursor-not-allowed text-indigo-light select-none">&raquo;</span>
    @endif
  </div>
@endif
