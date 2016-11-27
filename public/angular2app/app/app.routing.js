"use strict";
var router_1 = require('@angular/router');
var login_routing_1 = require('./auth/login.routing');
var auth_guard_service_1 = require('./auth/auth-guard.service');
var welcome_component_1 = require('./welcome/welcome.component');
var about_component_1 = require('./about/about.component');
var event_list_component_1 = require('./event/event-list.component');
var information_request_list_component_1 = require('./event/information-request-list.component');
var event_detail_component_1 = require('./event/event-detail.component');
var contact_component_1 = require('./contact/contact.component');
var appRoutes = [
    {
        path: '',
        component: welcome_component_1.WelcomeComponent
    },
    {
        path: 'nosotros',
        component: about_component_1.AboutComponent
    },
    {
        path: 'eventos',
        component: event_list_component_1.EventListComponent
    },
    {
        path: 'eventos/:name',
        component: event_detail_component_1.EventDetailComponent
    },
    // {
    //     path: 'registrarme/al/evento/:name',
    //     component: ParticipantRegisterComponent,
    //     canActivate: [AuthGuard]
    // },
    {
        path: 'pedidos-informacion/evento/:name',
        component: information_request_list_component_1.InformationRequestListComponent,
        canActivate: [auth_guard_service_1.AuthGuard]
    },
    {
        path: 'contactenos',
        component: contact_component_1.ContactComponent
    }
].concat(login_routing_1.loginRoutes);
exports.appRoutingProviders = [
    login_routing_1.authProviders
];
exports.routing = router_1.RouterModule.forRoot(appRoutes);
//# sourceMappingURL=app.routing.js.map