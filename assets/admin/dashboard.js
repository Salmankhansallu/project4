
/** coustom javascript map and table */

function mouseHoverEffectDistName(className) {
    /** dist name mouse hover effect function  **/
    $('body').on("mouseover", className, function() {
        //$(this).css('cursor', 'pointer');
        $(this).css({
            "cursor": "pointer",
            "text-decoration": "underline",
            'color': 'red',
        });
    });
}

function mouseOutEffectDistName(className) {
    /**dist name  mouse out effect function  **/
    $('body').on("mouseout", className, function() {
        $(this).css({
            "cursor": "none",
            "text-decoration": "none",
            "color": ""
        });
    });
}

function mouseClickDistName(className, url) {
    /**dist name  mouse click function  **/
    $('body').on("click", className, function() {
        var dist = $(this).attr("data-dist");
        url += "/" + dist;
        window.location.href = url;
        console.log(url);
    });
}

function mouseHoverEffect(className) {
    /** mouse hover effect function  **/
    $('body').on("mouseover", className, function() {
        //$(this).css('cursor', 'pointer');
        $(this).css({
            "cursor": "pointer",
            "text-decoration": "underline",
            'color': '#ffffff',
            "background-color": "#ec296b",
            "font-size": "20px",
            "padding-top": "0",
            "padding-buttom": "0"
        });
    });
}

function mouseOutEffect(className) {
    /** mouse out effect function  **/
    $('body').on("mouseout", className, function() {
        $(this).css({
            "cursor": "none",
            "text-decoration": "none",
            'color': '',
            "background-color": "",
            "font-size": "",
            "padding": "0"
        });
    });
}


function mouseClickDataShow(className, url) {
    $('body').on("click", className, function() {
        var block = $(this).attr("data-block");
        var type = $(this).attr("data-type");
        var dist = "<?= $dist;?>";
        var value = $(this).attr("data-value");
        if (value > 0) {
            url += "/" + type + "/" + dist + "/" + block;
            window.location.href = url;
        }
        console.log(url);
    });
}




$(document).ready(function() {
    var row = $('tr');
    $('table .body tr').removeClass('active-color');

    /*Champua*/
    $(".CHAMPUA").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Champua');
        $(this).tooltip();
    });
    $(".CHAMPUA").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#CHAMPUA').toggleClass("active-color");
    });

	/*Joda*/
    $(".JODA").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Joda');
        $(this).tooltip();
    });
    $(".JODA").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#JODA').toggleClass("active-color");
    });
    /*ANANDAPUR*/
    $(".ANANDAPUR").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Anandapur');
        $(this).tooltip();
    });
    $(".ANANDAPUR").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#ANANDAPUR').toggleClass("active-color");
    });

	/*ANANDAPURMPL*/
    $(".ANANDAPURMPL").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Anandapur MPL');
        $(this).tooltip();
    });
    $(".ANANDAPURMPL").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#ANANDAPURMPL').toggleClass("active-color");
    });
    /*BANSPAL*/
    $(".BANSPAL").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Banspal');
        $(this).tooltip();
    });
    $(".BANSPAL").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#BANSPAL').toggleClass("active-color");
    });
     /*BARBILMPL*/
     $(".BARBILMPL").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Barbil MPL');
        $(this).tooltip();
    });
    $(".BARBILMPL").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#BARBILMPL').toggleClass("active-color");
    });

	/*CHAMPUANAC*/
    $(".CHAMPUANAC").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Champua NAC');
        $(this).tooltip();
    });
    $(".CHAMPUANAC").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#CHAMPUANAC').toggleClass("active-color");
    });
    /*GHASIPURA*/
    $(".GHASIPURA").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Ghasipura');
        $(this).tooltip();
    });
    $(".GHASIPURA").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#GHASIPURA').toggleClass("active-color");
    });

	/*GHATAGAON*/
    $(".GHATAGAON").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Ghatagaon');
        $(this).tooltip();
    });
    $(".GHATAGAON").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#GHATAGAON').toggleClass("active-color");
    });

    /*HARICHANDANPUR*/
    $(".HARICHANDANPUR").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Harichandanpur');
        $(this).tooltip();
    });
    $(".HARICHANDANPUR").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#HARICHANDANPUR').toggleClass("active-color");
    });
    /*HATADIHI*/
    $(".HATADIHI").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Hatadihi');
        $(this).tooltip();
    });
    $(".HATADIHI").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#HATADIHI').toggleClass("active-color");
    });

    /*JHUMPURA*/
    $(".JHUMPURA").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Jhumpura');
        $(this).tooltip();
    });
    $(".JHUMPURA").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#JHUMPURA').toggleClass("active-color");
    });
    /*JODAMPL*/
    $(".JODAMPL").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Joda MPL');
        $(this).tooltip();
    });
    
    $(".JODAMPL").click(function() { 
        $('#list-data tr').removeClass('active-color');
        $('#JODAMPL').toggleClass("active-color");
    });



    /*KEONJHAR*/
    $(".KEONJHAR").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Keonjhar');
        $(this).tooltip();
    });
    $(".KEONJHAR").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#KEONJHAR').toggleClass("active-color");
    });
    /*KEONJHARMPL*/
    $(".KEONJHARMPL").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Keonjhar MPL');
        $(this).tooltip();
    });
    $(".KEONJHARMPL").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#KEONJHARMPL').toggleClass("active-color");
    });

    /*PATNA*/
    $(".PATNA").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Patana');
        $(this).tooltip();
    });
    $(".PATNA").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#PATNA').toggleClass("active-color");
    });
    /*SAHARAPADA*/
    $(".SAHARAPADA").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Saharapada');
        $(this).tooltip();
    });
    $(".SAHARAPADA").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#SAHARAPADA').toggleClass("active-color");
    });
     /*TELKOI*/
     $(".TELKOI").mouseover(function() {
        $(this).css('cursor', 'pointer').attr('title', 'Telkoi');
        $(this).tooltip();
    });
    $(".TELKOI").click(function() {
        $('#list-data tr').removeClass('active-color');
        $('#TELKOI').toggleClass("active-color");
    });



  

    /*Bargrah*/
    // $(".dist_347").mouseover(function() {
    //     $(this).css('cursor', 'pointer').attr('title', 'Bargrah');
    //     $(this).tooltip();
    // });
    // $(".dist_347").click(function() {
    //     $('.body tr').removeClass('active-color');
    //     $('.Bargarh').toggleClass("active-color");
    //     var rowHeight = $('.Bargarh').offset().top;
    //     var offsetHeight = $('.table_scrolled').height();
    //     var divHight = $('.body').height();
    //     if (row.length) {
    //         $('.table_scrolled').scrollTop(rowHeight - (divHight / 2));
    //     }
    // });

});