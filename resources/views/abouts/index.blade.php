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
<body>

<div class="w-full justify-center p-5">

<div class="w-full items-start flex justify-start mb-2">
        <div class="pull-right">
            <div class="w-40 text-center bg-green-600 text-white p-2">  <a class="btn btn-success" href="{{ route('abouts.create') }}">បង្កើតខ្លឹមសារថ្មី</a></div>
        </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="w-full border-2">
    <tr class="border-2">
        <th class="border-2 p-2">លេខរៀង</th>
        <th class="border-2 p-2">រូបភាព</th>
        <th class="border-2 p-2">ចំណងជើង</th>
        <th class="border-2 p-2">ខ្លឹមសារ</th>
        <th width="280px">សកម្មភាព</th>
    </tr>
    @foreach ($abouts as $about)
    <tr class="border-2">
        <td class="border-2 text-center">{{ ++$i }}</td>
        <td class="flex justify-center"><img src="/images/{{ $about->image }}" width="100px"></td>
        <td class="border-2 p-2">{{ $about->title }}</td>
        <td class="border-2 p-2">{{ $about->content }}</td>
        <td>
            <form class="text-center flex gap-3 justify-center" action="{{ route('abouts.destroy',$about->id) }}" method="POST">

                <div class="text-center bg-blue-600 text-white p-2"><a class="btn btn-info" href="{{ route('abouts.show',$about->id) }}">បង្ហាញ</a></div>

                <div class="text-center w-16 bg-green-600 text-white p-2"> <a class="btn btn-primary" href="{{ route('abouts.edit',$about->id) }}">កែ</a></div>

                @csrf
                @method('DELETE')

                <button class="w-20 text-white bg-red-600 p-2" type="submit" class="btn btn-danger">លុប</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</div>

</body>
</html>

