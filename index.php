<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'ecommerce');
$sql="SELECT * FROM products";
$featured=$con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullstack Test</title>
    <!-- my css file -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- cdn link for tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    
</head>
<body>
    <header>
        <!-- start to create sub_header  -->
        <div class="sub_header">
            <div class="container mx-auto px-16">
                <ul class="items flex py-2.5 justify-end">
                    <li class="item pr-3 text-white text-xs font-normal ">
                        Get in Touch
                    </li>
                    <li class="item pl-px">
                        <svg xmlns="http://www.w3.org/2000/svg" height="14" viewBox="0 0 97 14" fill="none">
                        <path d="M5.7334 2.32402H7V0.0980208C6.38674 0.0317638 5.77056 -0.000947996 5.15399 2.09048e-05C3.32146 2.09048e-05 2.06834 1.16202 2.06834 3.29002V5.12401H0V7.61601H2.06834V14H4.54764V7.61601H6.60924L6.91915 5.12401H4.54764V3.53502C4.54764 2.80002 4.73629 2.32402 5.7334 2.32402Z" fill="white"/>
                        <path d="M28 5.264C27.6567 5.264 27.321 5.36581 27.0355 5.55657C26.75 5.74732 26.5275 6.01845 26.3961 6.33566C26.2648 6.65287 26.2304 7.00193 26.2974 7.33868C26.3643 7.67543 26.5297 7.98475 26.7725 8.22754C27.0152 8.47032 27.3246 8.63566 27.6613 8.70264C27.9981 8.76963 28.3471 8.73525 28.6643 8.60386C28.9816 8.47246 29.2527 8.24995 29.4434 7.96447C29.6342 7.67899 29.736 7.34335 29.736 7C29.736 6.77203 29.6911 6.54628 29.6039 6.33566C29.5166 6.12504 29.3887 5.93366 29.2275 5.77246C29.0663 5.61126 28.875 5.48339 28.6643 5.39614C28.4537 5.3089 28.228 5.264 28 5.264ZM34.951 3.549C34.9473 3.00843 34.8478 2.4728 34.657 1.967C34.5165 1.59688 34.2991 1.26077 34.0192 0.98083C33.7392 0.700894 33.4031 0.483502 33.033 0.343C32.5272 0.152225 31.9916 0.0526826 31.451 0.049C30.548 -4.69387e-08 30.282 0 28 0C25.718 0 25.452 -4.69387e-08 24.549 0.049C24.0084 0.0526826 23.4728 0.152225 22.967 0.343C22.5969 0.483502 22.2608 0.700894 21.9808 0.98083C21.7009 1.26077 21.4835 1.59688 21.343 1.967C21.1522 2.4728 21.0527 3.00843 21.049 3.549C21 4.452 21 4.718 21 7C21 9.282 21 9.548 21.049 10.451C21.0565 10.9935 21.1559 11.5307 21.343 12.04C21.4829 12.4084 21.7001 12.7426 21.98 13.02C22.2587 13.3016 22.5956 13.519 22.967 13.657C23.4728 13.8478 24.0084 13.9473 24.549 13.951C25.452 14 25.718 14 28 14C30.282 14 30.548 14 31.451 13.951C31.9916 13.9473 32.5272 13.8478 33.033 13.657C33.4044 13.519 33.7413 13.3016 34.02 13.02C34.2999 12.7426 34.5171 12.4084 34.657 12.04C34.8476 11.5317 34.9471 10.9938 34.951 10.451C35 9.548 35 9.282 35 7C35 4.718 35 4.452 34.951 3.549ZM33.173 9.149C33.1505 9.58097 33.0583 10.0065 32.9 10.409C32.7641 10.7448 32.5621 11.0498 32.3059 11.3059C32.0498 11.5621 31.7448 11.7641 31.409 11.9C31.0027 12.0495 30.5748 12.1323 30.142 12.145C29.589 12.145 29.442 12.145 28 12.145C26.558 12.145 26.411 12.145 25.858 12.145C25.4252 12.1323 24.9973 12.0495 24.591 11.9C24.2439 11.771 23.9304 11.5652 23.674 11.298C23.4204 11.0469 23.2245 10.7435 23.1 10.409C22.9499 10.0031 22.8694 9.57472 22.862 9.142C22.862 8.589 22.862 8.442 22.862 7C22.862 5.558 22.862 5.411 22.862 4.858C22.8694 4.42528 22.9499 3.99692 23.1 3.591C23.229 3.24387 23.4348 2.93039 23.702 2.674C23.9542 2.42174 24.2573 2.22607 24.591 2.1C24.9973 1.95048 25.4252 1.86775 25.858 1.855C26.411 1.855 26.558 1.855 28 1.855C29.442 1.855 29.589 1.855 30.142 1.855C30.5748 1.86775 31.0027 1.95048 31.409 2.1C31.7561 2.229 32.0696 2.43479 32.326 2.702C32.5796 2.95312 32.7755 3.25649 32.9 3.591C33.0495 3.99734 33.1323 4.42521 33.145 4.858C33.145 5.411 33.145 5.558 33.145 7C33.145 8.442 33.194 8.589 33.173 9.142V9.149ZM32.053 3.941C31.9697 3.71489 31.8383 3.50955 31.6679 3.33915C31.4974 3.16875 31.2921 3.03734 31.066 2.954C30.7555 2.84638 30.4285 2.79425 30.1 2.8C29.554 2.8 29.4 2.8 28 2.8C26.6 2.8 26.446 2.8 25.9 2.8C25.5698 2.80323 25.2427 2.86484 24.934 2.982C24.7114 3.06156 24.5082 3.1876 24.338 3.35174C24.1678 3.51588 24.0345 3.71437 23.947 3.934C23.8453 4.24576 23.7957 4.57212 23.8 4.9C23.8 5.446 23.8 5.6 23.8 7C23.8 8.4 23.8 8.554 23.8 9.1C23.8069 9.42984 23.8684 9.75625 23.982 10.066C24.0653 10.2921 24.1967 10.4974 24.3671 10.6679C24.5375 10.8383 24.7429 10.9697 24.969 11.053C25.2677 11.1628 25.582 11.2243 25.9 11.235C26.446 11.235 26.6 11.235 28 11.235C29.4 11.235 29.554 11.235 30.1 11.235C30.4302 11.2318 30.7573 11.1702 31.066 11.053C31.2921 10.9697 31.4974 10.8383 31.6679 10.6679C31.8383 10.4974 31.9697 10.2921 32.053 10.066C32.1702 9.75725 32.2318 9.43021 32.235 9.1C32.235 8.554 32.235 8.4 32.235 7C32.235 5.6 32.235 5.446 32.235 4.9C32.2352 4.56946 32.1735 4.24181 32.053 3.934V3.941ZM28 9.674C27.6492 9.674 27.3018 9.60479 26.9778 9.47032C26.6537 9.33585 26.3594 9.13878 26.1117 8.89038C25.8639 8.64198 25.6676 8.34715 25.534 8.02277C25.4004 7.69838 25.3321 7.35082 25.333 7C25.333 6.47083 25.49 5.95357 25.7841 5.51368C26.0783 5.07379 26.4963 4.73106 26.9853 4.52888C27.4743 4.3267 28.0124 4.27416 28.5313 4.3779C29.0501 4.48165 29.5266 4.73702 29.9003 5.11168C30.274 5.48635 30.5281 5.96347 30.6305 6.48263C30.7329 7.0018 30.6789 7.53967 30.4754 8.02816C30.272 8.51664 29.9282 8.93378 29.4875 9.22676C29.0468 9.51974 28.5292 9.67538 28 9.674ZM30.8 4.851C30.6453 4.83462 30.5021 4.76155 30.398 4.64588C30.2939 4.5302 30.2363 4.3801 30.2363 4.2245C30.2363 4.0689 30.2939 3.9188 30.398 3.80312C30.5021 3.68745 30.6453 3.61438 30.8 3.598C30.9547 3.61438 31.0979 3.68745 31.202 3.80312C31.3061 3.9188 31.3637 4.0689 31.3637 4.2245C31.3637 4.3801 31.3061 4.5302 31.202 4.64588C31.0979 4.76155 30.9547 4.83462 30.8 4.851Z" fill="white"/>
                        <path d="M68.9954 4.58161C69.0403 3.3787 68.7559 2.18479 68.1686 1.11075C67.7702 0.670038 67.2172 0.372629 66.606 0.270343C64.0781 0.058163 61.5397 -0.0288028 59.0017 0.00981866C56.473 -0.0305557 53.9437 0.0536038 51.4247 0.26194C50.9266 0.345742 50.4657 0.56183 50.0982 0.883837C49.2806 1.58137 49.1897 2.77474 49.0989 3.78323C48.967 5.59645 48.967 7.41581 49.0989 9.22903C49.1251 9.79665 49.2165 10.3601 49.3714 10.9098C49.481 11.3343 49.7026 11.727 50.0165 12.0528C50.3865 12.3919 50.8581 12.6202 51.3702 12.7083C53.3288 12.9319 55.3024 13.0246 57.2755 12.9856C60.4553 13.0277 63.2445 12.9856 66.5424 12.7503C67.067 12.6677 67.5519 12.439 67.9324 12.0948C68.1868 11.8594 68.3768 11.5713 68.4866 11.2544C68.8115 10.3322 68.9711 9.36695 68.9591 8.39704C68.9954 7.92641 68.9954 5.08585 68.9954 4.58161ZM56.9485 8.90128V3.69919L62.3269 6.31284C60.8187 7.08601 58.8291 7.96003 56.9485 8.90128Z" fill="white"/>
                        <path d="M86.1781 14V4.55422H83.1771V14H86.1781ZM84.678 3.26379C85.7245 3.26379 86.3759 2.53846 86.3759 1.63205C86.3564 0.705193 85.7245 0 84.6978 0C83.6713 0 83 0.705207 83 1.63205C83 2.53851 83.6512 3.26379 84.6584 3.26379H84.6779H84.678ZM87.8392 14H90.8402V8.72502C90.8402 8.44271 90.8597 8.16069 90.939 7.95888C91.1559 7.39483 91.6497 6.81064 92.4787 6.81064C93.5647 6.81064 93.9991 7.67685 93.9991 8.94665V13.9999H97V8.58381C97 5.68244 95.5194 4.33246 93.5449 4.33246C91.926 4.33246 91.2152 5.27917 90.8203 5.92397H90.8403V4.55403H87.8392C87.8786 5.44037 87.8392 13.9998 87.8392 13.9998L87.8392 14Z" fill="white"/>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end to create sub_header  -->
        
        <!-- start to create navbar  -->
        <nav class="navbar py-8">
            <div class="container mx-auto px-16 flex justify-between items-center>
                    <a href="">
                        <img src="./assets/img/image1.png" alt="">
                    </a>
                    <div>
                        <ul class="flex items-center">
                            <li class="px-2.5"><a href="">About Architecture Design</a></li>
                            <li class="px-2.5"><a href="">Factors</a></li>
                            <li class="px-2.5"><a href="">Different Types</a></li>
                            <li class="px-2.5"><a href="">Other Features</a></li>
                            <li class="px-2.5"><a href="">Our Products</a></li>
                            <li class="px-2.5"><a href="">Architecture design</a></li>
                            <li class="px-2.5"><a href="">Documents</a></li>
                            <li class="pl-1.5"><button class="navbar_btn p-4 rounded-sm text-white">Get in Touch</button></li>
                        </ul>
                    </div>
                
            </div>
        </nav>
        <!-- end to create navbar  -->

        <!-- start to create a slider section  -->
        <section class="slider">
            <div class="relative">
                <div >
                   <ul id="slider">
                        <li class="sliderOne">
                            <div class="absolute slider_content pl-[202px] top-1/2 transform -translate-y-1/2">
                                <h1 class="sliderOne_header text-6xl font-medium text-white pb-6">Architecture Design</h1>
                                <p class="sliderOne_content font-medium text-white text-2xl w-1/2 pb-10">We design beautiful buildings that integrate and compliment their surroundings</p>
                                <button class="sliderOne_btn p-4 rounded-sm text-white">Get in Touch</button>
                            </div>
                        </li>
                        <li class="sliderOne hidden">
                            <div class="absolute slider_content  top-1/2 transform -translate-y-1/2">
                                <h1 class="sliderOne_header text-6xl font-medium text-white pb-6">Architecture Design 2</h1>
                                <p class="sliderOne_content font-medium text-white text-2xl w-1/2 pb-10">We design beautiful buildings that integrate and compliment their surroundings</p>
                                <button class="sliderOne_btn p-4 rounded-sm text-white">Get in Touch</button>
                            </div>
                        </li>
                        <li class="sliderOne hidden">
                            <div class="absolute slider_content  top-1/2 transform -translate-y-1/2">
                                <h1 class="sliderOne_header text-6xl font-medium text-white pb-6">Architecture Design 3</h1>
                                <p class="sliderOne_content font-medium text-white text-2xl w-1/2 pb-10">We design beautiful buildings that integrate and compliment their surroundings</p>
                                <button class="sliderOne_btn p-4 rounded-sm text-white">Get in Touch</button>
                            </div>
                        </li>
                    </ul>
                    <svg class="absolute bottom-[42px] left-[202px]" id="mySvg" xmlns="http://www.w3.org/2000/svg" width="124" height="19" viewBox="0 0 124 19" fill="none">
                            <circle cx="9.5" cy="9.5" r="9" stroke="#A5A6F6"/>
                            <circle cx="9.5" cy="9.5" r="5" fill="#A5A6F6" stroke="#A5A6F6"/>
                            <circle cx="44.5" cy="9.5" r="9.5" fill="white"/>
                            <circle cx="79.5" cy="9.5" r="9.5" fill="white"/>
                            <circle cx="114.5" cy="9.5" r="9.5" fill="white"/>
                            </svg>
                </div>
                <div class="absolute container mx-auto px-24 flex w-full h-full top-0 left-0">
                    <div class="my-auto flex w-full h-full justify-between">
                        <button onclick="prevSlide()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="46" viewBox="0 0 24 46" fill="none">
                            <path d="M23 45L0.999999 23L23 1" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button onclick="nextSlide()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="46" viewBox="0 0 24 46" fill="none">
                            <path d="M0.999998 0.999999L23 23L1 45" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section  -->
    </header>
    <!-- finish the section of header  -->

    <!-- start main -->
    <main>

        <!-- start the section of about -->
        <section id="about_Arch">
            <div class="container mx-auto py-28 px-16">
                <small class="text-lg font-medium pb-8 text-[var(--iris-100)]">
                  KNOW MORE
                </small>
                <h3 class="w-[387px] pb-7 text-[40px] font-medium text-[var(--Heading-color)]">About Architecture Design?</h3>
                <p class="w-[581px] text-[var(--Body-text)]">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                    <br>
                    <br>
                     Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.Aenean massa. 
                </p>

            </div>
        </section>
        <!-- end of section about -->

        <!-- start section Factors -->
        <section id="factor">
            <div class="container mx-auto py-28 px-16">
                <h3 class="text-[40px] text-center font-medium pb-3 text-[var(--main-blue)]">
                    Factors
                </h3>
                <p class="text-[#8E8E8E] text-center">
                Important factors in construction
                </p>

                <div class="flex justify-between pt-24 relative">
                    <div>
                        <div class="relative pb-6">
                            <img  src="./assets/img/Ellipse1.png" alt="">
                            <img class="absolute top-5 left-5" src="./assets/img/home-repair1.png" alt="">
                        </div>
                        <h4 class="text-[var(--iris-100)] pb-4 text-xl">
                               Low Maintanance
                        </h4>
                        <p class="text-[var(--Body-text)] w-[324px]">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                    </div>
                    
                    <div class="factor-item">
                        <div class="relative pb-6">
                            <img  src="./assets/img/Ellipse1.png" alt="">
                            <img class="absolute top-5 left-5" src="./assets/img/home-repair1.png" alt="">
                        </div>
                        <h4 class="text-[var(--iris-100)] pb-4 text-xl">
                               Low Maintanance
                        </h4>
                        <p class="text-[var(--Body-text)] w-[324px]">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                    </div>
                    <div class="factor-item2">
                        <div class="relative pb-6">
                            <img  src="./assets/img/Ellipse1.png" alt="">
                            <img class="absolute top-5 left-5" src="./assets/img/home-repair1.png" alt="">
                        </div>
                        <h4 class="text-[var(--iris-100)] pb-4 text-xl">
                               Low Maintanance
                        </h4>
                        <p class="text-[var(--Body-text)] w-[324px]">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                        </p>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End section Factors -->

        <!-- start section different type -->
        <section id="diff_types" class="bg-[#F8F8F8]">
            <div class="container mx-auto py-28 px-16">
                <div class="pb-[71px]">
                    
                    <h3 class="text-[40px] text-center font-medium pb-3 text-[#5A5A5A] pb-[54px]">
                        Different Types
                    </h3>
                    <ul class="flex justify-between px-[65px]">
                        <li class="font-bold text-lg text-[var(--iris-100)]"><a href="">Architecture type 1</a></li>
                        <li class="font-bold text-lg text-[var(--iris-100)]"><a href="">Architecture type 2</a></li>
                        <li class="font-bold text-lg text-[var(--iris-100)]"><a href="">Architecture type 3</a></li>
                        <li class="font-bold text-lg text-[var(--iris-100)]"><a href="">Architecture type 4</a></li>
                        <li class="font-bold text-lg text-[var(--iris-100)]"><a href="">Architecture type 5</a></li>
                    </ul>
                </div>
                

                <!-- Architecture type 1 -->
                <div class="px-[70px] bg-white" id="Architecture type 1">
                    <div class="flex gap-[51px] py-[82px]">
                        
                        <img  src="./assets/img/arc1.png" alt="">
                       <div>
                            <div>
                                <h4 class="text-3xl font-medium text-[#5D5FEF] pb-4">Architecture type 1</h4>
                                <p class="text-[var(--Body-text)]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,</p>
                            </div>
                            <div class="pt-9">
                                <h4 class="text-[#727272] text-xl pb-5">Advantages :</h4>
                                <ul class="pb-8">
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                </ul>
                                <button class="bg-[var(--iris-100)] p-4 rounded-sm text-white">Get in Touch</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Architecture type 2 -->
                <div class="px-[70px] mt-[10px] bg-white" id="Architecture type 2">
                    <div class="flex gap-[51px] pt-[70px] pb-[94px] ">
                       <div>
                            <div>
                                <h4 class="text-3xl font-medium text-[#5D5FEF] pb-4">Architecture type 1</h4>
                                <p class="text-[var(--Body-text)]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,</p>
                            </div>
                            <div class="pt-9">
                                <h4 class="text-[#727272] text-xl pb-5">Advantages :</h4>
                                <ul class="pb-8">
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                </ul>
                                <button class="bg-[var(--iris-100)] p-4 rounded-sm text-white">Get in Touch</button>
                            </div>
                        </div>
                        <img  src="./assets/img/arc1.png" alt="">
                    </div>
                </div>
                <!-- Architecture type 3 -->
                <div class="px-[70px] bg-white mt-[10px]" id="Architecture type 3">
                    <div class="flex gap-[51px] py-[82px] ">
                        
                        <img  src="./assets/img/arc1.png" alt="">
                       <div>
                            <div>
                                <h4 class="text-3xl font-medium text-[#5D5FEF] pb-4">Architecture type 1</h4>
                                <p class="text-[var(--Body-text)]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,</p>
                            </div>
                            <div class="pt-9">
                                <h4 class="text-[#727272] text-xl pb-5">Advantages :</h4>
                                <ul class="pb-8">
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                </ul>
                                <button class="bg-[var(--iris-100)] p-4 rounded-sm text-white">Get in Touch</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Architecture type 4 -->
                <div class="px-[70px] mt-[10px] bg-white" id="Architecture type 4">
                    <div class="flex gap-[51px] pt-[70px] pb-[94px]">
                       <div>
                            <div>
                                <h4 class="text-3xl font-medium text-[#5D5FEF] pb-4">Architecture type 1</h4>
                                <p class="text-[var(--Body-text)]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,</p>
                            </div>
                            <div class="pt-9">
                                <h4 class="text-[#727272] text-xl pb-5">Advantages :</h4>
                                <ul class="pb-8">
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                    <li class="flex"><img src="./assets/img/Vector.svg" alt=""><p class="pl-1 text-[#A0A0A0]">Saves energy</p></li>
                                </ul>
                                <button class="bg-[var(--iris-100)] p-4 rounded-sm text-white">Get in Touch</button>
                            </div>
                        </div>
                        <img  src="./assets/img/arc1.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- end section different type -->

        <!-- Start section Features -->
        <section id="feature">
            <div class="container mx-auto py-28 px-16">
                <h3 class="text-[40px] text-center font-medium pb-[74px] text-[var(--Heading_color)]">
                   Other Features
                </h3>
                <!-- <div> -->
                    <div class="flex gap-7">
                        <div>
                            <img  src="./assets/img/feature2.png" alt="">
                            <div class="bg-[#F9F9F9] pl-[50px] pr-[33px] pt-[43px] pb-[109px]">
                                <h4 class="text-4xl font-medium pb-7">
                                Optimised Installation
                                </h4>
                                <p class="pr-[63px] text-[var(--Body-text)] pb-7">We use optimised installation lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                <div>
                                    <p class="feature_circle relative">Lay the elements from left to right and from top to bottom with the arrow pointing upwards</p>
                                    <p class="feature_circle relative"> Fill the feet with expanded clay or other mineral substrate</p>
                                    <p class="feature_circle relative">Lay some non-woven fabric over the entire surface</p>
                                    <p class="feature_circle relative"> It is advisable to lay a layer of topsoil of at least 20 cm </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="./assets/img/feature1.png" alt="">
                            <div class="bg-[#F9F9F9] pl-[50px] pr-[33px] pt-[43px] pb-[109px]">
                                <h4 class="text-4xl font-medium pb-7">
                                Optimised Installation
                                </h4>
                                <p class="pr-[63px] text-[var(--Body-text)] pb-7">We use optimised installation lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                <div>
                                    <p class="feature_circle relative">Lay the elements from left to right and from top to bottom with the arrow pointing upwards</p>
                                    <p class="feature_circle relative"> Fill the feet with expanded clay or other mineral substrate</p>
                                    <p class="feature_circle relative">Lay some non-woven fabric over the entire surface</p>
                                    <p class="feature_circle relative"> It is advisable to lay a layer of topsoil of at least 20 cm </p>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                <!-- </div> -->

            </div>
        </section>
        <!-- end section Features -->

        <!-- start product section  -->
            <section id="products">
            <div class="container mx-auto py-28 px-16">
                <ul class="flex items-center justify-between">
                    <li><button >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="46" viewBox="0 0 24 46" fill="none">
                            <path d="M23 45L0.999999 23L23 1" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </li>
                    <li><h3 class="text-[40px] text-center font-medium pb-[74px] text-[var(--Heading_color)]">
                              Other Features
                        </h3>
                    </li>
                    <li>
                    <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="46" viewBox="0 0 24 46" fill="none">
                            <path d="M0.999998 0.999999L23 23L1 45" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </li>
                </ul>

                <div class="flex gap-[19px]">
                    <?php
                       while($product = mysqli_fetch_assoc($featured)):
                        ?>
                        <div>
                        <img src="<?= $product['image'];?>" alt="">
                        <div class="pt-6 bg-[#F9F9F9] pl-7 pb-8">
                            <h4 class="pb-5 text-xl text-[var(--Heading-color)]"><?= $product['title'];?></h4>
                            <p class="pb-5 text-[var(--Body-text)]"><?= $product['description'];?></p>
                            <div class="flex items-center pb-10">
                                <span class="mr-2 text-lg font-semibold text-[var(--Heading-color)]">$<?= $product['price'];?></span>
                                <span class="text-sm font-semibold text-[var(--Body-text)] line-through">$49.99</span>
                            </div>
                            <button class="p-4 rounded-sm text-white bg-[var(--iris-100)]"> <a href="productDetails.php">learn more </a></button>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
            </section>
        <!-- end product section  -->

        <!-- start section booking -->
        <section id="book" class="bg-[#F4F4F4]">
        <div class="container mx-auto py-28 px-16">
            <div class="flex">
                <div>
                    <h2 class="text-[40px] font-medium pb-8">
                        Interested in Architecture Design?
                    </h2>
                    <p class="text-[var(--Body-text)] pb-12 pr-[148px]">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                    <img src="./assets/img/bookimg.png" alt="">
                </div>

                <div class="bg-[var(--iris-100)] w-full">
                    <div class="pt-9 pl-11 pr-[26px]">
                        <h3 class="text-white text-3xl font-medium mb-5">Book a Free Appointment</h3>
                        <p class="text-white pb-4">Interested in this service? Book a free appointment by filling the fields below. Our staff will get back to yu  shortly!</p>
                        <form action="">
                            <div class="mb-5">
                                <label class="block text-white text-sm font-bold mb-2" for="name">
                                    Name*
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-5 px-5 text-[#BEBEBE] leading-tight focus:outline-none focus:shadow-outline"
                                    id="name"
                                    type="text"
                                    placeholder="Insert name..."
                                />
                            </div>
                            <div class="mb-5">
                                <label class="block text-white text-sm font-bold mb-2" for="surname">
                                   Surname*
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-5 px-5 text-[#BEBEBE] leading-tight focus:outline-none focus:shadow-outline"
                                    id="name"
                                    type="text"
                                    placeholder="Insert surname..."
                                />
                            </div>
                            <div class="mb-5">
                                <label class="block text-white text-sm font-bold mb-2" for="name">
                                Phone Number*
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-5 px-5 text-[#BEBEBE] leading-tight focus:outline-none focus:shadow-outline"
                                    id="name"
                                    type="text"
                                    placeholder="Insert phone number..."
                                />
                            </div>
                            <div class="mb-5">
                                <label class="block text-white text-sm font-bold mb-2" for="name">
                                Email Address*
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-5 px-5 text-[#BEBEBE] leading-tight focus:outline-none focus:shadow-outline"
                                    id="name"
                                    type="text"
                                    placeholder="Insert email address..."
                                />
                            </div>
                            <div class="mb-5">
                                <label class="block text-white text-sm font-bold mb-2" for="message">
                                    MessageMessage*
                                </label>
                                <textarea
                                    class="resize-y border rounded w-full pl-3 pt-4 text-[#BEBEBE] leading-tight focus:outline-none focus:shadow-outline"
                                    id="message"
                                    rows="4"
                                    placeholder="Insert message..."
                                ></textarea>
                            </div>
                            <div>
                                <button
                                    class="bg-white text-[var(--iris-100)] font-bold px-4 py-4 rounded focus:outline-none focus:shadow-outline"
                                    type="submit"
                                >
                                send appointment form
                                </button>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        </section>
        <!-- end section booking -->
        
        <!-- start useful information section -->
        <section>
            <div class="container mx-auto py-28 px-16">
                <div>
                    <p class="text-[var(--iris-100)] mb-1 font-medium text-lg">USEFULL INFORMATION</p>
                    <h3 class="text-4xl mb-[78px] font-medium text-[var(--main-blue)]">
                    Documents Download
                    </h3>
                </div>

                <div class="mb-[61px] relative">
                    <div class="flex gap-[550px] items-center cursor-pointer" id="collapsible">
                        <p class="text-lg">Depliant</p>
                        <div class="text-2xl font-bold toggleBtn">+</div>
                    </div>
                    <button class="hidden bg-[var(--iris-100)] mt-4 flex p-4 gap-2 items-center content">
                        <p class="text-white">download document</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M15.2 9.6C14.9878 9.6 14.7843 9.68429 14.6343 9.83432C14.4843 9.98434 14.4 10.1878 14.4 10.4V13.6C14.4 13.8122 14.3157 14.0157 14.1657 14.1657C14.0157 14.3157 13.8122 14.4 13.6 14.4H2.4C2.18783 14.4 1.98434 14.3157 1.83431 14.1657C1.68429 14.0157 1.6 13.8122 1.6 13.6V10.4C1.6 10.1878 1.51571 9.98434 1.36569 9.83432C1.21566 9.68429 1.01217 9.6 0.8 9.6C0.587827 9.6 0.384344 9.68429 0.234315 9.83432C0.0842854 9.98434 0 10.1878 0 10.4V13.6C0 14.2365 0.252856 14.847 0.702944 15.2971C1.15303 15.7471 1.76348 16 2.4 16H13.6C14.2365 16 14.847 15.7471 15.2971 15.2971C15.7471 14.847 16 14.2365 16 13.6V10.4C16 10.1878 15.9157 9.98434 15.7657 9.83432C15.6157 9.68429 15.4122 9.6 15.2 9.6ZM7.432 10.968C7.50808 11.0408 7.5978 11.0979 7.696 11.136C7.79176 11.1783 7.8953 11.2002 8 11.2002C8.1047 11.2002 8.20824 11.1783 8.304 11.136C8.4022 11.0979 8.49192 11.0408 8.568 10.968L11.768 7.768C11.9186 7.61736 12.0033 7.41304 12.0033 7.2C12.0033 6.98696 11.9186 6.78264 11.768 6.632C11.6174 6.48136 11.413 6.39673 11.2 6.39673C10.987 6.39673 10.7826 6.48136 10.632 6.632L8.8 8.472V0.8C8.8 0.587827 8.71571 0.384344 8.56569 0.234315C8.41566 0.0842854 8.21217 0 8 0C7.78783 0 7.58434 0.0842854 7.43431 0.234315C7.28429 0.384344 7.2 0.587827 7.2 0.8V8.472L5.368 6.632C5.29341 6.55741 5.20486 6.49824 5.1074 6.45787C5.00994 6.4175 4.90549 6.39673 4.8 6.39673C4.69451 6.39673 4.59006 6.4175 4.4926 6.45787C4.39514 6.49824 4.30659 6.55741 4.232 6.632C4.15741 6.70659 4.09824 6.79514 4.05787 6.8926C4.0175 6.99006 3.99673 7.09451 3.99673 7.2C3.99673 7.30549 4.0175 7.40994 4.05787 7.5074C4.09824 7.60486 4.15741 7.69341 4.232 7.768L7.432 10.968Z" fill="white"/>
                            </svg>
                        </svg>
                    </button>
                    <div class="absolute bottom-[-31px] left-0 w-[631px]  h-1 bg-[#E1E1E1]"></div>
                </div>

                <div class="mb-[61px]  relative">
                    <div class="flex gap-[550px] items-center cursor-pointer" id="collapsible">
                        <p class="text-lg">Depliant</p>
                        <div class="text-2xl font-bold toggleBtn">+</div>
                    </div>
                    <button class="hidden bg-[var(--iris-100)] mt-4 flex gap-2 items-center p-4 content">
                        <p class="text-white">download document</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M15.2 9.6C14.9878 9.6 14.7843 9.68429 14.6343 9.83432C14.4843 9.98434 14.4 10.1878 14.4 10.4V13.6C14.4 13.8122 14.3157 14.0157 14.1657 14.1657C14.0157 14.3157 13.8122 14.4 13.6 14.4H2.4C2.18783 14.4 1.98434 14.3157 1.83431 14.1657C1.68429 14.0157 1.6 13.8122 1.6 13.6V10.4C1.6 10.1878 1.51571 9.98434 1.36569 9.83432C1.21566 9.68429 1.01217 9.6 0.8 9.6C0.587827 9.6 0.384344 9.68429 0.234315 9.83432C0.0842854 9.98434 0 10.1878 0 10.4V13.6C0 14.2365 0.252856 14.847 0.702944 15.2971C1.15303 15.7471 1.76348 16 2.4 16H13.6C14.2365 16 14.847 15.7471 15.2971 15.2971C15.7471 14.847 16 14.2365 16 13.6V10.4C16 10.1878 15.9157 9.98434 15.7657 9.83432C15.6157 9.68429 15.4122 9.6 15.2 9.6ZM7.432 10.968C7.50808 11.0408 7.5978 11.0979 7.696 11.136C7.79176 11.1783 7.8953 11.2002 8 11.2002C8.1047 11.2002 8.20824 11.1783 8.304 11.136C8.4022 11.0979 8.49192 11.0408 8.568 10.968L11.768 7.768C11.9186 7.61736 12.0033 7.41304 12.0033 7.2C12.0033 6.98696 11.9186 6.78264 11.768 6.632C11.6174 6.48136 11.413 6.39673 11.2 6.39673C10.987 6.39673 10.7826 6.48136 10.632 6.632L8.8 8.472V0.8C8.8 0.587827 8.71571 0.384344 8.56569 0.234315C8.41566 0.0842854 8.21217 0 8 0C7.78783 0 7.58434 0.0842854 7.43431 0.234315C7.28429 0.384344 7.2 0.587827 7.2 0.8V8.472L5.368 6.632C5.29341 6.55741 5.20486 6.49824 5.1074 6.45787C5.00994 6.4175 4.90549 6.39673 4.8 6.39673C4.69451 6.39673 4.59006 6.4175 4.4926 6.45787C4.39514 6.49824 4.30659 6.55741 4.232 6.632C4.15741 6.70659 4.09824 6.79514 4.05787 6.8926C4.0175 6.99006 3.99673 7.09451 3.99673 7.2C3.99673 7.30549 4.0175 7.40994 4.05787 7.5074C4.09824 7.60486 4.15741 7.69341 4.232 7.768L7.432 10.968Z" fill="white"/>
                            </svg>
                        </svg>
                    </button>
                    <div class="absolute bottom-[-31px] left-0 w-[631px] h-1 bg-[#E1E1E1]"></div>
                </div>
                
                <div class="mb-[61px]  relative">
                    <div class="flex gap-[550px] items-center cursor-pointer" id="collapsible">
                        <p class="text-lg">Depliant</p>
                        <div class="text-2xl font-bold toggleBtn">+</div>
                    </div>
                    <button class="hidden bg-[var(--iris-100)] mt-4 flex gap-2 items-center  p-4 content">
                        <p class="text-white">download document</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M15.2 9.6C14.9878 9.6 14.7843 9.68429 14.6343 9.83432C14.4843 9.98434 14.4 10.1878 14.4 10.4V13.6C14.4 13.8122 14.3157 14.0157 14.1657 14.1657C14.0157 14.3157 13.8122 14.4 13.6 14.4H2.4C2.18783 14.4 1.98434 14.3157 1.83431 14.1657C1.68429 14.0157 1.6 13.8122 1.6 13.6V10.4C1.6 10.1878 1.51571 9.98434 1.36569 9.83432C1.21566 9.68429 1.01217 9.6 0.8 9.6C0.587827 9.6 0.384344 9.68429 0.234315 9.83432C0.0842854 9.98434 0 10.1878 0 10.4V13.6C0 14.2365 0.252856 14.847 0.702944 15.2971C1.15303 15.7471 1.76348 16 2.4 16H13.6C14.2365 16 14.847 15.7471 15.2971 15.2971C15.7471 14.847 16 14.2365 16 13.6V10.4C16 10.1878 15.9157 9.98434 15.7657 9.83432C15.6157 9.68429 15.4122 9.6 15.2 9.6ZM7.432 10.968C7.50808 11.0408 7.5978 11.0979 7.696 11.136C7.79176 11.1783 7.8953 11.2002 8 11.2002C8.1047 11.2002 8.20824 11.1783 8.304 11.136C8.4022 11.0979 8.49192 11.0408 8.568 10.968L11.768 7.768C11.9186 7.61736 12.0033 7.41304 12.0033 7.2C12.0033 6.98696 11.9186 6.78264 11.768 6.632C11.6174 6.48136 11.413 6.39673 11.2 6.39673C10.987 6.39673 10.7826 6.48136 10.632 6.632L8.8 8.472V0.8C8.8 0.587827 8.71571 0.384344 8.56569 0.234315C8.41566 0.0842854 8.21217 0 8 0C7.78783 0 7.58434 0.0842854 7.43431 0.234315C7.28429 0.384344 7.2 0.587827 7.2 0.8V8.472L5.368 6.632C5.29341 6.55741 5.20486 6.49824 5.1074 6.45787C5.00994 6.4175 4.90549 6.39673 4.8 6.39673C4.69451 6.39673 4.59006 6.4175 4.4926 6.45787C4.39514 6.49824 4.30659 6.55741 4.232 6.632C4.15741 6.70659 4.09824 6.79514 4.05787 6.8926C4.0175 6.99006 3.99673 7.09451 3.99673 7.2C3.99673 7.30549 4.0175 7.40994 4.05787 7.5074C4.09824 7.60486 4.15741 7.69341 4.232 7.768L7.432 10.968Z" fill="white"/>
                            </svg>
                        </svg>
                    </button>
                    <div class="absolute bottom-[-31px] left-0 w-[631px] h-1 bg-[#E1E1E1]"></div>
                </div>

            </div>    
        </section>
        <!-- end useful information section -->

        <!-- start contact section -->
        <section id="contact">
            <div class="container mx-auto py-28 px-16">
                <div class="text-center">
                        <h2 class="text-4xl text-[var(--grey)] font-medium">Interested in our Architecture design?<br> <p class="text-center">Contact us</p></h2>
                        <p class="text-[#656565] mt-5 px-[290px] mb-10">We offer Climablock service for different solutions. So if you are interested in this product don’t hesitat to contact us from the details below</p>
                        <ul class="flex justify-center gap-4">
                            <li class="bg-[var(--iris-60)]">
                                <div class="flex p-5 gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 20 24" fill="none">
                                    <path d="M10 0C7.34875 0.0028586 4.80694 1.01523 2.93222 2.81501C1.0575 4.61478 0.00297764 7.05498 0 9.60025C0 13.5064 2.95375 16.75 6.0825 20.1833C7.0725 21.2706 8.0975 22.395 9.01 23.5326C9.12677 23.678 9.27675 23.7958 9.44838 23.8768C9.62002 23.9579 9.80873 24 10 24C10.1913 24 10.38 23.9579 10.5516 23.8768C10.7233 23.7958 10.8732 23.678 10.99 23.5326C11.9025 22.395 12.9275 21.2706 13.9175 20.1833C17.0462 16.75 20 13.5064 20 9.60025C19.997 7.05498 18.9425 4.61478 17.0678 2.81501C15.1931 1.01523 12.6513 0.0028586 10 0ZM10 13.2003C9.25832 13.2003 8.5333 12.9892 7.91661 12.5936C7.29993 12.198 6.81928 11.6358 6.53545 10.9779C6.25162 10.3201 6.17736 9.59626 6.32205 8.89791C6.46675 8.19956 6.8239 7.55808 7.34835 7.0546C7.8728 6.55112 8.54098 6.20824 9.26841 6.06933C9.99584 5.93042 10.7498 6.00171 11.4351 6.2742C12.1203 6.54668 12.706 7.00811 13.118 7.60014C13.5301 8.19218 13.75 8.88822 13.75 9.60025C13.75 10.5551 13.3549 11.4708 12.6517 12.1459C11.9484 12.821 10.9946 13.2003 10 13.2003Z" fill="white"/>
                                    </svg>
                                    <p class="font-medium text-white">40 Triq Tigne', Tas-Sliema SLM 3174, Malta</p>
                                </div>
                            </li>
                            <li class="bg-[var(--iris-60)]">
                                <div class="flex p-5 gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <path d="M16.6439 13.8465L14.8039 14.8806C14.5831 15.0046 14.3277 15.0532 14.0766 15.0188C13.8256 14.9844 13.5927 14.8689 13.4136 14.6901L7.27233 8.56342C7.09322 8.38464 6.97761 8.15234 6.94314 7.90192C6.90867 7.6515 6.95721 7.39671 7.08137 7.17638L8.11797 5.34073C8.30456 5.01035 8.37762 4.62812 8.32597 4.25243C8.27433 3.87673 8.10083 3.52823 7.83198 3.26016L5.07418 0.508893C4.91254 0.347559 4.72062 0.219578 4.50939 0.13226C4.29816 0.0449425 4.07175 0 3.84311 0C3.61446 0 3.38806 0.0449425 3.17682 0.13226C2.96559 0.219578 2.77368 0.347559 2.61204 0.508893L1.35985 1.75724C0.627609 2.48773 0.161186 3.44147 0.0347453 4.46683C-0.0916952 5.49218 0.129106 6.53027 0.662039 7.41604L1.29033 8.46071C4.49889 13.7955 9.02767 18.2183 14.4423 21.3049L14.5663 21.3761C16.416 22.4304 18.7013 22.1231 20.1823 20.6465L21.4899 19.342C21.6516 19.1808 21.7799 18.9893 21.8674 18.7786C21.955 18.5678 22 18.342 22 18.1139C22 17.8858 21.955 17.6599 21.8674 17.4492C21.7799 17.2384 21.6516 17.047 21.4899 16.8857L18.7303 14.1327C18.4617 13.8641 18.1122 13.6907 17.7354 13.6391C17.3587 13.5874 16.9753 13.6602 16.6439 13.8465Z" fill="white"/>
                                    </svg>
                                    <p class="font-medium text-white">(+356) 2112 3456</p>
                                </div>
                            </li>
                            <li class="bg-[var(--iris-60)]">
                                <div class="flex p-5 gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                                    <path d="M11.2015 25.2334L15.6071 18.6249C16.0006 18.0349 15.8407 17.875 15.2508 18.2685L8.64223 22.6741C8.24872 22.9366 7.60949 22.9363 7.21628 22.6741L0.607735 18.2685C0.017176 17.875 0.0785327 17.3564 0.744608 17.111L25.3056 8.06205C25.7493 7.89862 25.977 8.12635 25.8136 8.57001L16.7646 33.131C16.5192 33.7971 16.0006 33.8585 15.6071 33.2679L11.2015 26.6594C10.9393 26.2661 10.939 25.6269 11.2015 25.2334Z" fill="white"/>
                                    </svg>
                                    <p class="font-medium text-white">info@gmail.com</p>
                                </div>
                            </li>
                        </ul>
                        <h3 class=" mt-[124px] mb-[29px] font-medium text-3xl text-[var(--grey)]">Or fill in the form</h3>
                        <form action="" class="px-[260px] text-start">
                            <div class="flex justify-center gap-4 mb-4">
                                <div class="w-full">
                                    <label class="block text-[#8A8A8A] text-sm font-bold mb-2" for="name">
                                        Name
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-5 px-5 text-[#BEBEBE] leading-tight focus:outline-none focus:shadow-outline"
                                        id="name"
                                        type="text"
                                        placeholder="Insert name..."
                                    />
                                </div>
                                <div class="w-full">
                                    <label class="block text-[#8A8A8A] text-sm font-bold mb-2" for="surname">
                                    Surname*
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-5 px-5 text-[#BEBEBE] leading-tight focus:outline-none focus:shadow-outline"
                                        id="name"
                                        type="text"
                                        placeholder="Insert surname..."
                                    />
                                </div>
                            </div>
                            <div class="w-full mb-4">
                                    <label class="block text-[#8A8A8A] text-sm font-bold mb-2" for="name">
                                    Phone Number
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-5 px-5 text-[#BEBEBE] leading-tight focus:outline-none focus:shadow-outline"
                                        id="name"
                                        type="text"
                                        placeholder="Insert phone number..."
                                    />
                            </div>
                            <div class="w-full mb-4">
                                    <label class="block text-[#8A8A8A] text-sm font-bold mb-2" for="name">
                                    Email Address
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-5 px-5 text-[#BEBEBE] leading-tight focus:outline-none focus:shadow-outline"
                                        id="name"
                                        type="text"
                                        placeholder="Insert email address..."
                                    />
                            </div>
                            <div class="mb-9">
                                <label class="block text-[#8A8A8A] text-sm  mb-2" for="message">
                                    Message
                                </label>
                                <textarea
                                    class="resize-y border rounded w-full pl-3 pt-4 text-[#BEBEBE] leading-tight focus:outline-none focus:shadow-outline"
                                    id="message"
                                    rows="4"
                                    placeholder="Insert message..."
                                ></textarea>
                            </div>
                            <div class="flex justify-center">
                                <button
                                    class="text-white bg-[var(--iris-100)] font-bold px-4 py-4 rounded focus:outline-none focus:shadow-outline"
                                    type="submit"
                                >
                                send appointment form
                                </button>
                            </div>
                        </form>
                </div>
            </div>

        </section>
        <!-- end contact section -->
    </main>

    <script src="./assets/js/main.js"></script>
</body>
</html>