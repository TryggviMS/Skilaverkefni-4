

/*herna set ég variables fyrir utan document ready function, þá eru þeir global function
og ég get látið reset hnappinn virkar*/

var notandiSigur = 0;
var tolvaSigur = 0;
var Jafntefli = 0;
$(document).ready(function(){
var tolva = 0;
var moguleikar = ["Steinn", "Skæri", "Blað"];

var vinningur = [];
vinningur[0] = ["Skálmöld","http://tsuts.tskoli.is/2t/1309932819/VSH%20303/Skilaverkefni%204/vefur/sida1.php"]; 
vinningur[1] = ["Sólstafi","http://tsuts.tskoli.is/2t/1309932819/VSH%20303/Skilaverkefni%204/vefur/sida2.php"]; 
vinningur[2] = ["Rammstein", "http://tsuts.tskoli.is/2t/1309932819/VSH%20303/Skilaverkefni%204/vefur/sida3.php"];
var midi = 0;
$('#hnappur1').click(function(){
    tolva = Math.floor(Math.random() * 3);
        if ($("#steinn").is(":checked") === true) {
            console.log(moguleikar[tolva]);
           switch(tolva) {
            case 0:
                $('#pLeikur').text("Jafntefli");
                Jafntefli++;
                  break;
            case 1:
                $('#pLeikur').text("Tölva skæri, þú vinnur");               
                notandiSigur++;
                 break;
            case 2:
                $('#pLeikur').text("Tölva blað, þú tapar");
                tolvaSigur++;
                  break;
            default:
                $('#pNidurstada').text("uss, ekki segja neitt");
        }
        }
        
        if ($("#skaeri").is(":checked") === true) {
            console.log(moguleikar[tolva]);
            switch(tolva) {
            case 0:
                $('#pLeikur').text("Tölva blað, þú tapar");
                Jafntefli++;
                  break;
            case 1:
                $('#pLeikur').text("Jafntefli");                
                notandiSigur++;
                 break;
            case 2:
                $('#pLeikur').text("Tölva skæri, þú vinnur");
                tolvaSigur++;
                  break;
            default:
                $('#pNidurstada').text("uss, ekki segja neitt");
        }
        }
        if ($("#blad").is(":checked") === true) {
                console.log(moguleikar[tolva]);
            
            switch(tolva) {
            case 0:
                $('#pLeikur').text("Tölva skæri, þú vinnur");
                Jafntefli++;
                  break;
            case 1:
                $('#pLeikur').text("Tölva blað, þú tapar");             
                notandiSigur++;
                 break;
            case 2:
                $('#pLeikur').text("Jafntefli");
                tolvaSigur++;
                  break;
            default:
                $('#pNidurstada').text("uss, ekki segja neitt");
                }
        }
        if (notandiSigur === 2 && tolvaSigur < 10) {
           midi = Math.floor(Math.random() * 3);
           console.log(midi);
           $('#pLeikur').text("Til hamingju, þú hefur unnið miða á ").append('<a href="' + vinningur[midi][1] + '">'+vinningur[midi][0]+'</a>');
        }
        });

//reset hnappur
$('#hnappur2').click(function(){
     notandiSigur = 0;
     tolvaSigur = 0;
     Jafntefli = 0;
});
});
