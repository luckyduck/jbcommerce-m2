define(['uiComponent'], function(Component) {

    return Component.extend({
        initialize: function() {
            this._super();
            this.sayHello = Date();
            this.observe(['sayHello']);
            setInterval(this.flush.bind(this), 1000);
        },
        flush: function() {
            this.sayHello(Date());
        }
    });
});
