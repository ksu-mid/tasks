let btn = document.querySelector("#btn");
btn.addEventListener('click', prevent);
function prevent(e) {
  e.preventDefault();

  let rows = document.querySelector("#rows").value;
  let cols = document.querySelector("#cols").value;
  let table = document.querySelector("#tbl");
  const request = new XMLHttpRequest();
  const url = "3_3.php";
  const params = "rows=" + rows + "&cols=" + cols;
  request.open("POST", url, true);
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.addEventListener("readystatechange", () => {
    if (request.readyState === 4 && request.status === 200) {
      var data = JSON.parse(request.responseText);
      let rows = data.rows;
      let cols = data.cols;
      let table = document.createDocumentFragment()
      let arr = []
      for (let i = 0; i < rows; i++) {
        let tr = document.createElement('tr')
        arr[i] = [];
        for (let j = 0; j < cols; j++) {
          let td = document.createElement('td');
          td.innerHTML = arr[i][j] = getRandom();
          tr.appendChild(td);
        }
        table.appendChild(tr);
      }
      let numbers = document.getElementById('numbers');
      numbers.innerHTML = "";
      numbers.appendChild(table);

      function getRandom() {
        var min = 100;
        var max = 999;
        return Math.floor(Math.random() * (max - min)) + min;
      }
    }
  });
  request.send(params);
}
