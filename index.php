<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">

</head>
    <body>
        <div class="main-container">
            <div class="form-conteiner">
                <div class="form-body">
                 <h2 class="title">Welcome back</h2>
                    <form action="" class="the-form">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="exempplo@gmail.com">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"  placeholder="Enter your password">
                        <div>
                            <span>Forget your password?</span> <a href="">Recover new</a>
                        </div>
                        <input type="submit" value="Continue" formaction="html/DashbordIndex.html">
                        <button class="signUpGoogle">
                            <img src="Icon/Google%20-%20Original.png" alt="signIn whith gppgle">
                            Continue with Google</button>

                        <div class="form-footer">
                            <div>
                                <span>Don't have an account?</span> <a href="html/signUp.html">Sign Up</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </body>

<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-app.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyCsAPzAs1590sqadt1qL9GzmFLI7TXAajY",
        authDomain: "coaching-interview.firebaseapp.com",
        projectId: "coaching-interview",
        storageBucket: "coaching-interview.appspot.com",
        messagingSenderId: "548835294048",
        appId: "1:548835294048:web:fbd37a2ed9f9e6d6b47c05"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
</script>



</html>