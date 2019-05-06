// définit le document html qui contient le canvas et le type de canvas (2D ou 3D)
var canvas = document.getElementById("bb");
var ctx = canvas.getContext("2d");


// SPRITE 1 = balle
// definit les positions initiales du sprite
var x = canvas.width/2;
var y = canvas.height-30;
// définit les positions après chaque recoloration du sprite (direction du mouvement) 
var dx = 2;
var dy = -2;
// definit le rayon du cercle dessiné du sprite (neccessaire pour la detection des collisions)
var ballRadius = 10;

// SPRITE 2 = raquette (paddle)
// definit taille du sprite
var paddleHeight = 10;
var paddleWidth = 75;
var paddleX = (canvas.width-paddleWidth) / 2;
var paddleAir = ( (canvas.width*paddleWidth) / 2 );

// Variable des toucher a presser 
var rightPressed = false;
var leftPressed = false;

// les sprites des briques
var brickRowCount = 3;
var brickColumnCount = 5;
var brickWidth = 75;
var brickHeight = 20;
var brickPadding = 10;
var brickOffsetTop = 30;
var brickOffsetLeft = 30;

// Tableau sur 2 dimensions contenant les brique (c = colonne, r = rangée)
// Contient les postion x et y de départ pour peindre les briques
var bricks = [];
for(var c=0; c<brickColumnCount; c++) {
    bricks[c] = [];
    for(var r=0; r<brickRowCount; r++) {
        // Le parametre de status sera utiliser lors de la detection des collisions
        // Si 1 de base = dessine la brique, si 0 = disparait
        bricks[c][r] = { x: 0, y: 0, status: 1 };
    }
}
// Contient le calcul de deplacement des briques pour eviter de toutes les dessiner au même endroit
var brickX = (c*(brickWidth+brickPadding))+brickOffsetLeft;
var brickY = (r*(brickHeight+brickPadding))+brickOffsetTop;

// Win et score
var win;
var score = 0;


// Fonction qui définit le sprite 1 (taille position de départ, couleurs, plein ou non, forme)
function drawBall() {
    ctx.beginPath();
    // defini forme, x, y ,rayon 
    ctx.arc(x, y, ballRadius, 0, Math.PI*2);
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.closePath();
}
// DESSINE LE SPRITE 2 (raquette)
function drawPaddle() {
    
    ctx.beginPath();
    ctx.rect(paddleX, canvas.height-paddleHeight, paddleWidth, paddleHeight);
    // ctx.fillStyle = "#0095DD";
    ctx.fillStyle = "rgba(0, 0, 200, 0.5)";
    ctx.fill();
    ctx.closePath();
}
function drawBricks() {
    for(var c=0; c<brickColumnCount; c++) {
        for(var r=0; r<brickRowCount; r++) {
            if(bricks[c][r].status == 1) {
                var brickX = (c*(brickWidth+brickPadding))+brickOffsetLeft;
                var brickY = (r*(brickHeight+brickPadding))+brickOffsetTop;
                bricks[c][r].x = brickX;
                bricks[c][r].y = brickY;
                ctx.beginPath();
                ctx.rect(brickX, brickY, brickWidth, brickHeight);
                ctx.fillStyle = "orange";
                ctx.fill();
                ctx.closePath();
            }
        }
    }
}

// Fonction qui fait le mouvement du sprite 1
function draw() {
    // effacer la trace du sprite (lors de l'effet mouvement)
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    // appels les fonctions qui dessinent les sprites
    drawBricks();
    drawBall();
    drawPaddle();
    collisionDetection();
    drawScore();
    
    // prise en compte des variables de position après chaque recoloration (effet de mouvement)
    x += dx;
    y += dy;

    // REBOND : Rebord gauche droite
    // On ajoute le ballRadius au calcul pour definir le point de rebond a l'extremité du rayon et non au centre
    if(x + dx > canvas.width-ballRadius || x + dx < ballRadius) {
    dx = -dx;
    }

    // declenche un game over si la balle touche le bas de l'écran 
    if(y + dy < ballRadius) {
        dy = -dy;
    }
    else if(y + dy > canvas.height-ballRadius) {
        // Si la balle ne touche pas la raquette alors rebond
        if(x > paddleX && x < paddleX + paddleWidth && x < paddleAir) {
            dy=-dy
        } else {
            alert("GAME OVER");
            document.location.reload();
            clearInterval(interval); // Needed for Chrome to end game
        }
    }

    // Mouvement de la raquette
    // Si les touche de direction right ou left sont pressé, deplace de 7px en direction de la touche pressé jusqu'au rebord
    if(rightPressed && paddleX < canvas.width - paddleWidth) {
    paddleX += 7;
    }
    else if(leftPressed && paddleX > 0) {
    paddleX -= 7;
    }
}
// VITESSE ( modification de la couleur du sprite toutes les 10miliseconde)
// setInterval(draw, 15);
var interval = setInterval(draw, 10);

// fonction d'ecoute sur l'appui et le relachement des touche
document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);

// Fonction déclanché lors du keydown (touche pressé)
// Si la touche right est enfoncé passe la variable rightpress a true // pareil pour left
function keyDownHandler(e) {
    if(e.key == "Right" || e.key == "ArrowRight") {
        rightPressed = true;
    }
    else if(e.key == "Left" || e.key == "ArrowLeft") {
        leftPressed = true;
    }
}
// Fonction déclanché lors du keydup (touche relaché)
function keyUpHandler(e) {
    if(e.key == "Right" || e.key == "ArrowRight") {
        rightPressed = false;
    }
    else if(e.key == "Left" || e.key == "ArrowLeft") {
        leftPressed = false;
    }
}

// Detection des collisions avec les briques
function collisionDetection() {
    for(var c=0; c<brickColumnCount; c++) {
        for(var r=0; r<brickRowCount; r++) {
            var b = bricks[c][r];
            if(b.status == 1) {
                if(x > b.x && x < b.x+brickWidth && y > b.y && y < b.y+brickHeight) {
                    dy = -dy;
                    b.status = 0;
                    score++;
                    if(score == brickRowCount*brickColumnCount) {
                        alert("Gagné !");
                        win = 10;
                        var gain = encodeURIComponent(win);

                        URL =  Routing.generate('win-bb')
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', URL);
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                // alert('xhr content win:' + xhr.responseText);
                            }
                            else {
                                alert('Request failed.  Returned status of ' + xhr.status);
                            }
                        };
                        
                        xhr.send(gain);
                        // console.log(gain);
                        // console.log(win)
                       
                        document.location.reload();
                        clearInterval(interval); // Needed for Chrome to end game
                    }
                }
            }
        }
    }
}

function drawScore() {
    ctx.font = "16px Arial";
    ctx.fillStyle = "#0095DD";
    ctx.fillText("Score: "+score, 8, 20);
}

