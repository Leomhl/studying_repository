function isMobile() {
    if (screen.width < 1024 || screen.height < 768)
        return true;
    else
        return false;
}

if(isMobile())
    $('.btn-show-sidebar').show();
else
    $('.btn-show-sidebar').hide();