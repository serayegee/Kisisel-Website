//   let img = document.querySelector("a");
//   let btn = document.querySelector("button");

let img = document.querySelector("img");
let btn = document.querySelector("button");


async function getNewDogImg() {
  let response = await fetch("https://random.dog/woof.json"); 
  let data = await response.json(); 
  img.src = data.url; 
}


btn.addEventListener("click", () => {
  getNewDogImg(); 
});

getNewDogImg();



