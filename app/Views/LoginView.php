<button onclick="document.location='/'">Back</button>
<form method="post" action="/login">
    <div>
        <label for="email">E-Mail</label>
        <input type="email" id="email" name="email" required/>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required/>
    </div>
    <button type="submit">Login</button>
</form>