<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('./main.css')}}" />
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div>

            <div id="pic2" class="pic">
                <img src="{{asset('./pic-1.png')}}" alt="" class="invitePage"/>
                <div class="content_card">
                    <div class="heading_line">
                        <h3 style="font-family: 'charmonman', 'Roboto'" class="nameGuest">Dear {{$Vocative . ' ' . $Name}}</h3>
                    </div>
                    <div style="font-family: 'SVN-Dancing Script', 'Roboto'" class="message">
                        <p>{{$Invite}}
                        </p>
                    </div>
                    <div class="heading">
                        <p>Sân Khấu Ngoài Trời
                            TESCO HOUSE</p>
                    </div>
                    <div class="heading">
                        <p style="padding: 8px;">Tổ 2 - Cuối đường Thạch Cầu - Long Biên - Hà Nội</p>
                        <p style="padding: 8px;">Thứ 7, ngày 04/05/2024</p>
                        <div class="d-flex around icons">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

<defs>
</defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(45.02412451361867 45.024124513618645) scale(1.83 1.83)" >
                                        <path d="M 36.123 47.688 c -0.256 0 -0.512 -0.098 -0.707 -0.293 c -0.391 -0.391 -0.391 -1.023 0 -1.414 l 6.451 -6.451 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 l -6.451 6.451 C 36.635 47.591 36.379 47.688 36.123 47.688 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 46.572 44.463 c -0.256 0 -0.512 -0.098 -0.707 -0.293 c -0.391 -0.391 -0.391 -1.023 0 -1.414 l 3.037 -3.037 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 l -3.037 3.037 C 47.084 44.365 46.828 44.463 46.572 44.463 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 36.312 54.724 c -0.256 0 -0.512 -0.098 -0.707 -0.293 c -0.391 -0.391 -0.391 -1.023 0 -1.414 l 7.437 -7.438 c 0.391 -0.391 1.023 -0.391 1.414 0 s 0.391 1.023 0 1.414 l -7.437 7.438 C 36.823 54.626 36.567 54.724 36.312 54.724 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 45 72.044 c -12.428 0 -22.54 -10.111 -22.54 -22.539 c 0 -12.429 10.111 -22.54 22.54 -22.54 c 12.428 0 22.539 10.111 22.539 22.54 C 67.539 61.933 57.428 72.044 45 72.044 z M 45 28.965 c -11.326 0 -20.54 9.214 -20.54 20.54 c 0 11.325 9.214 20.539 20.54 20.539 c 11.325 0 20.539 -9.214 20.539 -20.539 C 65.539 38.179 56.325 28.965 45 28.965 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 86.018 18.81 H 64.651 v -4.878 c 0 -2.278 -1.854 -4.131 -4.131 -4.131 H 29.479 c -2.278 0 -4.131 1.853 -4.131 4.131 v 4.878 H 3.982 C 1.786 18.81 0 20.596 0 22.792 v 53.425 c 0 2.196 1.786 3.982 3.982 3.982 h 82.036 c 2.196 0 3.982 -1.786 3.982 -3.982 V 22.792 C 90 20.596 88.214 18.81 86.018 18.81 z M 27.348 13.932 c 0 -1.175 0.956 -2.131 2.131 -2.131 h 31.041 c 1.175 0 2.131 0.956 2.131 2.131 v 4.878 H 27.348 V 13.932 z M 88 76.217 c 0 1.093 -0.89 1.982 -1.982 1.982 H 3.982 C 2.889 78.199 2 77.31 2 76.217 V 22.792 c 0 -1.093 0.889 -1.982 1.982 -1.982 h 82.036 c 1.093 0 1.982 0.889 1.982 1.982 V 76.217 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 78.023 35.504 c -2.598 0 -4.711 -2.113 -4.711 -4.711 s 2.113 -4.711 4.711 -4.711 s 4.711 2.113 4.711 4.711 S 80.621 35.504 78.023 35.504 z M 78.023 28.083 c -1.495 0 -2.711 1.216 -2.711 2.711 s 1.216 2.711 2.711 2.711 s 2.711 -1.216 2.711 -2.711 S 79.519 28.083 78.023 28.083 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 45 65.505 c -8.822 0 -16 -7.178 -16 -16 c 0 -8.823 7.178 -16 16 -16 s 16 7.178 16 16 C 61 58.327 53.822 65.505 45 65.505 z M 45 35.504 c -7.72 0 -14 6.281 -14 14 s 6.28 14 14 14 s 14 -6.28 14 -14 S 52.72 35.504 45 35.504 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 14.366 35.504 h -3.915 c -2.598 0 -4.711 -2.113 -4.711 -4.711 s 2.113 -4.711 4.711 -4.711 h 3.915 c 2.598 0 4.711 2.113 4.711 4.711 S 16.963 35.504 14.366 35.504 z M 10.451 28.083 c -1.495 0 -2.711 1.216 -2.711 2.711 s 1.216 2.711 2.711 2.711 h 3.915 c 1.495 0 2.711 -1.216 2.711 -2.711 s -1.216 -2.711 -2.711 -2.711 H 10.451 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
</svg>
                                <p>
                                    ĐÓN KHÁCH
                                </p>
                                <p>
                                    17:00
                                </p>
                            </div>
                            <div class="icon">
                                <svg style="width: 105px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

<defs>
</defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                        <path d="M 33.504 27.545 c -0.214 0 -0.429 -0.068 -0.611 -0.208 c -0.437 -0.338 -0.518 -0.966 -0.18 -1.403 l 7.16 -9.266 l -4.956 -7.01 H 22.314 l -4.957 7.01 l 7.16 9.266 c 0.337 0.437 0.257 1.065 -0.18 1.403 c -0.437 0.337 -1.064 0.257 -1.403 -0.18 l -7.611 -9.851 c -0.269 -0.348 -0.279 -0.83 -0.025 -1.188 l 5.682 -8.036 c 0.188 -0.265 0.492 -0.423 0.816 -0.423 h 13.637 c 0.325 0 0.629 0.158 0.816 0.423 l 5.682 8.036 c 0.254 0.358 0.244 0.841 -0.025 1.188 l -7.611 9.851 C 34.099 27.412 33.803 27.545 33.504 27.545 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 41.116 17.694 H 16.115 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 25.001 c 0.552 0 1 0.448 1 1 S 41.668 17.694 41.116 17.694 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 28.615 17.694 c -0.293 0 -0.573 -0.129 -0.763 -0.353 l -6.818 -8.036 c -0.357 -0.421 -0.305 -1.052 0.116 -1.41 c 0.422 -0.356 1.053 -0.305 1.41 0.116 l 6.056 7.138 l 6.056 -7.138 c 0.357 -0.421 0.988 -0.473 1.41 -0.116 c 0.421 0.357 0.473 0.989 0.116 1.41 l -6.819 8.036 C 29.188 17.565 28.909 17.694 28.615 17.694 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 61.385 77.069 c -4.622 0 -9.091 -1.349 -12.922 -3.9 c -0.459 -0.306 -0.584 -0.927 -0.277 -1.387 c 0.306 -0.46 0.925 -0.584 1.387 -0.277 c 3.501 2.332 7.586 3.564 11.813 3.564 c 11.769 0 21.343 -9.574 21.343 -21.343 s -9.574 -21.343 -21.343 -21.343 c -4.227 0 -8.312 1.232 -11.813 3.564 c -1.531 1.02 -2.928 2.234 -4.15 3.61 c -3.47 3.906 -5.38 8.938 -5.38 14.168 c 0 5.398 2.021 10.551 5.689 14.508 c 0.375 0.405 0.351 1.037 -0.054 1.413 c -0.404 0.376 -1.037 0.353 -1.413 -0.054 c -4.012 -4.328 -6.222 -9.963 -6.222 -15.867 c 0 -5.721 2.09 -11.224 5.885 -15.496 c 1.336 -1.504 2.862 -2.832 4.536 -3.947 c 3.832 -2.551 8.3 -3.899 12.922 -3.899 c 12.871 0 23.343 10.472 23.343 23.343 S 74.256 77.069 61.385 77.069 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 61.385 82.342 c -6.186 0 -12.074 -1.941 -17.029 -5.615 c -0.443 -0.329 -0.537 -0.956 -0.208 -1.399 s 0.955 -0.536 1.399 -0.208 c 4.607 3.417 10.083 5.223 15.837 5.223 C 76.061 80.342 88 68.402 88 53.727 S 76.061 27.111 61.385 27.111 S 34.77 39.051 34.77 53.727 c 0 6.664 2.474 13.04 6.967 17.953 c 0.373 0.407 0.345 1.04 -0.063 1.413 c -0.408 0.371 -1.041 0.344 -1.413 -0.063 c -4.831 -5.282 -7.491 -12.138 -7.491 -19.303 c 0 -15.778 12.837 -28.615 28.615 -28.615 S 90 37.948 90 53.727 S 77.163 82.342 61.385 82.342 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 28.615 77.069 c -12.871 0 -23.343 -10.472 -23.343 -23.343 s 10.472 -23.343 23.343 -23.343 c 4.622 0 9.09 1.349 12.921 3.899 c 0.46 0.306 0.584 0.927 0.278 1.387 c -0.307 0.46 -0.927 0.583 -1.387 0.278 c -3.502 -2.332 -7.586 -3.564 -11.813 -3.564 c -11.769 0 -21.343 9.574 -21.343 21.343 s 9.574 21.343 21.343 21.343 s 21.343 -9.574 21.343 -21.343 c 0 -5.4 -2.021 -10.553 -5.691 -14.51 c -0.375 -0.405 -0.352 -1.038 0.053 -1.414 c 0.405 -0.375 1.037 -0.352 1.414 0.053 c 4.014 4.328 6.225 9.964 6.225 15.871 C 51.958 66.598 41.486 77.069 28.615 77.069 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 28.615 82.342 C 12.837 82.342 0 69.505 0 53.727 s 12.837 -28.615 28.615 -28.615 c 6.164 0 12.035 1.929 16.979 5.579 c 0.445 0.328 0.539 0.954 0.211 1.398 c -0.329 0.445 -0.953 0.539 -1.398 0.211 c -4.598 -3.395 -10.059 -5.188 -15.792 -5.188 C 13.939 27.111 2 39.051 2 53.727 s 11.939 26.615 26.615 26.615 S 55.23 68.402 55.23 53.727 c 0 -6.655 -2.469 -13.025 -6.951 -17.937 c -0.373 -0.408 -0.344 -1.041 0.064 -1.413 c 0.407 -0.371 1.039 -0.343 1.412 0.064 c 4.82 5.281 7.475 12.13 7.475 19.285 C 57.23 69.505 44.394 82.342 28.615 82.342 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
</svg>
                                <p>
                                    NGHI LỄ
                                </p>
                                <p>
                                    17:30
                                </p>
                            </div>
                            <div class="icon">
                                <svg style="width: 105px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

<defs>
</defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                        <path d="M 8.511 71.628 c -1.403 0 -2.71 -0.559 -3.68 -1.572 c -0.97 -1.015 -1.469 -2.345 -1.407 -3.747 L 4.612 39.75 l -2.474 -2.588 c -1.452 -1.518 -2.228 -3.593 -2.13 -5.691 l 0.565 -12.145 c 0.026 -0.552 0.524 -0.96 1.045 -0.953 c 0.552 0.026 0.978 0.494 0.953 1.045 L 2.006 31.563 c -0.072 1.555 0.502 3.092 1.578 4.217 l 2.769 2.897 c 0.189 0.197 0.289 0.463 0.276 0.735 L 5.423 66.399 c -0.038 0.851 0.266 1.659 0.855 2.274 c 1.178 1.233 3.291 1.232 4.469 0 c 0.588 -0.616 0.892 -1.424 0.854 -2.274 l -1.206 -26.986 c -0.012 -0.272 0.087 -0.538 0.276 -0.735 l 2.769 -2.897 c 1.075 -1.125 1.65 -2.662 1.578 -4.217 l -0.565 -12.145 c -0.025 -0.552 0.401 -1.02 0.953 -1.045 c 0.537 -0.024 1.02 0.4 1.045 0.953 l 0.565 12.145 c 0.097 2.099 -0.68 4.173 -2.131 5.691 l -2.474 2.588 l 1.187 26.559 c 0.063 1.401 -0.437 2.732 -1.406 3.746 C 11.222 71.07 9.914 71.628 8.511 71.628 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 6.066 33.907 c -0.552 0 -1 -0.448 -1 -1 V 19.372 c 0 -0.552 0.448 -1 1 -1 s 1 0.448 1 1 v 13.534 C 7.066 33.459 6.618 33.907 6.066 33.907 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 10.956 33.907 c -0.552 0 -1 -0.448 -1 -1 V 19.372 c 0 -0.552 0.448 -1 1 -1 c 0.552 0 1 0.448 1 1 v 13.534 C 11.956 33.459 11.509 33.907 10.956 33.907 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 81.658 71.628 c -1.402 0 -2.709 -0.559 -3.68 -1.572 c -0.97 -1.014 -1.47 -2.345 -1.407 -3.746 l 1.085 -24.271 l -1.216 -1.22 c -2.72 -2.729 -3.767 -6.73 -2.731 -10.442 l 2.114 -7.576 c 0.728 -2.607 3.127 -4.428 5.834 -4.428 s 5.107 1.821 5.834 4.428 l 2.114 7.575 c 1.036 3.712 -0.011 7.714 -2.731 10.443 l -1.216 1.22 l 1.085 24.27 c 0.063 1.402 -0.438 2.733 -1.407 3.747 C 84.367 71.07 83.06 71.628 81.658 71.628 z M 81.658 20.372 c -1.814 0 -3.42 1.22 -3.908 2.966 l -2.114 7.575 c -0.842 3.019 0.009 6.273 2.221 8.492 l 1.526 1.532 c 0.198 0.199 0.304 0.471 0.291 0.75 l -1.105 24.71 c -0.038 0.851 0.266 1.659 0.855 2.274 c 1.178 1.232 3.291 1.232 4.469 0 c 0.589 -0.615 0.893 -1.424 0.855 -2.275 l -1.105 -24.709 c -0.013 -0.28 0.093 -0.552 0.291 -0.75 l 1.526 -1.532 l 0 0 c 2.212 -2.219 3.063 -5.473 2.221 -8.493 l -2.114 -7.575 C 85.078 21.592 83.471 20.372 81.658 20.372 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 45 71.628 c -14.683 0 -26.628 -11.946 -26.628 -26.628 S 30.317 18.372 45 18.372 S 71.628 30.317 71.628 45 S 59.683 71.628 45 71.628 z M 45 20.372 C 31.42 20.372 20.372 31.42 20.372 45 c 0 13.58 11.048 24.628 24.628 24.628 c 13.58 0 24.628 -11.048 24.628 -24.628 C 69.628 31.42 58.58 20.372 45 20.372 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 45 63.5 c -10.201 0 -18.5 -8.299 -18.5 -18.5 S 34.799 26.5 45 26.5 S 63.5 34.799 63.5 45 S 55.201 63.5 45 63.5 z M 45 28.5 c -9.098 0 -16.5 7.402 -16.5 16.5 c 0 9.098 7.402 16.5 16.5 16.5 c 9.098 0 16.5 -7.402 16.5 -16.5 C 61.5 35.902 54.098 28.5 45 28.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 35 46 c -0.552 0 -1 -0.448 -1 -1 c 0 -6.066 4.935 -11 11 -11 c 0.552 0 1 0.448 1 1 c 0 0.552 -0.448 1 -1 1 c -4.962 0 -9 4.038 -9 9 C 36 45.552 35.552 46 35 46 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(119,167,138); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
</svg>
                                <p>
                                    KHAI TIỆC
                                </p>
                                <p>
                                    18:00
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="guest_number">
                        <p class="heading">Nếu có thể, phản hồi số người tham dự {{$Vocative . ' ' . $Name}} nhé:</p>
                        <form action="{{ route('invite', ['name' => $Name]) }}" method="POST" class="form">
                            @csrf <!-- Add CSRF token for security -->
                            <label for="number">Số người tham dự:</label>
                            <input class="number" style="color: black" type="number" name="number" id="number" />
                            <input hidden name="name" value="{{$Name}}" />
                            <button class="btn" type="submit" style="color: #fff">Xác nhận</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
