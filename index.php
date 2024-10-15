<?php
// Set the page title and meta description
$pageTitle = "Token Sofas";
$pageDescription = "Click and explore our wide range of premium quality sofas, headboards and dinning sets, crafted with quality materials. Customizable designs to fit your home and style. Visit us today!";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $pageDescription; ?>">
        <meta name="keywords" content="sofa, sofas, best sofa manufacturing, headboards, couch, couches, premium sofas, furniture, interior design">


        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="assets/css/boxicons/css/boxicons.min.css">

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Token Sofas</title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="admin.php" class="nav__logo">
                    <img src="./assets/img/Logo & Brand Name.png" width="120px" 
                    alt="" style="border-radius: 50px; margin-top: 7%; margin-left: 15%;">
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Catalog</a></li>
                        <li class="nav__item"><a href="shop.php" class="nav__link">Shop</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home" style="background-image: url(./assets/img/Web\ bg\ sample.png);">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <!-- <h1 class="home__title"></h1> -->
                        <h2 class="home__subtitle" style="color: #ee1c25;">
                            Make your house
                            a HOME with <span>TOKEN SOFAS</span>
                        </h2>
                        <P style="margin-top: -5%; margin-bottom: 4%;">
                            Your one stop shop for premium quality sofas
                            , headboards and modern stylish upholstery.
                        </P>
                        <a href="shop.php" class="button">Shop Now</a>
                    </div>
                </div>
            </section>
            
            <!--========== ABOUT ==========-->
            <section class="about section bd-container" id="about" style="background-image: url(./assets/img/ABOUT\ CARD.jpg-1.png);margin-top:7%;margin-bottom:7%;">

                <div style="padding: 3%;">

                    <h2 class="section-title" style="text-align: end;color:#c3c9d0;">About Us</h2>

                    <div class="bd-grid">
                        <div class="about__data">
                            <p class="about__description" style="color: white;">
                                We specialize in creating stylish high quality sofas, headboards and custom 
                                upholstery that bring beauty and fanctinlity into your living spaces. We 
                                deliver exceptional  products with the finest materials and artistry.
                            </p>
                            <div class="about__button" style="margin-top: 3%;">
                                <a href="#menu" class="button" style="color:#c3c9d0;background:#04152f;">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>

            <!--========== SERVICES ==========-->
            <section class="services section bd-container" id="services">
                
                <h2 class="section-title">Services</h2>

                <div class="services__container  bd-grid">
                    <div class="services__content" style="background-color: #C7D1CC80;padding: 3%;">
                        <svg height="80px" width="80px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	                    viewBox="0 0 512 512"  xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#000000;}
                            </style>
                            <g>
                                <path class="st0" d="M133.977,245.743c4.662,1.718,9.756,2.564,15.006,2.315c7.873-0.355,15.159-3.118,21.05-7.512
                                    c5.9-4.4,10.456-10.425,13.043-17.428c1.73-4.668,2.564-9.759,2.319-15.007c-0.355-7.873-3.119-15.162-7.513-21.05
                                    c-4.398-5.894-10.432-10.457-17.431-13.052c-4.662-1.718-9.757-2.558-15-2.315c-7.877,0.361-15.162,3.118-21.056,7.513
                                    c-5.894,4.406-10.454,10.432-13.043,17.434c-1.73,4.662-2.565,9.76-2.319,15c0.358,7.88,3.118,15.162,7.516,21.057
                                    C120.944,238.585,126.981,243.154,133.977,245.743z M127.056,197.617c2.368-3.883,5.854-7.064,9.986-9.037
                                    c2.755-1.307,5.798-2.117,9.084-2.266c4.92-0.224,9.458,1.033,13.351,3.411c3.884,2.365,7.061,5.85,9.034,9.984
                                    c1.317,2.751,2.12,5.788,2.269,9.081c0.224,4.923-1.036,9.455-3.405,13.351c-2.372,3.89-5.856,7.058-9.99,9.038
                                    c-2.754,1.313-5.794,2.116-9.078,2.265c-4.926,0.224-9.464-1.045-13.36-3.404c-3.881-2.378-7.058-5.857-9.031-9.99
                                    c-1.316-2.752-2.119-5.795-2.268-9.075C123.427,206.045,124.688,201.508,127.056,197.617z"/>
                                <path class="st0" d="M297.863,404.415c0.766,16.575,14.829,29.397,31.414,28.625c16.575-0.759,29.396-14.826,28.628-31.407
                                    c-0.766-16.582-14.83-29.403-31.408-28.631C309.916,373.767,297.094,387.828,297.863,404.415z"/>
                                <path class="st0" d="M240.495,392.16c-14.873,0.691-26.375,13.308-25.687,28.183c0.688,14.875,13.307,26.378,28.18,25.687
                                    c14.872-0.691,26.375-13.307,25.687-28.177C267.987,402.977,255.367,391.476,240.495,392.16z"/>
                                <path class="st0" d="M158.858,406.301c13.248-0.61,23.49-11.845,22.877-25.096c-0.612-13.245-11.847-23.49-25.096-22.873
                                    c-13.251,0.616-23.49,11.85-22.88,25.096C134.373,396.679,145.607,406.918,158.858,406.301z"/>
                                <path class="st0" d="M100.317,314.906c0.479,10.363,9.265,18.367,19.631,17.888c10.357-0.473,18.377-9.261,17.898-19.624
                                    c-0.479-10.363-9.274-18.368-19.634-17.894C107.848,295.76,99.837,304.536,100.317,314.906z"/>
                                <path class="st0" d="M281.761,259.872l-0.2-0.622l-30.75-21.686l-0.647,0.019c-15.48,0.342-31.808,10.052-42.604,25.369
                                    c-10.239,14.527-15.147,29.534-19.896,44.049c-3.24,9.896-6.588,20.141-11.623,30.224c-4.167,8.353-6.656,11.466-6.663,11.478
                                    l-2.549,3.025l2.813,1.189c13.083,5.521,31.846,4.021,51.471-4.089c20.617-8.515,38.758-22.843,51.075-40.308
                                    C282.99,293.202,286.653,274.567,281.761,259.872z M254.194,314.595c-0.564,0.454-1.161,0.946-1.777,1.506
                                    c-6.881,6.187-14.699,4.954-8.446-6.573c6.264-11.527-1.995-13.855-9.93-5.77c-9.952,10.139-13.239,3.541-10.995-1.631
                                    c2.238-5.16,8.947-12.698,4.559-16.4c-2.645-2.228-6.937,2.116-13.678,8.134c-3.858,3.454-11.782,3.554-6.909-10.114
                                    c2.363-5.154,5.138-10.182,8.608-15.112c7.529-10.686,18.981-17.913,29.926-18.909l26.335,18.56
                                    c2.744,10.644-0.221,23.851-7.758,34.55C261.227,306.932,257.888,310.879,254.194,314.595z"/>
                                <path class="st0" d="M268.634,229.883l14.185,9.99c4.36,3.088,10.451,3.318,16.821,0.666c6.37-2.664,12.476-7.985,16.886-14.72
                                    l19.973-30.516l-43.905-30.965l-22.033,29.066c-4.871,6.417-7.824,13.955-8.192,20.851
                                    C262.002,221.151,264.273,226.802,268.634,229.883z"/>
                                <path class="st0" d="M437.779,35.316c8.269-12.635,8.325-27.063,0.146-32.838l-0.108-0.062c-8.182-5.77-21.747-0.872-30.869,11.166
                                    L300.43,154.011l43.162,30.43L437.779,35.316z"/>
                                <path class="st0" d="M486.476,270.708l-0.093-2.21c-0.754-16.319-3.79-30.809-9.022-43.071
                                    c-4.901-11.514-11.688-21.006-20.179-28.22c-5.256-4.481-11.11-8.017-17.399-10.5c-7.009-2.764-14.368-4.17-21.875-4.17
                                    c-0.902,0-1.792,0.019-2.689,0.062c-7.186,0.336-14.06,1.948-20.43,4.798c-6.551,2.95-12.131,7.008-16.582,12.069
                                    c-9.405,10.699-22.086,18.367-36.175,22.301l-9.508,14.521c-2.847,4.351-6.245,8.185-9.918,11.584
                                    c0.918-0.025,1.836-0.025,2.76-0.068c27.274-1.264,52.868-13.314,70.218-33.057c2.207-2.508,5.21-4.668,8.683-6.236
                                    c3.666-1.643,7.82-2.608,12.028-2.794l1.618-0.031c5.266,0,10.392,1.126,15.24,3.348c6.016,2.776,11.304,7.114,15.719,12.903
                                    c3.38,4.444,6.215,9.703,8.428,15.635c3.398,9.088,5.408,19.849,5.972,31.998l0.078,2.03c1.366,41.708-9.268,82.42-30.75,117.724
                                    c-21.056,34.562-51.231,61.992-87.266,79.314c-24.906,11.969-51.717,18.704-79.688,20.004c-3.262,0.149-6.508,0.224-9.735,0.224
                                    c-38.058,0-75.334-10.463-107.796-30.268c-34.513-21.056-61.946-51.393-79.336-87.742c-11.988-25.034-18.722-51.934-20.02-79.937
                                    c-2.094-45.56,10.643-89.46,36.834-126.96c25.155-36,62.068-64.146,103.934-79.252c2.312-0.834,5.141-1.357,7.955-1.475
                                    c0.516-0.025,1.039-0.038,1.565-0.038c3.283,0,6.601,0.486,9.585,1.407c3.622,1.096,6.847,2.838,9.33,5.041
                                    c1.734,1.544,3.125,3.293,4.258,5.353c1.702,3.156,2.633,6.803,2.848,11.16c0.142,3.124-0.109,6.541-0.757,10.158
                                    c-0.407,2.334-0.914,4.78-1.488,7.544c-0.554,2.67-1.136,5.478-1.665,8.44c-0.884,5.004-1.855,11.696-1.512,19.134
                                    c0.934,20.253,7.805,39.517,19.874,55.706c1.254,1.68,2.577,3.292,3.924,4.886c0.719-9.124,4.12-18.399,9.628-26.726
                                    c-0.93-1.631-1.976-3.187-2.788-4.892c-4.506-9.411-7.036-19.525-7.525-30.044c-0.187-3.996,0.19-8.446,1.189-14.017
                                    c0.426-2.44,0.949-4.973,1.565-7.93c0.532-2.57,1.086-5.259,1.587-8.06c0.94-5.291,1.304-10.425,1.08-15.28
                                    c-0.376-8.639-2.769-16.712-6.924-23.346c-3.759-6.056-9.146-11.191-15.573-14.845c-3.796-2.178-7.976-3.865-12.421-5.022
                                    c-4.624-1.195-9.435-1.805-14.3-1.805c-0.853,0-1.702,0.019-2.54,0.056c-5.262,0.256-10.226,1.208-14.751,2.839
                                    C134.696,79.894,94.915,110.237,66.625,150.7c-29.166,41.69-43.336,90.549-40.98,141.295
                                    c2.126,46.158,17.792,90.082,45.309,127.022c26.851,36.013,63.241,63.256,105.229,78.773c25.525,9.43,52.336,14.21,79.685,14.21
                                    c3.6,0,7.214-0.081,10.848-0.255c31.087-1.438,60.913-8.926,88.644-22.258c26.736-12.846,50.478-30.598,70.567-52.762
                                    C466.998,391.463,488.499,332.501,486.476,270.708z"/>
                            </g>
                        </svg>
                        <h3 class="services__title">Design</h3>
                        <p class="services__description">
                            We specialize in creating aesthetically pleasing and functional environments 
                            tailored to your unique style. Our expert designers will guide you 
                            through every step. 
                        </p>
                    </div>

                    <div class="services__content" style="background-color: #C7D1CC80;padding: 3%;">
                        <svg fill="#000000" height="80px" width="80px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	                    viewBox="0 0 512 512" xml:space="preserve">
                            <g transform="translate(1 1)">
                                <g>
                                    <g>
                                        <path d="M340.333,370.2c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533c5.12,0,8.533-3.413,8.533-8.533
                                            S345.453,370.2,340.333,370.2z"/>
                                        <path d="M340.333,225.133c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533c5.12,0,8.533-3.413,8.533-8.533
                                            S345.453,225.133,340.333,225.133z"/>
                                        <path d="M374.467,370.2c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533s8.533-3.413,8.533-8.533
                                            S379.587,370.2,374.467,370.2z"/>
                                        <path d="M485.4,395.8c14.507,0,25.6-11.093,25.6-25.6V267.8c0-14.507-11.093-25.6-25.6-25.6s-25.6,11.093-25.6,25.6v42.667
                                            h-8.533v-41.813c0-3.413,0-6.827,0-9.387c-2.56-44.373-25.6-84.48-62.293-110.933c-22.62-15.736-48.075-25.222-74.24-27.836V88.6
                                            h8.533h17.067c5.12,0,8.533-3.413,8.533-8.533s-3.413-8.533-8.533-8.533H331.8V37.4h8.533c5.12,0,8.533-3.413,8.533-8.533
                                            s-3.413-8.533-8.533-8.533h-17.067h-34.133h-17.067c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h8.533v34.133
                                            h-8.533c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h17.067h8.533v31.174c-13.685,0.206-27.437,2.29-40.96,6.373
                                            l-89.6,26.453c-10.24,2.56-20.48,4.267-31.573,4.267h-5.973c-17.067,0-33.28-4.267-46.933-12.8
                                            C74.947,139.8,68.973,132.973,63,122.733c-6.827-10.24-17.92-17.067-29.867-17.067C14.36,105.667-1,121.027-1,139.8v196.267
                                            c0,15.83,10.921,29.232,25.6,33.046V395.8c0,5.12,3.413,8.533,8.533,8.533c5.12,0,8.533-3.413,8.533-8.533v-26.688
                                            c14.679-3.814,25.6-17.216,25.6-33.046V319c0-23.893,18.773-42.667,42.667-42.667H229.4c8.533,0,17.92,2.56,25.6,6.827
                                            c18.773,11.093,28.16,34.133,22.187,56.32l-20.48,81.92H33.133C14.36,421.4-1,436.76-1,455.533
                                            c0,18.773,15.36,34.133,34.133,34.133h443.733c18.773,0,34.133-15.36,34.133-34.133c0-18.773-15.36-34.133-34.133-34.133h-25.6
                                            v-93.867h8.533V370.2C459.8,384.707,470.893,395.8,485.4,395.8z M297.667,37.4h17.067v34.133h-17.067V37.4z M476.867,438.467
                                            c9.387,0,17.067,7.68,17.067,17.067s-7.68,17.067-17.067,17.067H33.133c-9.387,0-17.067-7.68-17.067-17.067
                                            s7.68-17.067,17.067-17.067H252.44h198.827H476.867z M274.627,421.4l19.627-77.653c7.68-29.867-5.12-60.587-29.867-75.093
                                            c-10.24-5.973-22.187-9.387-34.133-9.387H110.787c-33.28,0-59.733,26.453-59.733,59.733v17.067
                                            c0,9.387-7.68,17.067-17.067,17.067c-9.387,0-17.067-7.68-17.067-17.067V139.8c0-9.387,7.68-17.067,17.067-17.067
                                            c5.973,0,11.093,3.413,14.507,8.533c7.68,12.8,15.36,21.333,25.6,27.307c17.067,10.24,35.84,15.36,55.467,15.36h5.973
                                            c12.8,0,24.747-1.707,36.693-5.12l89.6-26.453c40.107-11.947,82.773-4.267,116.907,19.627
                                            c33.28,23.04,52.907,58.88,55.467,98.133c0,2.56,0,5.12,0,7.68v153.6H274.627z M493.933,327.533V344.6h-17.067v-17.067H493.933z
                                            M476.867,310.467V293.4h17.067v17.067H476.867z M485.4,378.733c-5.12,0-8.533-3.413-8.533-8.533v-8.533h17.067v8.533
                                            C493.933,375.32,490.52,378.733,485.4,378.733z M485.4,259.267c5.12,0,8.533,3.413,8.533,8.533v8.533h-17.067V267.8
                                            C476.867,262.68,480.28,259.267,485.4,259.267z"/>
                                        <path d="M340.333,191c-23.893,0-42.667,18.773-42.667,42.667c0,23.893,18.773,42.667,42.667,42.667
                                            c23.893,0,42.667-18.773,42.667-42.667C383,209.773,364.227,191,340.333,191z M340.333,259.267c-14.507,0-25.6-11.093-25.6-25.6
                                            c0-14.507,11.093-25.6,25.6-25.6c14.507,0,25.6,11.093,25.6,25.6C365.933,248.173,354.84,259.267,340.333,259.267z"/>
                                        <path d="M118.467,208.067h51.2c5.12,0,8.533-3.413,8.533-8.533S174.787,191,169.667,191h-51.2c-5.12,0-8.533,3.413-8.533,8.533
                                            S113.347,208.067,118.467,208.067z"/>
                                        <path d="M203.8,225.133h-85.333c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533H203.8c5.12,0,8.533-3.413,8.533-8.533
                                            S208.92,225.133,203.8,225.133z"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h3 class="services__title">Upholstery</h3>
                        <p class="services__description">
                            Our skilled craftsmen use high-quality materials to restore and enhance your 
                            beloved pieces, making them look as good as new. We offer a wide range of 
                            fabrics and finishes to suit your taste.
                        </p>
                    </div>

                    <div class="services__content" style="background-color: #C7D1CC80;padding: 3%;">
                        <svg fill="#000000" height="80px" width="80px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	                     viewBox="0 0 511.147 511.147" xml:space="preserve">
                            <g transform="translate(1 1)">
                                <g>
                                    <g>
                                        <path d="M395.504,294.253c-3.413-5.973-10.24-9.387-17.067-10.24s-14.507,1.707-19.627,5.973
                                            c-10.24,8.533-12.8,23.893-4.267,34.987c38.4,52.053,35.84,87.04,35.84,87.893v2.56c0,15.36-3.413,26.453-11.093,33.28
                                            c-11.093,10.24-29.013,9.387-29.867,9.387h-1.707c-11.947,0-20.48-12.8-20.48-12.8l-0.853-1.707l-2.56-2.56
                                            c-7.68-8.533-18.773-58.88,0-119.467l0.853-5.973v-1.707c0-26.074-11.666-39.692-17.92-44.584v-6.616
                                            c0-171.52-38.4-250.88-42.667-258.56L261.531-1h-11.093l-2.56,4.267c-5.12,8.533-43.52,87.893-43.52,259.413v5.973
                                            c-5.12,5.12-18.773,17.92-18.773,45.227l1.707,5.973v0.853c18.773,60.587,7.68,110.933,0,119.467l-1.707,1.707l-2.56,3.413
                                            c0,0.853-8.533,13.653-21.333,13.653h-1.707c0,0-18.773,0.853-29.867-9.387c-7.68-6.827-11.093-17.92-11.093-34.133v-2.56
                                            c0,0-2.56-34.987,35.84-87.04c7.68-11.093,5.973-26.453-4.267-34.987c-5.973-5.12-12.8-6.827-19.627-5.973
                                            c-6.827,0.853-12.8,4.267-17.067,10.24C65.264,359.96,66.971,408.6,67.824,417.133c0,29.867,9.387,52.907,27.307,69.973
                                            c23.04,20.48,52.053,23.04,63.147,23.04c2.56,0,3.413,0,4.267,0c35.84-0.853,56.32-27.307,62.293-35.84
                                            c29.013-34.133,25.6-117.76,11.947-163.84c0-1.707,0.853-3.413,0.853-3.413c1.707-1.707,10.24-2.56,17.92-2.56
                                            c5.973,0,14.507,0.853,16.213,2.56c0,0.853,0.853,2.56,0.853,3.413c-13.653,46.08-17.067,128.853,11.947,163.84
                                            c5.973,9.387,27.307,35.84,62.293,35.84c0.853,0,2.56,0,4.267,0c11.093,0,40.96-2.56,63.147-23.893
                                            c17.92-16.213,27.307-40.107,27.307-69.12C441.584,407.747,443.291,359.107,395.504,294.253z M221.424,254.147
                                            c0.853-124.587,22.187-196.267,34.133-226.133c11.947,29.867,33.28,101.547,34.133,226.133h-31.174c-1.229-0.018-1.981,0-2.106,0
                                            c-0.442,0-2.789-0.113-6.362,0H221.424z M423.664,416.28c0,25.6-7.68,44.373-22.187,58.027
                                            c-17.92,17.067-41.813,18.773-51.2,18.773c-0.853,0-2.56,0-3.413,0c-28.16,0-44.373-21.333-48.64-28.16l-0.853-0.853
                                            c-23.893-29.013-20.48-108.373-7.68-150.187l0.853-0.853v-1.707c-0.853-10.24-5.12-14.507-6.827-16.213
                                            c-6.827-5.973-20.48-6.827-27.307-6.827c-7.68,0-23.04,0-32.427,5.12c-4.267,3.413-5.973,9.387-6.827,16.213v1.707l0.853,1.707
                                            c13.653,42.667,17.067,121.173-7.68,150.187l-0.853,0.853c-4.267,5.973-20.48,28.16-48.64,28.16
                                            c-5.12,0.853-33.28,1.707-54.613-17.92c-14.507-12.8-22.187-32.427-22.187-58.027c0-7.68-1.707-51.2,42.667-110.933
                                            c1.707-1.707,3.413-3.413,5.973-3.413c2.56-0.853,5.12,0,6.827,1.707c4.267,3.413,4.267,8.533,1.707,11.947
                                            c-43.52,58.88-39.253,98.987-39.253,98.987v1.707c0,20.48,5.973,35.84,17.067,46.08c17.067,15.36,41.813,13.653,41.813,13.653
                                            h0.853c21.333,0,34.133-18.773,34.987-21.333l1.707-2.56c11.947-13.653,25.6-68.267,4.267-135.68l-0.853-3.413
                                            c0.853-18.773,9.387-28.16,12.8-30.72c12.48-9.707,31.157-10.963,38.179-11.093h5.466c6.738,0.13,24.462,1.387,34.862,11.093
                                            c4.267,2.56,12.8,11.093,12.8,30.72l-0.853,3.413c-21.333,67.413-7.68,122.027,4.267,135.68l1.707,1.707
                                            c1.707,2.56,14.507,21.333,34.987,21.333h0.853c0.853,0,25.6,1.707,42.667-13.653c10.24-10.24,16.213-25.6,16.213-45.227v-1.707
                                            c0-0.853,4.267-40.96-39.253-99.84c-2.56-4.267-1.707-9.387,1.707-11.947c2.56-1.707,4.267-1.707,6.827-1.707
                                            s4.267,1.707,5.973,3.413C425.371,364.227,424.517,407.747,423.664,416.28z"/>
                                        <path d="M264.091,211.48c0-5.12-3.413-8.533-8.533-8.533s-8.533,3.413-8.533,8.533c0,5.12,3.413,8.533,8.533,8.533
                                            S264.091,216.6,264.091,211.48z"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h3 class="services__title">Fixing</h3>
                        <p class="services__description">
                            Say goodbye to wear and tear with our reliable fixing services!* We tackle 
                            everything from minor repairs to major restorations. Our team is dedicated 
                            to providing efficient and effective solutions.
                        </p>
                    </div>
                
                </div>
            </section>

            <!--========== MENU ==========-->
            <section class="menu section bd-container" id="menu">
                
                <h2 class="section-title">Catalog</h2>

                <div class="menu__container bd-grid">
                    <div class="menu_content grid-item">
                        <img src="assets/img/top 1.jpg" alt="" class="menu_img">
                        <div class="product_info">
                            <h3 class="menu__name">Drifter</h3>
                            <span class="menu__preci">$500.00</span>
                        </div>
                        <span class="menu__detail">'U' Shape</span>
                        <a href="shop.php" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>

                    <div class="menu_content grid-item">
                        <img src="assets/img/top 2.jpg" alt="" class="menu_img">
                        <div class="product_info">
                            <h3 class="menu__name">Dinning Set</h3>
                            <span class="menu__preci">$450.00</span>
                        </div>
                        <span class="menu__detail">8 Chairs and Dinning table</span>
                        <a href="shop.php" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>
                    
                    <div class="menu_content">
                        <img src="assets/img/top 4.jpg" alt="" class="menu_img">
                        <div class="product_info">
                            <h3 class="menu__name">'L' Shape Sofa</h3>
                            <span class="menu__preci">$300.00</span>
                        </div>
                        <span class="menu__detail">'L' Shape</span>
                        <a href="shop.php" class="button menu__button"><i class='bx bx-cart-alt'></i></a>
                    </div>
                </div>
                <div class="contact__button" style="margin-top: 3%;text-align: center;">
                    <a href="shop.php" class="button">Show More</a>
                </div>
            </section>

            <!--========== CONTACT US ==========-->
            <section class="contact section bd-conainer" id="contact" style="background-image: url(./assets/img/Contact\ us\ bg.png);width:100vw">
                <div class="app__container bd-grid">
                    <div class="contact__data">
                        <h2 class="section-title contact__initial" style="text-align: center; color: #ee1c25;">Contact Us</h2>
                        <p class="contact__description" style="color: #ffff;">
                            Ready to transform your space? Email us, give us a call <br>or reach out to us on
                             our social media platforms. <br> 
                            Let's create something beautiful together!</p>
                        <div class="about__button" style="justify-content: center;">
                            <a href="tel:+263778007334" class="button">Call Now</a>
                        </div>
                        <div class="socials" style="margin-top: 3%;">
                            <a href="https://wa.me/c/263778007334" class="footer__social" class="footer__social"><i class='bx bxl-whatsapp'></i></a>
                            <a href="https://www.facebook.com/profile.php?id=61566103783024" class="footer__social"><i class='bx bxl-facebook'></i></a>
                            <!-- <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a> -->
                            <a href="mailto:tokensofas.gmail.com" class="footer__social"><i class='bx bxl-gmail'></i></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <h3 class="footer__title">About Us</h3>
                    <span class="footer__description">
                        We specialize in crafting high-quality sofas, and headboards, and
                         upholstery services. Our passion is turning your vision into reality.
                    </span>
                    <div class="socials">
                        <a href="https://wa.me/c/263778007334" class="footer__social"><i class='bx bxl-whatsapp'></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61566103783024" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <!-- <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a> -->
                        <a href="mailto:tokensofas.gmail.com" class="footer__social"><i class='bx bxl-gmail'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Site Map</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Home</a></li>
                        <!-- <li><a href="#" class="footer__link">Pricing</a></li> -->
                        <li><a href="#" class="footer__link">Shop</a></li>
                        <li><a href="#" class="footer__link">Services</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">More Infor</h3>
                    <ul>
                        <!-- <li><a href="#" class="footer__link">Event</a></li> -->
                        <li><a href="#" class="footer__link">Policies</a></li>
                        <li><a href="#" class="footer__link">Help & FAQ</a></li>
                        <li><a href="#" class="footer__link">Terms Of Service</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contacts</h3>
                    <ul>
                        <li class="footer__link">10292 Willowvale Rd, Hre</li>
                        <li><a href="tel:+263778007334" class="footer__link">0778 - 007 - 334</a></li>
                        <!-- <li><a href="tel:+263778007334" class="footer__link">0717 - 830 - 640</a></li> -->
                        <li><a href="mailto:tokensofas.gmail.com" class="footer__link">tokensofas.gmail.com</a></li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; 2024 TOKEN SOFAS. Designed by <a href="https://www.tmc.co.zw" style="color: gray;text-decoration:underline;">TMC</a>. All right reserved</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>