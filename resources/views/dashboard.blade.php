<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>ADMIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


</head>

<body class="font-[Content] font-bold">
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>M<span>odern</span></h3>
        </div>

        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url({{ asset('images/logo_dashboard.png') }})">
                </div>
                <h4>Suon Ty</h4>
                <small>Art Director</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="{{ route('slides.index') }}" class="active">

                            <span > <i class="fa fa-sliders"></i></span>
                            <small>ស្លាយ</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}">
                            <span><i class="fa fa-gear"></i></span>
                            <small>សេវាកម្ម</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('') }}">
                            <span><i class="fa fa-industry"></i></span>
                            <small>ព័ត៌មានក្រុមហ៊ុន</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span><i class="fa fa-industry"></i></span>
                            <small>Projects</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-shopping-cart"></span>
                            <small>Orders</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-tasks"></span>
                            <small>Tasks</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">

        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>

                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                    </div>

                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>

                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                        <span class="las la-power-off"></span>
                        <a href="{{ route('signout') }}">ចាកចេញ</a>
                    </div>
                </div>
            </div>
        </header>


        <main>
            <div class="page-content">

                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>107,200</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>User activity this month</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>340,230</h2>
                            <span class="las la-eye"></span>
                        </div>
                        <div class="card-progress">
                            <small>Page views</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>$653,200</h2>
                            <span class="las la-shopping-cart"></span>
                        </div>
                        <div class="card-progress">
                            <small>Monthly revenue growth</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>47,500</h2>
                            <span class="las la-envelope"></span>
                        </div>
                        <div class="card-progress">
                            <small>New E-mails received</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="block w-full">

                    <div class="record-header">
                        <div class="add">
                            <span>Entries</span>
                            <select name="" id="">
                                <option value="">ID</option>
                            </select>
                            <button>Add record</button>
                        </div>

                        <div class="browse">
                            <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>



                   <!-------------------Slide--------------------->
                   <div class="w-full p-5 font-[Content]">
                    <div class="row">
                            <div class="mb-5">
                             <div class="w-36 bg-green-600 p-2 text-center text-white"> <a class="btn btn-success" href="{{ route('slides.create') }}"> បង្កើតស្លាយថ្មី</a></div>
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
                                <form method="POST" class="flex items-center p-2 gap-3" action="{{ route('slides.destroy',$slide->id) }}">

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


                    <!-------------------Sevuice--------------------->
                    <div class="w-full justify-center p-5">
                        <div class="row">
                            <div class="mb-5">
                            <div class="w-40 text-center bg-green-600 text-white p-2 "><a class="btn btn-success" href="{{ Route('services.create') }}">បង្កើតសេវាកម្មថ្មី</a></div>
                            </div>
                        </div>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="w-full">
                            <tr class="w-full border-2">
                                <th class="mb-5 border-2 p-2">លេខរៀង</th>
                                <th class="mb-5 border-2">រួបភាព</th>
                                <th class="mb-5 border-2">ឈ្មោះ</th>
                                <th class="border-2">ព័ត៌មានលម្អិត</th>
                                <th width="280px">សកម្មភាព</th>
                            </tr>
                            @foreach ($services as $service)
                            <tr class="p-5">
                                <td class=" text-center border-2">{{ ++$i }}</td>
                                <td class="w-20 p-2 border-2"><img src="/images/{{ $service->image }}" width="90px"></td>
                                <td class="p-2">{{ $service->name }}</td>
                                <td class="border-2 p-2">{{ $service->detail }}</td>
                                <td class="w-56  justify-center border-2 p-2">
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
                    </div>
                     <!-------------------Company--------------------->
                    <div class="w-full p-5 font-[Content]">
                                <div class="mb-5">
                              <div class="w-40 text-center text-white bg-green-600 p-2"><a href="{{ route('companys.create') }}">បង្កើតក្រុមហ៊ុនថ្មី</a></div>
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
                                <td class="border-2 p-2"><img src="/images/{{ $company->image }}" width="100px"></td>
                                <td class="p-2">{{ $company->name }}</td>
                                <td class="p-2 border-2">{{ $company->phone_number }}</td>
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

                    </div>


                    <!-------------------Product--------------------->
                    <div class="w-full justify-center p-5">
                                <div class="mb-5">
                                    <div class="w-40 text-center bg-green-600 text-white p-2"><a class="btn btn-success" href="{{ route('products.create') }}"> បង្កើតទំនេញថ្មី</a></div>
                                </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="w-full">
                            <tr class="w-full border-2">
                                <th class="border-2 p-2">លេខរៀង</th>
                                <th class="border-2">រូបភាព</th>
                                <th class="border-2">ឈ្មោះទំនេញ</th>
                                <th class="border-2">ព័ត៌មានលម្អិត</th>
                                <th width="280px">សកម្មភាព</th>
                            </tr>
                            @foreach ($products as $product)
                            <tr class="border-2">
                                <td class="border-2 text-center">{{ ++$i }}</td>
                                <td class="flex justify-center p-2"><img src="/images/{{ $product->image }}" width="150px"></td>
                                <td class="border-2 p-2">{{ $product->name }}</td>
                                <td class="border-2 p-2">{{ $product->detail }}</td>
                                <td>
                                    <form method="POST" class="text-center flex gap-3 justify-center" action="{{ route('products.destroy',$product->id) }}">

                                        <div class="w-20 text-white p-2 bg-blue-600">  <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">បង្ហាញ</a></div>

                                         <div class="w-20 text-white p-2 bg-green-600"><a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">កែ</a></div>

                                        @csrf
                                        @method('DELETE')
                                        <button class="modal-open text-white w-20 bg-red-600">លុប</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                    </div>

                    <!-------------------Blog--------------------->
                    <div class="w-full justify-center p-5">

                        <div class="w-full items-start flex justify-start mb-2">
                                <div class="pull-right">
                                    <div class="w-40 text-center bg-green-600 text-white p-2">  <a class="btn btn-success" href="{{ route('blogs.create') }}">បង្កើតប្លក់ថ្មី</a></div>
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
                            @foreach ($blogs as $blog)
                            <tr class="border-2">
                                <td class="border-2 text-center">{{ ++$i }}</td>
                                <td class="flex justify-center"><img src="/images/{{ $blog->image }}" width="100px"></td>
                                <td class="border-2 p-2">{{ $blog->title }}</td>
                                <td class="border-2 p-2">{{ $blog->content }}</td>
                                <td>
                                    <form method="POST" class="text-center flex gap-3 justify-center" action="{{ route('blogs.destroy',$blog->id) }}">

                                        <div class="text-center bg-blue-600 text-white p-2"><a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">បង្ហាញ</a></div>

                                        <div class="text-center w-16 bg-green-600 text-white p-2">  <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">កែ</a></div>
                                        @csrf
                                        @method('DELETE')
                                        <button class="modal-open text-white w-20 bg-red-600">លុប</button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                        </div>

                </div>


                   <!-------------------Gallery--------------------->
                <div  class="w-full justify-center p-5 mb-10">
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


                   <!-------------------About--------------------->
                   <div class="w-full justify-center p-5">

                    <div class="w-full items-start flex justify-start mb-2">
                            <div class="pull-right">
                                <div class="w-40 text-center bg-green-600 text-white p-2"> <a class="btn btn-success" href="{{ route('abouts.create') }}">បង្កើតខ្លឹមសារថ្មី</a></div>
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
                            <td class="border-2 text-center w-20">{{ ++$i }}</td>
                            <td class="flex justify-center w-20"><img src="/images/{{ $about->image }}" width="100px"></td>
                            <td class="border-2 p-2 w-32">{{ $about->title }}</td>
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


            </div>

        </main>
    </div>




</body>

</html>
