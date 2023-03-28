<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <title>បង្កើតគណនី</title>
</head>
<body class="w-full p-5 h-screen font-[Content] justify-center flex jusify-center items-center"style="background-image: url({{ asset('images/login_bg.png') }}); background-size:cover; background-repeat:no-repeat; backdrop-filter: blur(2px);">
    <main class="w-96 h-2/3  flex border-2 justify-center p-5">
                    <div class="w-full">
                        <h3 class="card-header text-center text-white mb-5 text-2xl">បង្កើតគណនី</h3>
                        <div class="card-body">
                            <form action="{{ route('postsignup') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input class="w-full p-2 outline-none mb-3" type="text" placeholder="Name" id="name" class="form-control" name="name" autofocus>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input class="w-full p-2 outline-none mb-3" type="text" placeholder="Email" id="email_address" class="form-control" name="email" autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input class="w-full p-2 outline-none mb-3" type="password" placeholder="Password" id="password" class="form-control" name="password">
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label class="text-white"><input type="checkbox" name="remember"> ចងចាំខ្ញុំ</label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button class="w-full text-white hover:bg-black duration-300 bg-blue-600 p-2" type="submit" class="btn btn-dark btn-block">បង្កើតគណនី</button>
                                </div>
                            </form>
                        </div>
                    </div>
          </main>
</body>
</html>

