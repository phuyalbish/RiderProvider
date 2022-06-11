<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/16fb9712d0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <script src="{{url('js/main.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <img src="{{url('images/riderproviderlogo.png')}}" alt="" class=" logo sidebaricon">
        <a href="#"  class="" id="" ><i class="fa-solid fa-motorcycle sidebaricon"></i></a>
       <i onclick="showhome()" class="fa-solid fa-house-chimney sidebaricon"></i>
       <i onclick="showadd()" class="fa-solid fa-circle-plus sidebaricon"></i>
       <i onclick="showedit()" class="fa-solid fa-pen-to-square sidebaricon"></i>
       <i onclick="showdelete()" class="fa-solid fa-trash sidebaricon"></i>
        <a href="{{route('cms.signout')}}"  class="" id="" ><i class="fa-solid fa-right-from-bracket  sidebaricon"></i></a>
    </div>



    <div class="maincontent">
        <span id="homecontent">
             @yield('homecontent')
             <p>home</p>
        </span>

        <span id="addcontent">
             <!-- @yield('homecontent') -->
             <p>add</p>
        </span>

        <span id="editcontent">
             @yield('homecontent')
             <p>edit</p>
        </span>

        <span id="deletecontent">
             @yield('homecontent')
             <p>delete</p>
        </span>

    </div>

    <div class="notificationbar">
        <h3>Notification Panel</h3>
    </div>
</body>
</html>