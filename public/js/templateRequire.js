var burger_click = function () {
    $('#sidebar').toggleClass('collapsed');
    $('#content').toggleClass('col-sm-6 col-sm-12 col-md-8 col-md-12');
};


var SidebarController = function (toggle) {

    var toogleFunc = toggle;

    var landscapeRatio = 1.2;

    var getScreenMode = function () {
        if($(window).width()<767)return 0;
        if($(window).width()<992)return 1;
        if($(window).width()<1200)return 2;
        return 3;
    };

    var screenModeChanged = function () {
        if(this._screenMode!==getScreenMode()){
            this._screenMode=getScreenMode();
            return true;
        }
        return false;
    };

    var isLandscape = function () {
        return $(window).width()>landscapeRatio*$(window).height();
    };
    var sidebarChanger = function () {
        switch (this._screenMode){
            case 0:
                if(!($("#sidebar").hasClass('collapsed'))){
                    toogleFunc();
                }
                break;
            case 1:
            case 2:
                if(($("#sidebar").hasClass('collapsed')&&isLandscape())||
                    (!$("#sidebar").hasClass('collapsed')&&!isLandscape())){
                    toogleFunc();
                }
                break;
            case 3:
                if($("#sidebar").hasClass('collapsed')){
                    toogleFunc();
                }
                break;
        }
    };

    this._screenMode=getScreenMode();

    this.control = function () {
        if(screenModeChanged()){
            sidebarChanger();
        }
    };

    this.screenMode = function () {
        return this._screenMode;
    };
};


var sidebarController = new SidebarController(burger_click);

$('#burger_btn').click(burger_click);
$('#sidebar').click(function(e) {
    if (e.target !== this)
        return;
    if(sidebarController.screenMode()<2){
        burger_click();
    }

});

$( document ).ready(function() {
    sidebarController.control();
});

$( window ).resize(function() {
    sidebarController.control();
});
