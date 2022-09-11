<main class="flex flex-col">


    <section class="home__tags z-[1] relative">
        <div class="content-container container flex flex-col justify-center min-h-[120px] gap-2">

            <span class="text-xl">
                События в Альметьевске
            </span>

            <div class="swiper tag-swiper">
                <div class="swiper-wrapper flex">

                    <div class="swiper-slide overflow-hidden flex justify-center text-xl text-white"><a href="#">Кино</a></div>
                    <div class="swiper-slide overflow-hidden flex justify-center text-xl text-white"><a href="#">Концерты</a></div>
                    <div class="swiper-slide overflow-hidden flex justify-center text-xl text-white"><a href="#">Театры</a></div>
                    <div class="swiper-slide overflow-hidden flex justify-center text-xl text-white"><a href="#">Детям</a></div>
                    <div class="swiper-slide overflow-hidden flex justify-center text-xl text-white"><a href="#">Шоу</a></div>
                    <div class="swiper-slide overflow-hidden flex justify-center text-xl text-white"><a href="#">Игры</a></div>

                </div>
            </div>

            <div class="flex gap-1">
                <p class="text-xl"><span>сегодня</span> <span>завтра</span> </p>
            </div>
            
        </div>
    </section>


    <section class="home_slider">
        <div class="swiper home-swiper">

            <div class="swiper-wrapper flex h-[36vh]">
                <div class="swiper-slide overflow-hidden">
                    <div>
                        <img src="/assets/images/home/slide1.png" alt="slide1" class="absolute">
                        <div class="content-container container">
                            <p class="slide1-text-title absolute bottom-[75px] z-[2] text-white font-bold">
                                Дегустационное меню
                            </p>
                            <p class="slide1-text-p absolute z-[2] text-white bottom-[45px] ">
                                22 сентября, с 15:00 до 22:00
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide overflow-hidden">
                    <div>
                        <img src="/assets/images/home/slide1.png" alt="slide1" class="absolute">
                        <div class="content-container container">
                            ав
                        </div>
                    </div>
                </div>  
            </div>

            <div class="swiper-pagination"></div>

        </div>
    </section>


    <section class="soon z-[2] mt-[-20px] bg-white rounded-3xl">
        <div class="content-container container flex flex-col gap-1 pt-[20px]">
            <p class="text-xl">События в вближайшие дни</p>
            <div class="swiper soon-swiper">

                <div class="swiper-wrapper flex h-[30vh]">
                    <div class="swiper-slide overflow-hidden">
                        <div>
                            <img src="/assets/images/home/slide1.png" alt="slide1" class="absolute">
                            
                        </div>
                    </div>
  
                </div>

            </div>
        </div>
    </section>

</main>
