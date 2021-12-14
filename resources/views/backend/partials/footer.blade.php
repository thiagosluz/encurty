<footer class="app-footer">
  <div class="footer-left">
    <a href="https://github.com/realodix/urlhub">{{appName()}}</a> <small>{{config('app.version')}}</small>
    <span>&copy; 2018-present <a href="https://github.com/realodix">Budi Hermawan</a></span>
  </div>
  <div class="footer-right ml-auto">
    <span>@lang('Powered by')</span>
    <a href="https://github.com/laravel/framework/releases/tag/v{{ App::VERSION() }}" target="_blank" title="@lang('Laravel v'.App::VERSION().' (release notes)')" data-toggle="tooltip">Laravel<small> v{{ App::VERSION() }}</small></a>
  </div>
</footer>
