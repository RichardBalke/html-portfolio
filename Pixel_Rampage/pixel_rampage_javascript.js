const canvas = document.getElementById('main-canvas');
const ctx = canvas.getContext('2d');
canvas.width = 2080;
canvas.height = 1920;

const keys = [];

const player = {
  x: 200,
  y: 200,
  width: 40,
  height: 72,
  frameX: 0,
  frameY: 0,
  speed: 9,
  moving: false
};

const playerImage = new Image();
playerImage.src = './Images/chewie.png';

const background = new Image();
background.src = './Images/PortfolioMap.png';

function drawSprite(image, sx, sy, sWidth, sHeight, dx, dy, dWidth, dHeight) {
    ctx.drawImage(image, sx, sy, sWidth, sHeight, dx, dy, dWidth, dHeight);
    }


window.addEventListener('keydown', (e) => {
    keys[e.key] = true;
    player.moving = true;
    }
);
window.addEventListener('keyup', (e) => {
    keys[e.key] = false;
    player.moving = false;
    }
);

function movePlayer() {
    if (keys['ArrowUp'] && ((player.y > 200 || player.x > 350)) && (player.y > 0)) {
        player.y -= player.speed;
        player.frameY = 3; // Up
        player.moving = true;
    } else if (keys['ArrowDown'] && player.y < canvas.height - player.height) {
        player.y += player.speed;
        player.frameY = 0; // Down
        player.moving = true;
    } else if (keys['ArrowLeft'] && ((player.y > 190 || player.x > 353) && player.x > 0)) {
        player.x -= player.speed;
        player.frameY = 1; // Left
        player.moving = true;
    } else if (keys['ArrowRight'] && player.x < canvas.width - player.width) {
        player.x += player.speed;
        player.frameY = 2; // Right
        player.moving = true;
    } else {
        player.frameY = 0; // Idle
    }
}

function updatePlayerFrame() {
    if (player.moving) {
        player.frameX = (player.frameX + 1) % 4; // Loop through frames
    } else {
        player.frameX = 0; // Reset to idle frame
    }
}

let fps, fpsInterval, startTime, now, then, elapsed;
function startAnimating(fps) {
    fpsInterval = 1000 / fps;
    then = Date.now();
    startTime = then;
    animate();
}

function animate() {
    requestAnimationFrame(animate);
    now = Date.now();
    elapsed = now - then;
    if (elapsed > fpsInterval) {
        then = now - (elapsed % fpsInterval);
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(background, 0, 0, canvas.width, canvas.height);
        drawSprite(playerImage, player.frameX * player.width, player.frameY * player.height, player.width, player.height,
            player.x, player.y, player.width, player.height);

        updatePlayerFrame();
        movePlayer();
    }
}
startAnimating(30); // Start the animation at 60 FPS