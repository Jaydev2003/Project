@extends('layout.master')

@section('content')


<style>/* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body{
      min-height: 100vh;
      width: 100%;
      background: #009579;
    }
    .container{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      max-width: 420px;
      width: 100%;
      background: #fff;
      border-radius: 7px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.3);
     //align-items: center;

    }

    .container .form{
      padding: 2rem;
    }
    .form header{
      font-size: 2rem;
      font-weight: 500;
      text-align: center;
      margin-bottom: 1.5rem;
    }


    </style>





<div class="container ">



    <div class="login form">
        <header>Login</header>

        <form  action="{{ Route('Login-user') }}" method='POST'>
            @csrf
            <div  class="mb-3">
            <input class="form-control " type="text" placeholder="Enter your email" name="email" >
            <span   style="color: red"> @error('email'){{ $message }}@enderror</span>
        </div>

        <div class="mb-3">
            <input class="form-control" type="password" placeholder="Enter your password" name="password" >

            <span   style="color: red">@error('password'){{ $message }}@enderror</span>
        </div>
        <div class="mt-3  d-flex  align-items-center">

            <button  type="submit" class="btn " style="text-align:center; margin-left:35%; background-color:#009579; color:white">Login</button>
        </div>

        @if ($errors->any())
        <span> @error('error'){{ $message }}@enderror</span>

    @endif


        </form>



</div>
@endsection

