<html>
<head>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* 3D Space Background */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            perspective: 1000px;
            background: radial-gradient(ellipse at bottom, #1B2735 0%, #090A0F 100%);
        }

        /* 3D Floating Particles (CSS-only) */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(2px 2px at 20px 30px, #fff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 40px 70px, #fff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 90px 40px, #fff, rgba(0,0,0,0));
            background-size: 100px 100px;
            animation: floatParticles 50s linear infinite;
            z-index: -1;
        }

        @keyframes floatParticles {
            100% { background-position: 1000px 1000px; }
        }

        /* Container with 3D Perspective */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            transform-style: preserve-3d;
        }

        /* 3D Card Effect */
        .card-container {
            width: 380px;
            padding: 40px;
            background: rgba(40, 45, 60, 0.85);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transform-style: preserve-3d;
            transition: transform 0.5s ease, box-shadow 0.5s ease;
            position: relative;
            overflow: hidden;
        }

        /* 3D Holographic Effect */
        .card-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #00b4db, #0083b0, #00b4db);
            animation: holographic 3s linear infinite;
            z-index: 1;
        }

        @keyframes holographic {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        /* Logo Animation */
        #profile-img {
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            filter: drop-shadow(0 5px 15px rgba(0,163,255,0.3));
        }

        /* Form Elements */
        .form-signin {
            transform-style: preserve-3d;
        }

        .form-group {
            position: relative;
            margin-bottom: 25px;
            transform-style: preserve-3d;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 8px;
            padding: 12px 15px;
            transition: all 0.3s ease;
            transform-style: preserve-3d;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(0, 180, 219, 0.7);
            box-shadow: 0 0 0 3px rgba(0, 180, 219, 0.3);
            transform: translateZ(10px);
        }

        /* 3D Button */
        .btn-signin {
            background: linear-gradient(45deg, #00b4db, #0083b0);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
        }

        .btn-signin:hover {
            transform: translateY(-3px) translateZ(10px);
            box-shadow: 0 10px 20px rgba(0, 180, 219, 0.4);
        }

        .btn-signin::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }

        .btn-signin:hover::after {
            left: 100%;
        }

        /* Alert Animation */
        .alert {
            animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
            transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
            perspective: 1000px;
        }

        @keyframes shake {
            10%, 90% { transform: translate3d(-1px, 0, 0); }
            20%, 80% { transform: translate3d(2px, 0, 0); }
            30%, 50%, 70% { transform: translate3d(-4px, 0, 0); }
            40%, 60% { transform: translate3d(4px, 0, 0); }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card card-container" id="loginCard">
        <div class="text-center">
            <img id="profile-img" class="text-center" src="assets/img/logo.png" width="250px">
        </div>
        <br>
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">Enter Username or Password</div>';
            }elseif (isset($_GET['loginE'])){
                echo '<div class="alert alert-danger">Username or Password Don\'t Match</div>';
            } ?>
        </div>
        <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <label>Username or Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Username" required
                           data-error="Enter Username or Email">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required
                           data-error="Enter Password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">LOGIN</button>
        </form>
    </div>
</div>

<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/validator.min.js"></script>

<script>
    // 3D Card Tilt Effect
    document.addEventListener('DOMContentLoaded', function() {
        const card = document.getElementById('loginCard');
        const logo = document.getElementById('profile-img');
        
        // Mouse move 3D effect
        if(card) {
            card.addEventListener('mousemove', (e) => {
                const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
                const yAxis = (window.innerHeight / 2 - e.pageY) / 25;
                card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
            });
            
            // Reset on mouse leave
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'rotateY(0deg) rotateX(0deg)';
                card.style.transition = 'all 0.5s ease';
                setTimeout(() => {
                    card.style.transition = '';
                }, 500);
            });
            
            // Mouse enter
            card.addEventListener('mouseenter', () => {
                card.style.transition = 'none';
            });
        }
        
        // Logo hover effect
        if(logo) {
            logo.addEventListener('mouseenter', () => {
                logo.style.transform = 'scale(1.1) rotate(5deg) translateZ(20px)';
            });
            
            logo.addEventListener('mouseleave', () => {
                logo.style.transform = 'scale(1) rotate(0deg) translateZ(0)';
            });
        }
    });
</script>
</body>
</html>