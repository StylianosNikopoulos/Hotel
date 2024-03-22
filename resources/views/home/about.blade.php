<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <style>
        header a {
            padding: 30px; 
            color: black;
            font-weight: bold; 
            font-size: 40px; 
            font-style: italic; 
        }

        #about {
            padding: 100px;
            text-align: center; 
        }

        #about div {
            max-width: 600px; 
            margin: 0 auto; 
        }
            .white-background {
            background-color: white;
            padding: 20px;
            border-radius: 100px; 
            margin: 0 auto; 
        }
    </style>

</head>
<body>
    <header>
        @include('home.css')
        <a href="/">Hotel</a>
        <section class="site-hero overlay" style="background-image: url(images/back.jpg)" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 text-center white-background mt-5">
                        <section id="about">
                            <div>
                                <h1>About Us</h1>
                                <p>Welcome to Our Hotel!</p>
                                <p>We are a luxurious hotel located in Greece. Our hotel offers a range of comfortable and elegantly furnished rooms to make your stay memorable.</p>
                                <p>At Your Hotel Name, we prioritize customer satisfaction and aim to provide top-notch services to all our guests.</p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </header>
    @include('home.footer')
</body>
</html>
