@php
    $fieldName = isset($fieldName) ? $fieldName : 'image_size';
    $labelFieldName = isset($labelFieldName) ? $labelFieldName : 'Image Size';
    $defaultValue = isset($defaultValue) ? $defaultValue : 'large';

    $options = isset($options) ? $options : [
        [
            'value' => 'large',
            'label' => 'Large'
        ],
        [
            'value' => 'small',
            'label' => 'Small'
        ],
    ];
@endphp

@formField('radios', [
    'name' => $fieldName,
    'label' => $labelFieldName,
    'default' => $defaultValue,
    'inline' => true,
    'options' => $options
])
