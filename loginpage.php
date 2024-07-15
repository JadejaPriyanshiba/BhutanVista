<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="loginPageStyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
            <div class="row align-items-start">
                <div class="col-5 px-5 pt-5 left-half">
                    <div class="stcon">
                        <p>Login</p>
                        <h5 class="m-0 p-0">Login to connect with us</h5>
                        <div class="col-md-9">
                            <input type="email" class="col-md-10 mt-5 bg-transparent int-sty " id="email" placeholder="E-MAIL" >
                            <input type="password" class="col-md-10 mt-3 bg-transparent int-sty" id="password" placeholder="PASSWORD" >
                            <div class="row pt-2 ps-3 justify-content-between">
                                <div class="form-check col-6 check-style">
                                    <input type="checkbox" id="remember" class="form-check-input bg-transparent ">
                                    <label for="remember" class="form-check-label">Remember me</label>
                                </div>
                                <a href="" class="col-6 forgotlink-style">Forgot password?</a>
                            </div>
                            <button class="col-10 loginbnt mt-5">Login</button>
                        </div>
                    </div>
                </div>
                <div class="col right-half p-0">
                    <button onclick='rnavigate("signinPage.html")' class="col-2 signinbnt m-0 p-0">Sign in</button>
                </div>
            </div>
        <script>
            function rnavigate(string){
                location.replace(string)
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
