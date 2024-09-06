@include('common.header')
<x-message-banner  msg="user login successfully" class="success"/>
<x-message-banner  msg="user signUp successfully" class="success"/>
<br>
<br>
<br>
<x-message-banner  msg="Password not correct please try again" class="Error"/>


<h1>Home Page</h1>
<style>
    .success{
        background: lightgreen;
        color:green;
        padding:3px 10px;
        border: radius 2px;
        display:inline-block;
        margin: 10px
    }
    .error{
        background:red;
        color:Black;
        padding:3px 10px;
        border: radius 2px;
        display:inline-block;
        margin: 10px
    }
</style>
<h2>{{$name}}</h2>
<!-- excecute function -->
 <!-- <h3>{{rand()}}</h3> -->

 <!-- <h1>{{$users[1]}}</h1> -->
  @if($name=='arfin')
  <h2>This is Arfin</h2>
  @elseif($name == 'chowa')
  <h2>This is chowa</h2>
  @else
  <h2>other user</h2>
  @endif


<div>
    @foreach($users as $user)
    <h5>{{$user}}</h5>
    @endforeach
</div>
<!-- @includeIf('common.inner',['page' =>"This is home page"]) -->
@include('common.inner',['page' =>"This is home page"])







  <div>
    @for($i=0;$i<=10;$i++)
    <h3> {{$i}}</h3>
    @endfor
  </div>

