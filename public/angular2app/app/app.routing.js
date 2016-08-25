"use strict";
var router_1 = require("@angular/router");
var welcome_component_1 = require("./welcome/welcome.component");
var about_component_1 = require("./about/about.component");
var event_list_component_1 = require("./event/event-list.component");
var event_detail_component_1 = require("./event/event-detail.component");
var contact_component_1 = require("./contact/contact.component");
var appRoutes = [
    {
        path: "",
        component: welcome_component_1.WelcomeComponent
    },
    {
        path: "nosotros",
        component: about_component_1.AboutComponent
    },
    {
        path: "eventos",
        component: event_list_component_1.EventListComponent
    },
    {
        path: "eventos/:name",
        component: event_detail_component_1.EventDetailComponent
    },
    {
        path: "contáctenos",
        component: contact_component_1.ContactComponent
    }
];
exports.routing = router_1.RouterModule.forRoot(appRoutes);
//# sourceMappingURL=app.routing.js.map