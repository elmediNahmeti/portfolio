<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/0ff9b86d45.js" crossorigin="anonymous"></script>
    <title>Document</title>
  </head>
  <body>
    <nav>
      <a href="#aboutus">about</a>
      <a href="#services">services</a>
      <a href="#projects">projects</a>
      <a href="#contact">contact</a>
    </nav>
    <section id="aboutus" class="aboutus">
        <div class="info">
            <img src="aboutus.png" alt="">

            <div class="about-text">
                <hr>
                <h3>Elmedin Ahmeti</h3>
                <h4>frond-end developer</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis rem voluptas corrupti repellat accusantium similique sint esse ut, placeat fuga autem sapiente id, dolore eos sed, suscipit at perspiciatis hic veniam? Rem voluptates itaque atque.</p>
                <div id="btns">
                    <a href="#contact"> <button> contact</button></a>
                    <a href="https://www.behance.net/elmedinahmeti"><button id="resume-btn">my portfolio</button> </a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services">

        <div class="title">
            <hr>
            <h3>services</h3>
        </div>

        <div class="services-row">
            <div class="box">
                <span>
                <i class="fa-solid fa-shuffle"></i>
            </span>
                <h4>graphic design</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, incidunt aliquam fuga earum facere non.</p>
            </div>

            <div class="box">
                <span>
                <i class="fa-solid fa-pen-ruler"></i>
            </span>
                <h4>web design</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, incidunt aliquam fuga earum facere non.</p>
            </div>

            <div class="box">
                <span>
                <i class="fa-solid fa-mobile-screen-button"></i>
            </span>
                <h4>mobile design</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, incidunt aliquam fuga earum facere non.</p>
            </div>
            
        </div>

    </section>

    <section id="projects" class="projects">
        <div class="title">
            <hr>
            <h3>projects</h3>
        </div>

        <div class="projects-row">
            <div class="projects-box">
                <img src="https://c4.wallpaperflare.com/wallpaper/720/396/991/astronaut-4k-hd-wallpaper-preview.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisiciniis non, deserunt quia dolore vel molestiae earum suscipit maxime nam cum!</p>
            </div>

            <div class="projects-box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLlTm53UPqju0JtSDpFYh9POhC_s8YeJtKUw&usqp=CAU" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisiciniis non, deserunt quia dolore vel molestiae earum suscipit maxime nam cum!</p>
            </div>

            <div class="projects-box">
                <img src="https://brandongaille.com/wp-content/uploads/2013/07/Walt-Disney-Company-Logo1.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisiciniis non, deserunt quia dolore vel molestiae earum suscipit maxime nam cum!</p>
            </div>

            <div class="projects-box">
                <img src="https://www.designhill.com/design-blog/wp-content/uploads/2019/04/11.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisiciniis non, deserunt quia dolore vel molestiae earum suscipit maxime nam cum!</p>
            </div>

            <div class="projects-box">
                <img src="https://static-cse.canva.com/blob/564060/1Beats.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisiciniis non, deserunt quia dolore vel molestiae earum suscipit maxime nam cum!</p>
            </div>
            <div class="projects-box">
                <img src="https://cdn.logojoy.com/wp-content/uploads/2018/05/01104751/8_big32.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisiciniis non, deserunt quia dolore vel molestiae earum suscipit maxime nam cum!</p>
            </div>
            <div class="projects-box">
                <img src="https://static.stacker.com/s3fs-public/styles/slide_desktop/s3/croppedpringlesjpg.JPEG" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisiciniis non, deserunt quia dolore vel molestiae earum suscipit maxime nam cum!</p>
            </div>
            <div class="projects-box">
                <img src="https://images.crowdspring.com/blog/wp-content/uploads/2017/03/27131958/digio-logo-5.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisiciniis non, deserunt quia dolore vel molestiae earum suscipit maxime nam cum!</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="title">
            <hr>
            <h3>contact</h3>
        </div>

        <div class="box">
        <div class="contact-info">
            <a href="#"><i class="fa-solid fa-phone-flip"></i>+383 49 482 847</a>
            <a href="#"><i class="fa-solid fa-envelope"></i>elmedinhmeti1@gmail.com</a>
            <a href="#"><i class="fa-solid fa-location-dot"></i>Lorem, ipsum dolor.</a>
        </div>

        <form id="forma_kontakti" action="connection.php" method="POST">
            <input type="text" name="name" class="input input-fields" placeholder=" Type name..." />
            <input type="text" name="email" class="input input-fields" placeholder="Type email..." />
            <input type="text" name="subjects" class="input input-fields email" placeholder="Type subjects..">
            <textarea name="message" class="input input-fields mesazhi" placeholder="Type message...."></textarea>
            <button id="submit_contact" onclick="myBtn()" name="btn-contact" type="submit" class="input submit">Send</button>
    </form>
    
    </div>
    </section>

    <footer>
        <div class="info">
            <a href="#">MyLogo</a>

           <p id="p01"><i class="fa-regular fa-copyright"></i>Copyright 2022 Elmedin Ahmeti. All rights reserved.</p>

           <div class="icons">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
           <a href="#"> <i class="fa-brands fa-instagram"></i></a>
           </div>
        </div>
    </footer>

    <script>
        
    </script>
  </body>
</html>
