(function() {
    const canvas = document.getElementById('snow-canvas');
    const ctx = canvas.getContext('2d');

    // Snowflake shapes: mix of dots, ❄, ✿, ❀ to match cute theme
    const shapes = ['❄', '✿', '❀', '·', '•', '❅'];

    let W, H, flakes = [];

    function resize() {
        W = canvas.width = window.innerWidth;
        H = canvas.height = window.innerHeight;
    }

    function randomFlake() {
        return {
            x: Math.random() * W,
            y: Math.random() * -H, // start above screen
            size: Math.random() * 18 + 8, // 8–26px
            speed: Math.random() * 1.2 + 0.4, // fall speed
            drift: (Math.random() - 0.5) * 0.6, // horizontal sway
            angle: Math.random() * Math.PI * 2,
            spin: (Math.random() - 0.5) * 0.04,
            opacity: Math.random() * 0.5 + 0.3, // 0.3–0.8
            shape: shapes[Math.floor(Math.random() * shapes.length)],
            // soft pink / lavender / white palette matching #C9BEFF & #FFDBFD
            color: ['#C9BEFF', '#FFDBFD', '#ffc5ef', '#fff', '#e8d5ff'][Math.floor(Math.random() * 5)]
        };
    }

    // Initialise ~120 flakes spread across full height so it's instant
    function init() {
        flakes = [];
        for (let i = 0; i < 120; i++) {
            const f = randomFlake();
            f.y = Math.random() * H; // pre-scatter vertically
            flakes.push(f);
        }
    }

    function draw() {
        ctx.clearRect(0, 0, W, H);

        flakes.forEach(f => {
            ctx.save();
            ctx.translate(f.x, f.y);
            ctx.rotate(f.angle);
            ctx.globalAlpha = f.opacity;
            ctx.fillStyle = f.color;
            ctx.font = `${f.size}px serif`;
            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';
            ctx.fillText(f.shape, 0, 0);
            ctx.restore();

            // Move
            f.y += f.speed;
            f.x += f.drift;
            f.angle += f.spin;

            // Gentle left-right sway using sine
            f.x += Math.sin(f.y / 60) * 0.4;

            // Reset when off-screen
            if (f.y > H + 30 || f.x < -40 || f.x > W + 40) {
                Object.assign(f, randomFlake());
            }
        });

        requestAnimationFrame(draw);
    }

    window.addEventListener('resize', () => {
        resize();
        init();
    });
    resize();
    init();
    draw();
})();