@php
$status_style = [
    'success' => 'bg-green-lighter text-green-darker',
    'danger' => 'bg-red-lighter text-red-darker',
    'warning' => 'bg-yellow-lighter text-yellow-darker',
    'info' => 'bg-blue-lighter text-blue-darker',
];

$messages = session('flash_notification', collect())->toArray();

if (session('status')) {
    $messages[] = new \Laracasts\Flash\Message(['message' => session('status')]);
}
@endphp

@foreach ($messages as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title' => $message['title'],
            'body' => $message['message']
        ])
    @else
        <div
            class="py-3 flex justify-center items-center {{ $status_style[$message['level']] }}"
            role="alert" data-alert="true">
            <span class="block sm:inline">{!! $message['message'] !!}</span>
            @if ($message['important'])
                <button
                    class="ml-2 h-4 w-4 rounded-full border border-grey-dark text-grey-dark hover:text-grey-darker hover:border-grey-darker"
                    data-important>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill="currentColor"
                              d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"></path>
                    </svg>
                </button>
            @endif
        </div>
    @endif
@endforeach

@php
    session()->forget('flash_notification');
    session()->forget('status');
@endphp
