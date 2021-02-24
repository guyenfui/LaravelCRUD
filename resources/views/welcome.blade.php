<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>


<!-- 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <title>Forms Review</title>
  </head>
  <body>
    <section id="overlay">
      <img src="https://content.codecademy.com/courses/web-101/unit-6/htmlcss1-img_burger-logo.svg" alt="Davie's Burgers Logo" id="logo">
      <hr>
      <form action="submission.html" method="POST">
				<h1>Create a burger!</h1>
        <section class="protein">
          <label for="patty">What type of protein would you like?</label>
    			<input type="text" name="patty" id="patty">
        </section>
        <hr>
        
        <section class="patties">
          <label for="amount">How many patties would you like?</label>
          <input type="number" name="amount" id="amount">
        </section>
        <hr>
        
        <section class="cooked">
          <label for="doneness">How do you want your patty cooked</label>
          <br>
          <span>Rare</span>
          <input type="range" name="doneness" id="doneness" value="3" min="1" max="5">
          <span>Well-Done</span>
        </section>
        <hr>
        
        <section class="toppings">
          <span>What toppings would you like?</span>
          <br>
          <input type="checkbox" name="topping" id="lettuce" value="lettuce">
          <label for="lettuce">Lettuce</label>
          <input type="checkbox" name="topping" id="tomato" value="tomato">
          <label for="tomato">Tomato</label>
          <input type="checkbox" name="topping" id="onion" value="onion">
          <label for="onion">Onion</label>
        </section>
        <hr>
        
        <section class="cheesy">
          <span>Would you like to add cheese?</span>
          <br>
          <input type="radio" name="cheese" id="yes" value="yes">
          <label for="yes">Yes</label>
          <input type="radio" name="cheese" id="no" value="yes">
          <label for="no">No</label>
        </section>
        <hr>
       
        <section class="bun-type">
          <label for="bun">What type of bun would you like?</label>
          <select name="bun" id="bun">
            <option value="sesame">Sesame</option>
            <option value="potatoe">Potato</option>
            <option value="pretzel">Pretzel</option>
          </select>
        </section>
        <hr>
        
        <section class="sauce-selection">
          <label for="sauce">What type of sauce would you like?</label>
          <input list="sauces" id="sauce" name="sauce">
          <datalist id="sauces">
            <option value="ketchup"></option>
            <option value="mayo"></option>
            <option value="mustard"></option>
          </datalist>
        </section>
        <hr>
        <section class="extra-info">
          <label for="extra">Anything else you want to add?</label>
          <br>
          <textarea id="extra" name="extra" rows="3" cols="40"></textarea>
        </section>
        <hr>

        <section class="submission">
          <input type="submit" value="Submit">
        </section>
      </form>
    </section>
  </body>
</html> -->
