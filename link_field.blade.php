@php
    $fieldName = isset($fieldName) ? $fieldName : 'ctaUrl';
    $labelFieldName = isset($labelFieldName) ? $labelFieldName : 'ctaLabel';
    $linkOptionName = isset($linkOptionName) ? $linkOptionName : 'link_option';
    $browserName = isset($browserName) ? $browserName : 'page';
    $withFile = isset($withFile) && $withFile ? $withFile : false;
    $fileFieldName = isset($fileFieldName) ? $fileFieldName : 'pdf_file';

    $renderForBlocks = isset($renderForBlocks) && $renderForBlocks === false ? false : true;
    $linkOptions = isset($pages_browser) && $pages_browser === false ? [
        [
            'value' => 'no',
            'label' => 'No Link'
        ],
        [
            'value' => 'external',
            'label' => 'External Link'
        ]
    ] : [
        [
            'value' => 'no',
            'label' => 'No Link'
        ],
        [
            'value' => 'internal',
            'label' => 'Internal Link'
        ],
        [
            'value' => 'external',
            'label' => 'External Link'
        ]
    ];

    if($withFile) {
        $linkOptions[] = [
            'value' => 'file',
            'label' => 'File'
        ];
    }

    $modules = isset($modules) ? $modules : [
        [
            'label' => 'Landing pages',
            'name' => 'pages',
            'routePrefix' => '',
        ],
    ];
@endphp

@formField('select', [
    'name' => $linkOptionName,
    'label' => 'Link Option',
    'placeholder' => 'Select a link option',
    'default' => 'no',
    'options' => $linkOptions
])

@component('twill::partials.form.utils._connected_fields', [
    'fieldName' => $linkOptionName,
    'fieldValues' => 'no',
    'isEqual' => false,
    'keepAlive' => false,
    'renderForBlocks' => $renderForBlocks
])
    @component('twill::partials.form.utils._connected_fields', [
        'fieldName' => $linkOptionName,
        'fieldValues' => 'internal',
        'keepAlive' => false,
        'renderForBlocks' => $renderForBlocks
    ])
        @unless(isset($pages_browser) && $pages_browser === false)
            @formField('browser', [
                'modules' => $modules,
                'label' => 'Linked Page',
                'max' => 1,
                'name' => $browserName
            ])
        @endunless

        @formField('input', [
            'name' => $fieldName,
            'label' => 'Custom internal URL',
            'note' => 'URL starting with "/", eg. /news-and-ideas',
            'translated' => true,
        ])
    @endcomponent

    @component('twill::partials.form.utils._connected_fields', [
        'fieldName' => $linkOptionName,
        'fieldValues' => 'external',
        'keepAlive' => false,
        'renderForBlocks' => $renderForBlocks
    ])
        @formField('input', [
            'name' => $fieldName,
            'label' => 'External URL',
            'placeholder' => 'https://external-url.com',
            'translated' => true,
            'maxlength' => 500
        ])
    @endcomponent

    @component('twill::partials.form.utils._connected_fields', [
        'fieldName' => $linkOptionName,
        'fieldValues' => 'file',
        'keepAlive' => false,
        'renderForBlocks' => $renderForBlocks
    ])
        @formField('files', [
            'name' => $fileFieldName,
            'label' => 'PDF',
            'max' => 1,
        ])
    @endcomponent

    @unless(isset($withCtaLabel) && $withCtaLabel === false)
        @formField('input', [
            'name' => $labelFieldName,
            'label' => 'Custom Label',
            'translated' => true,
            'maxlength' => isset($maxCtaLabel) ? $maxCtaLabel : 30,
        ])
    @endunless
@endcomponent
