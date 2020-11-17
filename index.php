<!DOCTYPE html>
<html>
    
    <head>
        <title> HW3 </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="text/css" />
    </head>
    
    <body>
        <br><br>
        <img src="img/Logo.png" alt="Simpson's Logo" class="center">
        <h1 class="jumbotron text-center">Quote Generator</h1>
        <div id="workspace">
   
        <form id="signupForm">
        	<div class="form-row">
        		<div class="form-group col-md-2">
        			<label class="mb-2 mr-sm-2" for="number">How Many Quotes Would You Like?</label>
        		</div>
        		<div class="form-group col-md-3">
        			<input type="text" class="form-control mb-2 mr-sm-2" id="number" placeholder="0">
        		</div>
        		<div class="form-group col-md-2">
        			<button type="button" id="submitBtn" class="btn btn-primary mb-2">Submit</button>
        		</div>
        		<div class="form-group col-md-4">
        			<label class="mb-2 mr-sm-2" id="error"></label>
        		</div>
        	</div>
        </form>
        
        <table id="quotes">
        </table>
        <br><br>
        
        <footer id="foot">        
        <br>Matt Taylor
        <br>CST 336
        <br>November 16, 2020
        <br><br>
        </footer>
        
        </div>
<!--        
        <script>
            
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
            };
            
        </script> -->
        <script src="js/app.js"></script>
    </body>
</html>