<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet"
        />
<link rel="stylesheet" href="{{mix('css/app.css')}}" />




    </head>
    <body>
        <div id="app">
            <example-component/>
        </div>

        <figure class="md:flex bg-gray-100 rounded-xl p-8 md:p-0 dark:bg-gray-800">
            <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" src="https://via.placeholder.com/150/0000FF/808080 ?Text=Digital.com" alt="" width="384" height="512">
            <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
              <blockquote>
                <p class="text-lg font-medium">
                  “Tailwind CSS is the only framework that I've seen scale
                  on large teams. It’s easy to customize, adapts to any design,
                  and the build size is tiny.”
                </p>
              </blockquote>
              <figcaption class="font-medium">
                <div class="text-sky-500 dark:text-sky-400">
                  Sarah Dayan
                </div>
                <div class="text-gray-700 dark:text-gray-500">
                  Staff Engineer, Algolia
                </div>
              </figcaption>
            </div>
          </figure>
    </body>
    <script  src="{{mix('js/app.js')}}" ></script>
</html>
