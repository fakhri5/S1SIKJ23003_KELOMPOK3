<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="{{ asset('img/Logo-transparent-2.png') }}" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>@yield('title') &mdash; {{ config('app.name') }}</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        #web_container {
            position: relative;
            min-height: 100%;
        }

        header {
            position: absolute;
            top: 0;
            z-index: 99999;
            right: 0;
            left: 0;
        }

        footer {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
        }

        #bigger_category>div {
            min-height: calc(100vw * 0.2);
        }
        #smaller_category>div {
            min-height: calc(100vw * 0.2);
        }
        @media (max-width: 767px) {
            #bigger_category>div {
                min-height: calc(100vw * 0.5);
            }
            #smaller_category>div {
                min-height: calc(100vw * 0.5);
            }
        }


        #category_grid .category_item {
            position: relative;
            display: flex;
        }

        #category_grid .category_item>div {
            position: absolute;
            inset: 0px;
            overflow: hidden;
        }

        #category_grid .category_item>a {
            content: '';
            text-decoration: none;
            position: absolute;
            z-index: 1;
            inset: 0px;
            background: rgba(0, 0, 0, 0.5);
            color: #fbfbfb;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 400;
            font-family: "Montserrat", sans-serif;
        }

        #category_grid .category_item>a>span {
            max-width: 80%;
            text-align: center;
        }

        #category_grid .category_item>a::after {
            content: '';
            position: absolute;
            inset: 0px;
            transform: scaleX(0);
            transform-origin: 50%;
            transition: all 0.3s linear;
            background: rgba(255, 255, 255, 0.1);
        }

        #category_grid .category_item>a:hover::after {
            transform: scaleX(1);
        }

        #category_grid .category_item>a:hover+div img {
            transform: scale(1.1);
        }

        #category_grid .category_item>div>img {
            object-fit: cover;
            object-position: center;
            width: 100%;
            height: 100%;
            transition: all 0.3s linear;
        }

        button#backtotop {
            box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s linear;
            transform: translateY(-1rem);
            animation: moving 2.5s infinite ease-in-out;
        }

        button#backtotop.shown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        @keyframes moving {
            0% {
                transform: translateY(0);
                opacity: 1;
            }

            50% {
                transform: translateY(10px);
                opacity: 0.9;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        main > section:nth-child(even) {
            background: #fbfbfb;
        }
    </style>
</head>

<body>
    <div id="web_container">
        <x-visitor.header></x-visitor.header>
        <x-visitor.content>
            <x-visitor.button-to-top></x-visitor.button-to-top>
            @yield('content')
            <x-visitor.cart-button></x-visitor.cart-button>
        </x-visitor.content>
        <x-visitor.footer></x-visitor.footer>
    </div>
</body>
<script>
    const button = document.querySelector('#menu-button');
    const menu = document.querySelector('#menu');
    // let biggerCategoryItems = document.querySelectorAll('#bigger_category > div');
    // let smallerCategoryItems = document.querySelectorAll('#smaller_category > div');
    let buttonToTop = document.querySelector('#backtotop');
    let header = document.querySelector('#header');
    let main = document.querySelector('#main');
    let footer = document.querySelector('#footer');

    // function adjustDimension() {
    //     smallerCategoryItems.forEach(smallerCategoryItem => {
    //         smallerCategoryItem.style.minHeight = smallerCategoryItem.offsetWidth * 0.5 + "px";
    //     });
    // }

    window.onscroll = function() {
        let current = "";

        document.querySelectorAll("main > section").forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (pageYOffset >= sectionTop - sectionHeight / 3) {
                current = section.getAttribute("id");
            }
        });

        (current == "category_grid" || current == "searching") ? buttonToTop.classList.remove("shown"): buttonToTop
            .classList.add("shown");

        // current != "category_grid" || current != "searching" ?
        // buttonToTop.classList.add("shown") :
        // buttonToTop.classList.remove("shown");
    };

    buttonToTop.onclick = () => {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    };

    function adjustPadding() {
        main.style.paddingBottom = footer.offsetHeight + 25 + 'px';
        main.style.paddingTop = header.offsetHeight + 'px';
    };


    window.addEventListener('load', function() {
        adjustPadding();
        // adjustDimension();
    });
    window.addEventListener('resize', function() {
        adjustPadding();
        // adjustDimension();
    });

    button.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>

</html>
