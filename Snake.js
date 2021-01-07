      //Variablat constante  te cilat perdoren me posht
      const board_border = 'black';
      const board_background = "white";
      const snake_col = 'lightblue';
      const snake_border = 'darkblue';
      

      //Gjarperi me kordinatat per te qen ne mes te canvasit
      var snake = [
        {x: 450, y: 250},
        {x: 440, y: 250},
        {x: 430, y: 250},
        {x: 420, y: 250},
        {x: 410, y: 250}
      ]
      

     
      var score = 0;
      // E vertet nese ndryshon drejtimi
      var changing_direction = false;
      var food_x;
      var food_y;
      var dx = 10;
      var dy = 0;
      
      
    
      
      // E merr id e canvasit
      const snakeboard = document.getElementById("snakeboard");
      //E kthen ne nje vizatim dy demsional 2D
      const snakeboard_ctx = snakeboard.getContext("2d");
      // Start game
      main();
    
      gen_food();
  
      document.addEventListener("keydown", change_direction);
      
      // funksioni kryesor thirret ne menyr te perseritur per të mbajtur lojen ne zhvillim
      function main() {
  
          if (has_game_ended()) return;
  
          changing_direction = false;
          setTimeout(function onTick() {
          clear_board();
          drawFood();
          move_snake();
          drawSnake();
          // Perseritet
          main();
        }, 100)
      }
      
      // Vizato nje kufi rreth canvasit
      function clear_board() {
        //  Ngjyrosja e prapavijes
        snakeboard_ctx.fillStyle = board_background;
        //  Ngjyrosja e kufive
        snakeboard_ctx.strokestyle = board_border;
        // Vizatimi i nje drejkedeshi per te mbualar gjith canvasin
        snakeboard_ctx.fillRect(0, 0, snakeboard.width, snakeboard.height);
        // Vizatimi i nje kufi rreth tere canvasit 
        snakeboard_ctx.strokeRect(0, 0, snakeboard.width, snakeboard.height);
      }
      
      // Vizatimi i gjarperit ne canvas
      function drawSnake() {
        // Vizatimi i qdo pjese
        snake.forEach(drawSnakePart)
      }
       //Vizatimi i ushqimit ne canvas
      function drawFood() {
        snakeboard_ctx.fillStyle = 'lightgreen';
        snakeboard_ctx.strokestyle = 'darkgreen';
        snakeboard_ctx.fillRect(food_x, food_y, 10, 10);
        snakeboard_ctx.strokeRect(food_x, food_y, 10, 10);
      }
      

      
      function gameRestart() {
      
     
      }


      // Vizatimi i nje pjese te gjarperit
      function drawSnakePart(snakePart) {
  
        // Vendosja ngjyres se nje pjese te gjarperit ku vendoset me nalt me const
        snakeboard_ctx.fillStyle = snake_col;
        // Vendosja e kufirit te nje pjes te gjarperit ku vendoset me nalt dhe thirret me snake_border
        snakeboard_ctx.strokestyle = snake_border;
        // Vizatimi i nje drejkedeshi per te lokaziluar gjarperin
        snakeboard_ctx.fillRect(snakePart.x, snakePart.y, 10, 10);
        //Vizatimi i nje kufiri reth gjarperit
        snakeboard_ctx.strokeRect(snakePart.x, snakePart.y, 10, 10);
      }
      //Mbarimi i lojes kur prek mure ose ku gjarperi kafshon nje pjes te trupit tij
      function has_game_ended() {
        for (var i = 4; i < snake.length; i++) {
          if (snake[i].x === snake[0].x && snake[i].y === snake[0].y) return true
        }//Kur kafshon veten e vet
        const hitLeftWall = snake[0].x < 0;  //Nese godet murin e majt
        const hitRightWall = snake[0].x > snakeboard.width - 10;//nese godet murin e djatht
        const hitToptWall = snake[0].y < 0; //nese godet murin nalt
        const hitBottomWall = snake[0].y > snakeboard.height - 10;// nese godet murin posht
        return hitLeftWall || hitRightWall || hitToptWall || hitBottomWall
      }
      //Po ashty funksion ky me math.random e ben te rastesishem lokacionin e ushqimit 
      function random_food(min, max) {
        return Math.round((Math.random() * (max-min) + min) / 10) * 10;
      }
  
      function gen_food() {
        // Gjenerimi i nje ne numri te rastesishem per ushqimin per kordinaten x
        food_x = random_food(0, snakeboard.width - 10);
        // Gjenerimi i nje ne numri te rastesishem per ushqimin per kordinaten y
        food_y = random_food(0, snakeboard.height - 10);
        // Nese nje ushqim gjendet ne te njetin vend ku ringjallet gjarperi, ateher ndroo vendin e ushqimit
        snake.forEach(function has_snake_eaten_food(part) {
          const has_eaten = part.x == food_x && part.y == food_y;
          if (has_eaten) gen_food();
        });
      }
  
      function change_direction(event) {
        const LEFT_KEY = 65;     //Majtas levizim me A
        const RIGHT_KEY = 68;    //Djathats levizim me B
        const UP_KEY = 87;      //Nalt levizim me W
        const DOWN_KEY = 83;    //Posht levizim me S
        
      // Drejtimi i gjarperit
      // Ku me dx pjesa horizontale dhe me dy pjesa vertikale
      //ku mbas kushteve me posht mund ta drejtojm gjarperin me an te funksioneve
      
        if (changing_direction) return;
        changing_direction = true;
        const keyPressed = event.keyCode;
        const goingUp = dy === -10;
        const goingDown = dy === 10;
        const goingRight = dx === 10;
        const goingLeft = dx === -10;
        if (keyPressed === LEFT_KEY && !goingRight) {
          dx = -10;
          dy = 0;
        }
        if (keyPressed === UP_KEY && !goingDown) {
          dx = 0;
          dy = -10;
        }
        if (keyPressed === RIGHT_KEY && !goingLeft) {
          dx = 10;
          dy = 0;
        }
        if (keyPressed === DOWN_KEY && !goingUp) {
          dx = 0;
          dy = 10;
        }
      }
  
      function move_snake() {
        // Krijimi i nje koke te re te gjarperit
        const head = {x: snake[0].x + dx, y: snake[0].y + dy};
        // Shtoje koken e gjarperit ne fillim te trupit
        snake.unshift(head);
        //Sa her qe esht gjarperi ne te njejten me pozit me ushqimin
        const has_eaten_food = snake[0].x === food_x && snake[0].y === food_y;
        if (has_eaten_food) {
          // Rrite gjarperin
          score += 10;
          // Shfaq rezulutatin ne screen
          document.getElementById('score').innerHTML = score;
          // Gjenero nje lokacion te ri te ushqimit
          gen_food();
        } else {
          // Heke pjesen e fundit te gjarperit
          snake.pop();
        }
      }


