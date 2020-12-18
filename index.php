<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music in the Air</title>
    <link rel="stylesheet" href="style.php">
</head>

<body>
    <nav id="navbar">
        <ul class="container">
            <li class="list"><a href="#Home">
                Home </a></li>
            <li class="list">
                <a href="#About"> About us</a></li>
            <li class="list">
                <a href="#contact">Contact Us</a></li>
            <li class="list">
                <a href="#recom">Your Song</a></li>
        </ul>
    </nav>
    <section id="Home">


        <h1 class="h1-primary">Music is in the Air</h1>
        <div class="music">
            <a href="music.html">
                <button type="button" class="mlist" style="width: 200px">PoP</button></a>
            <a href="music.html">
                <button type="button" class="mlist" style="width: 200px;">BollyWood</button></a>

            <a href="music.html">
                <button type="button" class="mlist" style="width: 200px;">Folks & Acoustic</button></a>

            <a href="music.html"> <button class="mlist" style="width: 200px;">HIp Hop</button></a>
            <a href="music.html">
                <button type="button" class="mlist" style="width: 200px">PoP</button></a>
            <a href="music.html">
                <button type="button" class="mlist" style="width: 200px;">BollyWood</button></a>

            <a href="music.html">
                <button type="button" class="mlist" style="width: 200px;">Folks & Acoustic</button></a>

            <a href="music.html"> <button class="mlist" style="width: 200px;">HIp Hop</button></a>
        </div>

    </section>
    <section id="About">
        <h1 class="h1-primary">Music is in the air</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus nemo maiores error incidunt officia dolores totam eum illo voluptate cumque. Eveniet ullam repudiandae impedit exercitationem illo temporibus laboriosam perferendis cupiditate. Esse
            dolor ratione dolorem nostrum voluptate blanditiis temporibus iure quas id ducimus aliquid porro consectetur odit vero magnam molestias, tempore est repellendus eos maiores quos aperiam. Ducimus magni necessitatibus quis harum incidunt, fuga
            hic consequuntur, nulla dolorum nemo repellat labore reprehenderit atque? Qui unde culpa possimus inventore necessitatibus asperiores quae, ea animi ut nisi dolore excepturi maiores odio dolor dolorem sunt, itaque, at adipisci? Autem numquam
            sit deleniti molestiae totam.</p>
    </section>
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form id="form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your name:">
                </div>
                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="Email" name="name" id="name" placeholder="Enter Your Email:">
                </div>
                <div class="form-group">
                    <label for="Phone">Phone Number:</label>
                    <input type="Phone" name="name" id="name" placeholder="Enter Your Phone:">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <input type="button" onclick="myfuction()" value="Submit">
            </form>
        </div>
    </section>
<section id="recom">

    <h3 class="ki">Upload your song </h3>
    <form action="upload.php" method="POST" enctype="multipart/form-data" id="frme">
        <input type="file" name="file" id="ch">
        <button type="submit" name="submit" id="btn">Upload</button>
    </form>
</section>
    <footer id="ftr">
        <div class="center">
            Copyright &copy; www.OnlineMeal.com. All rights reserved
        </div>
    </footer>
    <script>
        function myfuction() {
            document.getElementById("form").submit();
        }
    </script>
</body>


</html>