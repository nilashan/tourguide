jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    }
    jQuery("#amazingslider-1").amazingslider({
        jsfolder:jsFolder,
        width:1024,
        height:160,
        loadimageondemand:false,
        isresponsive:true,
        autoplayvideo:false,
        pauseonmouseover:false,
        randomplay:false,
        slideinterval:5000,
        transitiononfirstslide:false,
        loop:0,
        autoplay:true,
        navplayvideoimage:"play-32-32-0.png",
        navpreviewheight:60,
        timerheight:2,
        skin:"Stylish",
        textautohide:false,
        addgooglefonts:false,
        navshowplaypause:true,
        navshowplayvideo:false,
        navbuttonradius:2,
        navpreviewposition:"top",
        navradius:2,
        showshadow:false,
        navfeaturedarrowimagewidth:16,
        navpreviewwidth:120,
        googlefonts:"Inder",
        textpositionmarginright:24,
        bordercolor:"#ffffff",
        navthumbnavigationarrowimagewidth:32,
        navthumbtitlehovercss:"text-decoration:underline;",
        arrowwidth:32,
        navmargin:16,
        texteffecteasing:"easeOutCubic",
        texteffect:"fade,slide",
        navspacing:4,
        navarrowimage:"navarrows-20-20-1.png",
        ribbonimage:"ribbon_topleft-0.png",
        navwidth:20,
        navheight:20,
        timeropacity:0.6,
        navthumbnavigationarrowimage:"carouselarrows-32-32-0.png",
        navpreviewbordercolor:"#ffffff",
        ribbonposition:"topleft",
        navthumbdescriptioncss:"display:block;position:relative;padding:2px 4px;text-align:left;font:normal 12px Arial,Helvetica,sans-serif;color:#333;",
        arrowstyle:"none",
        navthumbtitleheight:20,
        textpositionmargintop:24,
        navswitchonmouseover:false,
        playvideoimage:"playvideo-64-64-0.png",
        arrowimage:"arrows-32-32-0.png",
        textstyle:"none",
        playvideoimageheight:64,
        navfonthighlightcolor:"#ffffff",
        showbackgroundimage:false,
        navpreviewborder:4,
        navdirection:"horizontal",
        navbuttonshowbgimage:false,
        navbuttonbgimage:"navbuttonbgimage-28-28-0.png",
        navthumbnavigationarrowimageheight:32,
        textbgcss:"display:block; position:absolute; top:0px; left:0px; width:100%; height:100%; background-color:#333333; opacity:0.6; filter:alpha(opacity=60);",
        shadowcolor:"#aaaaaa",
        navborder:4,
        bottomshadowimagewidth:110,
        showtimer:true,
        navshowpreview:false,
        navpreviewarrowheight:8,
        navfeaturedarrowimage:"featuredarrow-16-8-0.png",
        showribbon:false,
        navfeaturedarrowimageheight:8,
        navstyle:"numbering",
        textpositionmarginleft:24,
        descriptioncss:"display:block; position:relative; margin-top:4px; font:14px Inder,Arial,Tahoma,Helvetica,sans-serif; color:#fff;",
        navplaypauseimage:"navplaypause-20-20-1.png",
        backgroundimagetop:-10,
        timercolor:"#ffffff",
        navfontsize:12,
        navhighlightcolor:"#ff4629",
        navimage:"bullet-24-24-0.png",
        navbuttoncolor:"#333333",
        navshowarrow:true,
        navshowfeaturedarrow:false,
        titlecss:"display:block; position:relative; font: 16px Inder,Arial,Tahoma,Helvetica,sans-serif; color:#fff;",
        ribbonimagey:0,
        ribbonimagex:0,
        shadowsize:5,
        arrowhideonmouseleave:1000,
        navopacity:0.8,
        backgroundimagewidth:120,
        navcolor:"#333333",
        navthumbtitlewidth:120,
        playvideoimagewidth:64,
        arrowheight:32,
        arrowmargin:8,
        texteffectduration:1000,
        bottomshadowimage:"bottomshadow-110-95-0.png",
        border:0,
        timerposition:"bottom",
        navfontcolor:"#ffffff",
        navthumbnavigationstyle:"arrow",
        borderradius:0,
        navbuttonhighlightcolor:"#ff4629",
        textpositionstatic:"bottom",
        navthumbstyle:"imageonly",
        textcss:"display:block; padding:12px; text-align:left;",
        navbordercolor:"#ffffff",
        navpreviewarrowimage:"previewarrow-16-8-0.png",
        showbottomshadow:true,
        backgroundimage:"",
        navposition:"topright",
        navpreviewarrowwidth:16,
        bottomshadowimagetop:95,
        textpositiondynamic:"bottomleft",
        navshowbuttons:true,
        navthumbtitlecss:"display:block;position:relative;padding:2px 4px;text-align:left;font:bold 14px Arial,Helvetica,sans-serif;color:#333;",
        textpositionmarginbottom:24,
        slice: {
            duration:1500,
            easing:"easeOutCubic",
            checked:true,
            effects:"up,down,updown",
            slicecount:10
        },
        blocks: {
            columncount:5,
            checked:true,
            rowcount:5,
            effects:"topleft,bottomright,top,bottom,random",
            duration:1500,
            easing:"easeOutCubic"
        },
        slide: {
            duration:1000,
            easing:"easeOutCubic",
            checked:true
        },
        crossfade: {
            duration:1000,
            easing:"easeOutCubic",
            checked:true
        },
        threedhorizontal: {
            checked:true,
            bgcolor:"#222222",
            perspective:1000,
            slicecount:1,
            duration:1500,
            easing:"easeOutCubic",
            fallback:"slice",
            scatter:5,
            perspectiveorigin:"bottom"
        },
        fade: {
            duration:1000,
            easing:"easeOutCubic",
            checked:true
        },
        shuffle: {
            duration:1500,
            easing:"easeOutCubic",
            columncount:5,
            checked:true,
            rowcount:5
        },
        threed: {
            checked:true,
            bgcolor:"#222222",
            perspective:1000,
            slicecount:5,
            duration:1500,
            easing:"easeOutCubic",
            fallback:"slice",
            scatter:5,
            perspectiveorigin:"right"
        },
        blinds: {
            duration:2000,
            easing:"easeOutCubic",
            checked:true,
            slicecount:3
        },
        transition:"slice,blocks,slide,crossfade,threedhorizontal,fade,shuffle,threed,blinds"
    });
});