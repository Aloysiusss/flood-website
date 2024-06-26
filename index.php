<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css"
        integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
<!-- 1st section -->
    <div class="hero">
        <header>
            <nav>
                <h2 class="logo">SAM<span>FLOOD</span></h2>
                <div clas="navb">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#flood">Flood Color Code</a></li>
                        <li><a href="#emerg">Emergency Hotlines</a></li>
                        <li><a href="#imports">Community Feedback</a></li>
                        <li><a href="#dosndonts">Do's and Dont's</a></li>
                        <a href="login.html" class="btn">Back</a>
                    </ul>
                </div>
            </nav>
        </header>
        <section id="home" class="homesec">
            <div class="picture">
                <img src="cctv2.png" alt="">
            </div>
                                <!-- live stream feed -->
            <div class="content">
                <h1>SAM FLOOD <span>MONITORING</span></h1>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="AbtUs.png" alt="...">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="flood"></section>
                                            <!-- contacts -->
        <section id="emerg">
            <div>
                <p><img src="conts.png" class="rounded float-start"></p>
            </div>
        </section>

                    <!-- DMS section -->
        <section id="imports">COMMUNITY FEEDBACK
            <table id="cf" class="table table-dark table-sm">
                <colgroup>
                    <col style="width: 10%">
                    <col style="width: 50%">
                    <col style="width: 40%">
                </colgroup>
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">Logs</th>
                        <th scope="col">Comments</th>
                    </tr>
                </thead>
                <tbody class="table-gover">
                    <tr>
                        <th scope="row">1</th>
                        <td>Video Content for Log 1</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Video Content for Log 2</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Video Content for Log 3</td>
                        <td>Ent</td>
                    </tr>
                </tbody>
            </table>
        </section>
                <!-- important contacts section -->
        <section id="dosndonts">IMPORTANT THINGS</section>

        <script src="script.js"></script>

    </div>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h1>FLOOD LEVEL <span>COLOR CODE</span></h1>
            <div>
                <img src="Yellow Front.png" class="rounded float-start" alt="...">
                <img src="Orange Front.png" class="rounded float-start" alt="...">
                <img src="Red Front.png" class="rounded float-end" alt="...">
            </div>
            <div>
                <h4 class="details">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-body">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    See Details
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <table class="table table-dark table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Color</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Forecast</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <th scope="row"><img src="yellow.png" width="120px"></th>
                                                <td>
                                                    <p>Flood Monitoring</p>
                                                    <p>Telemetered: Slow rise in water level but still below alarm level
                                                    </p>
                                                    <br>
                                                    <p> Non-Telemetered: Monitor for possible flooding area</p>
                                                </td>
                                                <td>
                                                    <p>Telemeterd: Flood is possible</p>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <p>Non-Telemeterd: Light to Moderate Rainfall</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="orange.png" width="120px"></th>
                                                <td>
                                                    <p>Flood Alert</p>
                                                    <p>Telemetered: Water level is continuously rising but still below
                                                        critical level</p>
                                                    <br>
                                                    <p>Non-Telemetered: Alert for possible flash floods and landslides
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>Telemeterd: Flood is threatening</p>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <p>Non-Telemeterd: Moderate to Heavy Rainfall</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><img src="redd.png" width="120px"></th>
                                                <td>
                                                    <p>Flood warning</p>
                                                    <p>Telemetered: Water level is above critical</p>
                                                    <br>
                                                    <p> Non-Telemetered: Flood is occuring immediate action is
                                                        recommended
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>Telemeterd: Flood is possible</p>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <p>Non-Telemeterd: Heavy to Intense Rainfall</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </h4>
            </div>
    </section>

</body>

</html>