$(document).ready(function(){
    
    let errorText = "D'oh! Enter a Number between 1 - 10";
    $("#number").on("click", function(){
        console.log("Number");
        $("#number").val("");
    });
    
    $("#submitBtn").on("click", function(e) {

        if (!isFormValid()) {
            e.preventDefault();
             $("#quotes").empty();
            new Audio('audio/doh1_y.wav').play();
            $("#error").html(errorText);
        }
        else {
           getQuotes($("#number").val());
        }
    });
    
    $("#number").on("change", function(e) {
        $("#error").empty();
    });
    
    async function getQuotes(count) {
        
        $("#quotes").empty();
        
        let number = count;
        let url = `https://thesimpsonsquoteapi.glitch.me/quotes?count=${number}`;
        let response = await fetch(url);
        let data = await response.json();

        data.forEach( function(i) {
            $("#quotes").append(`<tr><td><label id="character">${i.character}</label> 
            <br><br><label id="quote">${i.quote}</label></td>
            <td id="image"><img src=${i.image}" alt="Images">
            </tr>`);
        });
    }
    
    function isFormValid(){
        let isValid = true;
        
        let count = $("#number").val();
        
        if ((isNaN($("#number").val())) || (count == 0) || (count >= 11)) {
            isValid = false;
        }
        return isValid;
    }
});