<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8 />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
  </head>
  <body>
    <div class="text-box">
      <div class="heading">To infinity and Beyond</div>
      <div class="button-wrapper">
          <div class="button">Learn More</div>
          <div class="button">Contact Us</div>
      </div>
    </div>

    <script src="three.min.js"></script>
    <script>
    let scene, camera, renderer, stars, starGeo;

    function init() {

      scene = new THREE.Scene();

      camera = new THREE.PerspectiveCamera(60,window.innerWidth / window.innerHeight, 1, 1000);
      camera.position.z = 1;
      camera.rotation.x = Math.PI/2;

      renderer = new THREE.WebGLRenderer();
      renderer.setSize(window.innerWidth, window.innerHeight);
      document.body.appendChild(renderer.domElement);

      starGeo = new THREE.Geometry();
      for(let i=0;i<6000;i++) {
        star = new THREE.Vector3(
          Math.random() * 600 - 300,
          Math.random() * 600 - 300,
          Math.random() * 600 - 300
        );
        star.velocity = 0;
        star.acceleration = 0.02;
        starGeo.vertices.push(star);
      }

      let sprite = new THREE.TextureLoader().load( 'star.png' );
      let starMaterial = new THREE.PointsMaterial({
        color: 0xaaaaaa,
        size: 0.7,
        map: sprite
      });

      stars = new THREE.Points(starGeo,starMaterial);
      scene.add(stars);

      window.addEventListener("resize", onWindowResize, false);

      animate(); 
    }
    function onWindowResize() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
      }
    function animate() {
      starGeo.vertices.forEach(p => {
        p.velocity += p.acceleration
        p.y -= p.velocity;
        
        if (p.y < -200) {
          p.y = 200;
          p.velocity = 0;
        }
      });
      starGeo.verticesNeedUpdate = true;
      stars.rotation.y +=0.002;
    
      renderer.render(scene, camera);
      requestAnimationFrame(animate);
    }
    init();
    
    </script>
  </body>
</html>
