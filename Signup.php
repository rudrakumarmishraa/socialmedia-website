<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="shortcut icon" href="https://img.icons8.com/color/48/group-task.png" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, input {
            font-family: 'Roboto', sans-serif;
        }

        .loginpage {
            position: absolute;
            display: flex;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .loginpage .login-form {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            background: #f8f8ff;
            padding: 1rem;
            z-index: 100;
            border-radius: 10px;
        }

        .loginpage .login-form h2 {
            width: 100%;
            text-align: center;
            font-size: 2rem;
            margin: 1rem 0;
            font-weight: 500;
        }

        .loginpage .login-form>a {
            display: flex;
            position: absolute;
            align-items: center;
            gap: 5px;
            top: 8px;
            left: 8px;
            color: #999;
            font-size: 0.8rem;
            text-decoration: none;
        }

        .loginpage .login-form>a svg {
            width: 20px;
            height: 20px;
        }

        .loginpage .login-form .form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            justify-content: center;
            align-items: center;
        }

        .loginpage .login-form .form .inputs {
            position: relative;
            width: 300px;
            height: 60px;
        }

        .loginpage .login-form .form .inputs input {
            font-size: 1.25rem;
            background: transparent;
            outline: none;
            padding: 2px 2px 2px 3rem;
            border: 1px solid #e0e0e0;
            border-radius: 50px;
        }

        .loginpage .login-form .form .inputs input::placeholder {
            color: #000;
        }

        .loginpage .login-form .form .inputs p {
            color: #ff0000f6;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 2px 1rem;
        }

        .loginpage .login-form .form .inputs svg {
            position: absolute;
            width: 25px;
            height: 25px;
            top: 2px;
            left: 10px;
        }

        .loginpage .login-form .error-login {
            width: 100%;
            color: #ff0000f6;
            margin: 10px 5px;
            text-align: justify;
            padding: 0 1rem;
            font-size: 1rem;
            font-weight: 600;
        }

        .loginpage .login-form button {
            display: flex;
            font-size: 1.35rem;
            padding: 5px 20px;
            gap: 1rem;
            align-items: center;
            color: #fff;
            background: #2c3578;
            border: 0;
            border-radius: 50px;
            cursor: pointer;
            transition: 0.5s ease;
        }

        .loginpage .login-form button:hover {
            color: #94bbe9;
            background: #2c3578e0;
            scale: 1.01;
        }

        .loginpage .login-form button svg {
            width: 25px;
            height: 25px;
        }

        .loginpage .singup {
            display: flex;
            width: 100%;
            justify-content: flex-end;
            gap: 5px;
            margin-top: 1.5rem;
        }

        .loginpage .singup a {
            color: #000;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header class='loginpage'>
        <div class='login-form'>
            <a href='index.php'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg>
                Go Home
            </a>
            <h2>Sign Up</h2>
            <form class="form">
                <div class='inputs'>
                    <input id="username" type="text" placeholder='username' />
                    <p id="usernameError"></p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                        stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                </div>
                <div class='inputs'>
                    <input id="email" type="text" placeholder='email' />
                    <p id="emailError"></p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                        stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                </div>
                <div class='inputs'>
                    <input id="password" type="password" placeholder='password' />
                    <p id="passwordError"></p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                        stroke="currentColor" class="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                    </svg>
                </div>
                <div class="error-login"></div>
                <button>
                    Sign up
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                        stroke="currentColor" class="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                    </svg>
                </button>
            </form>
            <div class='singup'>already have an account <a href="signin.php">signin</a></div>
        </div>
    </header>
</body>
<script>
    // Variable for Dom Manipulation
    const username = document.querySelector('#username')
    const email = document.querySelector('#email')
    const password = document.querySelector('#password')
    const usernameError = document.querySelector('#usernameError')
    const emailError = document.querySelector('#emailError')
    const passwordError = document.querySelector('#passwordError')

    // Function for username Change.
    username.addEventListener('keyup', (event) => {
        value = event.target.value
        if (value === '') {
            usernameError.innerHTML = 'Please fill username.'
        } else if (value.length < 5 || value.length > 15) {
            usernameError.innerHTML = 'Username must be 05-15 characters.'
        } else if ((/[^a-zA-Z0-9\s]/).test(value)) {
            usernameError.innerHTML = 'Special character not allowed in username.'
        } else if ((/\d/).test(event.target.value)) {
            usernameError.innerHTML = 'Number not allowed in username.'
        } else {
            usernameError.innerHTML = ''
        }
    })
    // Function for email Change.
    email.addEventListener('keyup', (event) => {
        value = event.target.value
        if (value === '') {
            emailError.innerHTML = 'Please fill email.'
        } else if (value.length < 8 || value.length > 32) {
            emailError.innerHTML = 'Email must be 08-32 characters.'
        } else if (value.includes('@') && value.includes('.')) {
            emailError.innerHTML = ''
        } else {
            emailError.innerHTML = 'Malformed Email Address.'
        }
    })
    // Function for password Change.
    password.addEventListener('keyup', (event) => {
        value = event.target.value
        if (value === '') {
            passwordError.innerHTML = 'Please fill password.'
        } else if (value.length < 8 || value.length > 32) {
            passwordError.innerHTML = 'Password must be 08-32 characters.'
        } else if (!(/[^a-zA-Z0-9\s]/).test(value)) {
            passwordError.innerHTML = 'Password must contain a special character.'
        } else if (!(/\d/).test(event.target.value)) {
            passwordError.innerHTML = 'Password must contain a number.'
        } else {
            passwordError.innerHTML = ''
        }
    })
</script>
</html>