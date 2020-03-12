<!doctype html>
<html lang="en">
  <head>
    <title>Registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" type="text/css" href="assets/fullpage.css" />
    <link rel="stylesheet" type="text/css" href="assets/examples.css" />

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
    <div class="container" style="pl-sm-0 pr-sm-0">
      <div class="col-sm-4">
      </div>
        <div class="col-sm-12 text-left px-5 py-3 mt-sm-4" id="login-box" style="background-color: rgba(255, 255, 255, 0.5);">
          <h1 class="text-center"><i>Registration</i></h1><br>
          <form action ="index.php" method="post" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Nama Depan</label>
              <div class="col-lg-9">
                  <input type="text" class="form-control" name="n_depan" placeholder="Nama Depan">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Nama Belakang</label>
              <div class="col-lg-9">
                <input type="text" class="form-control" name="n_belakang" placeholder="Nama Belakang">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Tanggal Lahir</label>
              <div class="col-lg-9">
                <input type="date" class="form-control" name="tanggal_lahir">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Jenis Kelamin</label><br>
              <div class="col-lg-9 d-flex align-content-start flex-wrap text-dark">
                <input type="radio" id="male" name="jenis_kelamin" value="Laki-laki">
                <label for="male"> Male</label>
                <input type="radio" id="female" name="jenis_kelamin" value="Perempuan">
                <label for="female"> Female</label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Username</label>
              <div class="col-lg-9">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Password</label>
              <div class="col-lg-9">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Foto Profile</label>
              <div class="col-lg-9">
                <input type="file" class="form-control" name="foto" placeholder="Foto" >
              </div>
            </div>
            <div class="form-group row">
              <label class="col-lg-3 col-form-label form-control-label text-dark">Deskripsikan Dirimu</label>
              <div class="col-lg-9">
                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsikan Dirimu" >
              </div>
            </div>
            <div class="d-flex justify-content-end">
            <div class="mr-3">
            <input type='hidden' name='do' value='add_user.php'>
            <button name='submit' value='login.php' class='btn btn-default'>Add User</button>
            </div>
            </form>
            <form action ="index.php" method="post">
            <input type='hidden' name='loc' value='login.php'>
            <button name='loc' value='login.php' class='btn btn-default'>Cancel</button>
            </form>
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
