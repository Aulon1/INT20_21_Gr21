const canvas = document.getElementById('game');
const ctx = canvas.getContext('2d');


class SnakePart{
    constructor(x, y){
        this.x = x;
        this.y = y;
    }
}

var speed = 7;

var tileCount = 20;
var tileSize = 18;

var headX = 25;
var headY = 12;
const snakeParts = [];
var tailLength = 2;

var appleX = 5;
var appleY = 5;

var xVelocity=0;
var yVelocity=0;

var score = 0;

const gulpSound = new Audio("gulp.mp3");


// Funksioni kryesor ku thirren funksionet tjera
function drawGame(){
    changeSnakePosition();
    let result = isGameOver();
    if(result){
        return;
    }

    clearScreen();
    
    checkAppleCollision();
    drawApple();
    drawSnake();

    drawScore();
    
    if(score > 5){
        speed = 9;
    }
    if(score > 10){
        speed = 11;
    }

    setTimeout(drawGame, 1000/ speed);
} 


//Funksioni ku tregon kur mbaron loja
function isGameOver(){
    var gameOver = false;

    if(yVelocity ===0 && xVelocity ===0){
        return false;
    }
    
    //Kur godet muret
    if(headX < 0 ){
        gameOver = true;
    }
    else if(headX > 49){
        gameOver = true
    }
    else if( headY < 0){
        gameOver = true;
    }
    else if(headY > 24){
        gameOver = true
    }
    //Kur godet veten e tij
    for(var i =0; i < snakeParts.length; i++){
        var part = snakeParts[i];
        if(part.x === headX && part.y === headY){
            gameOver = true;
            break;
        }
    }


    //Pjesa e tekstit qe shfaqet pasi mbaron loja
    if (gameOver) {
        ctx.fillStyle = "white";
        ctx.font = "50px Verdana";
        ctx.fillText("Game Over!", canvas.width / 3, canvas.height / 2);
      }

    return gameOver;
}
//Vizatimi i pikeve dhe pozita e tyre ne canvas
function drawScore(){
    ctx.fillStyle = "white";
    ctx.font = "20px Verdana"
    ctx.fillText("Score: " + score, 900, 30);
}

//Funksioni ku i japim ngjyr canvasit dhe e mbushim me at ngjyr
function clearScreen(){
    ctx.fillStyle = 'black';
    ctx.fillRect(0,0,canvas.width,canvas.height);
}

//Funksioni ku i japim form gjarperit 
function drawSnake(){
   
    ctx.fillStyle = 'green';
    for(var i =0; i < snakeParts.length; i++){
        var part =  snakeParts[i];
        ctx.fillRect(part.x * tileCount, part.y * tileCount, tileSize, tileSize);
    }

    snakeParts.push(new SnakePart(headX, headY)); //Vendose pjesen ne fund prand kokes
    while (snakeParts.length > tailLength){ 
        snakeParts.shift(); // Dhe hiqe pjesen me te larget te gjarperit sipas funksionit
    }

    ctx.fillStyle =  'orange';
    ctx.fillRect(headX * tileCount, headY* tileCount, tileSize,tileSize);


}

//Funksioni ben te mundeshme levizjen e gjarperit ne nje drejtim
function changeSnakePosition(){
    headX = headX + xVelocity;
    headY = headY + yVelocity;
}
//Vizatimi i ushqimit ne canvas
function drawApple(){
    ctx.fillStyle = "red";
    ctx.fillRect(appleX* tileCount, appleY* tileCount, tileSize, tileSize)
}
//Funksion qe e ben te rastesishem ushqimin po dhe rrit scoren dhe bishtin pas ngrenjes dhe ka nje audio
function checkAppleCollision(){
    if(appleX === headX && appleY == headY){
        appleX = Math.floor(Math.random() * 50);
        appleY = Math.floor(Math.random() * 25);
        tailLength++;
        score++;
        gulpSound.play();
    }
}

document.body.addEventListener('keydown', keyDown);
//Funksioni per tastet per ta levizur e gjarperit
function keyDown(event){
    //Levizja Lart
    if(event.keyCode == 87){
        if(yVelocity == 1)
            return;
        yVelocity = -1;
        xVelocity = 0;
    }

    //Levizja Posht
    if(event.keyCode == 83){
        if(yVelocity == -1)
            return;
        yVelocity = 1;
        xVelocity = 0;
    }

    //Levizja Majtas
    if(event.keyCode == 65){
        if(xVelocity == 1)
            return;
        yVelocity = 0;
        xVelocity = -1;
    }

     //Levizja Djathtas
     if(event.keyCode == 68){
        if(xVelocity == -1)
        return;
        yVelocity = 0;
        xVelocity = 1;
    }
}


drawGame();