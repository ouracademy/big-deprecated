"use strict";
var router_1 = require("@angular/router");
var login_routing_1 = require('./login.routing');
var auth_guard_service_1 = require('./auth-guard.service');
var welcome_component_1 = require("./welcome/welcome.component");
var about_component_1 = require("./about/about.component");
var event_list_component_1 = require("./event/event-list.component");
var event_detail_component_1 = require("./event/event-detail.component");
var contact_component_1 = require("./contact/contact.component");
var login_component_1 = require('./login.component');
var participant_register_component_1 = require('./participant/participant-register.component');
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
        path: "registrarme/al/evento/:name",
        component: participant_register_component_1.ParticipantRegisterComponent,
        canActivate: [auth_guard_service_1.AuthGuard]
    },
    {
        path: "contactenos",
        component: contact_component_1.ContactComponent
    },
    { path: 'login', component: login_component_1.LoginComponent }
];
exports.appRoutingProviders = [
    login_routing_1.authProviders
];
exports.routing = router_1.RouterModule.forRoot(appRoutes);
//# sourceMappingURL=app.routing.js.map