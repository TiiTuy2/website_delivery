<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="w-full text-white h-screen flex justify-center font-[Content] items-center"style="background-image: url({{ asset('images/show_bg.png') }}); background-size:cover; background-repeat:no-repeat; backdrop-filter: blur(2px);">
    <div class="w-1/2 h--3/4 border-2 p-5 bg-green-600  hover:bg-red-600 duration-500">
        <div class="w-full items-start mb-5">
             <div class="w-40 bg-blue-600 text-center p-2 text-white">
                <i class="fa fa-arrow-left"></i>
                <a href="{{ route('delivery') }}"> ត្រឡប់ក្រោយ</a></div>

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

    <form class="text-center justify-center" action="{{ route('companys.update',$gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
                <div class="flex gap-5 mb-5 items-center">
                    <div class="flex gap-5 mb-5">
                    <strong>រូបភាព</strong>
                    <input type="file" name="image" class="form-control" placeholder="រូបភាព">
                    </div>
                    <img class="border-2 p-2" src="/images/{{ $gallery->image }}" width="100px">

                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button class="w-40 bg-blue-600 p-2 text-white" type="submit" class="btn btn-primary">បញ្ជួន</button>
            </div>
        </div>

    </form>
</div>
</body>
</html>

