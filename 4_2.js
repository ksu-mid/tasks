let btn = document.querySelector("#btn");
btn.addEventListener('click', show_date);
function show_date(e) {
  e.preventDefault()
  let date = document.querySelector("#date").value;
  let div = document.querySelector("#add_here");
  const request = new XMLHttpRequest();
  const url = "4_3.php";
  const params = "date=" + date;
  request.open("POST", url, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.addEventListener("readystatechange", () => {
    if(request.readyState === 4 && request.status === 200) {
    var data = JSON.parse(request.responseText);   
    div.innerHTML = data;
    }
  });
  request.send(params);
  }
