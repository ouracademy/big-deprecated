"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require("@angular/core");
var platform_browser_1 = require("@angular/platform-browser");
var http_1 = require('@angular/http');
var forms_1 = require('@angular/forms');
var app_component_1 = require("./app.component");
var app_routing_1 = require("./app.routing");
var welcome_component_1 = require("./welcome/welcome.component");
var about_component_1 = require("./about/about.component");
var contact_component_1 = require("./contact/contact.component");
var contact_service_1 = require('./contact/contact.service');
var event_list_component_1 = require("./event/event-list.component");
var event_service_1 = require('./event/event.service');
var sponsors_component_1 = require("./shared/sponsors.component");
var slider_component_1 = require("./shared/slider.component");
var AppModule = (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        core_1.NgModule({
            imports: [
                platform_browser_1.BrowserModule,
                app_routing_1.routing,
                http_1.HttpModule,
                forms_1.ReactiveFormsModule
            ],
            declarations: [
                app_component_1.AppComponent,
                welcome_component_1.WelcomeComponent,
                about_component_1.AboutComponent,
                event_list_component_1.EventListComponent,
                contact_component_1.ContactComponent,
                sponsors_component_1.SponsorsComponent,
                slider_component_1.SliderComponent
            ],
            providers: [
                contact_service_1.ContactService,
                event_service_1.EventService
            ],
            bootstrap: [app_component_1.AppComponent]
        }), 
        __metadata('design:paramtypes', [])
    ], AppModule);
    return AppModule;
}());
exports.AppModule = AppModule;
//# sourceMappingURL=app.module.js.map