"use strict";
var auth_guard_service_1 = require('./auth-guard.service');
var auth_service_1 = require('./auth.service');
var login_component_1 = require('./login.component');
exports.loginRoutes = [
    { path: 'login', component: login_component_1.LoginComponent }
];
exports.authProviders = [
    auth_guard_service_1.AuthGuard,
    auth_service_1.AuthService
];
//# sourceMappingURL=login.routing.js.map