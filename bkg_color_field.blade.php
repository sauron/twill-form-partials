@php
    $fieldName = isset($fieldName) ? $fieldName : 'bkg_color';
    $labelFieldName = isset($labelFieldName) ? $labelFieldName : 'Background Color';
    $defaultValue = isset($defaultValue) ? $defaultValue : 'red';

    $options = isset($options) ? $options : [
        [
            'value' => 'red',
            'label' => 'Red'
        ],
        [
            'value' => 'orange',
            'label' => 'Orange'
        ],
        [
            'value' => 'yellow',
            'label' => 'Yellow'
        ],
        [
            'value' => 'green',
            'label' => 'Green'
        ],
        [
            'value' => 'blue',
            'label' => 'Blue'
        ],
        [
            'value' => 'purple',
            'label' => 'Purple'
        ],
        [
            'value' => 'brown',
            'label' => 'Brown'
        ],
        [
            'value' => 'grey',
            'label' => 'Grey'
        ],
    ];
@endphp

@formField('select', [
    'name' => $fieldName,
    'label' => $labelFieldName,
    'unpack' => true,
    'default' => $defaultValue,
    'options' => $options
])
