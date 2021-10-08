@php
    $fieldName1 = isset($fieldName1) ? $fieldName1 : 'first_name';
    $labelFieldName1 = isset($labelFieldName1) ? $labelFieldName1 : 'First Name';

    $fieldName2 = isset($fieldName2) ? $fieldName2 : 'last_name';
    $labelFieldName2 = isset($labelFieldName2) ? $labelFieldName2 : 'Last Name';
@endphp

@component('twill::partials.form.utils._columns')
    @slot('left')
        @formField('input', [
            'name' => $fieldName1,
            'label' => $labelFieldName1,
        ])
    @endslot

    @slot('right')
        @formField('input', [
            'name' => $fieldName2,
            'label' => $labelFieldName2,
        ])
    @endslot
@endcomponent
