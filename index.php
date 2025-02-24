<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Clone Application</title>
    <style>
        /* CSS styles for the page */

        /* Background image */
        .background-image {
            position: relative;
            background-image: url('images/b2.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            text-align: center;
        }

        /* Header title */
        .header-title {
            position: absolute;
            top: 20px;
            width: 100%;
            font-size: 50px;
            color: #ffffff;
            font-weight: bold;
			font-family:Caveat;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }

        /* Carousel settings */
        .carousel-inner img {
            height: 100vh;
            object-fit: cover;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }

        /* Button styling */
        .cta-button {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
            cursor: pointer;
        }

        .cta-button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .cta-button:focus {
            outline: none;
        }
    </style>
    <!-- Optional: Include Bootstrap CSS for carousel -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Background Image -->
    <div class="background-image">
        <!-- Header Title -->
        <div class="header-title">Amazon Clone Application</div>

        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items (commented out) -->
           
            <!-- <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/I3.jpg" class="d-block w-100" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="images/I2.jpg" class="d-block w-100" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="images/11.jpg" class="d-block w-100" alt="Third slide">
                </div>
            </div> -->
           
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Call to Action Button -->
        <button class="cta-button" onclick="window.location.href='indexx.php'">Get Started</button>
    </div>

    <!-- Optional: Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Custom JavaScript can go here, if needed
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Document loaded and ready');
        });
    </script>
</body>
</html>
