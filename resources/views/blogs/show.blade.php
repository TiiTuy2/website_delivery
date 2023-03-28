<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <title>ប្លក់</title>
</head>
<body class="font-[Content] w-full h-screen text-white flex items-center justify-center"style="background-image: url({{ asset('images/show_bg.png') }}); background-size:cover; background-repeat:no-repeat; backdrop-filter: blur(2px);">>


    <div class="w-1/2 bg-green-600  hover:bg-red-600 duration-500 h-3/4  justify-center border-2 items-center p-5">
    <div class="w-full items-start mb-10">
        <div class="w-40 text-white bg-blue-600 text-center p-2">
                <i class="fa fa-arrow-left"></i>
                <a class="btn btn-primary" href="{{ route('delivery') }}"> ត្រឡប់ក្រោយ</a>
        </div>
      </div>
    <div class="flex justify-center">
    <div class="row">
            <div class="mb-4">
                <strong>ចំណងជើង៖ </strong>
                {{ $blog->title }}
            </div>
            <div class="mb-4 flex gap-3">
                <strong>ខ្លឹមសារ៖​ </strong>
                {{ $blog->content }}
            </div>
        <div class="flex justify-center">
            <div class="form-group">
                <strong class="mb-4">រូបភាព៖</strong>
                <img class="mt-3" src="/images/{{ $blog->image }}" width="150px">
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>


