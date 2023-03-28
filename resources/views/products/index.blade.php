<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <title>ផលិតផល</title>
</head>
<body class="">

    <div class="w-full justify-center p-5">
    <div class="row">
            <div class="pull-right">
                <div class="w-40 text-center bg-green-600 text-white p-2"><a class="btn btn-success" href="{{ route('products.create') }}"> បង្កើតទំនេញថ្មី</a></div>
            </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="w-full ">
        <tr class="w-full border-2">
            <th class="border-2 p-2">លេខរៀង</th>
            <th class="border-2 p-2">រូបភាព</th>
            <th class="border-2 p-2">ឈ្មោះទំនេញ</th>
            <th class="border-2 p-2">ព័ត៌មានលម្អិត</th>
            <th width="280px">សកម្មភាព</th>
        </tr>
        @foreach ($products as $product)
        <tr class="border-2">
            <td class="border-2 text-center">{{ ++$i }}</td>
            <td class="flex justify-center p-2"><img src="/images/{{ $product->image }}" width="150px"></td>
            <td class="border-2 p-2">{{ $product->name }}</td>
            <td class="border-2 p-2">{{ $product->detail }}</td>
            <td>
                <form class="text-center flex gap-3 p-2" action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <div class="w-20 text-white p-2 bg-blue-600">  <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">បង្ហាញ</a></div>
                     <div class="w-20 text-white p-2 bg-green-600"><a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">កែ</a></div>

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


