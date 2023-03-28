<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <title>ចូលគណនី</title>
</head>
<body class="w-full h-screen flex justify-center items-center font-[Content]"style="background-image: url({{ asset('images/login_bg.png') }}); background-size:cover; background-repeat:no-repeat; backdrop-filter: blur(2px);">
    <main class="w-96 h-2/3 flex justify-center border-2 p-5">
            <div class="justify-center w-96">
                    <div class="card">
                        <h3 class="text-center text-white mb-5">ចូលគណនី</h3>
                        @if(\Session::has('message'))
                            <div class="alert alert-info">
                                {{\Session::get('message')}}
                            </div>
                        @endif
                        <div class="card-body">
                            <form method="POST" action="{{ route('postlogin') }}">
                                @csrf
                                <div class="form-group mb-5">
                                    <div class="flex gap-10 items-center">
                                        <h3 class="text-white">អុីម៉ែល</h3>
                                        <div class="flex items-center">
                                            <i class="fa fa-envelope w-12 h-12 text-white bg-blue-600 justify-center items-center flex"></i>
                                            <input  class="p-3 outline-none rounded-md w-full " type="text" placeholder="Email" id="email" class="form-control" name="email"autofocus>
                                        </div>
                                    </div>

                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-5">
                                    <div class="flex gap-2 items-center mb-5">
                                        <h3 class="text-white">លេខសម្ងាត់</h3>
                                        <div class="flex items-center">
                                            <i class="fa fa-lock h-12 w-12 bg-blue-600 flex justify-center items-center text-white"></i>
                                            <input class="p-3 rounded-md outline-none w-full" type="password" placeholder="Password" id="password" class="form-control" name="password">
                                        </div>

                                    </div>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-5 gap-2">
                                    <div class="checkbox">
                                        <label class="text-white flex items-center gap-2">
                                            <input type="checkbox" name="remember">
                                            <p class="text-sm">ចងចាំខ្ញុំ</p>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto mb-10">
                                    <button class="bg-blue-600 hover:bg-black duration-300 rounded-md w-full p-2 text-white" type="submit" class="btn btn-dark btn-block">ចូល</button>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p class="text-base text-white">មិនទានមាន់គណនីមែនទេ?</p>
                                    <div class="underline text-white"><a href="{{ route('register-user') }}">បង្កើតគណនី</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
    </main>
</body>
</html>




