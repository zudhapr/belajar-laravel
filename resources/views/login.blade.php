
<h2>Login</h2>

@if(session('error'))
{{ session('error') }}
@endif

<form method="POST" action="/login">
@csrf
Email <br>
<input type="email" name="email"> <br><br>
Password <br>
<input type="password" name="password"> <br><br>


<button type="submit">Login</button>
</form>