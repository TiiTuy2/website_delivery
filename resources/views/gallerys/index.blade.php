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
<body>


  <div  class="w-full justify-center p-5">
    <div class="w-full items-start flex justify-start mb-2">
        <div class="w-40 text-center bg-green-600 text-white p-2">  <a class="btn btn-success" href="{{ route('gallerys.create') }}">បង្ហោះរូបភាពថ្មី</a></div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="w-full border-2">
        <tr class="border-2">
            <th class="border-2 p-2 w-28">លេខរៀង</th>
            <th class="border-2 p-2 w-40">រូបភាព</th>
            <th width="280px">សកម្មភាព</th>
        </tr>
        @foreach ($gallerys as $gallery)
        <tr class="border-2">
            <td class="border-2 text-center">{{ ++$i }}</td>
            <td class="flex justify-center p-2"><img src="/images/{{ $gallery->image }}" width="100px"></td>
            <td class="border-2">
                <form class="flex justify-center gap-3" action="{{ route('gallerys.destroy',$gallery->id) }}" method="POST">

                    <div class="w-20 bg-blue-600 p-2 text-center text-white text-base"> <a class="btn btn-info" href="{{ route('gallerys.show',$gallery->id) }}">បង្ហាញ</a></div>

                    <div class="w-20 bg-green-600 p-2 text-center text-white text-base"> <a class="btn btn-primary" href="{{ route('gallerys.edit',$gallery->id) }}">កែ</a></div>

                    @csrf
                    @method('DELETE')

                    <button class="w-20 bg-red-600 p-2 text-white text-base" type="submit" class="btn btn-danger">លុប</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>


