var burger_click = function () {
    $('#sidebar').toggleClass('collapsed');
    $('#content').toggleClass('col-sm-6 col-sm-12 col-md-8 col-md-12');
};

$('#burger_btn').click(burger_click);

var SidebarController = function (toggle) {

    var toogleFunc = toggle;

    var getScreenMode = function () {
        if($('body').width()<767)return 0;
        if($('body').width()<1200)return 1;
        return 2;
    };

    var screenModeChanged = function () {
        if(this._screenMode!==getScreenMode()){
            this._screenMode=getScreenMode();
            return true;
        }
        return false;
    };
    var sidebarChanger = function () {
        switch (this._screenMode){
            case 0:
                if(!($("#sidebar").hasClass('collapsed'))){
                    toogleFunc();
                }
                break;
            case 1:
                if($("#sidebar").hasClass('collapsed')){
                    toogleFunc();
                }
                break;
            case 2:
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
};

var test = function () {
    if($('body').width()<992)return 0;
    if($('body').width()<1200)return 1;
    return 2;
};

var sidebarController = new SidebarController(burger_click);

$( document ).ready(function() {
    sidebarController.control();
});

$( window ).resize(function() {
    sidebarController.control();
});
