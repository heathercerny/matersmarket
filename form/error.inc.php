<style>
    * {
        margin: 0;
        padding: 0;
        border: 0;
    }

    header {
        position: fixed;
        width: 100%;
        z-index: 999;
        background-color: #fecd71;
        display: inline-block;
    }

    .logo {
        padding: 10px;
    }

    .logo h1 {
        display: inline-block;
        position: relative;
        top: -35px;
        left: 15px;
    }

    h1 {
        font-family: 'Champagne', sans-serif;
        font-size: 50px;
        color: #707070;
        text-align: center;
    }

    .navigation {
        position: relative;
        top: -70px; 
    }

    nav {
        text-align: right;
        position: relative;
        margin: 0 auto; 
    }

    nav ul {
        list-style-type: none;
    }

    nav ul li {
            display: inline-block;
    }

    nav ul li  a {
        text-decoration: none;
        color: #6176EB;
        padding: 20px 20px; 
        font-weight: bold;
        font-family: 'Barlow', sans-serif;
        font-size: 20px;
    }

    nav ul li a:hover {
        color: #8F9EF0;
    }

    body {
        background-color: #fecd71;
        width: 100%;
        margin: 0 auto;
    }

    .container {
        position: relative;
        top: 200px;
        max-width: 80%;
        margin: 0 auto;
    }

    a {
        text-decoration: none;
        color: #6176EB; 
        font-weight: bold;
        font-family: 'Barlow', sans-serif;
        font-size: 20px;
    }

    p {
        font-family: 'Barlow', sans-serif;
        font-size: 20px;
        color: #707070;
    }
</style>  
<header>

    <nav>
        <ul>
            <li><a href="index.html">Home</li>
            <li><a href="about.html">About</li>
            <li><a href="contact.html">Contact</li>
            <li><a href="gallery.html">Gallery</li>
        </ul>
    </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>	
