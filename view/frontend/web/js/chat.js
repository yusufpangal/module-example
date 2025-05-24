define(['jquery'], function($) {
    'use strict';
    return function(config, element) {
        .on('submit', function(event) {
            event.preventDefault();
            var message = .val();
            $.ajax({
                url: '/openai/chat',
                type: 'POST',
                data: { message: message },
                success: function(response) {
                    .append('<div>' + response + '</div>');
                }
            });
        });
    };
});
