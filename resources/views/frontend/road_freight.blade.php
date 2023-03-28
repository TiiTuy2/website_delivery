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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Content:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="/src/logo.png">
    <link rel="icon" type="image/x-icon" href="/src/logo.png">
    <link rel="icon" type="image/x-icon" href="/src/logo.png">
    <title>ផ្លូវទ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="min-h-screen place-content-center bg-white font-[Content]">

    <!-----------------------------navbar----------------------------->
    <nav class="p-5 bg-purple-600 shadow md:flex md:item-center md:justify-around ">
        <div class="flex justify-between items-center">

            <span class="text-2xl font-bold cursor-pointer">
                @foreach ($companys as $company)
                <img class="h-20 inline w-20" src="{{ asset('images/'.$company->image) }}" alt="">
                @endforeach
            </span>
            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu-outline" onclick="menu(this)"></ion-icon>
            </span>
        </div>
        <ul class="md:flex md:items-center z-[1] md:z-auto md:static absolute bg-purple-600 w-full left-0  md:w-auto
            md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[100px]">
            <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
                <a class="text-md text-white hover:text-red-500  duration-400" href="index.html">ទំព័រដើម</a>
            </li>
            <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
                <a class="text-md text-white hover:text-red-500 duration-500" href="service.html">សេវាកម្ម</a>
            </li>
            <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
                <a class="text-md text-white hover:text-red-500 duration-500" href="about.html">អំពីក្រុមហ៊ុន</a>
            </li>
            <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
                <a class="text-md text-white hover:text-red-500 duration-500" href="project.html">គម្រោង</a>
            </li>
            <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
                <a class="text-md text-white hover:text-red-500 duration-500" href="news.html">ព័ត៌មាន</a>
            </li>
            <li class="mx-4 my-6 md:my-0 scale-100 md:hover:scale-125 ease-in duration-300">
                <a class="text-md text-white hover:text-red-500 duration-500" href="team.html">ក្រុមការងារ</a>
            </li>
        </ul>
    </nav>

    <!-------------container slider start----------->
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


    <div class="flex w-full flex-wrap justify-around mt-10 ">
        <div class="block w-full lg:w-96">
            <div
                class="lg:w-96 md:w-11/12 h-auto sm:w-11/12 w-auto bg-slate-200 mb-10 text-center p-3 m-5 md:m-10 lg:m-0 ">
                <h2 class="text-2xl">សេវាកម្មទាំងអស់។</h2>
                <a href="ocean_freight.html"
                    class="flex justify-between items-center text-lg hover:bg-red-600 hover:text-white rounded-md duration-300 p-3 shadow-inner mt-4">
                    ផ្លូវទឹក
                    <i class='fas fa-chevron-right'></i>
                </a>

                <a href="#"
                    class="flex justify-between items-center text-lg hover:bg-red-600 hover:text-white rounded-md duration-300 p-3 shadow-inner mt-4">
                    ផ្លូវអាកាស
                    <i class='fas fa-chevron-right'></i>
                </a>

                <a href="#"
                    class="flex justify-between items-center text-lg hover:bg-red-600 hover:text-white rounded-md duration-300 p-3 shadow-inner mt-4">
                    ផ្លូវគោក
                    <i class='fas fa-chevron-right'></i>
                </a>

                <a href="#"
                    class="flex justify-between items-center text-lg hover:bg-red-600 hover:text-white rounded-md duration-300 p-3 shadow-inner mt-4">
                    ឃ្លាំងឆ្លាតវៃ
                    <i class='fas fa-chevron-right'></i>
                </a>

                <a href="#"
                    class="flex justify-between items-center text-lg hover:bg-red-600 hover:text-white rounded-md duration-300 p-3 shadow-inner mt-4">
                    ដំណោះស្រាយឧស្សាហកម្ម
                    <i class='fas fa-chevron-right'></i>
                </a>

                <a href="#"
                    class="flex justify-between items-center text-lg hover:bg-red-600 hover:text-white rounded-md duration-300 p-3 shadow-inner mt-4">
                    ដំណោះស្រាយផ្ទាល់ខ្លួន
                    <i class='fas fa-chevron-right'></i>
                </a>
            </div>
            <div
                class="lg:w-96 w-auto md:w-11/12 h-auto mt-10  sm:w-11/12 bg-red-600 mb-10 text-center p-5 m-5 md:m-10 lg:m-0 lg:mt-10 md:mt-10">
                <h2 class="text-2xl text-white my-3">ការគាំទ្រតាមអ៊ីនធឺណិត 24/7</h2>
                <p class="text-sm text-white mt-3">ទទួលបានសម្រង់ភ្លាមៗ & ការដឹកជញ្ជូនសៀវភៅ។</p>
                <div class="block">
                    <input class="w-full h-14 md:w-11/12 sm:w-11/12 lg:w-11/12 text-white placeholder:text-white bg-transparent my-5 border-2 border-white
                p-2 outline-none text-sm" type="text" placeholder="ឈ្មោះរបស់អ្នក">
                    <input class="w-full h-14 md:w-11/12 sm:w-11/12 lg:w-11/12 text-white placeholder:text-white bg-transparent my-1 border-2 border-white
                p-2 outline-none text-sm" type="text" placeholder="អុីម៉ែលរបស់អ្នក">
                    <textarea class="w-full h-56 md:w-11/12 sm:w-11/12 lg:w-11/12 text-white placeholder:text-white bg-transparent my-5 border-2 border-white
                p-2 outline-none text-sm mb-5"></textarea>
                </div>
                <a class="bg-white mb-5 h-10 p-2 rounded-md hover:text-white hover:bg-blue-600 duration-300"
                    href="#">ទំនាក់ទំនងឥឡូវ</a>
            </div>
            <div
                class="lg:w-96 md:w-11/12 h-auto sm:w-11/12 w-11/12 bg-slate-200 mb-10 text-center p-3 m-5 md:m-10 lg:m-0 lg:mt-10 md:mt-10 lg:mb-10">
                <h2 class="text-2xl text-black my-3">ទាញយកឥឡូវ</h2>
                <a href="#"
                    class="flex justify-between text-lg shadow-lg hover:text-white items-center hover:bg-red-600 m-4 p-5 w-auto h-14 md:w-11/12 sm:w-11/12 lg:w-11/12">
                    របាយការណ៍ក្រុមហ៊ុន 2023
                    <i class="fa fa-file-pdf-o"></i>
                </a>
                <a href="#"
                    class="flex justify-between text-lg shadow-lg hover:text-white items-center hover:bg-red-600 m-4 p-5 w-auto h-14 md:w-11/12 sm:w-11/12 lg:w-11/12">
                    របាយការណ៍ក្រុមហ៊ុន 2023
                    <i class="fa fa-file-pdf-o"></i>
                </a>
            </div>
        </div>
        <div class="block">
            <img class="md:w-11/12 lg:w-auto h-96 md:m-9 m-5 w-full lg:m-0" src="src/road_img.png" alt="">
            <div class=" lg:w-[700px] w-full mb-10 text-center md:m-10 lg:m-0">
                <h2 class="text-black text-2xl my-5">ទិដ្ឋភាពទូទៅ</h2>
                <p class="text-left text-black  p-5">បុគ្គល និងអាជីវកម្មទូទាំងពិភពលោកប្រើប្រាស់សេវាកម្មដឹកជញ្ជូនកង់
                    ដើម្បីធានាថាកញ្ចប់របស់ពួកគេមកដល់ដោយសុវត្ថិភាព។
                    ត្រូវបានគេស្គាល់ផងដែរថាជាអ្នកនាំសំបុត្រកង់
                    ក្រុមហ៊ុនទាំងនេះផ្តល់អ្វីទាំងអស់ពីការឆ្លើយឆ្លងផ្លូវច្បាប់ទៅជាអាហារ។
                    ការចាប់ផ្តើមអាជីវកម្មមានច្រើនជាងការចុះឈ្មោះជាមួយរដ្ឋ។
                    យើងបានដាក់បញ្ចូលគ្នានូវការណែនាំដ៏សាមញ្ញនេះ ដើម្បីចាប់ផ្តើមអាជីវកម្មដឹកជញ្ជូនកង់របស់អ្នក។
                    ជំហានទាំងនេះនឹងធានាថាអាជីវកម្មថ្មីរបស់អ្នកត្រូវបានគ្រោងទុកយ៉ាងល្អ ចុះបញ្ជីត្រឹមត្រូវ
                    និងស្របតាមច្បាប់។
                    ដើម្បីចាប់ផ្តើម អ្នកនឹងត្រូវការយ៉ាងហោចណាស់កង់មួយ និងយានជំនិះដែលអាចទុកចិត្តបាន។
                    នៅពេលអ្នកចាប់ផ្តើមបង្កើតក្រុមរបស់អ្នក
                    អ្នកនឹងត្រូវសម្រេចចិត្តថាតើអ្នកចង់ផ្តល់កង់ដល់បុគ្គលិកម្នាក់ៗ
                    ឬថាតើពួកគេនឹងប្រើប្រាស់របស់ពួកគេដែរឬទេ។ នៅពេលអ្នកចាប់ផ្តើមបង្កើតក្រុម
                    អ្នកនឹងត្រូវវិនិយោគលើប្រព័ន្ធបញ្ជូន។
                    វានឹងធ្វើឱ្យបណ្តាញទំនាក់ទំនងបើកចំហ
                    និងធានាថាពេលវេលារបស់អ្នកគ្រប់គ្នាត្រូវបានប្រើប្រាស់យ៉ាងសមរម្យ។
                </p>
                <div class="flex flex-wrap justify-between my-5 p-8">
                    <div class="lg:w-64 w-full flex justify-around h-56 shadow-lg items-center p-4">
                        <i class="fa fa-globe text-red-600 text-5xl" aria-hidden="true"></i>
                        <div class="block h-32">
                            <h4 class="text-lg text-black mb-5">យើងបានគ្របដណ្តប់</h4>
                            <span class="text-red-600 text-4xl font-[Roboto] font-bold mb-5">158+</span>
                            <p class="mt-5 text-slate-600">ច្រកទ្វារអន្តរជាតិ</p>
                        </div>
                    </div>
                    <div class="lg:w-64 w-full flex justify-around h-56 shadow-lg items-center p-4">
                        <i class="fas fa-plane text-red-600 text-5xl" aria-hidden="true"></i>
                        <div class="block h-32">
                            <h4 class="text-lg text-black mb-5">យើងបានដោះស្រាយ</h4>
                            <span class="text-red-600 text-4xl font-[Roboto] font-bold mb-5">2000+</span>
                            <p class="mt-5 text-slate-600">តោននៃការដឹកជញ្ជូនតាមផ្លូវអាកាសជារៀងរាល់ឆ្នាំ</p>
                        </div>
                    </div>
                </div>
                <div class="w-full items-center justify-center text-center flex">
                    <div class="mb-20 w-11/12 h-96 flex items-center justify-center"
                        style="background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url(src/road_video_bg.png); background-size: cover;">
                        <a href="#"
                            class=" relative flex items-center justify-center bg-red-500 text-white text-3xl p-3 rounded-full z-[2]">
                            <ion-icon name="play-outline"></ion-icon>
                            <div
                                class="before:content-none rounded-full animate-ping absolute border-8 border-red-500 -400 top-[-20px] left-[-20px] right-[-20px] bottom-[-20px]">
                            </div>
                            <div
                                class="before:content-none rounded-full animate-ping absolute border-8 border-red-500 -400 top-[-10px] left-[-10px] right-[-10px] bottom-[-10px]">
                            </div>
                            <div
                                class="before:content-none rounded-full animate-ping absolute border-8 border-red-500 top-[-5px] left-[-5px] right-[-5px] bottom-[-5px]">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-black p-10 flex flex-wrap justify-between">
        <div class="w-56 block mb-10">
            <h3 class="text-white text-2xl sm:text-2xl mb-5">{{ $company->name }}</h3>
            <p class="text-white mb-5 text-sm">យើងធ្វើការជាមួយចំណង់ចំណូលចិត្តក្នុងការទទួលយកបញ្ហាប្រឈម
                និងការបង្កើតថ្មីនៅក្នុងវិស័យផ្សាយពាណិជ្ជកម្ម។</p>
                <a class="text-white w-96 bg-red-600 text-sm p-2 rounded-md hover:bg-blue-500" href="about.html">អំពីយើង</a>
        </div>
        <div class="w-56 block mb-10">
            <h3 class="text-white text-2xl mb-5">ព្រឹត្តិបត្រ</h3>
            <p class="text-white mb-5 text-sm">ជាវព្រឹត្តិប័ត្រព័ត៌មានរបស់យើង ដើម្បីទទួលបានព័ត៌មានថ្មីៗ
                និងព័ត៌មានថ្មីៗរបស់យើង។</p>
            <div class="flex justify-end items-center mb-5">
                <input class="bg-transparent border text-white p-2 rounded-md w-72 outline-none text-sm" type="text"
                    placeholder="អាសយដ្ឋានអ៊ីមែលរបស់អ្នក">
                <i class="fa fa-paper-plane text-white absolute bg-blue-500 p-3 hover:bg-white hover:text-black"></i>
            </div>
            <div class="flex justify-between">
                <a href="#"> <ion-icon
                        class="text-blue-700 hover:text-white hover:scale-125 ease-out duration-500 text-3xl"
                        name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon
                        class="text-blue-400  hover:text-white hover:scale-125 ease-out duration-500 text-3xl"
                        name="logo-twitter"></ion-icon></a>
                <a href="#"> <ion-icon
                        class="text-blue-500  hover:text-white hover:scale-125 ease-out duration-500 text-3xl"
                        name="logo-behance"></ion-icon></a>
                <a href="#"> <ion-icon
                        class="text-red-600  hover:text-white hover:scale-125 ease-out duration-500 text-3xl"
                        name="logo-youtube"></ion-icon></a>
            </div>
        </div>
        <div class="w-56 block mb-10">
            <h3 class="text-white text-2xl mb-5">អំពីយើង</h3>
            <div class="flex">
                <i class='fas fa-map-marker-alt text-blue-500 text-2xl'></i>
                <p class="text-white text-sm m-2">អាស័យដ្ឋាន: ផ្លូវ ៥៩៨(ផ្លូវ ​ជា សុផារ៉ា) សង្កាត់​ច្រាំងចំរេះ២
                    ខណ្ឌ​ឫស្សីកែវ​ រាជធានីភ្នំពេញ ព្រះរាជាណាចក្រកម្ពុជា</p>
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
                <img class="w-16 mb-5 hover:scale-110 ease-out duration-500 text-3xl"
                src="{{ asset('images/'.$gallery->image) }}" alt="">
                @endforeach

            </div>
        </div>
        <div class=" border-y-2 border-yellow-50 w-full mb-5"></div>
        <div class="w-full text-center">
            <span class="text-white text-center text-sm">© 2023 - សេវាកម្មដឹកជញ្ជូន។ រក្សា​រ​សិទ្ធ​គ្រប់យ៉ាង។</span>
        </div>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>

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
