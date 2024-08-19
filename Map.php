<html>
<title>Student Information center</title>
<head>
        <link rel="stylesheet" type="text/css" href="map.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>
        <script src="mapscripts.js"></script>
    </head>
    <div id="bannerarea">
        <div id="topbanner">
            <h1>Map</h1>
        </div>

        <div id="container">
    <nav id="menubar">
        <ul>
        <li><a href="recommend.php">Home</a></li>
        <li><a href="Information.php">Information</a></li>
        <li><a href="Havingfun.php">Having Fun</a></li>
        <li><a href="UsefulLinks.php">Useful Links</a></li>
        <li><a href="Map.php">Map</a></li>
    </ul>
</nav>
<body>
<div id="maincontent">
<h1>Map of UFV</h1>
<h2>Please click a letter inside map to see details or watch video</h2>
<div>
    <h3 id="videoshow">Click to see video</h3>
    <h3 id="videohide">Click to hide video</h3>
<iframe id="vid" width="300" height="300" src="https://www.youtube.com/embed/b4E0qd3m3uY" title="Student Information center" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<div class="interactivemap">
    <img src="img/ufvmap.png"alt="UFV Map" width="400px">
</div>

<!--Bottom is repetitive, Map building names figure for images
I thought about using dynamic arrays, putting into buildings object
with names and images into building name since its lengthy,
but I felt like length of array version wont be too different from
one I wrote. Also I didnt want to retype the whole thing again....
-->

<div id="Buildings">



<div id="ABuilding">
    <h4>Building A</h4>
    <figure>
        <img src="https://media.istockphoto.com/id/1313474060/vector/people-learn-english-as-a-second-language.jpg?s=612x612&w=0&k=20&c=cojOh_c_tFsye8HD3rinRgjbAwXEgVufKtGNuDf0Htk=">
    <figcaption>ESL Help Center</figcaption></figure>
        
    <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMZdB8zNnKL8gf8bKgaVA-1CgJCeMc9TCzIg&s">
    <figcaption>Spirit Bear Cafe</figcaption>
    </figure>

    <figure>
        <img src="https://img.freepik.com/free-vector/illustration-financial-concept_53876-37658.jpg">
        <figcaption>Finance and Administration<figcaption>
    </figure>

    <h3 class="close">Go Back to Map</h3>
</div>
<div id="BBuilding">
    <h4>Building B</h4>
    <figure>
        <img src="https://i0.wp.com/calmatters.org/wp-content/uploads/2021/01/financial-aid.jpg?fit=1200%2C610&ssl=1">
        <figcaption>Fincancial Aid</figcaption>
    </figure>
    <figure>
        <img src="https://militaryjusticeforum.com/wp-content/uploads/2023/05/reg.jpg">
        <figcaption>Office of Registar</figcaption>
    </figure>
    <figure>
        <img src="https://www.itarian.com/images/ticketing-system/it-help-desk-support.png">
        <figcaption>IT Helpdesk</figcaption>
    </figure>
    <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmyJ43WinNNq5lDa6d4rzEVtHfRlm6u1dydA&s">
        <figcaption>Student Services</figcaption>
    </figure>
        <figure>
        <img src="https://media.cnn.com/api/v1/images/stellar/prod/140430115517-06-comfort-foods.jpg?q=w_1110,c_fill">
        <figcaption>Cafeteria</figcaption>
    </figure>
    <figure>
        <img src="https://cdn.elearningindustry.com/wp-content/uploads/2020/07/workplace-safety-training-implementation-mistakes.jpg">
        <figcaption>Securty, Risk, & Safety</figcaption>
    </figure>
    <figure>
        <img src="https://www.model1.com/wp-content/uploads/2022/12/school-transportation-news-buyers-guide-2022-recap.png">
        <figcaption>Transit Bus stop at front main door</figcaption>
    </figure>
    <h3 class="close">Go Back to Map</h3>
</div>

<div id="CBuilding">
<h4>Building C</h4>
<figure>
        <img src="https://img.indiafilings.com/learn/wp-content/uploads/2018/12/12004812/Appeal.jpg">
        <figcaption>Academic Integrity and Appeals</figcaption>
    </figure>
    <figure>
        <img src="https://pbs.twimg.com/profile_images/922889922024914944/gXq2-n99_400x400.jpg">
        <figcaption>School of Business</figcaption>
    </figure>
    <figure>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Art-portrait-collage_2.jpg/640px-Art-portrait-collage_2.jpg">
        <figcaption>Visual Arts</figcaption>
    </figure>
    <h3 class="close">Go Back to Map</h3>
</div>

<div id="DBuilding">
<h4>Building D</h4>
<figure>
        <img src="https://nwc.edu/academics/photos/program-photos/computer-science.jpg">
        <figcaption>Computer Science</figcaption>
    </figure>
    <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZTcJa9KS9RrDCikPjjRdymAMoWJSC5dN4fg&s">
        <figcaption>Computer Information Systems</figcaption>
    </figure>
    <h3 class="close">Go Back to Map</h3>
</div>

<div id="EBuilding">
<h4>Building E</h4>
<figure>
        <img src="https://robbreport.com/wp-content/uploads/2022/07/Himat_WeightRoom.jpg?w=1000">
        <figcaption>Gymnasiums</figcaption>
    </figure>
    <h3 class="close">Go Back to Map</h3>
</div>

<div id="FBuilding">
<h4>Building F</h4>
<figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsQipRuz3ecPQdTu63VNuxLMLcsONO5cuP2g&s">
        <figcaption>South Asian Studies Institute</figcaption>
    </figure>
    <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPJ-02qa-qCw8H56QDVVlP96qFjxMmGwstSQ&s">
        <figcaption>Conference Services</figcaption>
    </figure>
    <h3 class="close">Go Back to Map</h3>
</div>

<div id="GBuilding">
<h4>Building G</h4>
<figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRa0AKtqQhGns1x3_5fgUOMWcDCR3VkN2zYYuXj052OJwzfa6KeMieFZUtdbo-epavUsc&usqp=CAU">
        <figcaption>Academic Success Centre</figcaption>
    </figure>
    <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1ZhPxH3gbxkWoa96L1XtbLcWsXBlFCnhB6w&s">
        <figcaption>Tim Hortons</figcaption>
    </figure>
    <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo_XDiNGisByEfrMdVsHF9H56k73JCIpah_Q&s">
        <figcaption>Library</figcaption>
    </figure>
    <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaO7wfVS1ZjzujK4k3fk8v8m5OXqb2STmwdg&s">
        <figcaption>Computer Lab</figcaption>
    </figure>
    <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxm-cZFFbW4Xme702Fy-tVjHM4-XTjyvh1RA&s">
        <figcaption>Math and Stat Centre</figcaption>
    </figure>
    <h3 class="close">Go Back to Map</h3>
</div>

<div id="HBuilding">
<h4>Building H</h4>
<figure>
        <img src="https://www.ufv.ca/media/assets/bookstore/rollover-image-boxes/binders.jpg">
        <figcaption>Bookstore</figcaption>
    </figure>
    <figure>
        <img src="https://blogs.ufv.ca/wp-content/uploads/2018/09/Baker-House-Blog.jpg">
        <figcaption>Student Housing</figcaption>
    </figure>
    <figure>
        <img src="https://www.ufv.ca/media/marketing/headers/services/parking-banner.jpg">
        <figcaption>Parking Services</figcaption>
    </figure>
    <h3 class="close">Go Back to Map</h3>
</div>

<div id="KBuilding">
<h4>Building K</h4>
<figure>
        <img src="https://library.ufv.ca/media/assets/library/photos/abbotsford-library/Drop-in-Lab-400x300.JPG">
        <figcaption>Classrooms with computers</figcaption>
    </figure>
    <h3 class="close">Go Back to Map</h3>
</div>

<div id="FHBuilding">
<h4>Building FH</h4>
<figure>
        <img src="https://blogs.ufv.ca/wp-content/uploads/2018/09/Baker-House-Blog.jpg">
        <figcaption>Student Housing</figcaption>
    </figure>
    <h3 class="close">Go Back to Map</h3>
</div>

<div id="TBuilding">
<h4>Building T</h4>
<figure>
        <img src="https://gocascades.ca/images/2019/4/17/New_slider_16_9_.jpg">
        <figcaption>Athletics</figcaption>
    </figure>
    <h3 class="close">Go Back to Map</h3>
</div>

<div id="SBuilding">
<h4>Building S</h4>
<figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ88wYDIt3sYmDuGkwN2TRe87lfpCcY4f08jA&s">
        <figcaption>Advising Centre</figcaption>
    </figure>
    <figure>
        <img src="https://i0.wp.com/www.dataphyte.com/wp-content/uploads/2020/05/Newspaper.png?fit=600%2C405&ssl=1">
        <figcaption>Cascade Newspaper and Radio</figcaption>
    </figure>
    <figure>
        <img src="https://cdn.elearningindustry.com/wp-content/uploads/2021/05/end-to-end-assessment-supporting-the-student-education-journey.png">
        <figcaption>Assessment Services</figcaption>
    </figure>
    <figure>
        <img src="https://blogs.ufv.ca/wp-content/uploads/2015/09/2015-Co-branded-student-card-Recovered1.jpg">
        <figcaption>Campus card office</figcaption>
    </figure>
    <figure>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOUfIOyEJGZ16ML52Y5Y5KREvWW2Pg-xtwnw&s">
        <figcaption>Indigenous Student Centre</figcaption>
    </figure>
    <figure>
        <img src="https://pbs.twimg.com/profile_images/1191413060394610688/_3cL1yTF_400x400.jpg">
        <figcaption>Student Life</figcaption>
    </figure>
    <figure>
        <img src="https://images.squarespace-cdn.com/content/v1/5fda5371cffa437533803481/d4797717-fc02-46b9-a733-9df2dea203d2/SUS_reg_profile_picture.png">
        <figcaption>Student Union Society</figcaption>
    </figure>
    <figure>
        <img src="https://www.nescafe.com/mena/sites/default/files/2023-08/Coffee%20Types%20Banner%20Desktop.jpg">
        <figcaption>Fair Grounds coffee shop</figcaption>
    </figure>
    <figure>
        <img src="https://www.model1.com/wp-content/uploads/2022/12/school-transportation-news-buyers-guide-2022-recap.png">
        <figcaption>Shuttle Bus stop to another campus</figcaption>
    </figure>
    <h3 class="close">Go Back to Map</h3>
</div>
</div>
</div>
</div>
</div>
</body>
</div>
</div>
</html>