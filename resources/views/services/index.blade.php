<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>សេវាកម្ម</title>
</head>
<body class="p-5  w-full h-full flex justify-center items-center font-[Content] text-white"style="background-image: url({{ asset('images/bg_slider.png') }}); background-size:cover; background-repeat:no-repeat; backdrop-filter: blur(3px);">


<div class="w-full justify-center p-5">
    <div class="row">
        <div class="w-36 bg-red-600 text-center mb-10 p-2"><a href="{{ route('delivery') }}">
            <i class="fa fa-arrow-left"></i>
            ត្រឡប់ក្រោយ</a>
          </div>
            <div class="mb-5">
        <div class="w-40 text-center bg-green-600 text-white p-2"><a class="btn btn-success" href="{{ Route('services.create') }}">បង្កើតសេវាកម្មថ្មី</a></div>
            </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="w-full">
        <tr class="w-full border-2">
            <th class="mb-5 border-2">លេខរៀង</th>
            <th class="mb-5 border-2">រូបភាព</th>
            <th class="mb-5 border-2">ឈ្មោះសេវាកម្ម</th>
            <th class="border-2">ព័ត៌មានលម្អិត</th>
            <th width="280px">សកម្មភាព</th>
        </tr>
        @foreach ($services as $service)
        <tr class="p-5">
            <td class="w-10 text-center border-2">{{ ++$i }}</td>
            <td class="w-20 p-2 border-2"><img src="/images/{{ $service->image }}" width="90px"></td>
            <td class="w-20 text-center border-2">{{ $service->name }}</td>
            <td class="w-60 text-center border-2">{{ $service->detail }}</td>
            <td class="w-56  justify-center border-2">
                <form class="w-auto text-center items-center justify-center flex gap-4" action="{{ route('services.destroy',$service->id) }}" method="POST">

                  <div class="w-20 text-white p-2 bg-blue-600"> <a href="{{ route('services.show',$service->id) }}">បង្ហាញ</a></div>

                  <div class="w-20 text-white p-2 bg-green-600"><a href="{{ route('services.edit',$service->id) }}">កែ</a></div>

                    @csrf
                    @method('DELETE')
                    <button class="w-20 text-white bg-red-600 p-2" type="submit" class="btn btn-danger">លុប</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $services->links() !!}

</div>

</body>
</html>
