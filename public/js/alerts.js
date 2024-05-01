$(document).ready(function () {
    Lobibox.notify.DEFAULTS = $.extend({}, Lobibox.notify.DEFAULTS, {
        sound: true, // Set to true if you want sound
        soundPath: public_url + 'asset/Lobibox/sounds/', // Path to the sound files
        iconSource: 'fontAwesome', // 'fontAwesome' or 'image' or 'bootstrap' or 'iconmoon'
    });
});

function showAlert(type = 'success', msg = 'Notification') {
    Lobibox.notify(type, {
        size: 'mini',
        msg: msg,
        position: 'top right', // Notification position
    });
}

function showBotomAlert(type = 'success', msg = 'Notification') {
    Lobibox.notify(type, {
        size: 'mini',
        msg: msg,
        position: 'bottom right',
    });
}

function showImgAlert(type = 'success', msg = 'Notification', img_url = public_url + "images/default/alert.jpg") {
    Lobibox.notify(type, {
        icon: false,
        size: 'mini',
        width: 400,
        msg: msg,
        delay: 5000, // Duration to show the notification (in milliseconds)
        position: 'top right', // Notification position
        img: img_url, // Path to the Lobibox success image
    });
}

function showRoundImgAlert(type = 'success', msg = 'Notification', img_url = public_url + "images/default/alert.jpg") {
    Lobibox.notify(type, {
        icon: false,
        size: 'mini',
        width: 400,
        msg: '<div style="display: flex; align-items: center;"><img src="' + img_url + '" alt="img" width="30" height="30" style="border-radius: 50%; margin-right: 10px;">' + msg + '</div>',
        delay: 5000, // Duration to show the notification (in milliseconds)
        position: 'top right', // Notification position
    });
}
