var config = {

    map: {
        '*': {
            "dropkick": "js/plugins/dropkick.min"
        }
    },
    shim: {
        'dropkick': {
            deps: ['jquery'],
            exports: 'jQuery.fn.dropkick'
        }
    },
    deps: [
        "js/main"
    ]
};