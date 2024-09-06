@include('common.header')
<x-message-banner  msg="user signUp successfully"/>
<div>
   <h1>About Page</h1>

<h1>user name is {{$user}}</h1>
<!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>
@include('common.inner',['page' =>"This is about page"])