<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="sb-nav-fixed">
    <div id="app">
        @include('layouts.nav')

        <!-- Notification Modal -->
        <div class="modal fade"
             id="notifModalLong"
             tabindex="-1"
             role="dialog"
             aria-labelledby="notifModalLongTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="notifModalLongTitle">
                            @auth()
                                @if(auth()->user()->type === 0)
                                Notify MDRRMO
                                @else
                                Notifications
                                @endif
                            @endauth
                        </h5>
                        @auth()
                        @if(auth()->user()->type === 1)
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        @endif
                        @endauth
                    </div>

                    @auth()
                    @if(auth()->user()->type === 0)
                    <form method="POST" action="{{ route('send.notification') }}">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                            <textarea class="form-control"
                                      id="contents"
                                      name="contents"
                                      placeholder="Enter text here.."
                                      minlength="5"
                                      required
                                      rows="4"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                    @endif
                    @endauth
                </div>
            </div>
        </div>

        <div @auth() id="layoutSidenav" @endauth class="py-4">
            @auth()
            @include('layouts.side_nav')
            @endauth
            <div id="layoutSidenav_content" style="position:relative; top: 56px;">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-bundle.min.js') }}"></script>

    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/weather.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.show-notifications', function(e) {
                e.preventDefault()
                $('#notifications').addClass('show')
            })
            $(document).on('click', '.close-notification', function(e) {
                e.preventDefault()
                $('#notifications').removeClass('show')
            })
        })
    </script>

@yield('scripts')
</body>
</html>
