const p1Button= document.querySelector("#p1Button");
const p2Button=document.querySelector("#p2Button");
const p1Display=document.querySelector("#p1Display");
const p2Display=document.querySelector("#p2Display");
const resetButton=document.querySelector("#reset");
const playToScore=document.querySelector("#playto");

let winningScore=5;
let p2Score=0;
let p1Score=0;
let isGameOver=false;

p1Button.addEventListener('click',function(){
    if(!isGameOver){
        p1Score+=1;
        if(p1Score ===winningScore){
            isGameOver=true;
            p1Display.classList.add('winner');
            p2Display.classList.add('loser');
    }
     p1Display.textContent=p1Score;
}
})

p1Button.addEventListener('click',function(){
    if(!isGameOver){
        p2Score+=1;
        if(p2Score ===winningScore){
            isGameOver=true;
            p1Display.classList.add('loser');
            p2Display.classList.add('winner');
    }
     p2Display.textContent=p2Score;
}
})

winningScore.addEventListener("change",function(){
    winningScore=parseInt(this.value);
    reset();
})

resetButton.addEventListener("click",reset)
function reset(){
    isGameOver=false;
    p1Score=0;
    p2Score=0;
    p1Display.textContent=0;
    p2Display.textContent=0;
    p1Display.classList.remove('winner','loser');
    p2Display.classList.remove('winner','loser');

}




