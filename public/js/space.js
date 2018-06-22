let xhr = new XMLHttpRequest();

function getNews() {
     xhr.open('GET', "https://api.nasa.gov/planetary/apod?api_key=0Oo1I8Go0aJWzfPjBH1vcDwCr5jgMCG5KWTTrgiL", true);
     xhr.send();
     xhr.addEventListener("readystatechange", processRequest, false);


}

 function processRequest(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
        let response = JSON.parse(xhr.responseText);
        console.log(response);
        news(response);
    }
}

function news(object)   {
    var str = ""; 
    for(var i = 0; i < 1; i++)    {
        if(object.title != "undefined"){
        str = str + object.title;
        }
        console.log(str);
        //prompt();
    }
    document.getElementById("newsTitle").innerHTML = 
    str;

    var str = ""; 
    for(var i = 0; i < 1; i++)    {
        if(object.explanation != "undefined"){
        str = str + object.explanation;
        }
        console.log(str);
        //prompt();
    }
    document.getElementById("newsContent").innerHTML = 
    str;

    var str = ""; 
    for(var i = 0; i < 1; i++)    {
        if(object.copyright != "undefined"){
        str = str + object.copyright;
        }
        console.log(str);
        //prompt();
    }
    document.getElementById("newscopyright").innerHTML = 
    str;
}

function goBack() {
    window.history.back();
}