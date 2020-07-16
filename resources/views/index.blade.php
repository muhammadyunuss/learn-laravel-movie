@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular movies</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <?php for ($i=0; $i < 8; $i++) { ?>
                    <div class="mt-8">
                        <a href="#">
                            <img class="hover:opacity-75 transition ease-in-out duration-150" src="http://www.impawards.com/2006/posters/cars_ver6_xlg.jpg" alt="the cars">
                        </a>
                        <div class="mt-2">
                            <a href="#" class="text-lg mt-2 hover:text-gray-300">The Cars</a>
                            <div class="flex items-center text-gray-400 text-sm">
                                <span><svg class="h-4 w-4 mr-1" viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"/></svg>
                                </span>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-sm text-gray-400">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
@endsection
