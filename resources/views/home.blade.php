<h1>Welcome to Conference Registration System</h1>
<p>Your Name: {{ $name }}</p>
<p>Group: {{ $group }}</p>
<a href="{{ route('client.conferences') }}">Client</a>
<a href="{{ route('employee.conferences') }}">Employee</a>
<a href="{{ route('admin.dashboard') }}">Admin</a>
