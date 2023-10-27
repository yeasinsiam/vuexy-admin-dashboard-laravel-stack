@props([
    'label' => '',
    'name',
    'helpText' => '',
    'inputSize' => null,
    'horizontal' => false,
    'error' => false,
    'options' => [],
    'value' => '',
    'multiple' => false,
    'tagify' => false,
    'placeholder' => '',
])

@php
    if ($tagify) {
        $multiple = true;
    }

    $id = !$tagify ? $name . '-select-field' : $name . '-tagify-select-field';
@endphp



<div {{ $attributes->class(['row']) }}>
    @if ($label)
        <label for="{{ $id }}" @class(['col-md-12 col-form-label', 'col-md-2' => $horizontal])>{{ $label }}</label>
    @endif
    <div @class(['col-md-12', 'col-md-10' => $horizontal])>
        {{-- <div @class([
            'input-group input-group-merge',
            'input-group-' . $inputSize => $inputSize,
        ])> --}}
        @if (!$tagify)
            <select id="{{ $id }}" @class([
                'select2 form-select',
                'input-group-' . $inputSize => $inputSize,
                'border-danger' => $error,
            ]) name="{{ $name }}"
                data-allow-clear="true" @if ($multiple)
                multiple
        @endif>
        @foreach ($options as $key => $option)
            <option value="{{ $key }}" @selected($multiple ? in_array($key, $value) : $key == $value)>{{ $option }}</option>
        @endforeach
        </select>
    @else
        <input id="{{ $id }}" name="{{ $name }}" @class([
            'form-control',
            'input-group-' . $inputSize => $inputSize,
            'border-danger' => $error,
        ])
            placeholder="{{ $placeholder }}" value="{{ implode(',', $value) }}" />
        @endif
        @if ($helpText)
            <div id="{{ $name }}-help-text" @class(['form-text', 'text-danger' => $error])>
                {{ $helpText }}
            </div>
        @endif
        {{-- </div> --}}
    </div>
</div>
@push('footer')
    <script>
        $(document).ready(() => {
            const selectFieldEl = $('#{{ $name }}-select-field')
            if (selectFieldEl.length) {
                selectFieldEl.wrap('<div class="position-relative"></div>').select2({
                    placeholder: 'Select value',
                    dropdownParent: selectFieldEl.parent()
                });
            }


            //
            const tagifySelectFieldEl = $('#{{ $name }}-tagify-select-field')

            if (tagifySelectFieldEl.length) {
                let TagifyCustomInlineSuggestion = new Tagify(tagifySelectFieldEl[0], {
                    whitelist: @json($options),
                    // maxTags: 10,
                    dropdown: {
                        // maxItems: 20,
                        classname: 'tags-inline',
                        enabled: 0,
                        closeOnSelect: false
                    }
                });
            }

        })
    </script>
@endpush
