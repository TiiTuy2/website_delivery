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
<body class="flex font-[Content] font-bold w-full p-10 h-screen justify-center items-center" style="background-image: url({{ asset('images/show_bg.png') }}); background-size:cover; background-repeat:no-repeat; backdrop-filter: blur(2px);">


   <div class="lg:w-2/4 md:w-2/4 sm:w-2/4w-full border-2 h-auto justify-center p-5 bg-green-600  hover:bg-red-600 duration-500">
    <div class="mb-5">
            <div class="w-36 bg-blue-600 text-center text-white p-2">
                <i class="fa fa-arrow-left"></i>
                <a class="btn btn-primary" href="{{ route('delivery') }}">ត្រឡប់ក្រោយ</a>
            </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blogs.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
                <div class="flex flex-wrap mb-5">
                    <strong class="text-white mb-2">ចំណងជើង</strong>
                    <input class="w-full outline-none p-2 text-green-600 " type="text" name="title" value="{{ $blog->title }}" class="form-control" placeholder="ចំណងជើង">
                </div>
                <div class="flex flex-wrap mb-5">
                    <strong class="text-white mb-2">ខ្លឹមសារ</strong>
                    <textarea class="w-full p-2 outline-none text-green-600" class="form-control" style="height:150px" name="content" placeholder="ខ្លឹមសារ">{{ $blog->content }}</textarea>
                </div>
                <div class="flex gap-5 mb-5 items-center text-white">
                    <strong>រូបភាព</strong>
                    <input type="file" name="image" class="form-control" placeholder="រូបភាព">
                    <img class="border-2 p-2" src="/images/{{ $blog->image }}" width="150px">
                </div>
            <div class="text-center">
              <button class="w-36 bg-blue-600 text-white p-2" type="submit" class="btn btn-primary">បញ្ជួន</button>
            </div>
        </div>

    </form>
</div>

</body>
</html>

