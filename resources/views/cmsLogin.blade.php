<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Sign In CMS</title>
</head>
<body>
        <!-- <img src="{{url('images/cms_background.jpg')}}" alt="" class="background"> -->
    <form action="{{route('cms.loginCheck')}}" method="post" class="cms_login_form">
        <h3>CMS - Login</h3>
    {{ csrf_field() }}
        <input type="text" name="developer_uname" required="required" placeholder="Name" autocomplete="none"><br>
        <input type="password" name="developer_password" required="required" placeholder="Password"  autocomplete="none"><br>
        <input type="submit" value="Submit">
    </form>
    
			@if(isset($err_msg))
			
			<div class="deverrormessage">
                    <p>{{$err_msg}}</p>
			</div>
                @endif
    
</body>
</html>