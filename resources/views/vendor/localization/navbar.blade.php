<ul class="navbar-locales" style="display: inline-block; list-style: none;">
    @foreach(localization()->getSupportedLocales() as $key => $locale)
        <li class="{{ localization()->getCurrentLocale() == $key ? 'active' : '' }}">
            <a href="{{ localization()->getLocalizedURL($key) }}" rel="alternate" hreflang="{{ $key  }}">
                {{ $locale->native() }}
            </a>
        </li>
    @endforeach
</ul>
