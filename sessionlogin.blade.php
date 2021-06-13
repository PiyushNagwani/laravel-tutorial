<h1>Session Login</h1>
<form action='/index' method="POST">
@csrf
<input type="text" name="username" placeholder="username"> <br><br>
<input type="password" name="password" placeholder="enter password"><br><br>
<button type="submit">LOGIN</button>
</form>