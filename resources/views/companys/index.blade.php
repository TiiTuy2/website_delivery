<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <title>CRUD COMPANY</title>
</head>
<body>
 <div class="w-full p-5 font-[Content]">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right" style="margin-bottom:10px;">
                <div class="w-40 text-center text-white bg-green-600 p-2"> <a class="btn btn-success" href="{{ route('companys.create') }}">បង្កើតក្រុមហ៊ុនថ្មី</a></div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="border-2 w-full">
        <tr>
            <th class="border-2 p-1">លេខរៀង</th>
            <th class="border-2 w-24 p-2">ឡូហ្កូ</th>
            <th class="border-2">ឈ្មោះក្រុមហ៊ុន</th>
            <th class="border-2">លេខទូរស័ព្ទ</th>
            <th class="border-2" width="280px">សកម្មភាព</th>
        </tr>
        @foreach ($companys as $company)
        <tr class="w-full justify-center border-2">
            <td class="border-2 text-center w-20">{{ ++$i }}</td>
            <td class="border-2"><img src="/images/{{ $company->image }}" width="100px"></td>
            <td class="text-center border-2">{{ $company->name }}</td>
            <td class="text-center border-2">{{ $company->phone_number }}</td>
            <td class="text-center">
                <form class="flex justify-center gap-3 items-center" action="{{ route('companys.delete',$company->id) }}" method="POST">

                 <div class="w-20 bg-blue-600 p-2 text-white text-base"> <a href="{{ route('companys.show',$company->id) }}">បង្ហាញ</a></div>

                 <div class="w-20 bg-green-600 p-2 text-white text-base"> <a href="{{ route('companys.edit',$company->id) }}">កែ</a></div>

                    @csrf
                    @method('DELETE')

                    <button class="w-20 bg-red-600 p-2 text-white text-base" type="submit" class="btn btn-danger">លុប</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $companys->links() !!}

</div>
</body>
</html>

