function addHistory(id){
    const history = document.getElementById("history");
    var title = document.getElementById(id).textContent;

    history.innerHTML += "<h3>"+title+"</h3>";
}