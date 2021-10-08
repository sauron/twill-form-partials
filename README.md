# Twill FormField partials

## Why?

There are repetitive tasks in development always. Hence, this repo is meant to speed things up a bit.
[Twill CMS](https://twill.io) is amazing and this repo is just a way to help the development.

## How??

You can clone this repository on your `resources/views/admin/partials` folder, or whatever other folder you use for partials, then use it with a simple `include` call.

## Partials, usage and migrations

### Link Field.

Usage:

```php
    @include('admin.partials.link_field')

    @include('admin.partials.link_field', [
        'maxCtaLabel' => 30
    ])

    @include('admin.partials.link_field', [
        'linkOptionName' => 'link_option2',
        'labelFieldName' => 'ctaLabel2',
        'fieldName' => 'ctaUrl2',
        'browserName' => 'artist'
    ])

    @include('admin.partials.link_field', [
        'pages_browser' => false,
        'withFile' => true
    ])

    @include('admin.partials.link_field', [
        'modules' => [
            [
                'label' => 'Events',
                'name' => 'events',
                'routePrefix' => '',
            ]
        ]
    ])
```

Migrations (Only needed when used outside blocks):

```php
        Schema::table('homepages', function (Blueprint $table) {
            $table->string('link_option')->nullable();
        });
        Schema::table('homepage_translations', function (Blueprint $table) {
            $table->string('ctaLabel')->nullable();
            $table->string('ctaUrl')->nullable();
        });
```

Migrations without translations:
```php
        Schema::table('homepages', function (Blueprint $table) {
            $table->string('link_option')->nullable();
            $table->string('ctaLabel')->nullable();
            $table->string('ctaUrl')->nullable();
        });
```

### Image size.

Usage:

```php
    @include('admin.partials.image_size_field')

    @include('admin.partials.image_size_field', [
        'fieldName' => 'large_or_small',
        'labelFieldName' => 'Large or Small image size'
    ])

    @include('admin.partials.image_size_field', [
        'options' => [
        [
            'value' => 'XL',
            'label' => 'Large'
        ],
        [
            'value' => 'XS',
            'label' => 'Small'
        ],
        ],
        'default' => 'XL'
    ])
```

Migrations (Only needed when used outside blocks):

```php
        Schema::table('homepages', function (Blueprint $table) {
            $table->string('image_size')->nullable();
        });
```

### Background Color Field.

Usage:

```php
    @include('admin.partials.bkg_color_field')

    @include('admin.partials.bkg_color_field', [
        'fieldName' => 'hero_bkg_color',
        'labelFieldName' => 'Hero Background Color'
    ])

    @include('admin.partials.bkg_color_field', [
        'options' => [
            [
                'value' => 'cyan',
                'label' => 'Cyan'
            ],
            [
                'value' => 'magenta',
                'label' => 'Magenta'
            ],
            [
                'value' => 'yellow',
                'label' => 'Yellow'
            ],
        ],
        'default' => 'cyan'
    ])
```

Migrations (Only needed when used outside blocks):

```php
        Schema::table('homepages', function (Blueprint $table) {
            $table->string('bkg_color')->nullable();
        });
```

### Side by Side Field.

Usage:

```php
    @include('admin.partials.side_by_side_field')

    @include('admin.partials.side_by_side_field', [
        'fieldName1' => 'first_and_middle_name'
        'fieldName2' => 'surname'
        'labelFieldName1' => 'First and Middle Name',
        'labelFieldName2' => 'Surname',
    ])
```

Migrations (Only needed when used outside blocks):

```php
        Schema::table('homepages', function (Blueprint $table) {
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
        });
```
