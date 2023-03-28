<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <title>អំពីក្រុមហ់ុ៊ន</title>
</head>
<body class="flex flex-wrap h-screen font-[Content] font-bold gap-10 items-center p-5 justify-center"style="background-image: url({{ asset('images/show_bg.png') }}); background-size:cover; background-repeat:no-repeat; backdrop-filter: blur(2px);">
<div class="row">
        <div class="mb-5">
            <h2 class="mb-5 text-white text-3xl">បន្ថែមខ្លឹមសារថ្មី</h2>
        </div>
        <div class="w-36 text-center text-white p-2 bg-blue-600">
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

<form class="border-2 lg:w-1/2 md:w-1/2 sm:w-1/2 w-full h-auto p-5 bg-green-600  hover:bg-red-600 duration-500" action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
            <div class="flex flex-wrap lg:gap-2 gap-2 mb-2 items-center lg:mb-5">
                <strong class="text-white">ចំណងជើង</strong>
                <input  class="border-2 p-2 w-full placeholder:text-green-600 outline-none text-green-600" type="text" name="title" class="form-control" placeholder="ចំណងជើង">
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="flex flex-wrap lg:gap-2 gap-2 mb-5 items-center">
                <strong class="w-36 text-white">ខ្លឹមសារ</strong>
                <textarea class="form-control w-full placeholder:text-green-600 border-2 outline-none p-2 text-green-600" style="height:150px" name="content" placeholder="ខ្លឹមសារ"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="flex flex-wrap items-center lg:gap-10 gap-2 mb-5">
                <strong class="text-white">រូបភាព</strong>
                <input class="text-white" type="file" name="image" class="form-control" placeholder="រូបភាព">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button class="bg-blue-600 p-2 w-20 text-white" type="submit" class="btn btn-primary">បញ្ជួន</button>
        </div>
    </div>

</form>

</body>
</html>

