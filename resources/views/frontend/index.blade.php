<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="/src/logo.png">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <title>ក្រុមហ៊ុនដឹកជញ្ជួន</title>
  <link rel="stylesheet" href="css/style.css">

<body class="min-h-screen place-content-center bg-white font-[Content]">
    <!-----------------------------navbar----------------------------->
    <nav class="p-5 bg-purple-600 shadow md:flex md:item-center md:justify-around relative">
      <div class="flex justify-between items-center">
        <span class="text-2xl font-bold cursor-pointer">
            @foreach ($companys as $company)
               <img class="h-20 inline w-20" src="{{ asset('images/'.$company->image) }}" alt="">
            @endforeach
        </span>
        <span class="text-3xl cursor-pointer mx-2 md:hidden block">
          <ion-icon name="menu-outline"onclick="menu(this)"></ion-icon>
        </span>
      </div>
      <ul class="md:flex md:items-center z-10 md:z-auto md:static absolute bg-purple-600 w-full left-0  md:w-auto
      md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[100px]">
        <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
          <a class="text-md text-white hover:text-red-600  duration-400" href="index.html">ទំព័រដើម</a>
        </li>
        <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
          <a class="text-md text-white hover:text-red-600 duration-500" href="service.html">សេវាកម្ម</a>
        </li>
        <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
          <a class="text-md text-white hover:text-red-600 duration-500" href="about.html">អំពីក្រុមហ៊ុន</a>
        </li>
        <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
          <a class="text-md text-white hover:text-red-600 duration-500" href="project.html">គម្រោង</a>
        </li>
        <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
          <a class="text-md text-white hover:text-red-600 duration-500" href="news.html">ព័ត៌មាន</a>
        </li>
        <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
          <a class="text-md text-white hover:text-red-600 duration-500" href="team.html">ក្រុមការងារ</a>
        </li>
      </ul>
    </nav>


    <!-- Swiper -->

 <!-- Slider main container -->
 <div class="main">
    <div class="cd-slider">
      <div class="ul-sllide">
        @foreach ($slides as $slide)
        <li>
          <div>
          <img class="image w-full" src="{{ asset('images/'.$slide->image) }}" alt="">
          </div>
          <div class="content">
            <h2 class="text-white">{{ $slide->title }}</h2>
            <a class="text-white" href="#">
                {{ $slide->link }}</a>
            </a>
          </div>
        </li>
        @endforeach
      </div>
    </div> <!--/.cd-slider-->
  </div>
<!--Basic structure of slider-->

<h2 class="text-1xl text-red-600 text-center font-[Content] font-bold mt-10">យើង​ផ្តល់​ជូន​ពិសេស​ក្នុង​ការ​ដឹក​ជញ្ជូន</h2>
<h2 class="text-3xl text-center font-[Content] font-bold mt-5 mb-10">សេវាកម្មដឹកជញ្ជូនឯកទេស</h2>

<div class="flex flex-wrap w-full  justify-around min-h-screen ">
    @foreach ($services as $service)
    <div class="lg:w-80 md:w-80 sm:w-80 rounded-md  h-full shadow-2xl w-11/12 hover:scale-110 duration-300 text-center items-center justify-center p-5 mb-5">
         <img class="w-full" src="{{ asset('images/'.$service->image) }}" alt="">
      <h2 class="text-2xl mt-5 text-blue-900 mb-7">{{ $service->name }}</h2>
      <p class="text-base mt-5 text-blue-900 mb-7">{{ $service->detail }}</p>
      <a class="p-2 rounded-md text-sm mt-10 bg-red-600 hover:bg-blue-600 duration-500 text-white text-center" href="{{ route('road_freight') }}">មើលពត៍មានលម្អិត</a>
    </div>
    @endforeach
</div>



<div class="flex flex-wrap justify-around items-center w-11/12">
  <p class="text-slate-500 text-1xl m-5 font-bold ">បញ្ជីសេវាកម្មរបស់យើងមិនបញ្ចប់នៅទីនេះទេ។ ស្វែងយល់ពីរបៀបដែលយើងអាចជួយអ្នក និងអាជីវកម្មរបស់អ្នក។</p>
  <a class="text-white rounded-md bg-blue-500 p-3 font-[Content] font-bold
  hover:bg-red-500 duration-150 m-3" href="service.html">សេវាកម្មផ្សេងទៀត</a>
</div>
<div class="flex flex-wrap justify-center mt-10">
  <div data-aos="flip-left" data-aos-delay="400" data-aos-duration="4000" class=".block w-1/2">
    @foreach ($abouts as $about)
    <img class="" src="src/about01.png" alt="">
    <div class="flex flex-wrap relative left-10">
      <img class="m-5" src="{{ asset('images/'.$about->image) }}" alt="">
      <div class="block">
        <img class="m-2" src="src/about_sign02.png" alt="">
      </div>
    </div>
  </div>
  <div class="block w-11/12 mt-10">
  <h3 class="font-[Content] text-red-600 font-bold">យើង​ផ្តល់​ជូន​ពិសេស​ក្នុង​ការ​ដឹក​ជញ្ជូន</h3>
  <h2 class="text-2xl mt-3 font-bold">យើងមានមោទនភាពចំពោះកម្លាំងពលកម្មរបស់យើង ហើយបានខិតខំប្រឹងប្រែង។</h2>
  <p class="font-bold mt-5 mb-10">{{ $about->content }}</p>
  @endforeach
    <a class="font-[Content] font-bold p-2 border border-red-500 mt-32 hover:bg-blue-600
     hover:text-white items-center rounded-sm"
     href="contact.html">
     ទទួលបានសម្រង់ឥឡូវនេះ
     <ion-icon name="arrow-forward-outline"></ion-icon>
    </a>
     <a class="font-[Content] font-bold p-2 border border-red-500 mt-32 hover:bg-blue-600
     hover:text-white relative left-6 items-center rounded-sm"
     href="about.html">
     អំពីយើង
     <ion-icon name="arrow-forward-outline"></ion-icon></a>
  </div>
  <div class=" w-11/12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10">
    @foreach ($products as $product)
    <div class="group relative items-center justify-center overflow-hidden cursor-pointer m-5">
      <div class="h-96 w-full">
        <img class="h-full w-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform" src="{{ asset('images/'.$product->image) }}" alt="">
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black
       group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 duration-500"></div>
      <div class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[70%] group-hover:translate-y-0 transition-all duration-500">
        <h2 class="text-2xl font-bold text-white font-[Content] mb-5">{{ $product->name }}</h2>
        <p class="text-lg text-white mb-3 text-left ">{{ $product->detail }}</p>
        <a href="air_freight.html" class="text-sm justify-center text-center w-auto bg-red-600 hover:bg-blue-600 duration-500 py-2 p-3 items-center text-white">មើលពត៍មានលម្អិត</a>
      </div>
    </div>
    @endforeach




   </div>
   <div class="block justify-center text-center">
    <h3 class="text-1xl text-red-500 font-[Content] mt-10 mb-5 font-bold">យើង​ផ្តល់​ជូន​ពិសេស​ក្នុង​ការ​ដឹក​ជញ្ជូន</h3>
    <h2 class="text-2xl text-black font-[Content] font-bold">រួមគ្នា យើងមានបញ្ហាប្រឈមផ្នែកដឹកជញ្ជូនរបស់អ្នក។</h2>
   </div>
 </div>
 <div style="background-image: url(src/map.png); background-size: cover; background-position: center; background-repeat: no-repeat;"
 class=" w-11/12 flex flex-wrap justify-around text-center mt-10 mb-10">
  <div class="w-56 h-40 text-center items-center justify-center mt-5">
    <ion-icon class="text-6xl text-white rounded-full bg-blue-500 mb-4" name="car-outline"></ion-icon>
    <h2 class="text-3xl text-red-500 font-bold mb-2">1656</h2>
    <h3 class="font-[Content]  font-bold">បានបញ្ចប់ការដឹកជញ្ជូន</h3>
  </div>

  <div class="w-56 h-40 text-center items-center justify-center mt-5 mb-10">
    <ion-icon class="text-6xl text-white rounded-full bg-blue-500 mb-4" name="person-add-outline"></ion-icon>

    <h2 class="text-3xl text-red-500 font-bold mb-2">1250</h2>
    <h3 class="font-[Content]  font-bold">អតិថិជនពេញចិត្ត</h3>
  </div>

  <div class="w-56 h-40 text-center items-center justify-center  mt-5 mb-10">
    <ion-icon class="text-6xl text-white rounded-full bg-blue-500 mb-4" name="settings-outline"></ion-icon>
    <h2 class="text-3xl text-red-500 font-bold mb-2">30+</h2>
    <h3 class="font-[Content]  font-bold">អ្នកឈ្នះរង្វាន់</h3>
  </div>

  <div class="w-56 h-40 text-center items-center justify-center mt-5 mb-10">
    <ion-icon class="text-6xl text-white rounded-full bg-blue-500 mb-4" name="people-outline"></ion-icon>
    <h2 class="text-3xl text-red-500 font-bold mb-2">155+</h2>
    <h3 class="font-[Content]  font-bold">សមាជិក​ក្រុម</h3>
  </div>
  <div class="flex flex-wrap">
    <h3 class="text-red-500 font-[Content] font-bold m-2">ចូលរួមជាមួយមនុស្សជាង 3000 នាក់ដែលចូលរួមជាមួយវិស័យ</h3>
    <a class="text-blue-500 font-[Content] font-bold m-2 underline;  hover:scale-125 ease-out duration-500"href="#">ចូលរួមឥឡូវ!</a>
  </div>
</div>
<div class=" w-full flex flex-wrap justify-around text-center items-center">
  <div class="w-[500px] text-left mb-5 m-5">
    <h3 class="text-red-500 font-[Content] font-bold mb-5">ហេតុអ្វីជ្រើសរើសយើង?</h3>
    <h2 class="text-2xl font-[Content] font-bold mb-5">យើងបង្កើតឱកាសដើម្បីឈានដល់សក្តានុពល។</h2>
    <li class="list-disc font-[Content] font-bold ">វឌ្ឍនភាពអាជីព</li>
    <li class="list-disc font-[Content] font-bold "> <span class="font-[Roboto] font-bold">Fasttrans </span>ផ្តល់នូវដំណើរអាជីពច្បាស់លាស់ និងតម្លាភាព និងផ្តល់ការគាំទ្រ</li>
    <li class="list-disc font-[Content] font-bold ">ធ្វើការសម្រេចចិត្តអាជីវកម្មរយៈពេលវែង</li>
    <li class="list-disc font-[Content] font-bold ">ផ្តល់សេវាកម្មដែលយើងមានមោទនភាព</li>
    <li class="list-disc font-[Content] font-bold ">ក្លាយជាសមាជិកដែលមានទំនួលខុសត្រូវក្នុងសហគមន៍</li>
    <li class="list-disc font-[Content] font-bold ">តែងតែស្វែងរកការកែលម្អ</li>
  </div>

  <div class="h-auto w-96 bg-black m-5 items-center p-5">
   <h3 class="text-white text-left">ប្រភេទដឹកទំនិញ៖</h3>
   <select  class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg mt-5 mb-5
  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>ជម្រើស</option>
  <option value="CA">ផ្លូវអាកាស</option>
  <option value="FR">ផ្លូវទឹក</option>
  <option value="DE">ផ្លូវគោក</option>
   </select>
   <h3 class="text-white text-left">ផ្ទុក៖</h3>
   <select class="bg-gray-500 border border-gray-300 text-sm text-white rounded-lg mt-5
   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
   dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
   <option selected>ជម្រើស</option>
   <option value="CA">៥០០គីឡូក្រាម</option>
   <option value="FR">៥០០០គីឡូក្រាម</option>
   <option value="DE">១៥០០០គីឡូក្រាម</option>
    </select>
    <h3 class="text-white text-left mt-5">ឈ្មោះរបស់អ្នក៖</h3>
      <input class="w-full outline-none p-2.5 rounded-lg mt-5 text-white bg-gray-500 dark:border-gray-600 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5" type="text" placeholder="ចន​ ដូ">
    <h3 class="text-white text-left">លេខទូរស័ព្ទ</h3>
      <input class="w-full outline-none p-2.5 rounded-lg mt-5 text-white bg-gray-500 dark:border-gray-600 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-10" type="text" placeholder="+៨៥៥ៈ​">
    <a class="p-2 bg-blue-500 text-white  rounded-lg hover:bg-orange-500 duration-500 " href="#">ដាក់សំណើរ</a>
    <p class="text-white mt-10">ដោយចុចលើ​ <span class="text-blue-500"> <a href="#">ប៊ូតុងនេះ</a></span> ខ្ញុំយល់ព្រមនឹងដំណើរការនេះ។</p>
  </div>
</div>
<div class="w-11/12 justify-center">
<div class="flex flex-wrap justify-around text-center">
  <img src="src/testimonial.png" alt="">
  <div class="flex text-left relative top-20">
    <i class="fa fa-quote-left text-4xl text-red-500 m-5"></i>
  <p class="text-left m-5 text-1xl">ការ​ជ្រើសរើស​សម្រាប់​តួនាទី​ដែល​ខ្ញុំ​ត្រូវ​ការ​មិន​មែន​ជា​ការ​ងាយ​ស្រួល​នោះ​ទេ<br>
   ដូច្នេះ Cast UK បាន​ចូល​រួម​ជាមួយ​បេក្ខជន​ដែល​ចង់​បាន​ច្រើន​នាក់​សម្រាប់​តួនាទី​នេះ។
  </p>
  </div>
</div>
</div>
<div class="w-11/12 justify-center items-center text-center mt-32 m-7">
    <h3 class=" text-red-500 mb-5">ព័ត៌មានមួយចំនួនរបស់យើងពីប្លុកចុងក្រោយបំផុត។</h3>
  <h1 class="text-2xl">ទទួលបានព័ត៌មានថ្មីៗ ដំបូន្មាន និងការអនុវត្តល្អបំផុតពីប្លក់។</h1>
 <div class="flex flex-wrap justify-around">
     @foreach ($blogs as $blog)
     <div class="p-4 sm:w-96 lg:w-96  w-[382px] mb-40">
         <div class="h-full border-2 boder-grey-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="relative lg:h-72 md:h-48 w-full object-cover object-center" src="{{ asset('images/'.$blog->image) }}" alt="">
         </div>
         <div class="absolute p-4 shadow-md w-[350px] hover:bg-blue-500 hover:text-white transition duration-300 ease-in">
         <div class="block text-center">
          <div class="flex justify-center hover:text-white mb-3 text-red-500">
            <ion-icon  class="text-red-400 hover:text-red-600  text-2xl"  name="calendar-number-outline"></ion-icon>
           <h2 class=" m-1">{{ $blog->title }}</h2>
          </div>
          <div class="justify-center hover:text-white mb-3">
            <h2 class="m-1">{{ $blog->content }}</h2>
          </div>
          </div>
          <a class="text-white bg-red-500 p-2 text-sm rounded-lg hover:bg-black" href="ocean_freight.html">អានបន្ថែមទៀត</a>
         </div>
     </div>
     @endforeach

</div>
</div>
<div class="w-full flex flex-wrap justify-between items-center mt-32 bg-blue-900 p-5">
  <h2 class="text-white">កំពុងរកមើលសេវាកម្មដឹកជញ្ជូនល្អបំផុត?</h2>
  <a class="text-white bg-red-500 p-3 rounded-lg hover:bg-blue-500" href="contact.html">ទទួលបានសម្រង់</a>
</div>


<!----------------------------Footer------------------------------>
<div class="w-full bg-black p-10 flex flex-wrap justify-between">
  <div class="w-56 block mb-10">
  <h3 class="text-white text-2xl sm:text-2xl mb-5">{{ $company->name }}</h3>
  <p class="text-white mb-5 text-sm">យើងធ្វើការជាមួយចំណង់ចំណូលចិត្តក្នុងការទទួលយកបញ្ហាប្រឈម និងការបង្កើតថ្មីនៅក្នុងវិស័យផ្សាយពាណិជ្ជកម្ម។</p>
  <a class="text-white w-96 bg-red-600 text-sm p-2 rounded-md hover:bg-blue-500" href="about.html">អំពីយើង</a>
</div>
  <div class="w-56 block mb-10">
    <h3 class="text-white text-2xl mb-5">ព្រឹត្តិបត្រ</h3>
    <p class="text-white mb-5 text-sm">ជាវព្រឹត្តិប័ត្រព័ត៌មានរបស់យើង ដើម្បីទទួលបានព័ត៌មានថ្មីៗ និងព័ត៌មានថ្មីៗរបស់យើង។</p>
    <div class="flex justify-end items-center mb-5">
    <input class="bg-transparent border text-white p-2 rounded-md w-72 outline-none text-sm" type="text" placeholder="អាសយដ្ឋានអ៊ីមែលរបស់អ្នក">
    <i class="fa fa-paper-plane text-white absolute bg-blue-500 p-3 hover:bg-white hover:text-black"></i>
  </div>
  <div class="flex justify-between">
    <a href="#"> <ion-icon  class="text-blue-700 hover:text-white hover:scale-125 ease-out duration-500 text-3xl" name="logo-facebook"></ion-icon></a>
    <a href="#"><ion-icon   class="text-blue-400  hover:text-white hover:scale-125 ease-out duration-500 text-3xl" name="logo-twitter"></ion-icon></a>
    <a href="#"> <ion-icon  class="text-blue-500  hover:text-white hover:scale-125 ease-out duration-500 text-3xl" name="logo-behance"></ion-icon></a>
    <a href="#"> <ion-icon  class="text-red-600  hover:text-white hover:scale-125 ease-out duration-500 text-3xl" name="logo-youtube"></ion-icon></a>
  </div>
  </div>
  <div class="w-56 block mb-10">
    <h3 class="text-white text-2xl mb-5">អំពីយើង</h3>
    <div class="flex">
      <i class='fas fa-map-marker-alt text-blue-500 text-2xl'></i>
      <p class="text-white text-sm m-2">អាស័យដ្ឋាន: ផ្លូវ ៥៩៨(ផ្លូវ ​ជា សុផារ៉ា) សង្កាត់​ច្រាំងចំរេះ២ ខណ្ឌ​ឫស្សីកែវ​ រាជធានីភ្នំពេញ ព្រះរាជាណាចក្រកម្ពុជា</p>
    </div>
    <div class="flex">
      <i class='fas fa-phone text-blue-500 text-2xl'></i>
      <p class="text-white text-sm m-2 mb-5"> ទូរសព្ទ : (855) {{ $company->phone_number }}</p>
    </div>
     <h3 class="text-white mb-5">ថ្ងៃ&ម៉ោងធ្វើការ៖</h3>
     <p class="text-white text-sm">ច័ន្ទ - សៅរ៍: ៨ព្រឹក - ៥ល្ងាច, ថ្ងៃអាទិត្យ: សម្រាក</p>
  </div>
  <div class="w-56 block">
    <h3 class="text-white text-2xl mb-5">វិចិត្រសាល</h3>
    <div class="flex flex-wrap justify-between">
        @foreach ($gallerys as $gallery)
      <img class="w-16 mb-5 hover:scale-110 ease-out duration-500 text-3xl" name="logo-twitter" src="{{ asset('images/'.$gallery->image) }}" alt="">
      @endforeach

    </div>
  </div>
  <div class=" border-y-2 border-yellow-50 w-full mb-5"></div>
  <div class="w-full text-center">
    <span class="text-white text-center text-sm">© 2023 - សេវាកម្មដឹកជញ្ជូន។ រក្សា​រ​សិទ្ធ​គ្រប់យ៉ាង។</span>
  </div>
</div>



<script src="{{ ('js/main.js') }}"></script>

<script>

(function() {

function init(item) {
    var items = item.querySelectorAll('li'),
    current = 0,
    autoUpdate = true,
    timeTrans = 4000;

    //create nav
    var nav = document.createElement('nav');
    nav.className = 'nav_arrows';

    //create button prev
    var prevbtn = document.createElement('button');
    prevbtn.className = 'prev';
    prevbtn.setAttribute('aria-label', 'Prev');

    //create button next
    var nextbtn = document.createElement('button');
    nextbtn.className = 'next';
    nextbtn.setAttribute('aria-label', 'Next');

    //create counter
    var counter = document.createElement('div');
    counter.className = 'counter';


    if (items.length > 1) {
        nav.appendChild(prevbtn);
        nav.appendChild(counter);
        nav.appendChild(nextbtn);
        item.appendChild(nav);
    }

    items[current].className = "current";
    if (items.length > 1) items[items.length-1].className = "prev_slide";

    var navigate = function(dir) {
        items[current].className = "";

        if (dir === 'right') {
            current = current < items.length-1 ? current + 1 : 0;
        } else {
            current = current > 0 ? current - 1 : items.length-1;
        }

        var	nextCurrent = current < items.length-1 ? current + 1 : 0,
            prevCurrent = current > 0 ? current - 1 : items.length-1;

        items[current].className = "current";
        items[prevCurrent].className = "prev_slide";
        items[nextCurrent].className = "";

        //update counter
        counter.firstChild.textContent = current + 1;
    }

item.addEventListener('mouseenter', function() {
        autoUpdate = false;
    });

    item.addEventListener('mouseleave', function() {
        autoUpdate = true;
    });

    setInterval(function() {
        if (autoUpdate) navigate('right');
    },timeTrans);

    prevbtn.addEventListener('click', function() {
        navigate('left');
    });

    nextbtn.addEventListener('click', function() {
        navigate('right');
    });

    //keyboard navigation
    document.addEventListener('keydown', function(ev) {
        var keyCode = ev.keyCode || ev.which;
        switch (keyCode) {
            case 37:
                navigate('left');
                break;
            case 39:
                navigate('right');
                break;
        }
    });

    // swipe navigation
    // from http://stackoverflow.com/a/23230280
    item.addEventListener('touchstart', handleTouchStart, false);
    item.addEventListener('touchmove', handleTouchMove, false);
    var xDown = null;
    var yDown = null;
    function handleTouchStart(evt) {
        xDown = evt.touches[0].clientX;
        yDown = evt.touches[0].clientY;
    };
    function handleTouchMove(evt) {
        if ( ! xDown || ! yDown ) {
            return;
        }

        var xUp = evt.touches[0].clientX;
        var yUp = evt.touches[0].clientY;

        var xDiff = xDown - xUp;
        var yDiff = yDown - yUp;

        if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
            if ( xDiff > 0 ) {
                /* left swipe */
                navigate('right');
            } else {
                navigate('left');
            }
        }
        /* reset values */
        xDown = null;
        yDown = null;
    };


}

[].slice.call(document.querySelectorAll('.cd-slider')).forEach( function(item) {
    init(item);
});

})();

</script>
</body>
</html>
