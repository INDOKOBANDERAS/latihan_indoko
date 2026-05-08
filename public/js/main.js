document.addEventListener("DOMContentLoaded", () => {
    // --- 1. EFEK CAHAYA MENGIKUTI MOUSE (SPOTLIGHT) ---
    const spotlight = document.createElement("div");
    spotlight.style.cssText = `
        position: fixed;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(0, 31, 63, 0.05) 0%, rgba(255,255,255,0) 70%);
        border-radius: 50%;
        pointer-events: none;
        z-index: -5;
        transform: translate(-50%, -50%);
        transition: 0.1s ease-out;
    `;
    document.body.appendChild(spotlight);

    window.addEventListener("mousemove", (e) => {
        spotlight.style.left = e.clientX + "px";
        spotlight.style.top = e.clientY + "px";
    });

    // --- 2. ANIMASI TYPEWRITER UNTUK NAMA/JUDUL ---
    const typeTarget = document.querySelector("h1 span");
    if (typeTarget) {
        const text = typeTarget.innerText;
        typeTarget.innerText = "";
        let i = 0;
        function type() {
            if (i < text.length) {
                typeTarget.innerText += text.charAt(i);
                i++;
                setTimeout(type, 100);
            }
        }
        type();
    }

    // --- 3. EFEK KARTU MIRING (3D TILT) ---
    const cards = document.querySelectorAll(".glass-card");
    cards.forEach((card) => {
        card.addEventListener("mousemove", (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
        });

        card.addEventListener("mouseleave", () => {
            card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)`;
        });
    });

    // --- 4. SCROLL REVEAL (MUNCUL PERLAHAN) ---
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        },
        { threshold: 0.1 },
    );

    document.querySelectorAll(".glass-card").forEach((card) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(30px)";
        card.style.transition = "all 0.8s ease-out";
        observer.observe(card);
    });
});
