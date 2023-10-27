@props([
    'id' => str()->uuid(),
    'type' => 'button',
    'href' => 'javascript:void(0)',
    'varient' => '',
    'color' => 'primary',
    'rounded' => false,
    'icon' => false,
    'confirmableAciton' => false,
    'confirmableTitle' => '',
    'confirmableDesc' => '',
])

@php
    $component = $type == 'link' ? 'a' : 'button';
@endphp


<{{ $component }} id="{{ $id }}" {{ $component == 'a' ? 'href=' . $href : 'type=' . $type }}
    {{ $attributes->class(['btn', 'btn-' . ($varient ? $varient . '-' : '') . $color, 'rounded-pill' => $rounded, 'btn-icon' => $icon]) }}>
    {{ $slot }}</{{ $component }}>


    @if ($confirmableAciton)
        @push('footer')
            <script>
                $(document).ready(() => {
                    $(`#{{ $id }}`).click((e) => {
                        e.preventDefault();
                        Swal.fire({
                            title: `{{ $confirmableTitle }}`,
                            text: `{{ $confirmableDesc }}`,
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes',
                            customClass: {
                                confirmButton: 'btn btn-primary me-3',
                                cancelButton: 'btn btn-label-secondary'
                            },
                            buttonsStyling: false
                        }).then(function(result) {
                            if (result.isConfirmed) {
                                window.location = `{{ $href }}`
                                // console.log(result)
                            }
                        });
                    })
                })
            </script>
        @endpush
    @endif
