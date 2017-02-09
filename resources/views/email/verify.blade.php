<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>RunningCodes Project</h1>
        <h2>Account Confirmation</h2>

        <div>
            <p>Thanks for creating an account with the RunningCodes Project.</p>
            <h2>your Login ID: {{ $login_id}}</h2>
            Please follow this link to confirm your account
            <a href="{{ URL::to('register/verify/'. $login_id .'/'. $c_code) }}" class="btn btn-success">Confirm Account</a>
        </div>
    </body>
</html>