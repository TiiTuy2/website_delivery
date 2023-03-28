<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ស្លាយ</title>
</head>
<body class="p-5 w-full h-screen flex justify-center items-center font-[Content] text-white"style="background-image: url({{ asset('images/bg_slider.png') }}); background-size:cover; background-repeat:no-repeat; backdrop-filter: blur(3px);">


   <div class="w-full">
    <div class="row">
      <div class="w-36 bg-red-600 text-center p-2"><a href="{{ route('delivery') }}">
        <i class="fa fa-arrow-left"></i>
        ត្រឡប់ក្រោយ</a>
      </div>
            <div class="mb-5 mt-16">
             <div class="w-36 bg-blue-600 p-2 text-center text-white"> <a class="btn btn-success" href="{{ route('slides.create') }}"> បង្កើតស្លាយថ្មី</a></div>
            </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="border-2 w-full ">
        <tr class="border-2">
            <th class="border-2 p-2">លេខរៀង</th>
            <th class="border-2 p-2">រូបភាព</th>
            <th class="border-2 p-2">ចំណងជើង</th>
            <th class="border-2 p-2">មើលរូបភាព</th>
            <th  width="280px">សកម្មភាព</th>
        </tr>
        @foreach ($slides as $slide)
        <tr class="border-2">
            <td class="border-2 text-center">{{ ++$i }}</td>
            <td class="flex justify-center p-2"><img src="/images/{{ $slide->image }}" width="200px"></td>
            <td class="border-2 p-2">{{ $slide->title }}</td>
            <td class="border-2 p-2">{{ $slide->link }}</td>
            <td class="text-center">
                <form class="flex items-center p-2 gap-3" action="{{ route('slides.destroy',$slide->id) }}" method="POST">

                    <div class="w-20 bg-blue-600 p-2 text-white text-base"><a class="btn btn-info" href="{{ route('slides.show',$slide->id) }}">បង្ហាញ</a></div>
                    <div class="w-20 bg-green-600 p-2 text-white text-base"> <a class="btn btn-primary" href="{{ route('slides.edit',$slide->id) }}">កែ</a></div>

                    @csrf
                    @method('DELETE')

                    <button  class="w-20 bg-red-600 p-2 text-white text-base" type="submit" class="btn btn-danger">លុប</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


</div>

</body>
</html>

