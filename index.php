<?php
if(isset($_POST['submit'])){
$name= $_POST["name"];
$email= $_POST["email"];
$message= $_POST["Message"];

// Create connection
$conn = new mysqli('localhost', 'root', '', 'bhawna');

// Check connection

    $stmt=("INSERT INTO data(name, email, message) VALUES('$name', '$email', '$message')");
   mysqli_query($conn,$stmt);
   echo '<script>alert("message send sucessfully");</script>';
 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/f5c9acf995.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="this-main">   
<div class="side">
        <nav>
              <h1><span>B</span>hawna</h1>
                <ul id="sidemenu">
                <i class="fa-sharp fa-solid fa-circle-xmark fas" onclick="closemenu()"></i><br><br><br>
                    <li><a href="#header"><i class="fa-solid fa-house"></i>  HOME</a></li>
                    <li><a href="#about"><i class="fa-solid fa-user"></i>   ABOUT</a></li>
                    <li><a href="#services"><i class="fa-solid fa-rectangle-list"></i>  SERVICES</a></li>
                    <li><a href="#portfolio"><i class="fa-solid fa-briefcase"></i>PORTFOLIO</a></li>
                    <li><a href="#contect"><i class="fa-solid fa-comments"></i>  CONTACT</a></li>
                   
                </ul>
                <i class="fa-sharp fa-solid fa-bars fas"onclick="openmenu()"></i>
            </nav>
    </div>
<div class="main">
    <div id="header">
        <div class="header-text container">
            
            <h1> Hello, my name is <span>Bhawna mishra </span><br><br>
             i am a <span>FRONTEND DEVELOPER </span></h1><br>

             <p>Seeking a challenging and dynamic role as an IT
                professional, <br>where I can apply my technical
                knowledge, <br>problem-solving skills, and passion for
                innovation <br>to contribute to the development and
                implementation <br>of cutting-edge technology
                solutions.</p>
                <a class="btn btn1" href="#about">More About Me</a>
        </div>
    </div >

<!--------------------------------about ---------------------------->

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/about.jpeg" alt="my name is bhawna">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1><br>
                    <p>
                    Seeking a challenging and dynamic role as an IT
                        professional, where I can apply my technical
                        knowledge, problem-solving skills, and passion for
                        innovation to contribute to the development and
                        implementation of cutting-edge technology
                        solutions.
                    </p>
                    <div class="tab-title">
                        <p class="tab-links active-link" onclick = "opentab('skills')"> Skills</p>
                        <p class="tab-links" onclick = "opentab('exprience')"> Exprience</p>
                        <p class="tab-links"onclick = "opentab('education')"> Education</p>
                        <p class="tab-links"onclick = "opentab('hobbies')"> Hobbies</p>
                        <p class="tab-links"onclick = "opentab('personal-information')"> Personal Information</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>UI/UX</span><br> Design web interface</li>
                            <li><span>WEB DEVELOPER</span><br> Develop the web application</li>
                            <li><span>SOFTWARE DEVELOPER</span><br> Develop the software application</li>
                        </ul>
                    </div>
                    
                    <div class="tab-contents" id="exprience">
                        <ul>
                            <li><span>2023-current</span><br><br> SOFTWARE DEVELOPER at Tech Green Innovation.</li>
                            <li><span>2022</span><br><br> FULL STACK WEB DEVELOPMENT internship at Birilica Services Pvt Ltd in college period.</li>
                        </ul>
                    </div>
                    
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2020-2023</span><br> Deploma in Information Technlogy from  GOVT POLYTECHNIC Dehradun (80%).</li>
                            <li><span>2020</span><br><br> 12th from UK Board (60%).</li>
                            <li><span>2018</span><br><br> 10th from UK board (64%).</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="hobbies">
                        <ul>
                            <li><span>Playing out Door Game</span><br><br>shortput throw<br>running<br>I am also state leval player in shortput throw. </li>
                            <li><span>Lisining song</span><br><br>like Old Song<br>Kumauni Song </li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="personal-information">
                        <ul>
                            <li><span>FATHER NAME</span><br><br>MR. GAURI DUTT MISHRA </li>
                            <li><span>MOTHER NAME</span><br><br>MRS. CHAMPA MISHRA </li>
                            <li><span>DOB</span><br><br>30 - NOV - 2003</li>
                            <li><span>LANGUAGE</span><br><br>HINDI<br>ENGLISH </li>
                            <li><span>ADDRESS</span><br><br>MAYUR VIHAR 1 NEW DEHLI (110091) </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
<!--------------------------------services---------------->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My  Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>WEB DEVLOPER</h2>
                    <p> i am Creating a website layout using HTML/CSS
                        Working with web designers to meet their visual expectations 
                        Evaluating code to see if it’s on par with industry standards
                        Troubleshooting website bugs.
                        Testing website quality to ensure it’s running efficiently
                    </p>
                    
                </div>
                <div>
                    <i class="fa-solid fa-crop"></i>
                    <h2>UI/UX DESIGN</h2>
                    <p> Gathering and evaluating user requirements, in collaboration with product managers and engineers
                        Illustrating design ideas using storyboards, process flows and sitemaps
                        Designing graphic user interface elements, like menus, tabs and widgets.</p>
                    
                </div>
                <div>
                    <i class="fa-brands fa-uncharted"></i>
                    <h2>SOFTWARE DEVELOPER</h2>
                    <p>  i am design and devlop computer applications or programs. Software quality assurance 
                         and testers identify problems with applications or programs and report defects.
                        </p>
                    
                </div>
            </div>
        </div>
    </div>

  <!------------portfolio----------------- -->

  <div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My Work</h1>
        <div class="work-list">
            <div class="work">
                <img src="images/work-1.png" >
                <div class="layer">
                    <h3>collage/university management system</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam aut maxime autem laboriosam dolorum consequuntur facere, nihil non distinctio ratione neque. 
                    Modi voluptate et ut nemo repellendus accusamus accusantium vel?</p>
                    <a href="https://github.com/bhawna2277/Collage-Management-System"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/work-2.png" >
                <div class="layer">
                    <h3>healspeck</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam aut maxime autem laboriosam dolorum consequuntur facere, nihil non distinctio ratione neque. 
                    Modi voluptate et ut nemo repellendus accusamus accusantium vel?</p>
                    <a href="https://github.com/bhawna2277/Hillspeck"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>

            <div class="work">
                <img src="images/work-3.png" >
                <div class="layer">
                    <h3>online shoping card</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam aut maxime autem laboriosam dolorum consequuntur facere, nihil non distinctio ratione neque. 
                    Modi voluptate et ut nemo repellendus accusamus accusantium vel?</p>
                    <a href="https://github.com/bhawna2277/online-card-apllication.git"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>

        </div>
    </div>
  </div>

  <!------------contect----------------- -->
  <div id="contect">
    <div class="container">
        <div class="row">
            <div class="contect-left">
                <h1 class="sub-title">contect me</h1>
                <p><i class="fa-regular fa-envelope"></i>mishrabhawna20031@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>78170030982</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com/bhawna_mishra2277"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://github.com/bhawna2277"><i class="fa-brands fa-github"></i></a>
                    <a href="https://in.linkedin.com/bhawnamishra"><i class="fa-brands fa-linkedin"></i></i></a>
                </div>
                <a href="images/my-cv.pdf" class="btn">Download cv</a>

            </div>
            <div class="contect-right">
                <form action="index.php" method="post">
                    <input type="text" name="name" placeholder="Your Name" required><br>
                    <input type="email" name="email" placeholder="Your Email" required><br>
                    <textarea name="Message"   rows="6" placeholder="Your Message"></textarea><br>
                    <input type="submit" name="submit" class="btn btn1"></input>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

</div>

 <script >
var tablinks= document.getElementsByClassName("tab-links");
var tabcontents= document.getElementsByClassName("tab-contents");

function opentab(tebname){

    for( tablink of tablinks){
        tablink.classList.remove("active-link");

    }
    for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
        
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tebname).classList.add("active-tab");
    } 
 </script> 
 <script>
    var sidemenu= document.getElementById("sidemenu");

    function openmenu(){
        sidemenu.style.right="0";
    }
    function closemenu(){
        sidemenu.style.right="-150px";
    }
 </script>  
    
</body>
</html>