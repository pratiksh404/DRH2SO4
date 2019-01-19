//*****Document Ready Event***********
$(document).ready(function () {
    $('#msg').fadeIn('slow');
});
//The ready event occurs when the DOM (document object model) has been loaded.
//Good Habit:always start with ready or load(prefered) event handler when writing jquery code.

//************load event*************

$(window).load(function () {
    alert('loaded');
});




//The Difference between $(document).ready() and $(window).load() functions is that the code included inside $(window).load() will run once the entire page(images, iframes, stylesheets,etc) are loaded whereas the document ready event fires before all images,iframes etc. are loaded, but after the whole DOM itself is ready ...


$(window).unload(function () {

});
//unload fires when you leave the page

//*************selector***********


/*var count = $('*').length;
alert(count);
this selects all the element in DOM and in this case it cal the no of element

*/

var c = $('#hey').find('*').length;
alert(c);
$('h1').text('drh2s04');

//$('h1:first').text('first dr');

$(':button').click(function () {
        alert('hello');
        $(":button").attr('value', 'please wait');
    }

);
$(':text').focusin(function () {
    $(this).css("background-color", "red").fadeIn('slow');
});
$(':text').blur(function () {
    $(this).css("background-color", "#ffffff").fadeIn('slow');
});
$(':button').click(function () {
    $('p').css("background-color", "black").css("color", "white");
});
$("input[name='btnnn'],#para").click(function () {
    alert("multiple selector triggered.");
});
$(document).ready(function () {
    $('#OE p:even').addClass('color');
});


//selector criteria for type is starting from : like above
//in this case it counts the element of specified element
//find function serach for that particular element

/* *****note*****
val =  return the cotent of value;
text() = returns the cont(text) inside that specified element
confirm() = its boolean function usally used when confirming something it takes 0 and 1 as returned value
click() = fires when clicked
focusin() = The focusin event occurs when an element (or any elements inside it) gets focus.
blur() = The blur event occurs when an element loses focus.
*/
$(document).ready(function () {
    $('#search').keyup(function () {
        searchName = $(this).val();

        $('#names li:contains(" ' + searchName + '")').addClass('highlight');



    });
});

/*******Basic form field selection**************/
$('#meroForm').load(function () {
        $('this type:text').focusin(function () {
            $(this).addClass('inputColor').fadeIn('slow');
        });
        $('this type:text').blur(function () {
            $(this).removeClass('inputColor').fadeOut('slow');
        });

    })
    .submit(function () {
        var user_email = $('#user_email').val();
        alert('email send to ' + user_email + ' sucesfully');
    });
//submit()=fires when clicked submit

/******************Font size switcher**************************/
$(document).ready(function () {
    $('#big').click(function () {
        $('#para').css('fontSize', '60px');
    });
    $('#small').click(function () {
        $('#para').css('fontSize', '10px');
    });
});


/******************Enable submit button after file selected******/
$(document).ready(function () {
    $('#file').change(function () {
        $('#upload').removeAttr('disabled');
    });

});

/**********hide show***************/
$(document).ready(function () {
    $('#hideBtn').click(function () {
        $('#hideContent').hide();
    });
    $('#showBtn').click(function () {
        $('#hideContent').show();
    });
});
/*************double click****************/
$(document).ready(function () {
    $('#menu_link').dblclick(function () {
        $('#menu').show();
    });
});

/**************KeyUp/down************************/
$(document).ready(function () {
    $('#feedback_text').keyup(function () {
        var userFeedBack = $(this).val();
        $('#user_feedback').html(userFeedBack);
    });
});
//KeyUp event is fired when you release a key that just pressed. keyPress event is little special,the keyPress event is fired when you press down on a key that display a character (letter,number etc.) for example if you press and release a character key such as Y, you will see keyDown,keyPress and keyUp event is fired.

/*****************TOOGLE*********************/
$(document).ready(function () {
    $('#toggle-btn').toggle(
        function () {
            $('#toggle-para').hide(1000);
        },
        function () {
            $('#toggle-para').show(1000);
        }
    );
});

/*************hover*********************/
$(document).ready(function () {
    $('#movies').hover(function () {
        $('#menu_feedback').css('color', 'red');
    });
    $('#songs').hover(function () {
        $('#menu_feedback').css('color', 'blue');
    });
    $('#codes').hover(function () {
        $('#menu_feedback').css('color', 'green');
    });
});

/**************SCROLL*********************/
$(document).ready(function () {
    $('#scroll_text').scroll(function () {
        var scrollPosition = $('#scroll_text').scrollTop();
        $('#scroll_position').html('you have scrolled and your scroll position is ' + scrollPosition);
    });
});
//The vertical scroll position is the same as the number of pixels that are hidden from view above the scrollable area. If the scroll bar is at the very top, or if the element is not scrollable, this number will be 0.

/*****************Select***********************/
$(document).ready(function () {
    $('#select_text').select(function () {
        var valSelect = $(this).val();
        $('#select_val').html(valSelect + ' is selected');
    });
});

/***************Live and After******************/
$(document).ready(function () {
    $("#duplicate").on({
        click: function () {
            $(this).after('<button id="duplicate">DUPLICATE</button>');
        }
    });
});

//The live() method was deprecated in jQuery version 1.7, and removed in version 1.9. Use the on() method instead.
//The on() method attaches one or more event handlers for the selected elements and child elements.
//The after() method inserts specified content after the selected elements.


/***********Character Counting Remaining on Textarea***************/
$(document).ready(function () {
    var textmax = 55;
    $('#maxTextArea').keyup(function () {

        var textLength = $(this).val().length;
        var remaining = textmax - textLength;
console.log(remaining)

        $('#textareaCount').html(textmax + '/' + remaining);
    });

});
