
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <style>
        /* 3D Abstract Motion Background */
#sidebar-collapse {
  background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
  /* position: relative; */
  overflow: hidden;
  z-index: 1;
}

/* Floating 3D Shapes */
#sidebar-collapse::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: 
    radial-gradient(circle at 20% 30%, rgba(255,255,255,0.05) 0%, transparent 25%) 0 0,
    radial-gradient(circle at 80% 70%, rgba(255,255,255,0.05) 0%, transparent 25%) 0 0;
  background-size: 400px 400px;
  animation: floatShapes 25s linear infinite;
  z-index: -1;
}

/* Abstract Grid Pattern */
#sidebar-collapse::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: 
    linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px),
    linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px);
  background-size: 40px 40px;
  animation: gridMove 80s linear infinite;
  z-index: -1;
  opacity: 0.5;
}

/* 3D Floating Cubes Animation */
@keyframes floatShapes {
  0% { background-position: 0 0, 100px 100px; }
  100% { background-position: 400px 400px, -300px -300px; }
}

@keyframes gridMove {
  0% { background-position: 0 0; }
  100% { background-position: 1000px 1000px; }
}

/* Profile Section Styling */
.profile-sidebar {
  position: relative;
  padding: 20px 0;
  background: rgba(255,255,255,0.05);
  backdrop-filter: blur(5px);
  margin-bottom: 20px;
  border-bottom: 1px solid rgba(255,255,255,0.1);
}

.profile-userpic img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  border: 3px solid rgba(255,255,255,0.2);
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}

.profile-userpic img:hover {
  transform: scale(1.05);
  border-color: rgba(255,255,255,0.4);
}

.profile-usertitle-name {
  color: white;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.profile-usertitle-status {
  color: rgba(235, 53, 53, 0.7);
  font-size: 12px;
}

.indicator.label-success {
  display: inline-block;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #2ecc71;
  margin-right: 5px;
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% { box-shadow: 0 0 0 0 rgba(46, 204, 113, 0.7); }
  70% { box-shadow: 0 0 0 10px rgba(46, 204, 113, 0); }
  100% { box-shadow: 0 0 0 0 rgba(46, 204, 113, 0); }
}

/* Menu Items Styling */
.nav.menu {
  position: relative;
  z-index: 1;
}

.nav.menu li a {
  color: rgba(199, 34, 34, 0.8);
  padding: 12px 20px;
  margin: 2px 0;
  border-radius: 4px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.nav.menu li a::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
  transition: 0.5s;
}

.nav.menu li a:hover {
  background: rgba(255,255,255,0.1);
  color: white;
  transform: translateX(5px);
}

.nav.menu li a:hover::before {
  left: 100%;
}

.nav.menu li a em {
  margin-right: 10px;
  width: 20px;
  text-align: center;
}

/* Active Menu Item */
.nav.menu li.active a {
  background: linear-gradient(90deg, rgba(100,150,255,0.2) 0%, transparent 100%);
  color: white;
  border-left: 3px solid #667eea;
}

/* Divider Styling */
.divider {
  height: 1px;
  background: rgba(255,255,255,0.1);
  margin: 15px 0;
  position: relative;
}

.divider::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 30%;
  height: 100%;
  background: linear-gradient(90deg, #667eea, transparent);
}
/* Add these styles to your existing CSS */

#sidebar-collapse {
  /* Keep your existing gradient */
  background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
  /* position: relative; */
  overflow: hidden;
}

/* CSS-only Particle System */
#sidebar-collapse::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: 
    /* Create multiple particle layers with different sizes and opacities */
    radial-gradient(circle at 20% 30%, rgba(255,255,255,0.15) 0%, transparent 2%) 0 0,
    radial-gradient(circle at 50% 80%, rgba(255,255,255,0.1) 0%, transparent 3%) 0 0,
    radial-gradient(circle at 80% 20%, rgba(255,255,255,0.08) 0%, transparent 4%) 0 0;
  background-size: 200px 200px;
  animation: particleMove 20s linear infinite;
  z-index: 0;
}

/* Second layer of particles */
#sidebar-collapse::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: 
    radial-gradient(circle at 70% 40%, rgba(255,255,255,0.12) 0%, transparent 3%) 0 0,
    radial-gradient(circle at 30% 60%, rgba(255,255,255,0.1) 0%, transparent 2%) 0 0;
  background-size: 300px 300px;
  animation: particleMove2 25s linear infinite reverse;
  z-index: 0;
  opacity: 0.7;
}

/* Particle Animations */
@keyframes particleMove {
  0% { background-position: 0 0, 100px 100px, 200px 200px; }
  100% { background-position: 200px 200px, 300px 300px, 400px 400px; }
}

@keyframes particleMove2 {
  0% { background-position: 0 0, 150px 150px; }
  100% { background-position: 300px 300px, 450px 450px; }
}

/* Add subtle floating effect to the whole sidebar */
#sidebar-collapse {
  animation: floatSidebar 15s ease-in-out infinite alternate;
}

@keyframes floatSidebar {
  0% { transform: translateY(0); }
  100% { transform: translateY(-10px); }
}

/* Ensure content stays above particles */
.profile-sidebar, .nav.menu {
  position: relative;
  z-index: 1;
}
    </style>
   <div class="profile-sidebar">
    <!-- <div class="profile-userpic">
        <img src="../assets/img/user.jpg" class="img-responsive" alt="">
    </div> -->
    <div class="#">
        <div class="profile-usertitle-name"><?php echo $user['name'];?></div>
        <div class="profile-usertitle-status">
            <!-- <span class="indicator label-success"></span>Manager -->
        </div>
    </div>
    <div class="clear"></div>
</div>

    <div class="divider"></div>
    <ul class="nav menu">
    <?php 
        if (isset($_GET['dashboard'])){ ?>
            <li class="active">
                <a href="index.php?dashboard"><em class="fa fa-dashboard">&nbsp;</em>
                    Dashboard
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?dashboard"><em class="fa fa-dashboard">&nbsp;</em>
                    Dashboard
                </a>
            </li>
        <?php }
        if (isset($_GET['reservation'])){ ?>
            <li class="active">
            <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?reservation"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php }
        if (isset($_GET['room_mang'])){ ?>
            <li class="active">
                <a href="index.php?room_mang"><em class="fa fa-bed">&nbsp;</em>
                    Manage Rooms
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="index.php?room_mang"><em class="fa fa-bed">&nbsp;</em>
                    Manage Rooms
                </a>
            </li>
        <?php }
        if (isset($_GET['staff_mang'])){ ?>
            <li class="active">
                <a href="index.php?staff_mang"><em class="fa fa-users">&nbsp;</em>
                    Staff Section
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?staff_mang"><em class="fa fa-users">&nbsp;</em>
                    Staff Section
                </a>
            </li>
        <?php }
        if (isset($_GET['complain'])){ ?>
            <li class="active">
                <a href="index.php?complain"><em class="fa fa-comments">&nbsp;</em>
                    Manage Complaints
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="index.php?complain"><em class="fa fa-comments">&nbsp;</em>
                    Manage Complaints
                </a>
            </li>
        <?php }
        ?>

        


        
            <li>
                <a href="#" target="_blank"><em class="fa fa-info-circle">&nbsp;</em>
                    Know More
                </a>
            </li>
       <!-- <a href="https://telegram.me/ndbhalerao91" target="_blank"><img src="assets/img/whatsapp-click-to-chat.png" style="height: 70px"></a> -->


        
    </ul>
    <script>
document.addEventListener('DOMContentLoaded', function() {
  // Create floating particles
  const sidebar = document.getElementById('sidebar-collapse');
  const particleCount = 15;
  
  for (let i = 0; i < particleCount; i++) {
    const particle = document.createElement('div');
    particle.style.position = 'absolute';
    particle.style.width = Math.random() * 10 + 5 + 'px';
    particle.style.height = particle.style.width;
    particle.style.backgroundColor = `rgba(255,255,255,${Math.random() * 0.1 + 0.05})`;
    particle.style.borderRadius = '50%';
    particle.style.left = Math.random() * 100 + '%';
    particle.style.top = Math.random() * 100 + '%';
    particle.style.zIndex = '0';
    particle.style.pointerEvents = 'none';
    
    // Animation
    const duration = Math.random() * 20 + 10;
    const delay = Math.random() * 5;
    particle.style.animation = `floatParticle ${duration}s linear ${delay}s infinite`;
    
    sidebar.appendChild(particle);
    
    // Keyframes
    const keyframes = `
      @keyframes floatParticle {
        0% {
          transform: translate(0, 0) rotate(0deg);
          opacity: ${Math.random() * 0.5 + 0.1};
        }
        100% {
          transform: translate(${Math.random() * 200 - 100}px, ${Math.random() * 200 - 100}px) rotate(360deg);
          opacity: 0;
        }
      }
    `;
    
    const style = document.createElement('style');
    style.innerHTML = keyframes;
    document.head.appendChild(style);
  }
});
</script>
</div><!--/.sidebar-->