function play (pick){

    fetch('http://localhost/rock_paper_scissors/Classes/Controller.php?choice=' + pick, {})
        .then(response => response.json())
        .then(response => {
            console.log(response);
            document.getElementById("erg").innerHTML = response;
        })

}