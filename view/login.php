<!DOCTYPE html>
<html>
    <head>
        <title>Student Data</title>
    		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" type="text/css" href="assets/fullpage.css" />
        <link rel="stylesheet" type="text/css" href="assets/examples.css" />

        <style>
        #section2{
          background: linear-gradient(124deg, #0f0f0f, #2b2424, #4d3c3c, #634343, #3f3245, #322338, #2b172a, #4f1627, #2b080c);
        	background-size: 400% 400%;
        	animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
        	0% {
        		background-position: 0% 50%;
        	}
        	50% {
        		background-position: 100% 50%;
        	}
        	100% {
        		background-position: 0% 50%;
        	}
        }
        #particles-js{
          	width: 100%;
          	height: 100%;
          	background-size: cover;
          	background-position: 50% 50%;
          	position: fixed;
          	top: 0px;
          	z-index:1;
        }
        #login-box {
        	z-index: 9999;
        }

        </style>
    </head>
    <body id="section2">
          <div class="container text-center px-5 py-5 mt-sm-4">
            <div class="row">
              <aside class="col-sm-3">
              </aside>
            <article class="card-body col-sm-6" id="login-box" style="background-color: rgba(255, 255, 255, 0.5);">
            <h1 class="card-title text-center mb-4 mt-1"><i>Sign In</i></h1>
              <form action="index.php" method="post" onSubmit="return validasi()">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                      <input class="form-control" type="text" name="username" id="username" placeholder="Masukkan Username" autofocus>
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-key"></i> </span>
                    </div>

                    <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan Password">
                  </div>
                </div>

                <div class="form-group">
                <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-key"></i> </span>
                    </div>

                    <input type="text" class="form-control" name="captcha_code" size="10" maxlength="6" placeholder="Masukkan Kode di atas" />
                  </div>
                </div>
                <div class="form-group">
                  <input type='hidden' name='do' value='check_loginuser.php'>
                  <button type='submit' name='submit' value='data.php' class='btn btn-dark btn-block'>Login</button>
                  <input type='hidden' name='loc' value='data.php'>
                  <br>
                  <button type='submit' name='loc' value='register_user.php' class='btn btn-dark btn-block'>Register</button>
                </div>
              </form>
            </article>
            <div class="col-sm-3"></div>
            <div class="container">
            </div>
          </div>
        </div>
    <div id="particles-js"></div>
    <script type="text/javascript">
        $.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function(){
          particlesJS('particles-js',
            {
              "particles": {
                "number": {
                  "value": 80,
                  "density": {
                    "enable": true,
                    "value_area": 800
                  }
                },
                "color": {
                  "value": "#ffffff"
                },
                "shape": {
                  "type": "circle",
                  "stroke": {
                    "width": 0,
                    "color": "#000000"
                  },
                  "polygon": {
                    "nb_sides": 5
                  },
                  "image": {
                    "width": 100,
                    "height": 100
                  }
                },
                "opacity": {
                  "value": 0.5,
                  "random": false,
                  "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                  }
                },
                "size": {
                  "value": 5,
                  "random": true,
                  "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                  }
                },
                "line_linked": {
                  "enable": true,
                  "distance": 150,
                  "color": "#ffffff",
                  "opacity": 0.4,
                  "width": 1
                },
                "move": {
                  "enable": true,
                  "speed": 6,
                  "direction": "none",
                  "random": false,
                  "straight": false,
                  "out_mode": "out",
                  "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                  }
                }
              },
              "interactivity": {
                "detect_on": "canvas",
                "events": {
                  "onhover": {
                    "enable": true,
                    "mode": "repulse"
                  },
                  "onclick": {
                    "enable": true,
                    "mode": "push"
                  },
                  "resize": true
                },
                "modes": {
                  "grab": {
                    "distance": 400,
                    "line_linked": {
                      "opacity": 1
                    }
                  },
                  "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                  },
                  "repulse": {
                    "distance": 200
                  },
                  "push": {
                    "particles_nb": 4
                  },
                  "remove": {
                    "particles_nb": 2
                  }
                }
              },
              "retina_detect": true,
              "config_demo": {
                "hide_card": false,
                "background_color": "#b61924",
                "background_image": "",
                "background_position": "50% 50%",
                "background_repeat": "no-repeat",
                "background_size": "cover"
              }
            }
          );
      });
    </script>
</body>


</html>
