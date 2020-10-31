<button onclick="document.location='/'">Back</button>
<h1>Registration</h1>
<body>
<form method="post" action="/registration">
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" required/><br>

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" required/><br>

    <label for="password">Password</label><br>
    <input type="password" id="password" name="password" required/><br>

    <label for="confirmPassword">Confirm password</label><br>
    <input type="password" id="confirmPassword" name="confirmPassword" required/><br>

    <button type="submit">Register</button>
</form>
</body>