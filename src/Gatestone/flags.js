var data = [
    { "image": "ar.png", "title": "Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©", "linkto": "https://ar.gatestoneinstitute.org/" },
    { "image": "cs.png", "title": "ÄŒeÅ¡tina", "linkto": "https://cs.gatestoneinstitute.org/" },
    { "image": "da.png", "title": "Dansk", "linkto": "https://da.gatestoneinstitute.org/" },
    { "image": "de.png", "title": "Deutsch", "linkto": "https://de.gatestoneinstitute.org/" },
    { "image": "el.png", "title": "Î•Î»Î»Î·Î½Î¹ÎºÎ¬", "linkto": "https://el.gatestoneinstitute.org/" },
    { "image": "en.png", "title": "English", "linkto": "https://gatestoneinstitute.org/" },
    { "image": "es.png", "title": "EspaÃ±ol", "linkto": "https://es.gatestoneinstitute.org/" },
    { "image": "fr.png", "title": "FranÃ§ais", "linkto": "https://fr.gatestoneinstitute.org/" },
    { "image": "he.png", "title": "×¢×‘×¨×™×ª", "linkto": "https://he.gatestoneinstitute.org/" },
    { "image": "it.png", "title": "Italiano", "linkto": "https://it.gatestoneinstitute.org/" },
    { "image": "nl.png", "title": "Nederlands", "linkto": "https://nl.gatestoneinstitute.org/" },
    { "image": "pl.png", "title": "Polski", "linkto": "https://pl.gatestoneinstitute.org/" },
    { "image": "pt.png", "title": "PortuguÃªs", "linkto": "https://pt.gatestoneinstitute.org/" },
    { "image": "ru.png", "title": "PyccÄ¸Ð¸Ð¹", "linkto": "https://ru.gatestoneinstitute.org/" },
    { "image": "sk.png", "title": "SlovenÄina", "linkto": "https://sk.gatestoneinstitute.org/" },
    { "image": "sv.png", "title": "Svenska", "linkto": "https://sv.gatestoneinstitute.org/" },
];
var initial = {
    "image": "en.png", "title": "English", "linkto": "https://gatestoneinstitute.org/"
}


https://www.freelancer.com/users/l.php?url=http:%2F%2Ffreelance.nickolas.solutions%2Fmtlvw%2Fzip2s3%2F&sig=7f7481ffaedeb808af7619d7f1ae51af67e1017905ab028eae659efeac9bd241


https://www.freelancer.com/users/l.php?url=http:%2F%2Ffreelance.nickolas.solutions%2Fmtlvw%2Fzip2s3%2F&sig=7f7481ffaedeb808af7619d7f1ae51af67e1017905ab028eae659efeac9bd241
    http://freelance.nickolas.solutions/mtlvw/zip2s3/
    function () {
        // set up initial flag
        $('#currentimg').attr('src', 'assets/images/' + initial.image);
        $('#currenttitle').text(initial.title);
        // add all flags (for linking should add : href='" + data[i].linkto + "')
        for (let i = 0; i < data.length; i++)
            $(".flagmodal").append(
                "<a class='flaganchor' onClick=setcurrent('" + data[i].title + "')>" +
                "<div class='flagdiv'>" +
                "<img class='flagimg' src='assets/images/" + data[i].image + "'>" +
                "<p class='flagtitle'>" + data[i].title + "</p>" +
                "</div>" +
                "</a>"
            );
        // show modal on current flag click
        $("#currentflag").click(function () {
            $(".flagmodal").toggleClass("showflags");
            event.stopPropagation();
        });
        // set current flag div
        setcurrent = function (title) {
            let current = data.find(item => { return item['title'] === title });
            $("#currenttitle").text(current['title']);
            $("#currentimg").attr("src", "assets/images/" + current['image']);
            $(".flagmodal").removeClass("showflags");
            event.stopPropagation();
        }
        // hide flag 'modal' when click outside modal
        $(window).click(function () {
            $(".flagmodal").removeClass("showflags");
        });
    }
);