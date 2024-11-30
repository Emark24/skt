<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.home_title') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">{{ __('messages.site_name') }}</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('client.conferences') }}">{{ __('messages.client_section') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('employee.conferences') }}">{{ __('messages.employee_section') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">{{ __('messages.admin_section') }}</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-4">{{ __('messages.welcome_message') }}</h1>
            <p class="lead">{{ __('messages.your_name') }}: <strong>{{ $name }}</strong></p>
            <p class="lead">{{ __('messages.your_group') }}: <strong>{{ $group }}</strong></p>
        </div>

        <div class="row mt-4">
            <div class="col text-center">
                <a href="{{ route('client.conferences') }}" class="btn btn-primary">{{ __('messages.client_section') }}</a>
                <a href="{{ route('employee.conferences') }}" class="btn btn-secondary">{{ __('messages.employee_section') }}</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-danger">{{ __('messages.admin_section') }}</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
