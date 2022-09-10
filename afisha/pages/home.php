<main class="flex flex-col">
    <section class="home min-h-screen relative">

        <div class="swiper min-h-screen absolute left-0 right-0 top-0 bottom-0">
            <div class="swiper-wrapper">

                <div class="swiper-slide overflow-hidden">
                    <div class="overflow-hidden min-h-full relative">
                        <img src="/assets/images/home1.png" alt="home-image-1" class="max-w-none min-h-full absolute left-[50%] translate-x-[-50%]">
                    </div> 
                </div>
                <div class="swiper-slide overflow-hidden">
                    <div class="overflow-hidden min-h-full relative">
                        <img src="/assets/images/home1.png" alt="home-image-1" class="max-w-none min-h-full absolute left-[50%] translate-x-[-50%]">
                    </div> 
                </div>
                <div class="swiper-slide overflow-hidden">
                    <div class="overflow-hidden min-h-full relative">
                        <img src="/assets/images/home1.png" alt="home-image-1" class="max-w-none min-h-full absolute left-[50%] translate-x-[-50%]">
                    </div> 
                </div>
                <div class="swiper-slide overflow-hidden">
                    <div class="overflow-hidden min-h-full relative">
                        <img src="/assets/images/home1.png" alt="home-image-1" class="max-w-none min-h-full absolute left-[50%] translate-x-[-50%]">
                    </div> 
                </div>

            </div>

            <div class="swiper-pagination"></div>

            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->

        </div>


        <?php require "req/header.php" ?>


        <div class="header-list z-[1] relative">
            <div class="container mx-auto">
                <nav>
                    <ul class="menu flex">
                        <li class="m-3 uppercase"><a href="#">Кино</a></li>
                        <li class="m-3 uppercase"><a href="#">Концерты</a></li>
                        <li class="m-3 uppercase"><a href="#">Театры</a></li>
                        <li class="m-3 uppercase"><a href="#">Детям</a></li>
                        <li class="m-3 uppercase"><a href="#">Шоу</a></li>
                        <li class="m-3 uppercase"><a href="#">игры</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="header-title z-[1] relative">
            <div class="container mx-auto flex flex-col justify-evenly height">
                <h1>АФИША СОБЫТИЙ
                    В АЛЬМЕТЬЕВСКЕ</h1>
                <div class="header-buttons flex justify-between">
                    <a class = "header-but uppercase" href="#">Посмотреть</a>
                </div>
            </div>
        </div>

    </section>
</main>