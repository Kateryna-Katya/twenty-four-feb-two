document.addEventListener('DOMContentLoaded', () => {
    
    // === 1. ГЛОБАЛЬНЫЙ ФОН (ЧАСТИЦЫ) ===
    const bgCanvas = document.getElementById('hero-canvas');
    if (bgCanvas) {
        const ctx = bgCanvas.getContext('2d');
        let particles = [];
        const particleCount = 60;

        const resize = () => {
            bgCanvas.width = window.innerWidth;
            bgCanvas.height = window.innerHeight;
        };
        window.addEventListener('resize', resize);
        resize();

        class Particle {
            constructor() { this.reset(); }
            reset() {
                this.x = Math.random() * bgCanvas.width;
                this.y = Math.random() * bgCanvas.height;
                this.size = Math.random() * 2 + 1;
                this.speedX = Math.random() * 0.5 - 0.25;
                this.speedY = Math.random() * 0.5 - 0.25;
                this.color = Math.random() > 0.5 ? '#FF7043' : '#673AB7';
                this.opacity = Math.random() * 0.5 + 0.1;
            }
            update() {
                this.x += this.speedX;
                this.y += this.speedY;
                if (this.x < 0 || this.x > bgCanvas.width || this.y < 0 || this.y > bgCanvas.height) this.reset();
            }
            draw() {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fillStyle = this.color;
                ctx.globalAlpha = this.opacity;
                ctx.fill();
            }
        }

        for (let i = 0; i < particleCount; i++) particles.push(new Particle());

        const animateBg = () => {
            ctx.clearRect(0, 0, bgCanvas.width, bgCanvas.height);
            particles.forEach(p => {
                p.update();
                p.draw();
            });
            requestAnimationFrame(animateBg);
        };
        animateBg();
    }

    // === 2. THREE.JS (HERO ANIMATION) ===
    const heroContainer = document.getElementById('three-hero-container');
    if (heroContainer && typeof THREE !== 'undefined') {
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, heroContainer.clientWidth / heroContainer.clientHeight, 0.1, 1000);
        camera.position.z = 30;

        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        renderer.setSize(heroContainer.clientWidth, heroContainer.clientHeight);
        renderer.setPixelRatio(window.devicePixelRatio);
        heroContainer.appendChild(renderer.domElement);

        const geometry = new THREE.IcosahedronGeometry(15, 1);
        const material = new THREE.PointsMaterial({ color: 0xFF7043, size: 0.4, transparent: true, opacity: 0.8 });
        const wireframeMaterial = new THREE.MeshBasicMaterial({ color: 0x673AB7, wireframe: true, transparent: true, opacity: 0.15 });

        const group = new THREE.Group();
        group.add(new THREE.Points(geometry, material));
        group.add(new THREE.Mesh(geometry, wireframeMaterial));
        scene.add(group);

        let mouseX = 0, mouseY = 0;
        document.addEventListener('mousemove', (e) => {
            mouseX = (e.clientX - window.innerWidth / 2) * 0.001;
            mouseY = (e.clientY - window.innerHeight / 2) * 0.001;
        });

        const animateThree = () => {
            requestAnimationFrame(animateThree);
            group.rotation.y += 0.002 + (mouseX - group.rotation.y) * 0.05;
            group.rotation.x += 0.001 + (mouseY - group.rotation.x) * 0.05;
            renderer.render(scene, camera);
        };
        animateThree();

        window.addEventListener('resize', () => {
            camera.aspect = heroContainer.clientWidth / heroContainer.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(heroContainer.clientWidth, heroContainer.clientHeight);
        });
    }

    // === 3. МОБИЛЬНОЕ МЕНЮ ===
    const burgerBtn = document.querySelector('.burger');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.querySelector('.mobile-menu__close');
    
    if (burgerBtn && mobileMenu) {
        burgerBtn.onclick = () => mobileMenu.classList.add('active');
        closeMenu.onclick = () => mobileMenu.classList.remove('active');
        document.querySelectorAll('.mobile-link').forEach(link => {
            link.onclick = () => mobileMenu.classList.remove('active');
        });
    }

    // === 4. ВАЛИДАЦИЯ ФОРМЫ И КАПЧА ===
    const mainForm = document.getElementById('main-form');
    const captchaLabel = document.getElementById('captcha-label');
    let captchaResult = 0;

    const genCaptcha = () => {
        const a = Math.floor(Math.random() * 10), b = Math.floor(Math.random() * 10);
        captchaResult = a + b;
        if (captchaLabel) captchaLabel.innerText = `Сколько будет ${a} + ${b}?`;
    };
    genCaptcha();

    if (mainForm) {
        mainForm.onsubmit = (e) => {
            e.preventDefault();
            const userAns = document.getElementById('captcha-input').value;
            const msg = document.getElementById('form-message');
            
            if (parseInt(userAns) !== captchaResult) {
                msg.innerText = "Ошибка капчи!";
                msg.className = "form-message error";
                return genCaptcha();
            }
            
            msg.innerText = "Отправка...";
            msg.className = "form-message success";
            setTimeout(() => {
                msg.innerText = "Успешно отправлено!";
                mainForm.reset();
                genCaptcha();
            }, 1500);
        };
    }

    // === 5. COOKIE POPUP ===
    const cookiePopup = document.getElementById('cookie-popup');
    if (cookiePopup && !localStorage.getItem('cookies-accepted')) {
        setTimeout(() => cookiePopup.classList.add('show'), 2000);
        document.getElementById('accept-cookies').onclick = () => {
            localStorage.setItem('cookies-accepted', 'true');
            cookiePopup.classList.remove('show');
        };
    }

    // === 6. SCROLL REVEAL ===
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) entry.target.classList.add('active');
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
});