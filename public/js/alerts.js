$(document).ready(function () {
    Lobibox.notify.DEFAULTS = $.extend({}, Lobibox.notify.DEFAULTS, {
        sound: true, // Set to true if you want sound
        soundPath: public_url + 'asset/Lobibox/sounds/', // Path to the sound files
        iconSource: 'fontAwesome', // 'fontAwesome' or 'image' or 'bootstrap' or 'iconmoon'
    });
});

window.alert = function () {
    return false;
};

function showAlert(type = 'success', msg = 'Notification', delay = 3000) {
    return false;
}

function showBotomAlert(type = 'success', msg = 'Notification') {
    // Lobibox.notify(type, {
    //     size: 'mini',
    //     msg: msg,
    //     position: 'bottom right',
    // });
}

function showImgAlert(type = 'success', msg = 'Notification', img_url = public_url + "images/default/alert.jpg") {
    return false;
}

function showRoundImgAlert(type = 'success', msg = 'Notification', img_url = public_url + "images/default/alert.jpg") {
    return false;
}
