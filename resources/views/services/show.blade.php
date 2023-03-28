<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="w-full h-screen flex gap-3 flex-wrap justify-center font-[Content] font-bold"style="background-image: url({{ asset('images/show_bg.png') }}); background-size:cover; background-repeat:no-repeat; backdrop-filter: blur(2px);">
    <div class="flex justify-center items-center w-2/3">
    <div class=" p-5 border-2 gap-5 w-2/3 h-3/4 m-10 justify-center text-center items-center bg-green-600  hover:bg-red-600 duration-500">
            <div class="text-center flex mb-5">
                  <div class="w-36 bg-blue-600 text-center p-2 text-base text-white">
                    <i class="fa fa-arrow-left"></i>
                    <a class="btn btn-primary" href="{{ route('delivery') }}">ត្រឡប់ក្រោយ</a>
                </div>
          </div>
        <div class="w-full text-left">
            <div class=" w-full text-center mb-5">
                <div class="flex text-center gap-2 justify-center ">
                    <strong class="text-white text-lg ">ឈ្មោះ:</strong>
                    <h3 class="text-white text-xl"> {{ $service->name }}</h3>
                </div>
            </div>
            <div class="mb-5 w-full justify-center">
                <div class="flex gap-2 flex-wrap items-center justify-center mb-5">
                    <strong class="text-white text-lg">ព័ត៌មានលម្អិត:</strong>
                   <h3 class="text-white text-xl"> {{ $service->detail }}</h3>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="flex justify-center w-full">
                    <strong class="text-white text-2xl">រួបភាព:</strong>
                    <img src="/images/{{ $service->image }}" width="200px">
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

