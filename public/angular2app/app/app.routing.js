"use strict";
var router_1 = require("@angular/router");
var welcome_component_1 = require("./welcome/welcome.component");
var about_component_1 = require("./about/about.component");
var appRoutes = [
    {
        path: "",
        component: welcome_component_1.WelcomeComponent
    },
    {
        path: "about",
        component: about_component_1.AboutComponent
    }
];
exports.routing = router_1.RouterModule.forRoot(appRoutes);
//# sourceMappingURL=app.routing.js.map