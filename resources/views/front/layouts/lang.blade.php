@if (App::getLocale()==='az')
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'en', $current)) }}">
        En
    </a>
</li>
<span></span>
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'de', $current)) }}">
        De
    </a>
</li>
@elseif(App::getLocale()==='en')
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">
        Az
    </a>
</li>
<span></span>
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'de', $current)) }}">
        De
    </a>
</li>
@else
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">
        Az
    </a>
</li>
<span></span>
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'en', $current)) }}">
        En
    </a>
</li>    
@endif
