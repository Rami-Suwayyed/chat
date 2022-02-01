<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{LaravelLocalization::getCurrentLocaleDirection()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>
        {{__("Title")}}
    </h1>
    <p>
        {{ LaravelLocalization::getCurrentLocale() }} Follow this link

        {{ LaravelLocalization::getCurrentLocaleName() }}
    </p>

    <p>
        {{ LaravelLocalization::getCurrentLocaleNative() }}
    </p>

    <p>
        {{ LaravelLocalization::getCurrentLocaleDirection() }}
    </p>


    <ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
