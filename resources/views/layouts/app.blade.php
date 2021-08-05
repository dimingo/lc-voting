<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laracast Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans bg-gray-background text-grey-900 text-sm">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="#" class="" id=""><img src="{{asset('image/logo.svg')}}" alt=""></a>
        <div class='flex items-center'>
            @if (Route::has('login'))
            <div class=" px-6 py-4 ">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif
            <a href="" class="">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y" alt="avatar" class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>
    <main class="container mx-auto flex" style='max-width:1000px'>
        <div style='max-width:280px; margin-right:20px' >
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, odit nesciunt. Dicta corporis, esse soluta praesentium natus dolorum expedita! Excepturi asperiores distinctio unde assumenda dolorem! Adipisci eum tempore consequatur impedit, est expedita, debitis sequi mollitia, necessitatibus aliquid similique sapiente quos veritatis porro. Culpa voluptatum voluptates harum, incidunt inventore velit laboriosam, cum id tenetur dolore amet! Cupiditate soluta aut eaque doloremque molestiae. Sequi laudantium dolore obcaecati dicta enim, qui velit vero itaque vitae eaque impedit omnis asperiores ut mollitia in veritatis? Consequuntur accusantium dolor in pariatur. Recusandae consequuntur nemo mollitia eligendi fugiat! Provident, accusamus necessitatibus dolorem eius esse maxime soluta laborum.


        </div>
        <div style='max-width:700px'>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, voluptate similique? Officia excepturi amet quae tenetur saepe provident dolores, repellendus iure, enim dignissimos placeat in dolorem expedita culpa fugiat optio et quidem, consectetur facilis omnis! Impedit repellat temporibus ratione, nobis necessitatibus perspiciatis nesciunt asperiores maxime blanditiis qui ad, voluptate laudantium tempora cum aliquid minima dignissimos suscipit culpa corporis aut. Repellendus, qui? Quos beatae, odio, amet ut fugit ipsum accusamus exercitationem nesciunt similique sapiente consequuntur. Qui alias similique vitae modi iste tenetur quae quod molestiae labore culpa, quas saepe excepturi, placeat odit eos iure? Corrupti officiis, qui quo quam rem praesentium quae earum soluta est ea aperiam beatae in at facilis minus porro dolore sed quibusdam neque laboriosam ducimus odit facere doloribus quod. Numquam corrupti mollitia blanditiis autem accusamus id quaerat dolor ullam magni est harum incidunt quod repellendus in iste aliquam voluptatem cumque perferendis, sunt tempora excepturi itaque eius. Veritatis a asperiores eum architecto tenetur facilis, doloremque nisi optio facere vel accusamus iste? Blanditiis perferendis culpa quo. Eos asperiores velit dolorum optio tempore autem laboriosam sunt. Facilis aut recusandae repellendus accusamus illum est eos excepturi officia, a reprehenderit cumque perferendis consectetur. Distinctio ea sunt voluptatibus? Voluptates debitis iure quos eaque!


        </div>
    </main>


</body>

</html>