let btn = document.querySelector("#btn");
btn.addEventListener('click', show_words);
function show_words(e) {
  e.preventDefault()
  
  let div = document.querySelector("#text");
  const request = new XMLHttpRequest();
  const url = "9_3.php";
   
  request.open("GET", url, true);
   request.addEventListener("readystatechange", () => {
    if(request.readyState === 4 && request.status === 200) {
    var data = JSON.parse(request.responseText);   
    div.innerHTML = data;
    }
  });
  request.send(null);
}
